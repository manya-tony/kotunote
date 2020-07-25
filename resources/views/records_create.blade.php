@extends('layouts.app')

@section('title', 'あたらしいきろく')

@section('content')
    <!-- タイトル -->
    <div class="c-titleWrap u-mb__50">
        <h2 class="u-mb__50">あたらしいきろく</h2>
    </div>
    <div class="p-container">
        <!-- 入力フォーム -->
        <form action="{{ route('records.store') }}" method="POST" class="c-form">
            @csrf
            <input type="text" name="record_name" value="{{ old('record_name') }}" placeholder="きろく名を入力（20文字以内）" maxlength="20" required class="u-mb__20 @if(!empty($errors->first('record_name'))) error @endif">
            <input type="checkbox" id="release" name="release" value="1">
            <label for="release" class="c-form__check--text u-mb__50">きろくを公開する</label>
            <!-- エラーテキスト -->
            @if($errors->any())
                <ul class="c-error u-mb__50">
                    @foreach ($errors->all() as $error)
                        <li class="u-mb__10">{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
            <!-- ボタン -->
            <div class="c-buttonWrap -side">
                <button type="button" class="c-button -sideN -border u-mr__20"><a href="{{ route('records.index') }}">もどる</a></button>
                <input type="submit" value="作成" class="c-button  -sideY">
            </div>
        </form>
    </div>
@endsection
