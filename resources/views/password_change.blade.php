@extends('layouts.app')

@section('title', 'ぱすわーど変更')

@section('content')
    <!-- タイトル -->
    <div class="c-titleWrap u-mb__50">
        <h2 class="u-mb__50">ぱすわーど変更</h2>
    </div>
    <div class="p-container">
        <!-- 入力フォーム -->
        <form action="{{ route('mypage.password.update') }}" method="POST" class="c-form">
            @csrf
            @method('put')
            <input type="password" name="current_password" placeholder="現在のぱすわーどを入力" minlength="8" maxlength="16" required class="u-mb__10 @if(!empty($errors->first('current_password'))) error @endif">
            <input type="password" name="password" placeholder="あたらしいぱすわーどを入力（半角英数字記号 8~16文字）" minlength="8" maxlength="16" required class="u-mb__10 @if(!empty($errors->first('password'))) error @endif">
            <input type="password" name="password_confirmation" placeholder="あたらしいぱすわーどを再入力" minlength="8" maxlength="16" required class="u-mb__50">
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
                <button type="button" class="c-button -sideN -border u-mr__20"><a href="{{ route('records.index') }}">もどる</a></button>
                <input type="submit" value="へんこう" class="c-button  -sideY">
            </div>
        </form>
    </div>
@endsection
