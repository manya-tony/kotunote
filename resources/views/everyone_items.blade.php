@extends('layouts.app')

@section('title')
{{ $record->record_name }}のきろく@endection

@section('content')

    <div id="app">
        <everyone-items 
            :record="{{ json_encode($record) }}" 
            :items="{{ json_encode($items) }}"></everyone-items>
    </div>
    
@endsection
