@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@endsection

@section('content')
<div class="admin__content">
    <div class="admin__heading">
        <h2>お問い合わせ一覧</h2>
    </div>

    <table class="admin-table">
        <tr class="admin-table__row">
            <th class="admin-table__header">お名前</th>
            <th class="admin-table__header">メールアドレス</th>
            <th class="admin-table__header">電話番号</th>
            <th class="admin-table__header">お問い合わせ内容</th>
        </tr>

        @foreach ($contacts as $contact)
        <tr class="admin-table__row">
            <td class="admin-table__item">{{ $contact->name }}</td>
            <td class="admin-table__item">{{ $contact->email }}</td>
            <td class="admin-table__item">{{ $contact->tell }}</td>
            <td class="admin-table__item">{{ $contact->content }}</td>
        </tr>
        @endforeach
    </table>
</div>
@endsection