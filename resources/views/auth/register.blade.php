@extends('layouts.app')

@section('title', 'ゆーざー登録')

@section('content')
    <!-- タイトル -->
    <div class="c-titleWrap u-mb__50">
            <h2 class="u-mb__50">ゆーざー登録</h2>
            <!-- 注意文 -->
            <p>※すべての項目を入力してください</p>
        </div>

        <div class="p-container">
            <!-- 入力フォーム -->
            <form action="register" method="POST" class="c-form">
                @csrf
                <input type="text" name="name" value="{{ old('name') }}" placeholder="にっくねーむを入力（20文字以内）" maxlength="20" required class="u-mb__10 @if(!empty($errors->first('name'))) error @endif">
                <input type="email" name="email" value="{{ old('email') }}" placeholder="めーるあどれすを入力" required class="u-mb__10 @if(!empty($errors->first('email'))) error @endif">
                <input type="password" name="password" placeholder="ぱすわーどを入力（半角英数字記号 8~16文字）" minlength="8" maxlength="16" required class="u-mb__10 @if(!empty($errors->first('password'))) error @endif">
                <input type="password" name="password_confirmation" placeholder="ぱすわーどを再入力" minlength="8" maxlength="16" required class="u-mb__50">
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
                    <button type="button" class="c-button -sideN -border u-mr__10"><a href="{{ route('top') }}">もどる</a></button>
                    <input type="submit" value="とうろく" class="c-button  -sideY">
                </div>
            </form>
        </div>
@endsection