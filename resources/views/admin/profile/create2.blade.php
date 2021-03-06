{{-- news/profile.blade.phpを読み込む --}}
@extends('layouts.admin')

{{-- prodile.blade.phpの@yield('title')に'プロフィールの新規作成'を埋め込む -- }}
@section('title', 'プロフィールの新規作成')

{{-- profile.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
      <div class="container">
          <div class="row">
              <div class="col-md-8 mx-auto">
                  <h2>Myプロフィール</h2>
                  <form action="{{ action('Admin\ProfileController@create2') }}" method="post" enctype="multipart/form-data">
                  @if (count($errors) > 0)
                        <ul>
                              @foreach($errors->all() as $e)
                              <li>{{ $e }}</li>
                              @endforeach
                        </ul>
                        @endif
                        <div class="form-group row">
                              <label class="col-md-2" for="title">氏名(name)</label>
                              <div class="col-md-10">
                                    <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                              </div>
                        </div>
                        <div class="form-group row">
                              <label class="col-md-2" for="title">性別(gender)</label>
                              <div class="col-md-10">
                                    <input type="text" class="form-control" name="gender" value="{{ old('gender') }}">
                              </div>
                        </div>
                        <div class="form-group row">
                              <label class="col-md-2" for="title">趣味(hobby)</label>
                              <div class="col-md-10">
                                    <input type="text" class="form-control" name="hobby" value="{{ old('hobby') }}">
                              </div>
                        </div>
                        <div class="form-group row">
                              <label class="col-md-2" for="body">自己紹介欄(introduction)</label>
                              <div class="col-md-10">
                                    <textarea class="form-control" name="introduction" rouws="20">{{ old('body')}}</textarea>
                              </div>
                        </div>
                        {{ csrf_field() }}
                  </form>
              </div>
          </div>
      </div>
@endsection

{{--課題1. Bladeテンプレートで、埋め込みたい箇所に利用するワードは何だったでしょうか？
@yieldの中にテキストやコンテンツを埋め込み

課題2.Webpackで使われているBootstrapやSCSSはどういったものか、調べられる範囲で調べてみましょう。
・Bootstrapとは、twitterが開発しているcssフレームワーク。フォームやボタン、ナビゲーション、モーダルなど汎用的なウェブサイトのパーツのスタイルが提供されています。
　このような汎用パーツは一から作ると手間がかかるもの。Bootstrapを使えば車輪の再発明をおさえられるので、生産性をあげられます。
　巷でBootstrapのサイトに対してよく言われるのは「Bootstrapくさいよね」という指摘。そのまま使うと、見た目が共通の仕上がりとなりBootstrap臭がどうしても出てしまいます。
　CDN版だとカスタマイズ性にかけており、Bootstrapらしさを軽減するのが難しいといった課題があります。
　Bootstrapをwebpack+Sass構成で取り込む最大のうまみは、簡単にカスタマイズできることです。特定のSass変数の値を上書きすることで、Boostrapの装飾を変更できます。
　カスタマイズすることでBootstrapっぽさを軽減し、コンテンツのテイストにスタイルをあわせられます。
・SCSSとは、SCSSにはネストされたルール、変数、ミックスイン、セレクタ継承などCSSにあるととっても便利な拡張を使うことができるようになります。
　その他にもif,for,each,whileなども使えるようになります。
　なみにSassには2つの構文があり、SCSS（Sassy CSS）とSass（インデント構文）に別れます。SCSSは.scssという拡張子、Sassは.sassという拡張子を持ち、
　お互いにSass-convertコマンドラインツールを使うことで変換もできますし、どちらの構文で書かれたとしてもインポートできます。
　SCSSの変数は「$」を使って定義します。
　
課題3.
課題4. プロフィール作成画面用に、resources/views/admin/profile/create.blade.php ファイルを作成し、3. で作成した profile.blade.phpファイルを読み込み、
       また プロフィールのページであることがわかるように titleとcontentを編集しましょう。（ヒント: resources/views/admin/news/create.blade.php を参考にします。）
       このページです

課題5. resources/sass/admin.scss をコピーして profile.scss をresources/sassに作成しましょう。後ほ どこちらは課題で編集します。

課題6. webpack.mix.jsを編集して、profile.scss をコンパイルするように編集してみましょう。
課題7. 7. ができたら、実際に npm run watch コマンドでコンパイルしてみましょう。
課題8. 8. ができたら、ブラウザで /admin/profile/createでプロフィール作成画面が表 示されるか確認しましょう。

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="view-port" content="width=device-width, initial-scale=1">
        
       <title>Profile</title>
    </head>
    <body>
    <h1>Profile作成画面</h1>
    <h2>課題1.Viewは何をするところでしょうか。簡潔に説明してみてください。</h2>
    <p>Controllerの指示によって、アクセスしてきたuserのブラウザに表示するデータを生成する所</p>
    <h3>課題2.プログラマーがhtmlを書かずにPHPなどのプログラミング言語やフレームワークを使う必要があるのはどういった理由でしょうか。</h3>
    <p>loginしたuser毎にwebpageにuser名を表示したい場合やmodel経由でdatebaseからdateを取得し、それをhtmlファイルに記載してuserに渡す必要があるため</p>
    </body>
</html>
--}}
