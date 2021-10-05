<!-- コンタクトフォームセット読み込み -->
<?php require('contactform/contactform_set.php'); ?>


<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>Portfolio</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Viewport読み込み -->
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, user-scalable=yes">
  <!-- サムネイル読み込み -->
  <meta name="thumbnail" content="image/preview.jpg" />
  <!-- Reset css読み込み -->
  <link rel="stylesheet" href="stylesheet/destyle.css">
  <!-- Stylesheet読み込み -->
  <link rel="stylesheet" href="stylesheet/stylesheet.css">
  <!-- レスポンシブStylesheet読み込み -->
  <link rel="stylesheet" href="stylesheet/responsive.css">
  <!-- Google Fonts読み込み -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@600&family=Courgette&family=Dancing+Script:wght@600&display=swap" rel="stylesheet">
  <!-- Font Awesome読み込み -->
  <link href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" rel="stylesheet">
  <link href="../bootstrap.min.css" rel="stylesheet">

  <!-- jQuery読み込み -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <!-- 自作javascriptの読み込み -->
  <script src="script/script.js"></script>


</head>
<body>
  <!-- 背景 -->
  <div class="background"></div>

  <header id="scrollArea">
    <div class="container">
      <div class="logo">
        <a class="goSection" href="#"><img src="image/logo.png" alt="logo"></a>
      </div>
      <div class="headermenu nav-wrapper">
        <nav class="header-nav">
          <ul class="nav-list">
            <a class="goSection hoverChangeColor" href="#solution"><li class="nav-item hoverChangeColor">提案</li></a>
            <a class="goSection hoverChangeColor" href="#profile" ><li class="nav-item hoverChangeColor">自己紹介</li></a>
            <a class="goSection hoverChangeColor" href="#service" ><li class="nav-itemn hoverChangeColor">サービス内容</li></a>
            <a class="goSection hoverChangeColor" href="#works" ><li class="nav-item hoverChangeColor">実績</li></a>
            <a class="goSection hoverChangeColor" href="#order" ><li class="nav-item hoverChangeColor">依頼の流れ</li></a>
            <a class="goSection hoverChangeColor" href="#contact" ><li class="nav-item hoverChangeColor">お問い合わせ</li></a>
          </ul>
        </nav>
      </div>
    </div>
    <!-- ハンバーガーボタン -->
    <div class="burger-btn">
      <span class="bar bar_top"></span>
      <span class="bar bar_mid"></span>
      <span class="bar bar_bottom"></span>
    </div>
  </header>

  <!-- トップボタン固定 -->
  <div id="page-top" class="topButton">
    <p><i class="fas fa-caret-up"></i></p>
    <p>TOP</p>
  </div>

  <!-- トップ画面 -->
  <div id="topview">
    <div class="container">
      <div class="title">
        <div class="subtitle">
          <p class="socitec">
            Portfolio of <span>SOCITEC-YUKI</span><br>
            as a <span>WEBENGINEER</span>
          </p>
        </div>
        <div class="top">
          <h1>Webサイトの立ち上げどうしていいかわからない、<br>そんな悩みを解決します</h1>
        </div>
        <div class="limitedtime">
          <p>
            10月末までにご契約の方の<span class="limitedtimeRemark">"期間限定"</span><br>
            公開後の修正を3か月間<span class="limitedtimeRemark">追加料金なしで</span>行います
          </p>
          <div class="inquirybutton">
            <a class="goSection" href="#contact" class="goSection"><button type="button" name="button">まずは<span>無料相談</span>のお問い合わせ</button></a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- 悩み -->
  <div id="problem">
    <div class="container">
      <div class="index">
        <h2>こんなお悩みありませんか？</h2>
      </div>
      <div class="issue">
        <div class="thinking">
          <img src="image/thinking_man.jpg" alt="thinking_man">
        </div>
        <div class="problems">
          <div class="problem1">
            <p>売り上げが落ちて、新しくネット集客したいけど、何から始めていいかわからない</p>
          </div>
          <div class="problem2">
            <p>WEBサイトを作りたいけど、やることが多すぎてめんどうだ</p>
          </div>
          <div class="problem3">
            <p>WEB制作に投資できる資金の余裕があまりない</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- 問題解決 -->
  <div id="solution">
    <div class="container">
      <div class="index">
        <h2>その悩み私たちで解決できます</h2>
      </div>
      <div class="solutionview">
        <img src="image/meeting.jpg" alt="meeting">
      </div>
      <div class="solutions">
        <div class="solution1 item">
          <h3>お客様の悩みに丁寧に向き合って、ネット戦略を提案します</h3>
          <p>
            お客様へのヒアリングはもちろん、既存Webサイトのアクセス解析や、売り上げ状態の調査などの現状分析も行い、<br>
            <span>何がお客様にとってベストか二人三脚で考えながら提案いたします。</span><br>
            さらに、作って終わりではなく、売り上げやアクセスにつながっているか分析しながら、<span>継続的に改善提案</span>も致します。
          </p>
        </div>
        <div class="solution2 item">
          <h3>込み入った作業も代行します</h3>
          <p>
            WEBサイトの立ち上げなどでは、ドメイン取得やサーバーの構築など、込み入った面倒な作業が多くあります。<br>
            そのような作業に充てる時間も人員もない、という方のために、<span>込み入った作業の代行</span>も致します。<br>
            何でもお気軽にご相談ください。
          </p>
        </div>
        <div class="solution3 item">
          <h3>無料相談し、お客様に資金的に無理のない<br>プランを提案します</h3>
          <p>
            まずは<span>無料で相談</span>させていただき、どのようなお悩みを持たれているか、ヒアリングします。<br>
            お客様の売り上げ状況やサービスの規模に応じて、プランを提案いたします。
            もし資金的な余裕がないようでしたら、着手金無しで成果に応じて(例えばネットでの売り上げの一定比率)、お支払いいただくこともできます。
            <p>
            </div>
          </div>
        </div>
      </div>

      <!-- 自己紹介 -->
      <div id="profile">
        <div class="container">
          <div class="index">
            <h2>PROFILE</h2>
          </div>
          <div class="profileBox">
            <div class="profileImage">
              <img id="profilephoto" src="image/profilephoto.jpg" alt="自己紹介画像">
            </div>
            <div class="profileitems">
              <div class="hobby">
                <h3>趣味</h3>
                <ul>
                  <li><h4>ランニング</h4>気分転換にたまに走ります。ハーフマラソンにも出ました。
                  </li>
                  <li><h4>ポケモンバトル</h4>Nitendo Switchのポケモンソード＆シールドで、ポケモンを育成してネット対戦をやっています。
                  </li>
                  <li><h4>カフェ巡り</h4>パソコン作業に集中できるカフェを探し求めています。
                  </li>
                </ul>
              </div>
              <div class="history">
                <h3>これまでの歩み</h3>
                <table border="1" bordercolor="#616161">
                  <tr>
                    <td class="school">小学校</td>
                    <td class="place">岡山</td>
                    <td class="memory">田舎の田んぼでひたすら昆虫採取していました</td>
                  </tr>
                  <tr>
                    <td class="school">中学校</td>
                    <td class="place">岡山</td>
                    <td class="memory">部活で環境問題に取り組み、川の水質調査をしていました</td>
                  </tr>
                  <tr>
                    <td class="school">高校</td>
                    <td class="place">岡山</td>
                    <td class="memory">土日関係なく受験勉強Onlyの日々でした</td>
                  </tr>
                  <tr>
                    <td class="school">大学</td>
                    <td class="place">大阪</td>
                    <td class="memory">サークルで競技ダンス、アルバイトで化学実験の授業、生化学の研究など、様々な経験をしました</td>
                  </tr>
                  <tr>
                    <td class="school">社会人</td>
                    <td class="place">愛知</td>
                    <td class="memory">化学メーカーで、高強力繊維の新製品開発をしています</td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- サービス -->
      <div id="service">
        <div class="container">
          <div class="index">
            <h2>サービス</h2>
          </div>
          <div class="skillsbox">
            <div class="website item">
              <h3>WEBサイト制作</h3>
              <img src="image/skills1_1.jpg" alt="Webサイト作成">
              <h4>できること</h4>
              <p>デザイン、コーディング、サーバー構築</p>
              <h4>使用可能言語</h4>
              <p>HTML、CSS、JavaScript(jQuery)、PHP</p>
              <h4>その他</h4>
              <p>レスポンシブ対応可、コンタクトフォーム設置可</p>
            </div>
            <div class="blog item">
              <h3>ブログ立ち上げ</h3>
              <img src="image/skills2_1.jpg" alt="ブログ立ち上げ">
              <h4>できること</h4>
              <p>Wordpress構築、サーバー構築、テーマ編集</p>
            </div>
          </div>
        </div>
      </div>

      <!-- 実績 -->
      <div id="works">
        <div class="container">
          <div class="index">
            <h2>WORKS</h2>
          </div>
          <div class="worksbox">
            <div class="website">
              <h3>WEBサイト制作</h3>
              <div class="websitebox">
                <div class="lemonjam item">
                  <a href="https://foodidea.base.shop/">
                    <h4>レモンジャムのECサイトのランディングページ</h4>
                    <img src="image/works1_tabelemo_1.jpg" alt="たべれも">
                  </a>
                  <h5>関わった範囲</h5>
                  <p>ディレクション、デザイン、コーディング</p>
                  <h5>使用言語</h5>
                  <p>HTML、CSS、JavaScript(jQuery)</p>
                  <h5>力を入れた部分</h5>
                  <p>トップビューでいかに権威性のある情報を、<br>
                    多く、かつ、わかりやすく伝えるか考えてデザインしました。<br>
                    これにより、レモンジャムが安心して食べられることを、<br>
                    印象付けることができます。
                  </p>
                  <h5>成果</h5>
                  <p>サイトを改修して2か月で、<br>
                    1か月あたりの売り上げを7倍上げることができました。
                  </p>
                </div>
                <div class="clip item">
                  <a href="https://doclip.net/">
                    <h4>デザイン事務所のコーポレートサイト</h4>
                    <img src="image/works4_clip_1.jpg" alt="デザインオフィスCLIP">
                  </a>
                  <h5>関わった範囲</h5>
                  <p>コーディング</p>
                  <h5>使用言語</h5>
                  <p>HTML、CSS、JavaScript(jQuery)、PHP</p>
                  <h5>力を入れた部分</h5>
                  <p>スマホ用のレスポンシブデザインでは、<br>
                    指で押しやすい位置にメニューボタンを設置するなど、<br>
                    ユーザビリティにこだわりました。
                  </p>
                </div>
                <div class="livevoxx item">
                  <a href="https://peraichi.com/landing_pages/view/livevoxx">
                    <h4>音楽ポータルサイトの広告枠のランディングページ</h4>
                    <img src="image/works2_livevoxx_1.jpg" alt="LIVEVOXX">
                  </a>
                  <h5>関わった範囲</h5>
                  <p>ディレクション、デザイン</p>
                  <h5>使用サービス</h5>
                  <p>ペライチ</p>
                  <h5>力を入れた部分</h5>
                  <p>依頼者に合計6時間ものインタビューを行い、<br>
                    バンドグループがどんな悩みを持っているのか、<br>
                    聞き取りを徹底しました。
                  </p>
                  <h5>成果</h5>
                  <p>サイトを公開して1か月で、<br>
                    1か月あたりの問い合わせ件数が2倍に増加しました。
                  </p>
                </div>
              </div>
            </div>
            <div class="blog">
              <h3>ブログ立ち上げ</h3>
              <div class="blogbox">
                <div class="greencoffee item">
                  <a href="https://socitec.tokyo/coffeestandpassion/">
                    <h4>グリーンコーヒーの紹介ブログ</h4>
                    <img src="image/works3_cspblog_1.jpg" alt="グリーンコーヒーブログ">
                  </a>
                  <h5>関わった範囲</h5>
                  <p>サーバー構築、ライティング、テーマ編集</p>
                  <h5>使用言語</h5>
                  <p>HTML、CSS、JavaScript(jQuery)</p>
                  <h5>力を入れた部分</h5>
                  <p>コーヒー事業の新規展開のために、何がベストか、<br>
                    SNSとの連携も含めて戦略を提案しました。<br>
                    使用するSNSやサーバーの選定など、<br>
                    お客様のやりたいことと、売り上げ情報などを踏まえて提案しました。
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- 依頼までの流れ -->
      <div id="order">
        <div class="container">
          <div class="index">
            <h2>依頼の流れ</h2>
          </div>
          <div class="orderbox">
            <div class="inquiry content">
              <i class="fas fa-caret-right fa-4x firsticon"></i>
              <div class="item">
                <i class="fas fa-envelope-open-text fa-4x"></i>
                <p>問合わせ</p>
              </div>
            </div>
            <div class="meeting content">
              <i class="fas fa-caret-right fa-4x"></i>
              <div class="item">
                <i class="fas fa-laptop fa-4x"></i>
                <p>Zoom面談</p>
              </div>
            </div>
            <div class="quotation content">
              <i class="fas fa-caret-right fa-4x"></i>
              <div class="item">
                <i class="fas fa-file-invoice fa-4x"></i>
                <p>見積もり</p>
              </div>
            </div>
            <div class="order content">
              <i class="fas fa-caret-right fa-4x"></i>
              <div class="item">
                <i class="fas fa-handshake fa-4x"></i>
                <p>依頼</p>
              </div>
            </div>
            <div class="work content">
              <i class="fas fa-caret-right fa-4x"></i>
              <div class="item">
                <i class="fas fa-keyboard fa-4x"></i>
                <p>作業</p>
              </div>
            </div>
            <div class="submit content">
              <i class="fas fa-caret-right fa-4x"></i>
              <div class="item">
                <i class="fas fa-file-code fa-4x"></i>
                <p>納品</p>
              </div>
            </div>
            <div class="check content">
              <i class="fas fa-caret-right fa-4x"></i>
              <div class="item">
                <i class="fas fa-tasks fa-4x"></i>
                <p>検収</p>
              </div>
            </div>
            <div class="pay content">
              <i class="fas fa-caret-right fa-4x"></i>
              <div class="item">
                <i class="fas fa-money-check-alt fa-4x"></i>
                <p>支払い</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- お問い合わせフォーム -->
      <div id="contact">
        <div class="container">
          <div class="index">
            <h2>お問い合わせフォーム</h2>
          </div>
          <p>以下のフォームからお問い合わせください。</p>
          <form id="main_contact" method="post" action="confirm.php">
            <div class="form-group">
              <label for="name">お名前（必須）
                <span class="error"><?php echo h( $error_name ); ?></span>
              </label><br>
              <input type="text" class="form-control validate max50 required inputarea" id="name" name="name" placeholder="氏名" value="<?php echo h($name); ?>">
            </div>
            <div class="form-group">
              <label for="email">Email（必須）
                <span class="error"><?php echo h( $error_email ); ?></span>
              </label><br>
              <input type="text" class="form-control validate mail required inputarea" id="email" name="email" placeholder="Email アドレス" value="<?php echo h($email); ?>">
            </div>
            <div class="form-group">
              <label for="email_check">Email（確認用 必須）
                <span class="error"><?php echo h( $error_email_check ); ?></span>
              </label><br>
              <input type="text" class="form-control validate email_check required inputarea" id="email_check" name="email_check" placeholder="Email アドレス（確認のためもう一度ご入力ください。）" value="<?php echo h($email_check); ?>">
            </div>
            <div class="form-group">
              <label for="tel">お電話番号（半角英数字）
                <span class="error"><?php echo h( $error_tel ); ?></span>
                <span class="error"><?php echo h( $error_tel_format ); ?></span>
              </label><br>
              <input type="text" class="validate max30 tel form-control inputarea" id="tel" name="tel" value="<?php echo h($tel); ?>" placeholder="お電話番号（半角英数字でご入力ください）">
            </div>
            <div class="form-group">
              <label for="subject">件名（必須）
                <span class="error"><?php echo h( $error_subject ); ?></span>
              </label><br>
              <input type="text" class="form-control validate max100 required inputarea" id="subject" name="subject" placeholder="件名" value="<?php echo h($subject); ?>">
            </div>
            <div class="form-group">
              <label for="body">お問い合わせ内容（必須）
                <span class="error"><?php echo h( $error_body ); ?></span>
              </label>
              <span id="count"> </span>/1000<br>
              <textarea class="form-control validate max1000 required inputarea" id="body" name="body" placeholder="お問い合わせ内容（1000文字まで）をお書きください" rows="3"><?php echo h($body); ?></textarea>
            </div>
            <div class="buttonarea">
              <button type="submit" class="btn btn-primary">確認画面へ</button>
            </div>
            <!--確認ページへトークンをPOSTする、隠しフィールド「ticket」-->
            <input type="hidden" name="ticket" value="<?php echo h($ticket); ?>">
          </form>
        </div>
      </div>


      <!-- Footer -->
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
