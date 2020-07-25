@extends('layouts.app')

@section('title', '本登録')

@section('content')
<!-- タイトル -->
<div class="c-titleWrap u-mb__50">
            <h2 class="u-mb__50">本登録</h2>
            <!-- 注意文 -->
            <p>本登録手続き用メールを送信しました。<br />ご確認の上、本登録手続きをお願いいたします。</p>
        </div>

        <div class="p-container">
            <!-- 入力フォーム -->
            <form action="{{ route('verification.resend') }}" method="POST" class="c-form">
                @csrf
                <!-- ボタン -->
                <div class="c-buttonWrap -side">
                    <button type="button" class="c-button -sideN -border u-mr__20"><a href="{{ route('top') }}">もどる</a></button>
                    <input type="submit" value="再送" class="c-button  -sideY">
                </div>
            </form>
        </div>
@endsection
