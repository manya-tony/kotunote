@extends('layouts.app')

@section('title', 'こつこつぐあい')

@push('twitter')
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@kotukotu-note">
    <meta property="og:url" content="http://kotunote.test/items/{{ $record->id }}">
    <meta property="og:title" content="とにぃさんの{{ $record->record_name }}のきろく | こつこつのーと">
    <meta property="og:description" content="なにげなくしているこつこつをきろくしてみる">
    <meta property="og:image" content="">
@endpush

@section('content')

    <div id="app">
        <items 
            :record="{{ json_encode($record) }}" 
            :old="{{ json_encode(Session::getOldInput()) }}"></items>
    </div>
    
@endsection
