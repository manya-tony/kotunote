<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Http\Requests\StoreProfile;
use App\Http\Requests\StorePassword;
use App\User;
use App\EmailReset;
use Carbon\Carbon;

class UserController extends Controller
{
    /**
     * 表示：プロフィールへんこう画面
     */
    public function showProfileEditForm()
    {
        $user = Auth::user();

        return view('profile_edit', compact('user'));
    } 

    /**
     * 更新：プロフィールへんこう
     */
    public function profileUpdate(StoreProfile $request)
    {
        $user = Auth::user();

        // プロフィール変更
        $user->name = $request->name;
        $user->save();

        // メールアドレス変更：新しいメールアドレスが入力されていた場合
        $new_email = $request->email;

        if($user->email !== $new_email) {
            // トークン生成
            $token = hash_hmac('sha256', Str::random(40).$new_email, config('app.key'));
            // トークンをDBに保存
            DB::beginTransaction();
            try {
                $param = [];
                $param['user_id'] = $user->id;
                $param['new_email'] = $new_email;
                $param['token'] = $token;
                $email_reset = EmailReset::create($param);

                DB::commit();

                // メール送信
                $email_reset->sendEmailResetNotification($token);

                return redirect()->route('records.index')->with('flash_message', '確認メールをおくりました');

            } catch (\Exception $e) {
                DB::rollback();
                return redirect()->route('records.index')->with('flash_message', 'メール更新にしっぱいしました');
            }
        }

        return redirect()->route('records.index')->with('flash_message', 'プロフィールをへんこうしました');
    }

    /**
     * メールアドレスの再設定処理
     */
    public function emailReset(Request $request, $token)
    {
        $email_resets = EmailReset::where('token', $token)->first();

        // トークンが存在している、かつ、有効期限が切れていないかチェック
        if ($email_resets && !$this->tokenExpired($email_resets->created_at)) {

            // メールアドレスを更新
            $user = User::find($email_resets->user_id);
            $user->email = $email_resets->new_email;
            $user->save();
            // レコードを削除
            EmailReset::where('token', $token)->delete();

            return redirect()->route('records.index')->with('flash_message', 'メールアドレスをへんこうしました');

        } else {

            // レコードが存在していた場合削除
            if($email_resets) {
                EmailReset::where('token', $token)->delete();
            }

            return redirect()->route('records.index')->with('flash_message', 'メールアドレスのへんこうに失敗しました');
        
        }
    }

    /**
     * トークンが有効期限切れかどうかチェック
     */
    protected function tokenExpired($createdAt)
    {
        // トークンの有効期限は60分に設定
        $expires = 60 * 60;
        return Carbon::parse($createdAt)->addSeconds($expires)->isPast();
    }

    /**
     * 表示：パスワードへんこう画面
     */
    public function showPasswordChangeForm()
    {
        return view('password_change');
    } 

    /**
     * 更新：パスワードへんこう
     */
    public function passwordUpdate(StorePassword $request)
    {
        $user = Auth::user();

        $user->password = Hash::make($request->password);
        $user->save();
        
        // メール送信
        $user->sendPasswordUpdateNotification();

        return redirect()->route('records.index')->with('flash_message', 'パスワードをへんこうしました');
    }

    /**
     * 表示：ユーザーたいかい画面
     */
    public function showUnsubscribeForm()
    {
        $user = Auth::user();

        return view('unsubscribe', compact('user'));
    }

    /**
     * 削除：ユーザーたいかい
     */
    public function unsubscribe()
    {
        $user = Auth::user();
        // ユーザーを削除
        $user->delete();

        // メール送信
        $user->sendUnsubscribeNotification();
        
        return redirect()->route('top')->with('flash_message', '退会しました。ご利用ありがとうございました！');
    }
}
