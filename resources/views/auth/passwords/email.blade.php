@extends('layouts.app')

@section('title', 'ぱすわーど再設定')

@section('content')
<!-- タイトル -->
<div class="c-titleWrap u-mb__50">
    <h2 class="u-mb__50">ぱすわーど再設定</h2>
    <!-- 注意文 -->
    <p>ご登録のメールアドレスに再設定用のメールを送信します。</p>
</div>

<div class="p-container">
    <!-- 入力フォーム -->
    <form action="{{ route('password.email') }}" method="POST" class="c-form">
        @csrf
        <input type="email" name="email" value="{{ old('email') }}" placeholder="メールアドレスを入力" class="u-mb__50 @if(!empty($errors->first('email'))) error @endif">
        <!-- エラーテキスト -->
        @if($errors->any())
            <ul class="c-error u-mb__50">
                @foreach ($errors->all() as $error)
                    <li class="u-mb__10">{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        <!-- ボタン -->
        <div class="c-buttonWrap -side">
            <button type="button" class="c-button -sideN -border u-mr__20"><a href="{{ route('top') }}">もどる</a></button>
            <input type="submit" value="再設定" class="c-button  -sideY">
        </div>
    </form>
</div>
@endsection
