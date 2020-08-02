<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Record;
use App\Item;

class EveryoneController extends Controller
{
    /**
     * 表示：みんなのきろく一覧
     */
    public function records()
    {
        $records = Record::where('release', true)
                    ->with(['user:id,name'],['items:id'])
                    ->orderBy('updated_at', 'desc')
                    ->paginate(16);

        foreach($records as $key => $record) {
            if(count($record->items) === 0) {
                unset($records[$key]);
            }
        }

        return view('everyone_records', compact('records'));
    }

    /**
     * 表示：みんなのきろくの中身一覧
     */
    public function items($id)
    {
        $record = Record::where('id', $id)
                    ->select('record_name', 'user_id')
                    ->with('user:id,name')
                    ->first();

        if($record) {
            $items = Item::where('record_id', $id)
                        ->select('text', 'created_at')
                        ->orderBy('created_at', 'desc')
                        ->get();

            return view('everyone_items', compact('record', 'items'));

        } else {

            return redirect()->route('everyone.records');

        }

    }

    /**
     * 表示：みんなのユーザーの詳細
     */
    public function user(Request $request)
    {
        $user = User::where('id', $request->user_id)
                    ->select('id', 'name')
                    ->first();

        if($user) {
            $records = Record::where('user_id', $request->user_id)
                        ->select('id', 'record_name')
                        ->get();
    
            return redirect()->('everyone_user', compact('user', 'records'));
        } else {

            return redirect()->route('everyone.records');
            
        }
    }
}
