@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
@endsection

@section('content')
<div class="confirm__content">

    <div class="confirm__heading">
        <h2>入力内容確認</h2>
    </div>

    <form action="/contacts" method="post" class="form">
        @csrf

        <table class="confirm-table">
            <tr>
                <th>お名前</th>
                <td>{{ $contact['name'] }}</td>
            </tr>
            <tr>
                <th>メールアドレス</th>
                <td>{{ $contact['email'] }}</td>
            </tr>
            <tr>
                <th>電話番号</th>
                <td>{{ $contact['tell'] }}</td>
            </tr>
            <tr>
                <th>お問い合わせ内容</th>
                <td>{{ $contact['content'] }}</td>
            </tr>
        </table>

        {{-- 再送信用（超重要） --}}
        <input type="hidden" name="name" value="{{ $contact['name'] }}">
        <input type="hidden" name="email" value="{{ $contact['email'] }}">
        <input type="hidden" name="tell" value="{{ $contact['tell'] }}">
        <input type="hidden" name="content" value="{{ $contact['content'] }}">

        <div class="form__button">
            <button type="submit">送信</button>
        </div>
    </form>
</div>
@endsection