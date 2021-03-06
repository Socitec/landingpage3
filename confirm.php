<?php
//セッションを開始
session_start();
//エスケープ処理やデータチェックを行う関数のファイルの読み込み
require 'contactform/functions.php';
//POSTされたデータをチェック
$_POST = checkInput( $_POST );
//固定トークンを確認（CSRF対策）
if ( isset( $_POST[ 'ticket' ], $_SESSION[ 'ticket' ] ) ) {
  $ticket = $_POST[ 'ticket' ];
  if ( $ticket !== $_SESSION[ 'ticket' ] ) {
    //トークンが一致しない場合は処理を中止
    die( 'Access Denied!' );
  }
} else {
  //トークンが存在しない場合は処理を中止（直接このページにアクセスするとエラーになる）
  die( 'Access Denied（直接このページにはアクセスできません）' );
}
//POSTされたデータを変数に格納
$name = isset( $_POST[ 'name' ] ) ? $_POST[ 'name' ] : NULL;
$email = isset( $_POST[ 'email' ] ) ? $_POST[ 'email' ] : NULL;
$email_check = isset( $_POST[ 'email_check' ] ) ? $_POST[ 'email_check' ] : NULL;
$tel = isset( $_POST[ 'tel' ] ) ? $_POST[ 'tel' ] : NULL;
$subject = isset( $_POST[ 'subject' ] ) ? $_POST[ 'subject' ] : NULL;
$body = isset( $_POST[ 'body' ] ) ? $_POST[ 'body' ] : NULL;
//POSTされたデータを整形（前後にあるホワイトスペースを削除）
$name = trim( $name );
$email = trim( $email );
$email_check = trim( $email_check );
$tel = trim( $tel );
$subject = trim( $subject );
$body = trim( $body );
//エラーメッセージを保存する配列の初期化
$error = array();
//値の検証（入力内容が条件を満たさない場合はエラーメッセージを配列 $error に設定）
if ( $name == '' ) {
  $error[ 'name' ] = '*お名前は必須項目です。';
  //制御文字でないことと文字数をチェック
} else if ( preg_match( '/\A[[:^cntrl:]]{1,30}\z/u', $name ) == 0 ) {
  $error[ 'name' ] = '*お名前は30文字以内でお願いします。';
}
if ( $email == '' ) {
  $error[ 'email' ] = '*メールアドレスは必須です。';
} else { //メールアドレスを正規表現でチェック
  $pattern = '/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/uiD';
  if ( !preg_match( $pattern, $email ) ) {
    $error[ 'email' ] = '*メールアドレスの形式が正しくありません。';
  }
}
if ( $email_check == '' ) {
  $error[ 'email_check' ] = '*確認用メールアドレスは必須です。';
} else { //メールアドレスを正規表現でチェック
  if ( $email_check !== $email ) {
    $error[ 'email_check' ] = '*メールアドレスが一致しません。';
  }
}
if ( preg_match( '/\A[[:^cntrl:]]{0,30}\z/u', $tel ) == 0 ) {
  $error[ 'tel' ] = '*電話番号は30文字以内でお願いします。';
}
if ( $tel != '' && preg_match( '/\A\(?\d{2,5}\)?[-(\.\s]{0,2}\d{1,4}[-)\.\s]{0,2}\d{3,4}\z/u', $tel ) == 0 ) {
  $error[ 'tel_format' ] = '*電話番号の形式が正しくありません。';
}
if ( $subject == '' ) {
  $error[ 'subject' ] = '*件名は必須項目です。';
  //制御文字でないことと文字数をチェック
} else if ( preg_match( '/\A[[:^cntrl:]]{1,100}\z/u', $subject ) == 0 ) {
  $error[ 'subject' ] = '*件名は100文字以内でお願いします。';
}
if ( $body == '' ) {
  $error[ 'body' ] = '*内容は必須項目です。';
  //制御文字（タブ、復帰、改行を除く）でないことと文字数をチェック
} else if ( preg_match( '/\A[\r\n\t[:^cntrl:]]{1,1050}\z/u', $body ) == 0 ) {
  $error[ 'body' ] = '*内容は1000文字以内でお願いします。';
}
//POSTされたデータとエラーの配列をセッション変数に保存
$_SESSION[ 'name' ] = $name;
$_SESSION[ 'email' ] = $email;
$_SESSION[ 'email_check' ] = $email_check;
$_SESSION[ 'tel' ] = $tel;
$_SESSION[ 'subject' ] = $subject;
$_SESSION[ 'body' ] = $body;
$_SESSION[ 'error' ] = $error;
//チェックの結果にエラーがある場合は入力フォームに戻す
if ( count( $error ) > 0 ) {
  //エラーがある場合
  $dirname = dirname( $_SERVER[ 'SCRIPT_NAME' ] );
  $dirname = $dirname == DIRECTORY_SEPARATOR ? '' : $dirname;
  $url = ( empty( $_SERVER[ 'HTTPS' ] ) ? 'http://' : 'https://' ) . $_SERVER[ 'SERVER_NAME' ] . '/index.php';
  header( 'HTTP/1.1 303 See Other' );
  header( 'location: ' . $url );
  exit;
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>コンタクトフォーム（確認）</title>
  <link href="../bootstrap.min.css" rel="stylesheet">
  <!-- リセットcss読み込み -->
  <link rel="stylesheet" href="stylesheet/destyle.css">
  <!-- スタイルシート読み込み -->
  <link href="stylesheet/stylesheet.css" rel="stylesheet">
</head>

<body>

  <header>
    <div class="container">
      <div class="logo">
        <a href="#"><img src="image/logo.png" alt="logo"></a>
      </div>
    </header>

    <!-- 背景 -->
    <div class="background"></div>


    <div id="confirm">
      <div class="container">
        <div class="index">
          <h2>お問い合わせ確認画面</h2>
        </div>
        <div class="confirmText">
          <p>
            以下の内容でよろしければ「送信する」をクリックしてください。<br>
            内容を変更する場合は「戻る」をクリックして入力画面にお戻りください。
          </p>
        </div>
        <div class="table-responsive confirm_table">
          <table class="table table-bordered">
            <caption>ご入力内容</caption>
            <tr>
              <th>お名前</th>
              <td><?php echo h($name); ?></td>
            </tr>
            <tr>
              <th>Email</th>
              <td><?php echo h($email); ?></td>
            </tr>
            <tr>
              <th>お電話番号</th>
              <td><?php echo h($tel); ?></td>
            </tr>
            <tr>
              <th>件名</th>
              <td><?php echo h($subject); ?></td>
            </tr>
            <tr>
              <th>お問い合わせ内容</th>
              <td><?php echo nl2br(h($body)); ?></td>
            </tr>
          </table>
          <div class="buttonBox">
            <div class="buttonarea">
              <form action="index.php" method="post" class="confirm">
                <button type="submit" class="btn btn-secondary">戻る</button>
              </form>
              <form action="complete.php" method="post" class="confirm">
                <!-- 完了ページへ渡すトークンの隠しフィールド -->
                <input type="hidden" name="ticket" value="<?php echo h($ticket); ?>">
                <button type="submit" class="btn btn-success">送信する</button>
              </form>
              <div class="clear"></div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <footer>
      <div class="container">
        <img src="image/logo.png" alt="logo">
        <div class="copyright">
          <p>
            © 2021 socitec
          </p>
        </div>
      </div>
    </footer>

  </body>
  </html>
