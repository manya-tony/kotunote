@extends('layouts.app')

@section('title', 'ぷろふぃーる編集')

@section('content')
    <!-- タイトル -->
    <div class="c-titleWrap u-mb__50">
        <h2>ぷろふぃーる編集</h2>
    </div>

    <div class="p-container">
        <!-- 入力フォーム -->
        <form action="{{ route('mypage.profile.update') }}" method="POST" class="c-form">
            @csrf
            @method('put')
            <p class="p-item__textCount u-mr__20 u-mb__5"><span class="js-nameLength">0</span>/20</p>
            <input type="text" name="name" value="{{ old('name', $user->name) }}" placeholder="にっくねーむを入力（20文字以内）" maxlength="20" required class="u-mb__10 @if(!empty($errors->first('name'))) error @endif js-name">
            <input type="email" name="email" value="{{ old('email', $user->email) }}" placeholder="めーるあどれすを入力" required class="u-mb__50 @if(!empty($errors->first('email'))) error @endif">
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
                <button type="button" class="c-button -sideN -border"><a href="{{ route('records.index') }}">もどる</a></button>
                <input type="submit" value="へんこう" class="c-button  -sideY">
            </div>
        </form>
    </div>
@endsection

@push('script')
<script>
    $(function(){
        var $name = $(".js-name"),
            $nameLength = $(".js-nameLength");

        $name.keyup(function(){
            var count = $(this).val().length;
            $nameLength.text(count);
        })
    });
</script>
@endpush