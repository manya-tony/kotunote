@extends('layouts.app')

@section('title', 'ろぐいん')

@section('content')
    <!-- タイトル -->
    <div class="c-titleWrap u-mb__50">
        <h2 class="u-mb__50">ろぐいん</h2>
        <!-- 注意文 -->
        <p>※すべての項目を入力してください</p>
    </div>
    <div class="p-container">
        <!-- 入力フォーム -->
        <form action="{{ route('login') }}" method="POST" class="c-form">
            @csrf
            <input type="email" name="email" value="{{ old('email') }}" placeholder="メールアドレスを入力" required class="u-mb__10 @if(!empty($errors->first('email'))) error @endif">
            <input type="password" name="password" placeholder="パスワードを入力" minlength="8" maxlength="16" required class="u-mb__50 @if(!empty($errors->first('password'))) error @endif">
            <!-- エラーテキスト -->
            @if($errors->any())
                <ul class="c-error u-mb__50">
                    @foreach ($errors->all() as $error)
                        <li class="u-mb__10">{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
            <!-- ぱすわーど再設定へ -->
            <a href="{{ route('password.request') }}" class="u-hover u-mb__50">パスワードをお忘れのかたはこちら</a>
            <!-- ボタン -->
            <div class="c-buttonWrap -side">
                <button type="button" class="c-button -sideN -border u-mr__20"><a href="{{ route('top') }}">もどる</a></button>
                <input type="submit" value="ろぐいん" class="c-button  -sideY">
            </div>
        </form>
    </div>
@endsection
