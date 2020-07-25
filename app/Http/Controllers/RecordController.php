<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreRecord;
use App\User;
use App\Record;
use App\Item;

class RecordController extends Controller
{

    /**
     * 表示：ログインユーザーのきろく一覧（マイページTOP）
     */
    public function index()
    {
        $user = Auth::user();

        $records = Record::where('user_id', $user->id)
                    ->select('id', 'record_name')
                    ->get();

        return view('records', compact('user', 'records'));
    }

    /**
     * 表示：きろく登録画面
     */
    public function create()
    {
        return view('records_create');
    }

    /**
     * 登録：新しいきろく
     */
    public function store(StoreRecord $request)
    {   
        $record = new Record;
        $record->record_name = $request->record_name;
        $record->user_id = Auth::id();
        if($request->release) {
            $record->release = 1;
        } else {
            $record->release = 0;
        }
        $record->save();

        return redirect()->route('records.index')->with('flash_message', 'あたらしいきろくを作りました');
    }

    /**
     * 表示：きろく名更新画面
     */
    public function edit($id)
    {
        $user_id = Auth::id();
        $record = Record::where('id', $id)->first();

        if($record && $record->user_id === $user_id) {

            return view('records_edit', compact('record'));

        } else {

            return redirect()->route('records.index');

        }

    }

    /**
     * 更新：きろく名
     */
    public function update(StoreRecord $request, $id)
    {
        $record = Record::where('id', $id)->first();
        $record->record_name = $request->record_name;
        $record->user_id = Auth::id();
        if($request->release) {
            $record->release = 1;
        } else {
            $record->release = 0;
        }
        $record->save();

        return redirect()->route('items.index', ['record' => $id])->with('flash_message', 'きろくを編集しました');
    }

    /**
     * 削除：きろく
     */
    public function destroy($id)
    {
        $user_id = Auth::id();
        $record = Record::where('id', $id)->first();

        if($record && $record->user_id === $user_id) {

            $record->delete();
            return redirect()->route('records.index')->with('flash_message', 'きろくを消去しました');

        } else {

            return redirect()->route('records.index');

        }
        
        
    }
}
