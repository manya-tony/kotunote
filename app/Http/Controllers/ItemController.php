<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreItem;
use App\User;
use App\Record;
use App\Item;
use Carbon\Carbon;

class ItemController extends Controller
{
    /**
     * 表示：きろくの中身一覧
     */
    public function index($id)
    {
        $user_id = Auth::id();
        $record = Record::where('id', $id)->first();
        
        if($record && $record->user_id === $user_id) {

            return view('items', compact('record'));

        } else {

            return redirect()->route('records.index');

        }

    } 

    /**
     * 表示：中身だけ取り出し
     */
    public function get($id)
    {
        return Item::where('record_id', $id)
                    ->select('id', 'text', 'created_at')
                    ->orderBy('created_at', 'desc')
                    ->get();
    } 

    /**
     * 登録：きろくの中身
     */
    public function store(StoreItem $request)
    {
        Item::create($request->all());

        $record = Record::where('id', $request->record_id)->first();
        $record->updated_at = Carbon::now();
        $record->save();
    }

    /**
     * 更新：きろくの中身
     */
    public function update(StoreItem $request, $id)
    {
        $item = Item::where('id', $id)->first();
        $item->text = $request->text;
        $item->save();

        $record = Record::where('id', $item->record_id)->first();
        $record->updated_at = Carbon::now();
        $record->save();
    }

    /**
     * 削除：きろくの中身
     */
    public function delete($id)
    {
        Item::where('id', $id)->delete();
    }
}
