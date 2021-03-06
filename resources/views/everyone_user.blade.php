@extends('layouts.app')

@section('title', 'きろくの一覧')

@section('content')
    <!-- タイトル -->
    <div class="c-titleWrap u-mb__50">
        <h2 class="u-mb__10">{{ $user->name }}</h2>
        <h3>のきろく</h3>
    </div>

    <div class="p-container">
        <!-- きろくのいちらん -->
        @if(count($records) >= 1)
            <ul class="c-recordWrap u-mb__50">
                @foreach($records as $record)
                    <li>
                        <a href="{{ route('everyone.items', ['record' => $record->id]) }}" class="c-record c-record__title">"{{ $record->record_name }}"のきろく</a>
                    </li>
                @endforeach
            </ul>
        @endif
    </div>
@endsection

