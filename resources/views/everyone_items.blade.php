@extends('layouts.app')

@section('title', 'のきろく')

@section('content')

    <div id="app">
        <everyone-items 
            :record="{{ json_encode($record) }}" 
            :items="{{ json_encode($items) }}"></everyone-items>
    </div>
    
@endsection
