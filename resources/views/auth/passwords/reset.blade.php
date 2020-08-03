@extends('layouts.app')

@section('title', 'ぱすわーど再設定')

@section('content')
<!-- タイトル -->
<div class="c-titleWrap u-mb__50">
    <h2 class="u-mb__50">ぱすわーど再設定</h2>
    <!-- 注意文 -->
    <p>※すべての項目を入力してください</p>
</div>

<div class="p-container">
    <!-- 入力フォーム -->
    <form action="{{ route('password.update') }}" method="POST" class="c-form">
        @csrf
        <input type="hidden" name="token" value="{{ $token }}">
        <input type="email" name="email" value="{{ old('email') }}" placeholder="めーるあどれすを入力" required class="u-mb__10 @if(!empty($errors->first('email'))) error @endif">
        <input type="password" name="password" placeholder="新しいぱすわーどを入力（半角英数字記号 8~16文字）" minlength="8" maxlength="16" required class="u-mb__10 @if(!empty($errors->first('password'))) error @endif">
        <input type="password" name="password_confirmation" placeholder="新しいぱすわーどを再入力" minlength="8" maxlength="16" required class="u-mb__50">
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
            <input type="submit" value="さいせってい" class="c-button  -sideY">
        </div>
    </form>
</div>
@endsection
