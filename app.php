<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8" />
    <!-- LazyLoad --><script src="https://cdn.jsdelivr.net/npm/lazyload@2.0.0-rc.2/lazyload.min.js"></script>
    <meta name=“google-site-verification” content=“NOlXD9YuxOMrQEjZAWUj0nWV3-V7uhnucc3vL12XGks” />
    <!-- <script src="https://unpkg.com/glottologist"></script> -->
	<link rel="icon" type="image/ico" sizes="64x64" href="img/favicon.ico">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#"></head>
    <title>Famiee</title>
    <meta property="og:type" content="website" />
    <meta property="og:image" content="https://www.famiee.com/img/sns_balloon.jpg">
    <meta property="og:url" content="https://www.famiee.com/" />
    <meta property="og:title" content="Famiee Project" />
    <meta property="og:description" content="「Famiee」プロジェクトは、LGBTカップルや事実婚カップル等、法的には婚姻関係と認められない多様な家族形態の人たちが、住んでいる地区に関わらず家族関係を証明することができるよう、ブロックチェーン技術を用いたパートナーシップ証明書の発行を目指します。さらに、多様な家族形態の人たちが等しく民間企業の家族向けサービスを受けることができるよう、パートナーシップ証明書を採用する民間企業を増やすための啓蒙活動を行い、これらの活動によって多様な家族形態が当たり前のように認められる社会の実現を目指します。" />

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="description" content="「Famiee」プロジェクトは、LGBTカップルや事実婚カップル等、法的には婚姻関係と認められない多様な家族形態の人たちが、住んでいる地区に関わらず家族関係を証明することができるよう、ブロックチェーン技術を用いたパートナーシップ証明書の発行を目指します。さらに、多様な家族形態の人たちが等しく民間企業の家族向けサービスを受けることができるよう、パートナーシップ証明書を採用する民間企業を増やすための啓蒙活動を行い、これらの活動によって多様な家族形態が当たり前のように認められる社会の実現を目指します。">

    <link rel="stylesheet" href="swiper/swiper.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/gaia.css" rel="stylesheet"/>

    <!--OPG Facebook Twitter-->
    <meta property="fb:app_id" content="1320921668046539" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@FamieeP" />


    <!--     Fonts and icons     -->
    <link href='https://fonts.googleapis.com/css?family=Cambo|Poppins:400,600' rel='stylesheet' type='text/css'>
    <!-- <link href="https://fonts.googleapis.com/css?family=Noto+Serif+JP:200,300,400,500,600,700,900&display=swap&subset=japanese" rel="stylesheet"> -->
        <link href="https://fonts.googleapis.com/css?family=Noto+Serif+JP:400&display=swap&subset=japanese" rel="stylesheet">
    <!-- <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet"> -->
    <link href="css/fonts/pe-icon-7-stroke.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/5ab280140a.js" crossorigin="anonymous"></script>


    <!-- JavaScript -->
      <!--   core js files    -->
      <script src="js/jquery.min.js" type="text/javascript"></script>
      <script src="js/bootstrap.min.js" type="text/javascript"></script>

      <!--  js library for devices recognition -->
      <script type="text/javascript" src="js/modernizr.js"></script>

      <!--  script for google maps   -->
      <!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script> -->

      <!--   file where we handle all the script from the Gaia - Bootstrap Template   -->
      <script type="text/javascript" src="js/gaia.js"></script>

      <!--   additional js files    -->
      <script type="text/javascript" src="js/additional.js"></script>
      <script src="swiper/swiper.min.js"></script>


      <!-- Language -->
      <link rel="alternate" hreflang="ja" href="https://www.famiee.com/">
      <link rel="alternate" hreflang="en" href="https://www.famiee.com/en.html">
      <link rel="alternate" hreflang="x-default" href="https://www.famiee.com/en.html">
</head>

<body>

<!-- ローディング -->
<div class="loading-bg">
 <div class="loading-title">
  <p>LOADING</p>
  <div class="loader"></div>
 </div>
</div>

<!-- ナビゲーションバー -->
<nav class="navbar navbar-default navbar-transparent navbar-fixed-top" color-on-scroll="200">
    <!-- if you want to keep the navbar hidden you can add this class to the navbar "navbar-burger"-->
    <div class="container">
        <div class="navbar-header">
            <button id="menu-toggle" type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar bar1"></span>
                <span class="icon-bar bar2"></span>
                <span class="icon-bar bar3"></span>
            </button>
            <a href="./" class="navbar-brand">
                Famiee Project
            </a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right navbar-uppercase">
              <li>
                <a href="./">Top</a>
              </li>
              <li class="dropdown">
                  <a href="#gaia" class="dropdown-toggle" data-toggle="dropdown">
                      MATERIAL
                  </a>
                  <ul class="dropdown-menu dropdown-danger">
                      <li>
                          <a href="./project">PROJECT</a>
                      </li>
                      <li>
                          <a href="./services">SERVICES</a>
                      </li>
                      <li>
                          <a href="./forCompany">FOR COMPANY</a>
                      </li>
                  </ul>
              </li>
              <li>
                <a href="./privacypolicy">Privacy Policy</a>
              </li>
              <li class="dropdown">
                  <a href="#gaia" class="dropdown-toggle" data-toggle="dropdown">
                      <!-- <i class="fa fa-share-alt"></i>  -->
                      Post on SNS
                  </a>
                  <ul class="dropdown-menu dropdown-danger">
                      <li>
                          <a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.famiee.com%2F&amp;src=sdkpreparse" target="_blank"><i class="fa fa-facebook-square"></i> Facebook</a>
                      </li>
                      <li>
                          <a href="https://twitter.com/share?url=https://www.famiee.com/&text=Famieeプロジェクト" target="_blank"><i class="fa fa-twitter"></i> Twitter</a>
                      </li>
                  </ul>
              </li>

            <!-- /////Language Link///// -->
                <!-- <li class="dropdown">
                    <a href="#gaia" class="dropdown-toggle" data-toggle="dropdown">
                        Language
                    </a>
                    <ul class="dropdown-menu dropdown-danger">
                        <li>
                            <a href="./en.html">ENGLISH</a>
                        </li>
                        <li>
                            <a href="./index.html">JAPANESE</a>
                        </li>
                    </ul>
                </li> -->

              <li>
                  <a href="https://forms.gle/yQdkwVT61gdUBWEr6" target="_blank" glot-model="contact">contact</a>
              </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
</nav>


<!-- Top Section -->
    <div class="section section-header">
        <div class="parallax filter filter-color-gray">
        <!-- <div class="parallax filter filter-gradient-rainbow"> -->
          <div class="image top-image2" style="background-image: url('img/app_background.png')"></div>
            <div class="container relative">
                <div class="content">
                    <div class="title-area">
                      <img src="img/title.png" class="title-logo"></img>
                      <h3 class="tagline" style="margin-top:60px;"><strong>アプリで完結する<br class="br-sp">パートナーシップ証明</strong></h3>
                    </div>
                </div>
                <div class="scrollbutton">
                  <div class="pleaseScroll">SCROLL</div>
                </div>
            </div>
        </div>
    </div>


<!-- Intro section -->
<div class="section">
  <div class="container flex">

        <div class="side-section">
          <h2 class="catch-copy fadein"><span class="decorate">政府や自治体によらない　</span><br><span class="decorate">民間発行のパートナーシップ証明　</span></h2>
          <p class="description">
            Famieeアプリを使うことで、一般社団法人Famieeが発行するパートナーシップ証明書を申請・利用することができます。既存の婚姻関係や自治体のパートナーシップ制度と異なり、住んでいる地域や自治体に関わらず同性間でのパートナーシップを証明することができます。また、申請はアプリ内で完結します。
          </p>
        </div>

        <div class="side-section">
          <div><img class="lazyload" loading="lazy" alt="..." src="img/famiee_system.png"  style="width:100%;"></div>
        </div>

  </div>
</div>

<!-- Feature section -->
<div class="section section-feature">
  <div class="container">
    <h2 class="catch-copy fadein"><span class="decorate">６つの特徴　　</h2>
    <!-- <div class="flex" style="align-items:center;">
      <div class="side-section">
      </div>
      <div class="side-section">
        <h2 class="catch-copy fadein"><span class="decorate">６つの特徴　　</h2>
      </div>
    </div> -->
    <div class="flex" style="align-items:center;">
        <div class="side-section icon-box" style="padding:0">
          <div class="just-flex">
            <div class="feature-icon"><i class="fas fa-globe"></i></div>
            <div class="feature-icon"><i class="fas fa-truck"></i></div>
            <div class="feature-icon"><i class="fas fa-mobile-alt"></i></div>
          </div>
        </div>
        <div class="side-section icon-box" style="padding:0">
          <div  class="just-flex">
            <div class="feature-icon"><i class="fas fa-wifi"></i></div>
            <div class="feature-icon"><i class="fas fa-user-shield"></i></div>
            <div class="feature-icon"><i class="fas fa-city"></i></div>
          </div>
        </div>
      </div>


    <div class="flex" style="margin-top:40px">
          <!-- <h2 class="catch-copy fadein"><span class="decorate">６つの特徴　　</h2> -->
          <p class="description side-section" style="margin-bottom:0">
            <strong>1. 居住場所によらず申請可能</strong>　<i class="fas fa-globe"></i><br>
            行政発行のパートナーシップ証明書と事なり、全国のどこに住んでいる同性パートナーでも申請できます。<br><br>
            <strong>2. 引っ越しても使える</strong>　<i class="fas fa-truck"></i><br>
            行政発行のパートナーシップ証明書と事なり、お住いの市区町村から外に引っ越しをしても、そのままお使いいただけます。<br><br>
            <strong>3. アプリでいつでも証明可能</strong>　<i class="fas fa-mobile-alt"></i><br>
            証明書は、スマホのアプリ上にも保存されるので、医療現場などで緊急時のときでも、すぐにお二人の関係を証明できます。（紙での出力も可能性）<br><br>
          </p>
          <p class="description side-section">
            <strong>4. オンラインで完結</strong>　<i class="fas fa-wifi"></i><br>
            オンラインで申請・取得ができるので、申請時にお二人で出向くことで、第三者に関係が見られる心配がありません。<br><br>
            <strong>5. 個人情報の保護</strong>　<i class="fas fa-user-shield"></i><br>
            サーバ上にお二人の個人情報は一切保存されないので*、お二人の関係が万が一にも、Famieeから漏れることはありません。<br>
            <small>*申請情報や提出書類は、申請から証明書発行までに数日間のみ、Famiee及び本人確認書類確認委託機関のサーバに保存されますが、証明書発行と同時に、削除されます。</small><br><br>
            <strong>6. 増える利用可能企業</strong>　<i class="fas fa-city"></i><br>
            企業内での福利厚生・医療・住宅・生命保険など、利用可能なシーンが常に追加されていきます。
          </p>
      </div>

  </div>
</div>

<!-- Icon section -->
<div class="section">
  <div class="container">
    <h3 class="two-lines" style="text-align:center; font-family:sans-serif;">導入企業例*</h3>
    <!-- row1 -->
    <div class="flex" style="align-items:center;">
          <div class="just-flex"  style="align-items:center;">
            <div class="company-logo">
              <img class="lazyload" loading="lazy" alt="..." src="img/faces/istyle_logo.jpg"/>
            </div>
            <div class="company-logo">
              <img class="lazyload" loading="lazy" alt="..." src="img/faces/jobrainbow_for_white.png"/>
            </div>
            <div class="company-logo">
              <img class="lazyload" loading="lazy" alt="..." src="img/faces/mizuho.jpg"/>
            </div>
          </div>
          <div class="just-flex"  style="align-items:center;">
            <div class="company-logo">
              <img class="lazyload" loading="lazy" alt="..." src="img/faces/netyear.png"/>
            </div>
            <div class="company-logo">
              <img class="lazyload" loading="lazy" alt="..." src="img/faces/hottolink_logo_L.png"/>
            </div>
            <div class="company-logo">
              <img class="lazyload" loading="lazy" alt="..." src="img/faces/IBJ_logo.png"/>
            </div>
          </div>
      </div>

      <!-- row2 -->
      <div class="flex" style="align-items:center;">
            <div class="just-flex"  style="align-items:center;">
              <div class="company-logo">
                <img class="lazyload" loading="lazy" alt="..." src="img/faces/medicalnet_logo.jpg"/>
              </div>
              <div class="company-logo">
                <img class="lazyload" loading="lazy" alt="..." src="img/faces/raksul_logo.png"/>
              </div>
              <div class="company-logo">
                <img class="lazyload" loading="lazy" alt="..." src="img/faces/fureasu_logo.png"/>
              </div>
            </div>
            <div class="just-flex"  style="align-items:center;">
              <div class="company-logo">
                <img class="lazyload" loading="lazy" alt="..." src="img/faces/sompojapan_logo.png"/>
              </div>
              <div class="company-logo">
                <img class="lazyload" loading="lazy" alt="..." src="img/faces/MG_vrt.svg"/>
              </div>
              <div class="company-logo">
                <img class="lazyload" loading="lazy" alt="..." src="img/faces/v-cube.png"/>
              </div>
            </div>
        </div>

        <!-- row3 -->
        <div class="flex" style="align-items:center;">
              <div class="just-flex"  style="align-items:center;">
                <div style="width:25%" class="company-logo">
                  <img class="lazyload" loading="lazy" alt="..." src="img/faces/brainpad.jpg"/>
                </div>
                <div class="company-logo">
                  <img class="lazyload" loading="lazy" alt="..." src="img/faces/miraisouzou.png"/>
                </div>
                <div class="company-logo">
                  <img class="lazyload" loading="lazy" alt="..." src="img/faces/Asteria.png"/>
                </div>
              </div>
              <div class="just-flex"  style="align-items:center;">
                <div class="company-logo">
                  <img class="lazyload" loading="lazy" alt="..." src="img/faces/lifull.png"/>
                </div>
                <div class="company-logo">
                  <img class="lazyload" loading="lazy" alt="..." src="img/faces/rease_logo.jpg"/>
                </div>
                <div class="company-logo">
                  <img class="lazyload" loading="lazy" alt="..." src="img/faces/randc_logo.jpg"/>
                </div>
              </div>
          </div>

          <!-- row4 -->
          <div class="flex" style="align-items:center;">
                <div class="just-flex"  style="align-items:center;">
                  <div class="company-logo">
                    <img class="lazyload" loading="lazy" alt="..." src="img/faces/diverse_partners_logo.jpg"/>
                  </div>
                  <div class="company-logo">
                    <img class="lazyload" loading="lazy" alt="..." src="img/faces/partner_logo.jpg"/>
                  </div>
                  <div class="company-logo">
                    <img class="lazyload" loading="lazy" alt="..." src="img/faces/gaiax_logo.png"/>
                  </div>
                </div>
                <div class="just-flex"  style="align-items:center;">
                  <div style="width:40%"  class="company-logo">
                    <img class="lazyload" loading="lazy" alt="..." src="img/faces/sakurug_logo.jpg"/>
                  </div>
                  <div style="width:20%" class="company-logo">
                    <img class="lazyload" loading="lazy" alt="..." src="img/faces/edogawa_logo.png"/>
                  </div>
                  <div style="width:20%" class="company-logo">
                    <img class="lazyload" loading="lazy" alt="..." src="img/faces/adish_logo.jpg"/>
                  </div>
                </div>
            </div>

            <!-- row5 -->
            <div class="flex" style="align-items:center;">
                  <div class="just-flex"  style="align-items:center;">
                    <div class="company-logo">
                      <img class="lazyload" loading="lazy" alt="..." src="img/faces/startia_logo.png"/>
                    </div>
                    <div class="company-logo">
                    </div>
                    <div class="company-logo">
                    </div>
                  </div>
                  <div class="just-flex"  style="align-items:center;">
                  </div>
              </div>

      <p style="text-align:center; font-family:sans-serif; color:gray; margin-top:30px; line-height:1.5;">*掲載されている企業は一部です。<br>また、企業によって証明書を利用できるサービスは異なります</p>
  </div>
</div>


<!-- Flow section -->
<div class="section">
  <div class="container">
    <h2 style="text-align:center; font-family:sans-serif">ご利用の流れ</h2>
    <div class="separator separator-danger">✻</div>

      <ul class="cbp_tmtimeline">
      	<li>
      		<div class="cbp_tmstep">STEP1</div>
      		<div class="cbp_tmicon"></div>
      		<div class="cbp_tmlabel">
      			<h2 class="just-title">まずはアプリをダウンロード！<a href="" class="appstore"><img src="img/appstore.svg"></img></a></h2>
      		</div>
      	</li>
        <li>
      		<div class="cbp_tmstep">STEP2</div>
      		<div class="cbp_tmicon"></div>
      		<div class="cbp_tmlabel">
      			<h2 class="just-title">Apple IDでサインイン</h2>
      		</div>
      	</li>
        <li>
      		<div class="cbp_tmstep">STEP3</div>
      		<div class="cbp_tmicon"></div>
      		<div class="cbp_tmlabel">
      			<h2>本人確認</h2>
            <div class="flex">
              <div class="side-section order2" style="padding:0">
      			    <p>
                  アプリの指示にしたがって、本人確認書類*の撮影と、ご自身の顔の登録をお願いいたします。<br>
                  　ランダムに表示される指示に従った動画を撮影していただくことで、他人の顔写真を用いた不正な申請などを防ぎます。<br><br>
                  <small>*本人確認書類…運転免許証, パスポート, マイナンバーカード, 顔写真付住基カード, 在留カードのうちどれか一つ。</small>
                </p>
              </div>
              <div class="side-section order1">
                <img src="./img/ekycs.png" style="width:100%;">
              </div>
            </div>
      		</div>
      	</li>
        <li>
      		<div class="cbp_tmstep">STEP4</div>
      		<div class="cbp_tmicon"></div>
      		<div class="cbp_tmlabel">
      			<h2>パートナーの招待</h2>
      			<p>本人確認書類の提出が終わると、パートナーを招待するリンクが発行されます。これをメッセージアプリやメールなどでパートナーに送信してください。<br>
            　リンクを受け取ったパートナーは、アプリをダウンロードした状態でリンクを開いていただくと、本人確認書類の登録へ進みます。<br>
            　本人確認書類の確認には数日かかります。確認が終わると、パートナーそれぞれに申請完了の通知が届きます。
            </p>
      		</div>
      	</li>
        <li>
      		<div class="cbp_tmstep">STEP5</div>
      		<div class="cbp_tmicon"></div>
      		<div class="cbp_tmlabel">
      			<h2>サービス利用企業への提出</h2>
            <div class="flex">
              <div class="side-section order2" style="padding:0">
      			    <p>
                  証明書を提出する場合は、証明書のQRコードを提示し、企業側のもつ端末で読みとる必要があります。<br><br>
                  <small>QRコードの表示はアプリ上の画面においても可能ですが、ご利用になられるサービスによっては、証明書を印刷して提出する必要がある場合がございます。事前にサービスの提供企業にご確認をとるようお願いします。</small>
                </p>
              </div>
              <div class="side-section order1">
                <img src="./img/certificate.png" style="width:100%;">
              </div>
            </div>
      		</div>
      	</li>

      </ul>

  </div>
</div>


<!-- Q&A section -->
<div class="section">
  <div class="container">
    <h2 style="text-align:center; font-family:sans-serif">よくある質問</h2>
    <div class="separator separator-danger">✻</div>
    <input id="acd-check1" class="acd-check" type="checkbox">
    <label class="acd-label" for="acd-check1">登録した情報や個人情報はどのように扱われますか？</label>
    <div class="acd-content">
        <p class="description">
          ・ご入力・ご提出いただいたユーザーの登録情報は、本人確認及び独身確認のためにFamieeが提携する「eKYC」（オンライン本人確認）事業者である株式会社TrustDock（以下、「TrustDock」といいます）に提供します。本アプリに、TrustDockのモジュールを組み込むことで、ユーザーは、登録情報を直接、TrustDockに提供します。これは、本アプリの信用を保つために必要な手続きとなります。ご了承ください。<br><br>
          ・TrustDockにおける個人情報の取り扱いは、TrustDockのプライバシーポリシーに基づきます。TrustDockのプライバシーポリシーは<a href="https://biz.trustdock.io/company/privacy" target="_blank">こちら</a>です。<br><br>
          ・ご入力いただいたユーザーの申請情報、パートナーの方の申請情報及びユーザーとパートナーとのパートナーシップ関係に関する情報（以下、「入力情報」といいます）は、非可逆符号化（以下、「単に符号化」といいます）のうえブロックチェーンに登録します（以下、「符号化後情報」といいます）。登録した情報は、戸籍同様、ブロックチェーン上に履歴として残り、削除することはできません。申請情報の変更やパートナーシップ関係の解消の際は、追加で情報を書き込みます。<br><br>
          ・TrustDockの本人確認が終了し入力情報を符号化しブロックチェーンに登録した後、入力情報をFamieeのサーバーから削除いたします。これは、登録ユーザーのプライバシーを保護するためです。<br><br>
          ・符号化後情報は、ブロックチェーン上に残り続けます。本アプリに「パートナーシップ関係」が登録されているか否かを確認する際は、符号化後情報を用います。<br><br>
          ・ユーザーIDのみ、Famieeのサーバーで保管いたします。
        </p>
    </div>

    <input id="acd-check2" class="acd-check" type="checkbox">
    <label class="acd-label" for="acd-check2">証明書に有効期限はありますか？</label>
    <div class="acd-content">
        <p class="description">証明書を発行してから一年後に、アプリを通じてパートナーそれぞれに対して関係継続確認がされます。継続が確認されなかった場合、確認されるまで証明書は無効になります。</p>
    </div>

    <input id="acd-check3" class="acd-check" type="checkbox">
    <label class="acd-label" for="acd-check3">一般社団法人Famieeが解散した場合はどのようになりますか？</label>
    <div class="acd-content">
        <p class="description">
          (1)新規のパートナーシップ証明書の受付はできなくなります。<br>
          (2)既に発行した証明書における二人の関係継続確認、住所変更、氏名変更（eg. 性別変更に伴う戸籍上の氏名を変更するような場合に相当）はできなくなります。
        </p>
    </div>

    <input id="acd-check4" class="acd-check" type="checkbox">
    <label class="acd-label" for="acd-check4">パートナーシップを解消した場合はどのようにすればいいですか？</label>
    <div class="acd-content">
        <p class="description">
          パートナーシップ関係を解消した登録ユーザーは、本アプリ上にて、パートナーシップ解消のお手続きを行うようお願いいたします。<br>
          パートナーシップ解消の際は、登録ユーザーのパートナーの同意が必要となりますので、Famieeから登録ユーザーのパートナーに対して、同意の有無を確認させていただいた上で、本アプリ上でパートナーシップ解消の登録をいたします。
        </p>
    </div>

    <input id="acd-check5" class="acd-check" type="checkbox">
    <label class="acd-label" for="acd-check5">証明書の申請後にアプリをアンインストールした場合や、端末を紛失した場合、証明書の再発行はできますか？</label>
    <div class="acd-content">
        <p class="description">
          ああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああ
        </p>
    </div>

    <h5 style="text-align:center; font-family:sans-serif; margin:20px 0;">より詳しい仕様はこちら</h5>
    <div class="just-flex" style="max-width:400px; margin:auto;">
      <div>
          <a href="#" target="_blank" class="link">利用ルール</a>
      </div>
      <div>
          <a href="#" target="_blank" class="link">プライバシーポリシー</a>
      </div>
    </div>
  </div>
</div>

<!-- End Q&A section -->

<!-- News Section -->
    <div class="section section-news" id="news">
        <div class="container">
            <div class="row">
                  <h2 style="text-align:center; font-family:sans-serif">Information</h2>
                  <div class="separator separator-danger">✻</div>
                <h3 class="note-title" style="margin:0;">
                  <a href="https://note.com/famiee"><img src="./img/thumnail/note.png"></a>
                  <!-- <p>記事をみるにはサムネイルをクリックしてください</p> -->
                </h3>
                    <!-- Slider main container -->
                    <div class="swiper-wrap" style="margin-bottom:50px;">
                      <div class="swiper-container">
                          <div class="swiper-wrapper">
                              <!-- Slides -->
                              <div class="swiper-slide">
                                <a href="https://note.com/famiee/n/n5729f389410a">
                                  <img alt="..." src="img/thumnail/note_hoshi.png"/>
                                </a>
                              </div>
                              <div class="swiper-slide">
                                <a href="https://note.com/famiee/n/n33c8d69f8601">
                                  <img alt="..." src="img/thumnail/note_sugiyama.jpeg"/>
                                </a>
                              </div>
                              <div class="swiper-slide">
                                <a href="https://note.com/famiee/n/n5af81a4bce47">
                                  <img alt="..." src="img/thumnail/note_shimoyamada.png"/>
                                </a>
                              </div>
                              <!-- <div class="swiper-slide">
                                <a href="https://note.com/famiee/n/n9382687b775b">
                                  <img alt="..." src="img/thumnail/note_famiee.jpeg"/>
                                </a>
                                <p>「Famiee」プロジェクト始動と東京レインボープライド2019での 「カップル宣誓書発行サービス」展示のお知らせ</p>
                              </div>
                              <div class="swiper-slide">
                                <a href="https://note.com/famiee/n/n661b5a101caf">
                                  <img alt="..." src="img/thumnail/note_press.jpg"/>
                                </a>
                                <p>Famiee Project サイト公開しました！</p>
                              </div> -->
                          </div>
                          <!-- If we need pagination -->
                          <div class="swiper-pagination swiper-pagination-white"></div>
                      </div>
                      <!-- If we need navigation buttons -->
                      <div class="swiper-button-prev"></div>
                      <div class="swiper-button-next"></div>
                    </div>

                <ul class="msr_newslist01">
                  <li>
                    <a href="./documents/20200720pr.pdf" target="_blank">
                      <div class="clearfix">
                        <div class="item1">
                        <time datetime="2020-7-20">2020.07.20</time>
                        <div class="news">PR</div>
                        </div>
                        <div class="item2">
                        <div class="pr-text">「news zero」にパートナーとして出演しているクリエイティブディレクター辻愛沙子氏が、Famieeのアドバイザーに就任</div>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="https://note.com/famiee/n/n5729f389410a" target="_blank">
                      <div class="clearfix">
                        <div class="item1">
                        <time datetime="2020-7-18">2020.07.18</time>
                        <div class="pr">info</div>
                        </div>
                        <div class="item2">
                        <div class="pr-text">Famiee取材シリーズを更新しました。</div>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="./documents/0427release.pdf" target="_blank">
                      <div class="clearfix">
                        <div class="item1">
                        <time datetime="2020-4-27">2020.04.27</time>
                        <div class="pr">PR</div>
                        </div>
                        <div class="item2">
                        <div class="pr-text">みずほフィナンシャルグループなど17社が、同性カップル向け「パートナーシップ証明書」を企業内手続きに利用へ</div>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="https://drive.google.com/open?id=1-30u1z-pWRo-hwx83cTjGgA0rPejZhY1" target="_blank">
                      <div class="clearfix">
                        <div class="item1">
                        <time datetime="2020-4-27">2019.09.17</time>
                        <div class="pr">PR</div>
                        </div>
                        <div class="item2">
                        <div class="pr-text">民間によるパートナーシップ証明書検討委員会への参加公募のお知らせ</div>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="https://prtimes.jp/main/html/rd/p/000000002.000047881.html" target="_blank">
                      <div class="clearfix">
                        <div class="item1">
                        <time datetime="2019-9-2">2019.09.02</time>
                        <div class="pr">PR</div>
                        </div>
                        <div class="item2">
                        <div class="pr-text" glot-model="fukushimaNews" >福島良典氏が一般社団法人Famieeの技術アドバイザーに就任</div>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="https://prtimes.jp/main/html/rd/p/000000001.000047881.html" target="_blank">
                      <div class="clearfix">
                        <div class="item1">
                        <time datetime="2019-8-21">2019.08.21</time>
                        <div class="pr">PR</div>
                        </div>
                        <div class="item2">
                        <div class="pr-text" glot-model="establishNews" >「多様な家族形態が当たり前のように認められる社会の実現を目指して」一般社団法人Famiee設立のお知らせ</div>
                        </div>
                      </div>
                    </a>
                  </li>
                </ul>

              </div>



        </div>
    </div>
<!-- End News Section -->


<!-- Contact Section -->
    <div class="section section-small section-get-started">
        <div class="parallax filter">
            <div class="image"
                style="background-image: url('img/balloon_footer.jpg')">
            </div>
            <div class="container">
                <div class="title-area">
                    <p class="description">一般社団法人Famieeや証明書に関する詳しい説明・導入をご検討中の企業様向けの説明などはプロジェクトのページへどうぞ。</p>
                </div>

                <div>
                    <a href="index.html" target="_blank" class="btn-line">Famieeプロジェクトページ
                    </a>
                </div>
            </div>
        </div>
    </div>
<!-- End Contact Section -->

<!-- footer -->
    <footer class="footer footer-big footer-color-black" data-color="black">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-sm-3">
                    <div class="info">
                        <h5 class="title">Menu</h5>
                        <nav>
                            <ul>
                                <li>
                                    <a href="./">Top</a>
                                </li>
                                <li>
                                    <a href="./project">Project</a>
                                </li>
                                <li>
                                    <a href="./services">Services</a>
                                </li>
                                <li>
                                    <a href="./forCompany">For Company</a>
                                </li>
                                <li>
                                    <a href="./privacypolicy">Privacy Policy</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-md-3 col-md-offset-1 col-sm-3">
                    <div class="info">
                        <h5 class="title"> Help and Support</h5>
                         <nav>
                            <ul>
                                <li>
                                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSdkd6T2Gp3D9m0NXIYa4utQ7_cxBVkTNLZsO7O-oEeWKMiGRg/viewform">Contact Us</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3">
                    <div class="info">
                        <h5 class="title">Latest News</h5>
                        <nav>
                            <ul>
                                <li>
                                  <a href="https://www.famiee.com#news">News List</a>
                                  <!-- newslist.jsで生成 -->
                                  <script src="./js/newslist.js"></script>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-md-2 col-md-offset-1 col-sm-3">
                    <div class="info">
                        <h5 class="title">Follow us on</h5>
                        <nav>
                            <ul>
                                <li>
                                    <a href="https://twitter.com/FamieeP"  class="btn btn-social btn-twitter btn-simple">
                                        <i class="fa fa-twitter"></i> Twitter
                                    </a>
                                </li>
                                <a class="twitter-timeline" data-lang="ja" data-width="350" data-height="300" data-theme="light" data-link-color="#981CEB" href="https://twitter.com/FamieeP?ref_src=twsrc%5Etfw">Tweets by FamieeP</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <hr>
            <div class="copyright">
                 © <script> document.write(new Date().getFullYear()) </script> Famiee Project
            </div>
        </div>
    </footer>




<script>
    lazyload();
</script>
</body>

</html>
