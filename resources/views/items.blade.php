@extends('layouts.app')

@section('title', 'こつこつぐあい')

@push('twitter')
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@kotukotu-note">
    <meta property="og:url" content="https://chikichiki-tony.sakura.ne.jp/kotunote/items/{{ $record->id }}">
    <meta property="og:title" content="{{ $record->user->name }}さんの{{ $record->record_name }}のきろく | こつこつのーと">
    <meta property="og:description" content="なにげなくしているこつこつをきろくしてみる">
    <meta property="og:image" content="images/twitter_card.png">
@endpush

@section('content')

    <div id="app">
        <items 
            :record="{{ json_encode($record) }}" 
            :old="{{ json_encode(Session::getOldInput()) }}"></items>
    </div>
    
@endsection
