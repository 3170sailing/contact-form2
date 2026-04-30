# laravel-docker-template

## アプリケーション名
お問い合わせフォームアプリ

## アプリ概要
ユーザーが入力したお問い合わせ内容を送信できるフォームアプリです。
入力内容は確認画面を経てデータベースに保存されます。
また、ログインしたユーザーはお問い合わせ内容の一覧を閲覧することができます。

## 主な機能
- お問い合わせフォーム入力
- 入力内容確認画面
- お問い合わせ送信（データ保存）
- ユーザー認証機能（ログイン・会員登録）
- お問い合わせ一覧表示（ログインユーザーのみ）

## 使用技術
- Laravel
- PHP
- MySQL
- Docker

## 画面構成
- 入力ページ
- 確認ページ
- 完了ページ
- ログイン画面
- 会員登録画面
- お問い合わせ一覧画面

## データベース
contactsテーブルを使用し、お問い合わせ情報を管理しています。

### 環境構築

1. プロジェクトをクローン

```bash

git clone git@github.com:3170sailing/contact-form2.git
```

2. プロジェクトへ移動

```bash

cd contact-form2

```

3. Dockerのビルド＆起動

```bash

docker compose up -d --build

```

4. PHPコンテナへログイン

```bash

docker compose exec php bash

```

5. 必要なパッケージのインストール

```bash

composer install

```

6. .env作成

```bash

cp .env.example .env

```

7. 作成された.envのDB接続を変更

```bash

DB_CONNECTION=mysql

DB_HOST=mysql

DB_PORT=3306

DB_DATABASE=laravel_db

DB_USERNAME=laravel_user

DB_PASSWORD=laravel_pass

```

8. アプリの暗号化キー（APP_KEY）を生成

```bash
php artisan key:generate

```

9. マイグレーション実行

```bash
php artisan migrate

```

10. シーディング実行

```bash
php artisan db:seed

```
## ER図
![alt](ER.png)

## テーブル設計
| カラム名 | 型 | PRIMARY KEY | UNIQUE | NOT NULL | FOREIGN KEY | 説明 |
|----------|----|-------------|--------|----------|--------------|------|
| id | unsigned bigint | ○ |  | ○ |  | 主キー |
| name | varchar(255) |  |  | ○ |  | 名前 |
| email | varchar(255) |  |  | ○ |  | メールアドレス |
| tell | varchar(11) |  |  | ○ |  | 電話番号 |
| content | text |  |  |  |  | お問い合わせ内容 |
| created_at | timestamp |  |  |  |  | レコード作成時刻 |
| updated_at | timestamp |  |  |  |  | レコード更新時刻 |