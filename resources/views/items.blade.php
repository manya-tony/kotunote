@extends('layouts.app')

@section('title')
{{ $record->record_name }}のきろく@endsection

@push('twitter')
<meta name="twitter:card" content="summary">
<meta property="og:url" content="https://chikichiki-tony.sakura.ne.jp/kotunote/everyone/{{ $record->id }}/items">
<meta property="og:title" content="こつこつのーと">
<meta property="og:description" content="なにげなくしているこつこつをきろくしてみる">
<meta property="og:image" content="https://chikichiki-tony.sakura.ne.jp/kotunote/images/twitter_card.png">
@endpush

@section('content')

    <div id="app">
        <items 
            :record="{{ json_encode($record) }}" 
            :old="{{ json_encode(Session::getOldInput()) }}"></items>
    </div>
    
@endsection
