@extends('layouts.app')

@section('title', 'つくったひと')

@section('content')
    <div class="p-container">
        <!-- タイトル -->
        <h2 class="c-title u-mb__50">つくったひと</h2>
        <!-- リンク -->
        <div class="p-contact__img u-mb__30">
            <img src="images/creator.jpg" alt="とにぃ" class="u-img">
        </div>
        <h3 class="u-mb__10">とにぃ</h3>
        <p class="u-mb__50">ゲーム会社勤務のグラフィックデザイナー（元UIデザイナー）です。<br />WEBエンジニアを目指しています。</p>
        <a href="https://twitter.com/ChikiChiki_Tony" target="__blanc" class="p-contact__icon">
            <i class="fab fa-twitter"></i>
        </a>
    </div>
@endsection
