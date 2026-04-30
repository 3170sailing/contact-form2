<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    // 入力フォーム画面を表示
    public function index()
    {
        return view('index');
    }

    // 入力内容確認ページを表示
    public function confirm(ContactRequest $request)
    {
    $contact = $request->only([
        'name',
        'email',
        'tell',
        'content',
    ]);

    return view('confirm', compact('contact'));
    }

    // DBに保存して完了ページを表示
    public function store(Request $request)
    {
        // 確認画面から送られてきた値を取得
        $contact = $request->only([
            'name',
            'email',
            'tell',
            'content',
        ]);

        // contactsテーブルに保存
        Contact::create($contact);

        // 完了ページを表示
        return view('thanks');
    }

    // お問い合わせ一覧の表示
    public function admin()
    {
        // contactsテーブルのデータを新しい順で取得
        $contacts = Contact::orderBy('created_at', 'desc')->get();

        // admin.blade.phpにデータを渡す
        return view('admin', compact('contacts'));
    }
}