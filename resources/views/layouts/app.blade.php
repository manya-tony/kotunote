<!doctype html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- description -->
    <meta name="description" content="日頃なんとなくしている&quot;こつこつ&quot;をきろくして日常のがんばりを実感！積み重ねることで自然と自信がついてくる気がします！">
    <!-- keyword -->
    <meta name=”keywords” content=”自己啓発,積み上げ,リスト”>
    <!-- title -->
    <title>@yield('title', '何気なくしている”こつこつ”をきろくしてみる。') | {{ config('app.name') }}</title>
    <!-- Scripts -->
    <script src="{{ asset('/js/app.js') }}" defer></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <!-- Styles -->
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <!-- favicon -->
    <link href="{{ asset('favicon.ico') }}" rel="shortcut icon">
    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@300;500;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;700&display=swap" rel="stylesheet">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.1/css/all.css" integrity="sha384-xxzQGERXS00kBmZW/6qxqJPyxW3UR0BPsL4c8ILaIWXva5kFi7TxkIIaMiKtqV1Q" crossorigin="anonymous">
    <!-- Twitter -->
    <!-- @stack('twitter') -->
    <meta name="twitter:card" content="summary">
    <meta property="og:url" content="https://chikichiki-tony.sakura.ne.jp/kotunote/everyone/{{ $record->id }}/items">
    <meta property="og:title" content="こつこつのーと">
    <meta property="og:description" content="なにげなくしているこつこつをきろくしてみる">
    <meta property="og:image" content="https://chikichiki-tony.sakura.ne.jp/kotunote/images/twitter_card.png">
    <meta property="og:type" content="website">
</head>
<body>
<div class="wrapper">

    
    <!-- =================================
    ヘッダー
    ================================= -->
    @unless(Request::is('/'))
        <header class="l-header">
            <!-- ロゴ -->
            <h1 class="l-header__logo">
                @if(Auth::check())
                    <a href="{{ route('records.index') }}" class="u-hover">kotukotu-note</a>
                @else
                    <a href="{{ route('top') }}" class="u-hover">kotukotu-note</a>
                @endif
            </h1>
            @if(!Auth::check())
                <!-- ナビゲーション ろぐいん前-->
                <ul class="l-header__nav">
                    <li class="u-mr__40"><a href="{{ route('login') }}" class="u-hover">ろぐいん</a></li>
                    <li><a href="{{ route('register') }}" class="u-hover">ゆーざー登録</a></li>
                </ul>
            @endif
        </header>
    @endunless


    <!-- =================================
    メインコンテンツ
    ================================= -->
    <main class="l-main">
        <!-- フラッシュメッセージ -->
        @if(session('flash_message'))
            <div class="c-flash">
                {{ session('flash_message') }}
            </div>
        @endif
        @yield('content')
    </main>


    <!-- =================================
    フッター
    ================================= -->
    <footer class="l-footer">
        @if(Auth::check())
            <!-- ろぐいん後のみ -->
            <ul class="l-footer__nav u-mb__10">
                <li><a href="{{ route('records.create') }}" class="u-hover">あたらしいきろく</a></li>
                <li><a href="{{ route('mypage.profile') }}" class="u-hover">ぷろふぃーる編集</a></li>
                <li><a href="{{ route('mypage.password') }}" class="u-hover">ぱすわーど変更</a></li>
                <li>
                    <form action="{{ route('logout') }}" method="POST" name="logout">
                        @csrf
                        <a href="javascript:logout.submit()" class="u-hover">ろぐあうと</a>
                    </form>
                </li>
                <li><a href="{{ route('mypage.unsubscribe') }}" class="u-hover">退会</a></li>
                <li><a href="{{ route('everyone.records') }}" class="u-hover">みんなのきろく</a></li>
                <li><a href="{{ route('contact') }}" class="l-footer__navLink u-hover">つくったひと</a></li>
            </ul>
        @elseif(!Request::is('/'))
            <ul class="l-footer__nav u-mb__10">
                <li><a href="{{ route('everyone.records') }}" class="u-hover">みんなのきろく</a></li>
                <li><a href="{{ route('contact') }}" class="l-footer__navLink u-hover">つくったひと</a></li>
            </ul>
        @else
            <ul class="l-footer__nav u-mb__10">
                <li><a href="{{ route('contact') }}" class="l-footer__navLink u-hover">つくったひと</a></li>
            </ul>
        @endif
        <p class="l-footer__text u-mb__10">&copy; kotukotu-note</p>
    </footer>


</div>
<!-- IE＆Edgeのobject-fit対応 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/object-fit-images/3.2.3/ofi.js"></script>
<script>objectFitImages();</script>
<script>
    $(function(){
        var $flash = $(".c-flash");
        $flash.fadeIn(300);
        setTimeout(function(){
            $flash.fadeOut(300);
        }, 5000);
    });
</script>
<!-- 各ページごとのscript -->
@stack('script')
</body>
</html>