@extends('layouts.app')

@section('title', '退会')

@section('content')
    <!-- タイトル -->
    <div class="c-titleWrap u-mb__50">
            <h2 class="u-mb__50">退会</h2>
            <p>きろくやぷろふぃーるすべて消去されます。<br />退会してもよろしいですか？</p>
        </div>
        <div class="p-container">
            <!-- 入力フォーム -->
            <form action="{{ route('mypage.unsubscribe') }}" method="POST" class="c-form">
                @csrf
                @method('delete')
                <!-- ボタン -->
                <div class="c-buttonWrap -side">
                    <button type="button" class="c-button -sideN -border u-mr__20"><a href="{{ route('records.index') }}">もどる</a></button>
                    <input type="submit" value="退会" class="c-button  -sideY">
                </div>
            </form>
        </div>
@endsection
