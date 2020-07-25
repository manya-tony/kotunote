@extends('layouts.app')

@section('title', 'みんなのきろく')

@section('content')

    <!-- りすと -->
    @if(count($records) > 0)
        <!-- ぺーじねーしょん -->
        <div class="p-paginationWrap u-mb__30">
            <ul class="p-pagination">
                @if($records->currentPage() !== 1)
                    <li class="u-mr__10">
                        <a href="/everyone/records?page=1">
                            <i class="p-pagination__icon fas fa-angle-double-left"></i>
                        </a>
                    </li>
                    <li class="u-mr__10">
                        <a href="{{ $records->previousPageUrl() }}">
                            <i class="p-pagination__icon fas fa-angle-left"></i>
                        </a>
                    </li>
                @endif
                <li class="u-mr__10">
                    <p class="p-pagination__text">{{ $records->currentPage() }} / {{ $records->lastPage() }}</p>
                </li>
                @if($records->hasMorePages())
                    <li class="u-mr__10">
                        <a href="{{ $records->nextPageUrl() }}">
                            <i class="p-pagination__icon fas fa-angle-right"></i>
                        </a>
                    </li>
                    <li>
                        <a href="/everyone/records?page={{ $records->lastPage() }}">
                            <i class="p-pagination__icon fas fa-angle-double-right"></i>
                        </a>
                    </li>
                @endif
            </ul>
        </div>
        <ul class="c-record__otherWrap u-mb__30">
            @foreach($records as $record)
                <li class="c-record__other">
                    <a href="{{ route('everyone.items', ['record' => $record->id]) }}">
                        <div class="c-record__other--textWrap">
                            <h3 class="u-mb__5">{{ $record->record_name }}</h3>
                            <h4 class="u-mb__5">のきろく</h4>
                        </div>
                        <p>ユーザー名：{{ $record->user->name }}</p>
                        <p>こつこつ数：{{ count($record->items) }}</p>
                        <p>最終更新日：{{ $record->updated_at }}</p>
                    </a>
                </li>
            @endforeach
        </ul>
    @else
        <div class="c-record__none">
            <i class="u-mb__30 fas fa-exclamation-circle"></i>
            <p>まだきろくはありません</p>
        </div>
    @endif

@endsection
