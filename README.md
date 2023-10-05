<div id="top"></div>

## 使用技術一覧

<!-- シールド一覧 -->
<!-- 該当するプロジェクトの中から任意のものを選ぶ-->
<p style="display: inline">
  <!-- バックエンドのフレームワーク一覧 -->
  <img src="https://img.shields.io/badge/-Laravel-FF2D20.svg?logo=laravel&style=for-the-badge&logoColor=white"">
  <!-- バックエンドの言語一覧 -->
  <img src="https://img.shields.io/badge/-PHP-777BB4.svg?logo=php&style=for-the-badge&logoColor=white"">
  <!-- ミドルウェア一覧 -->
  <img src="https://img.shields.io/badge/-Nginx-269539.svg?logo=nginx&style=for-the-badge">
  <img src="https://img.shields.io/badge/-MySQL-4479A1.svg?logo=mysql&style=for-the-badge&logoColor=white">
  <!-- インフラ一覧 -->
  <img src="https://img.shields.io/badge/-Docker-1488C6.svg?logo=docker&style=for-the-badge">
</p>

## 目次

1. [プロジェクトについて](#プロジェクトについて)
2. [環境](#環境)
3. [ディレクトリ構成](#ディレクトリ構成)
4. [開発環境構築](#開発環境構築)

<!-- プロジェクト名を記載 -->

## プロジェクト名

drill-ph3

<!-- プロジェクトについて -->

## プロジェクトについて

プログラミング学習コミュニティPOSSEで学習するPH3の内容定着を促進するドリル課題です

## 環境

<!-- 言語、フレームワーク、ミドルウェア、インフラの一覧とバージョンを記載 -->

| 言語・フレームワーク  | バージョン |
| --------------------- | ---------- |
| Nginx                 | 1.18       |
| PHP                   | 7.4        |
| MySQL                 | 8.0        |
| Laravel               | 6.20.44    |

その他のパッケージのバージョンは package.json を参照してください

<p align="right">(<a href="#top">トップへ</a>)</p>

## ディレクトリ構成

<!-- Treeコマンドを使ってディレクトリ構成を記載 -->
各フォルダ内のディレクトリ構成
srcフォルダ内はLaravelの標準的なディレクトリ構造と同一のため、多少省いております。
```
.
├── .gitignore
├── docker-compose.yml
├── README.md
├── container
│   ├── app
│   │   ├── php
│   │   │   └── php.ini
│   │   └── Dockerfile
│   ├── db
│   │   ├── docker-entrypoint-initdb.d
│   │   │   └── init.sql
│   │   └── etc
│   │       └── mysql
│   │           └── conf.d
│   │               └── my.cnf
│   └── web
│       ├── nginx
│       │   └── default.conf
│       └── Dockerfile
└── src
    ├── app
    │   └── ...
    ├── bootstrap
    │   └── ...
    ├── config
    │   └── ...
    ├── database
    │   └── ...
    ├── public
    │   └── ...
    ├── resources
    │   └── ...
    ├── routes
    │   └── ...
    ├── storage
    │   └── ...
    ├── test
    │   └── ...
    ├── .editconfig
    ├── .env
    ├── .env.sample
    ├── .gitattributes
    ├── .gitignore
    ├── .styleci.yml
    ├── artisan
    ├── composer.json
    ├── composer.lock
    ├── package-lock.json
    ├── package.json
    ├── phpunit.yml
    ├── README.md
    ├── server.php
    └── webpack.mix.js
```

<p align="right">(<a href="#top">トップへ</a>)</p>

## 開発環境構築

<!-- コンテナの作成方法、パッケージのインストール方法など、開発環境構築に必要な情報を記載 -->

### コンテナの作成と起動

以下のコマンドで開発環境を構築

```
docker compose build --no-cache
docker compose up -d
```

コンテナ立ち上げ後、以下のコマンドでマイグレーションとシーディングを実行
```
docker compose exec ph3-posseapp-app bash
composer install
php artisan migrate:refresh --seed
```

### 動作確認

http://localhost にアクセスできるか確認
アクセスできたら成功

### コンテナの停止

以下のコマンドでコンテナを停止することができます

```
docker compose down
```
