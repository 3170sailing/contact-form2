@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/auth.css') }}">
@endsection

@section('content')
<div class="auth__content">
    <div class="auth__heading">
        <h2>会員登録</h2>
    </div>

    <form class="form" action="/register" method="post">
        @csrf

        <div class="form__group">
            <input class="form__input" type="text" name="name" value="{{ old('name') }}" placeholder="お名前">
            @error('name')
                <p class="form__error">{{ $message }}</p>
            @enderror
        </div>

        <div class="form__group">
            <input class="form__input" type="email" name="email" value="{{ old('email') }}" placeholder="メールアドレス">
            @error('email')
                <p class="form__error">{{ $message }}</p>
            @enderror
        </div>

        <div class="form__group">
            <input class="form__input" type="password" name="password" placeholder="パスワード">
            @error('password')
                <p class="form__error">{{ $message }}</p>
            @enderror
        </div>

        <div class="form__group">
            <input class="form__input" type="password" name="password_confirmation" placeholder="確認用パスワード">
        </div>

        <div class="form__button">
            <button class="form__button-submit" type="submit">登録</button>
        </div>
    </form>
</div>
@endsection