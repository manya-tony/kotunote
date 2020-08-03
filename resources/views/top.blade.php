@extends('layouts.app')

@section('title', '何気なくしている”こつこつ”をきろくしてみる。')

@section('content')
    <!-- TOP -->
    <section class="p-top">
        <!-- タイトル -->
        <div class="c-titleWrap u-mb__50">
            <h1 class="p-top__title u-mb__50">こつこつのーと</h1>
            <p>何気なくしている”こつこつ”をきろくしてみる</p>
        </div>
        <ul class="c-buttonWrap">
            <li class="u-mb__20">
                <button class="c-button"><a href="{{ route('login') }}">ろぐいん</a></button>
            </li>
            <li class="u-mb__20">
                <button class="c-button"><a href="{{ route('register') }}">ゆーざー登録</a></button>
            </li>
            <li>
                <button class="c-button"><a href="{{ route('everyone.records') }}">みんなのきろく</a></button>
            </li>
        </ul>
    </section>
@endsection
