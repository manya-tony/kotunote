@extends('layouts.app')

@section('title')
{{ $record->record_name }}のきろく@endection

@section('content')

    <div id="app">
        <items 
            :record="{{ json_encode($record) }}" 
            :old="{{ json_encode(Session::getOldInput()) }}"></items>
    </div>
    
@endsection
