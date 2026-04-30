@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="contact-form__content">

    <div class="contact-form__heading">
        <h2>お問い合わせ</h2>
    </div>

    {{-- バリデーションエラー --}}
    @if ($errors->any())
        <div class="form__error">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- フォーム --}}
    <form action="/contacts/confirm" method="post" class="form">
        @csrf

        {{-- 名前 --}}
        <div class="form__group">
            <label class="form__label">お名前</label>
            <input type="text" name="name" value="{{ old('name') }}" class="form__input">
        </div>

        {{-- メール --}}
        <div class="form__group">
            <label class="form__label">メールアドレス</label>
            <input type="email" name="email" value="{{ old('email') }}" class="form__input">
        </div>

        {{-- 電話番号 --}}
        <div class="form__group">
            <label class="form__label">電話番号</label>
            <input type="text" name="tell" value="{{ old('tell') }}" class="form__input">
        </div>

        {{-- お問い合わせ内容 --}}
        <div class="form__group">
            <label class="form__label">お問い合わせ内容</label>
            <textarea name="content" class="form__textarea">{{ old('content') }}</textarea>
        </div>

        {{-- 送信ボタン --}}
        <div class="form__button">
            <button type="submit" class="form__button-submit">送信</button>
        </div>

    </form>
</div>
@endsection