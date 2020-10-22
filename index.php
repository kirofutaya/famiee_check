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


    <div class="section section-header">
        <div class="parallax filter">
          <div class="image top-image"
              style="background-image: url('img/balloon.jpg')">
            <!-- <div class="image"
                style="background-image: url('https://user-images.githubusercontent.com/31148191/63639231-d5415480-c6cb-11e9-840b-e4f7def567dd.jpg')"> -->
            </div>
            <div class="container">
                <div class="content">
                    <div class="title-area">
                        <h1 class="title-modern">Famiee Project</h1>
                        <p>Mission</p>
                        <h3 glot-model="mission">多様な家族形態が当たり前のように認められる社会の実現のために</h2>
                        <div class="separator line-separator">♦</div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="section">
        <div class="container">

          <!-- row1 -->
            <div class="row">
                <div class="title-area">
                    <h2 glot-model="service">私達のサービス</h2>
                    <div class="separator separator-danger">✻</div>
                    <p class="description text-left" glot-model="what" >私達は現在の法律上では夫婦・親子と認められない世界中の夫婦・親子が、家族としての当たり前の権利やサービスを受けられない、という課題を解決するために、ブロックチェーン技術を使って家族関係証明書を発行することで、彼ら彼女らが家族であることを社会的に認め、また、その証明書を受け入れる企業・団体を増やし、家族向けのサービスを受けられるようにする活動（※）をしています。</p>
                    <p glot-model="hidden1" class="small text-muted">※・社内での家族向けの福利厚生の対象になる<br class="br-sp">（慶弔休暇、介護休暇、家族手当、etc.）<br>・住宅ローンの際に、夫婦として収入合算して査定される<br>・生命保険の受取人になれる<br>・航空会社のマイルの家族交換サービスの対象に<br>・携帯電話の家族割引の対象に<br>・病院での手術の同意書にサインできる<br>・夫婦用の公営住宅に応募できる　etc</p>
                </div>
            </div>

            <!-- row2 -->
            <!-- <div class="row">
                <div class="col-md-4">
                    <div class="info-icon">
                        <div class="icon text-danger">
                            <i class="pe-7s-global"></i>
                        </div>
                        <h3 glot-model="global" >グローバル</h3>
                        <p class="description text-left" glot-model="Access" >認証された情報は自分たちだけが分かる形で保存され世界中のどこからでもアクセスすることができます。</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info-icon">
                        <div class="icon text-danger">
                            <i class="pe-7s-settings"></i>
                        </div>
                        <h3 glot-model="Blockchain" >ブロックチェーン</h3>
                        <p class="description text-left" glot-model="BlockchainD" >改ざん不可能な形で、夫婦・親子関係の存在を証明します。</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info-icon">
                        <div class="icon text-danger">
                            <i class="pe-7s-user-female"></i>
                        </div>
                        <h3 glot-model="Network">ネットワーク</h3>
                        <p class="description text-left" glot-model="NetworkD">Famieeプロジェクトに参画している世界中の企業・団体で、家族としてのサービスを受けられます。</p>
                    </div>
                </div>
            </div> -->



            <div class="title-area" style="margin-bottom:0">
                <h3>プロジェクトの詳細と<br class="br-sp">証明書のご利用手順</h3>
                <div class="separator separator-danger">✻</div>
            </div>

            <div class="k-tl">
              <a href="./project" class="process">
                <div class="k-tl-marker now"></div>
                <div class="k-tl-area">
                  <div class="k-tl-title active">STEP1 プロジェクトの説明</div>
                  <div class="k-tl-content">
                    <p class="description">プロジェクトの目的や経緯に関する説明を見る。</p>
                  </div>
                </div>
              </a>

              <a href="./services" class="process">
                <div class="k-tl-marker now"></div>
                <div class="k-tl-area">
                  <div class="k-tl-title active">STEP2 証明書の説明</div>
                  <div class="k-tl-content">
                    <p class="description">既存パートナーシップ制度に対する位置付けや技術面に関する説明を見る。</p>
                  </div>
                </div>
              </a>

              <a href="./forCompany" class="process">
                <div class="k-tl-marker now"></div>
                <div class="k-tl-area">
                  <div class="k-tl-title active">STEP3 利用に際してのお願い</div>
                  <div class="k-tl-content">
                    <p class="description">企業様の人事部、商品・サービス企画部の方へのお願いを見る。</p>
                  </div>
                </div>
              </a>

              <a href="https://forms.gle/ib6MmkULt2euknhEA" target="_blank" data-toggle="modal" data-target="#modal_form">
                <div class="k-tl-marker now"></div>
                <div class="k-tl-area">
                  <div class="k-tl-title active">STEP4 賛同＆受入通知の記入</div>
                  <div class="k-tl-content">
                    <p class="description">パートナーシップ証明書に対する賛同＆受入通知をGoogleフォームから一般社団法人Famieeへ送信する。</p>
                  </div>
                </div>
              </a>
            </div>

            <!-- モーダル -->
            <!-- Uchiyama_modal -->
            <div class="modal fade" id="modal_form" tabindex="-1" role="dialog" aria-labelledby="FormLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <!-- <div class="modal-header">
                    <h3 class="modal-title" style="color: black; text-align:center" id="FormLabel">通知</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    </button>
                  </div> -->
                  <div class="modal-body">
                    <!-- <h5 class="small-text" style="color: black">賛同＆受入通知をする前に</h5> -->
                    <p class="description" style="text-align:center">プロジェクトに関する詳しい説明はご覧になりましたか？</p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" onclick="location.href='https://forms.gle/ib6MmkULt2euknhEA'" style="margin-bottom:0">はい</button>
                    <button type="button" class="btn btn-secondary" onclick="location.href='./project'">いいえ</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">戻る</button>
                  </div>
                </div>
              </div>
            </div>






            <!-- <div class="flex" style="margin-top:30px;">
              <a href="./project" class="btn btn-danger btn-fill syomeisyo-btn" style="text-align:center; width:30%; margin: auto">
                  プロジェクトの詳しい説明
              </a>
              <a href="./services" class="btn btn-danger btn-fill syomeisyo-btn" style="text-align:center; width:30%; margin: auto">
                  証明書の詳しい説明
              </a>
              <a href="./forCompany" class="btn btn-danger btn-fill syomeisyo-btn" style="text-align:center; width:30%; margin: auto">
                  企業様向けのお願い
              </a>
              <a href="https://drive.google.com/file/d/1_SXUFI-CeVAkc9pr-s6qnClJCvB10czb/view?usp=sharing" target="_blank" class="btn btn-primary btn-fill syomeisyo-btn" style="text-align:center; width:30%; margin: auto">
                  証明書受け入れご提案書はこちら
              </a>
            </div> -->
        </div>
    </div>



<!-- Accepting Company Section -->
<div class="section section-our-team-freebie">
    <div class="parallax filter filter-color-black">
      <div class="image" style="background-color:#ffe500">
      </div>
        <div class="image" style="background-image:url('img/header2.jpg')">
        </div>
        <div class="container">
            <div class="content">
                <div class="row">
                    <div class="title-area">
                        <h2 glot-model="partner">利用決定企業様</h2>
                        <div class="separator separator-danger">✻</div>
                        <h5 class="subtitle">社内の福利厚生手続き等にFamieeの証明書を<br class="br-sp">ご利用していただく予定です。<br>また企業様によっては社外サービスにおけるご利用もございます。</h5>
                    </div>
                </div>

                <div class="team">

                    <!-- row1 -->
                    <div class="row">
                              <div class="col-md-4">
                                  <div class="card card-member">
                                      <div class="content">
                                          <a href= "https://www.istyle.co.jp/" target="_blank">
                                          <div class="avatar " style="padding:0.7rem 0">
                                              <img class="lazyload" loading="lazy" alt="..." src="img/faces/istyle_logo.jpg"/>
                                          </div>
                                          <div class="description">
                                              <h3 class="title" style="font-size: 1.2rem">株式会社アイスタイル 様</h3>
                                          </div>
                                          </a>
                                      </div>
                                  </div>
                              </div>


                              <div class="col-md-4">
                                  <div class="card card-member">
                                      <div class="content">
                                          <a href= "https://jobrainbow.jp/" target="_blank">
                                          <div style="padding:23.5px 0">
                                              <img class="lazyload" loading="lazy" alt="..." style="width:130px"src="img/faces/jobrainbow_for_white.png"/>
                                          </div>
                                          <div class="description">
                                              <h3 class="title" style="font-size: 1.2rem">株式会社JobRainbow 様</h3>
                                          </div>
                                          </a>
                                      </div>
                                  </div>
                              </div>


                              <div class="col-md-4">
                                  <div class="card card-member">
                                      <div class="content">
                                          <a href= "https://www.mizuho-fg.co.jp/index.html" target="_blank">
                                          <div style="padding:8px 0;">
                                              <img class="lazyload" loading="lazy" alt="..." style="width:150px;"src="img/faces/mizuho.jpg"/>
                                          </div>
                                          <div class="description">
                                            <h3 class="title" style="font-size:1.1rem">株式会社みずほフィナンシャルグループ 様</h3>
                                          </div>
                                          </a>
                                      </div>
                                  </div>
                              </div>
                      </div>

                      <!-- row2 -->
                      <div class="row">
                                <div class="col-md-4">
                                    <div class="card card-member">
                                        <div class="content">
                                            <a href= "https://www.netyear.net/" target="_blank">
                                            <div style="padding:4px 0">
                                                <img class="lazyload" loading="lazy" style="width:120px;" alt="..." src="img/faces/netyear.png"/>
                                            </div>
                                            <div class="description">
                                                <h3 class="title" style="font-size: 1.2rem">ネットイヤーグループ株式会社 様</h3>
                                            </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-4">
                                    <div class="card card-member">
                                        <div class="content">
                                            <a href= "https://www.hottolink.co.jp/" target="_blank">
                                            <div style="padding:14.5px 0">
                                                <img class="lazyload" loading="lazy" alt="..." style="width: 100px" src="img/faces/hottolink_logo_L.png"/>
                                            </div>
                                            <div class="description">
                                                <h3 class="title" style="font-size: 1.2rem">株式会社ホットリンク 様</h3>
                                            </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-4">
                                    <div class="card card-member">
                                        <div class="content">
                                            <a href="https://www.ibjapan.jp/" target="_blank">
                                            <div style="padding:18.4px 0">
                                                <img class="lazyload" loading="lazy" alt="..." style="width: 100px" src="img/faces/IBJ_logo.png"/>
                                            </div>
                                            <div class="description">
                                              <h3 class="title" style="font-size:1.2rem">株式会社IBJ 様</h3>
                                            </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <!-- END row2 -->

                        <!-- row3 -->
                        <div class="row">
                                  <div class="col-md-4">
                                      <div class="card card-member">
                                          <div class="content">
                                              <a href= "https://www.medical-net.com/" target="_blank">
                                              <div>
                                                  <img class="lazyload" loading="lazy" alt="..." style="width:126px" src="img/faces/medicalnet_logo.jpg"/>
                                              </div>
                                              <div class="description">
                                                  <h3 class="title" style="font-size: 1.2rem">株式会社メディカルネット 様</h3>
                                              </div>
                                              </a>
                                          </div>
                                      </div>
                                  </div>


                                  <div class="col-md-4">
                                      <div class="card card-member">
                                          <div class="content">
                                              <a href= "https://raksul.com/" target="_blank">
                                              <div style="padding:33.5px 0">
                                                  <img class="lazyload" loading="lazy" alt="..." style="width:130px" src="img/faces/raksul_logo.png"/>
                                              </div>
                                              <div class="description">
                                                  <h3 class="title" style="font-size: 1.2rem">ラクスル株式会社 様</h3>
                                              </div>
                                              </a>
                                          </div>
                                      </div>
                                  </div>


                                  <div class="col-md-4">
                                      <div class="card card-member">
                                          <div class="content">
                                              <a href="https://fureasu.jp/" target="_blank">
                                              <div style="padding:37px 0">
                                                  <img class="lazyload" loading="lazy" alt="..." style="width:130px" src="img/faces/fureasu_logo.png"/>
                                              </div>
                                              <div class="description">
                                                <h3 class="title" style="font-size:1.2rem">株式会社フレアス 様</h3>
                                              </div>
                                              </a>
                                          </div>
                                      </div>
                                  </div>
                          </div>
                          <!-- END row3 -->

                          <!-- row4 -->
                          <div class="row">
                                    <div class="col-md-4">
                                        <div class="card card-member">
                                            <div class="content">
                                                <a href= "https://www.sompo-japan.co.jp/" target="_blank">
                                                <div style="padding:19.3px 0">
                                                    <img class="lazyload" loading="lazy" alt="..." style="width:170px" src="img/faces/sompojapan_logo.png"/>
                                                </div>
                                                <div class="description">
                                                    <h3 class="title" style="font-size: 1.2rem">損害保険ジャパン株式会社 様</h3>
                                                </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card card-member">
                                            <div class="content">
                                                <a href= "https://www.monexgroup.jp/jp/index.html" target="_blank">
                                                <div>
                                                    <img class="lazyload" loading="lazy" style="width:120px; height:auto;" alt="..." src="img/faces/MG_vrt.svg"/>
                                                </div>
                                                <div class="description">
                                                    <h3 class="title" style="font-size: 1.2rem">マネックスグループ株式会社 様</h3>
                                                </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card card-member">
                                            <div class="content">
                                                <a href= "https://jp.vcube.com/" target="_blank">
                                                <div style="padding:25.9px 0">
                                                    <img class="lazyload" loading="lazy" alt="..." style="width:120px" src="img/faces/v-cube.png"/>
                                                </div>
                                                <div class="description">
                                                    <h3 class="title" style="font-size: 1.2rem">株式会社ブイキューブ 様</h3>
                                                </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                            </div>
                            <!-- END row4 -->

                            <!-- row5 -->
                            <div class="row">
                                      <div class="col-md-4">
                                          <div class="card card-member">
                                              <div class="content">
                                                  <a href= "https://www.brainpad.co.jp/" target="_blank">
                                                  <div style="padding:2.9px 0">
                                                      <img class="lazyload" loading="lazy" alt="..." style="width:90px" src="img/faces/brainpad.jpg"/>
                                                  </div>
                                                  <div class="description">
                                                      <h3 class="title" style="font-size: 1.2rem">株式会社ブレインパッド 様</h3>
                                                  </div>
                                                  </a>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-md-4">
                                          <div class="card card-member">
                                              <div class="content">
                                                  <a href= "http://miraisozo.co.jp/" target="_blank">
                                                  <div style="padding:">
                                                      <img class="lazyload" loading="lazy" alt="..." style="width:115px" src="img/faces/miraisouzou.png"/>
                                                  </div>
                                                  <div class="description">
                                                      <h3 class="title" style="font-size: 1.2rem">株式会社みらい創造機構 様</h3>
                                                  </div>
                                                  </a>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-md-4">
                                          <div class="card card-member">
                                              <div class="content">
                                                  <a href= "https://www.salesforce.com/jp/" target="_blank">
                                                  <div style="padding:">
                                                      <!-- <img class="lazyload" loading="lazy" alt="..." style="width:115px" src="img/faces/"/> -->
                                                  </div>
                                                  <div class="description">
                                                      <h3 class="title" style="font-size: 1.1rem; padding:40.15px 0;">株式会社セールスフォース・ドットコム 様</h3>
                                                  </div>
                                                  </a>
                                              </div>
                                          </div>
                                      </div>

                              </div>
                              <!-- END row5 -->

                              <!-- row6 -->
                              <div class="row">
                                        <div class="col-md-4">
                                            <div class="card card-member">
                                                <div class="content">
                                                    <a href= "https://www.asteria.com/jp/" target="_blank">
                                                    <div style="padding:25px 0">
                                                        <img class="lazyload" loading="lazy" alt="..." style="width:110px" src="img/faces/Asteria.png"/>
                                                    </div>
                                                    <div class="description">
                                                        <h3 class="title" style="font-size: 1.2rem">アステリア株式会社 様</h3>
                                                    </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card card-member">
                                                <div class="content">
                                                    <a href= "https://lifull.com/" target="_blank">
                                                    <div style="padding:17.5px 0">
                                                        <img class="lazyload" loading="lazy" alt="..." style="width:130px" src="img/faces/lifull.png"/>
                                                    </div>
                                                    <div class="description">
                                                        <h3 class="title" style="font-size: 1.2rem">株式会社LIFULL 様</h3>
                                                    </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card card-member">
                                                <div class="content">
                                                    <a href= "https://rease.co.jp/" target="_blank">
                                                    <div style="padding:23.5px 0">
                                                        <img class="lazyload" loading="lazy" alt="..." style="width:120px" src="img/faces/rease_logo.jpg"/>
                                                    </div>
                                                    <div class="description">
                                                        <h3 class="title" style="font-size: 1.2rem">リース株式会社 様</h3>
                                                    </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                </div>
                                <!-- END row6 -->
                                <!-- row7 -->
                                <div class="row">
                                          <div class="col-md-4">
                                              <div class="card card-member">
                                                  <div class="content">
                                                      <a href= "https://www.randcins.jp/" target="_blank">
                                                      <div style="padding:12px 0">
                                                          <img class="lazyload" loading="lazy" alt="..." style="width:120px" src="img/faces/randc_logo.jpg"/>
                                                      </div>
                                                      <div class="description">
                                                          <h3 class="title" style="font-size: 1.2rem">R&C株式会社 様</h3>
                                                      </div>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col-md-4">
                                              <div class="card card-member">
                                                  <div class="content">
                                                      <a>
                                                      <div style="padding:0 0">
                                                          <img class="lazyload" loading="lazy" alt="..." style="width:120px" src="img/faces/diverse_partners_logo.jpg"/>
                                                      </div>
                                                      <div class="description">
                                                          <h3 class="title" style="font-size: 1.2rem; margin:0">株式会社ダイバースパートナーズ 様</h3>
                                                      </div>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col-md-4">
                                              <div class="card card-member">
                                                  <div class="content">
                                                      <a href= "https://partner-kyosai.org/" target="_blank">
                                                      <div style="padding:34px 0">
                                                          <img class="lazyload" loading="lazy" alt="..." style="width:150px" src="img/faces/partner_logo.jpg"/>
                                                      </div>
                                                      <div class="description">
                                                          <h3 class="title" style="font-size: 1.2rem">パートナー共済 様</h3>
                                                      </div>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>

                                  </div>
                                  <!-- END row7 -->
                                  <!-- row8 -->
                                  <div class="row">
                                            <div class="col-md-4">
                                                <div class="card card-member">
                                                    <div class="content">
                                                        <a href= "https://www.gaiax.co.jp/" target="_blank">
                                                        <div style="padding:39px 0">
                                                            <img class="lazyload" loading="lazy" alt="..." style="width:120px" src="img/faces/gaiax_logo.png"/>
                                                        </div>
                                                        <div class="description">
                                                            <h3 class="title" style="font-size: 1.2rem">株式会社ガイアックス 様</h3>
                                                        </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="card card-member">
                                                    <div class="content">
                                                        <a href= "https://sakurug.co.jp/" target="_blank">
                                                        <div>
                                                            <img class="lazyload" loading="lazy" alt="..." style="width:180px" src="img/faces/sakurug_logo.jpg"/>
                                                        </div>
                                                        <div class="description">
                                                            <h3 class="title" style="font-size: 1.2rem">株式会社SAKURUG 様</h3>
                                                        </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="card card-member">
                                                    <div class="content">
                                                        <a href= "https://www.edogawa.or.jp/" target="_blank">
                                                        <div style="padding:14.2px 0;">
                                                            <img class="lazyload" loading="lazy" alt="..." style="width:90px" src="img/faces/edogawa_logo.png"/>
                                                        </div>
                                                        <div class="description">
                                                            <h3 class="title" style="font-size: 1.2rem">江戸川病院 様</h3>
                                                        </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>


                                    </div>
                                    <!-- END row8 -->
                                    <!-- row9 -->
                                    <div class="row">
                                              <div class="col-md-4">
                                                  <div class="card card-member">
                                                      <div class="content">
                                                          <a href= "https://www.adish.co.jp/" target="_blank">
                                                          <div>
                                                              <img class="lazyload" loading="lazy" alt="..." style="width:70px" src="img/faces/adish_logo.jpg"/>
                                                          </div>
                                                          <div class="description">
                                                              <h3 class="title" style="font-size: 1.2rem">アディッシュ株式会社 様</h3>
                                                          </div>
                                                          </a>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="col-md-4">
                                                  <div class="card card-member">
                                                      <div class="content">
                                                          <a href= "https://www.startiaholdings.com/" target="_blank">
                                                          <div style="padding:34px 0;">
                                                              <img class="lazyload" loading="lazy" alt="..." style="width:140px" src="img/faces/startia_logo.png"/>
                                                          </div>
                                                          <div class="description">
                                                              <h3 class="title" style="font-size: 1.1rem">スターティアホールディングス株式会社 様</h3>
                                                          </div>
                                                          </a>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="col-md-4">
                                                  <div class="card card-member">
                                                      <div class="content">
                                                          <a href= "https://www.sophiamedi.co.jp/" target="_blank">
                                                          <div style="padding:31.5px 0;">
                                                              <img class="lazyload" loading="lazy" alt="..." style="width:140px" src="img/faces/sophiamedi_logo.jpg"/>
                                                          </div>
                                                          <div class="description">
                                                              <h3 class="title" style="font-size:1.2rem;">ソフィアメディ株式会社　様</h3>
                                                          </div>
                                                          </a>
                                                      </div>
                                                  </div>
                                              </div>
                                      </div>
                                      <!-- END row9 -->

                                      <!-- row10 -->
                                      <div class="row">
                                                <div class="col-md-4">
                                                    <div class="card card-member">
                                                        <div class="content">
                                                            <a href= "https://prtimes.co.jp/" target="_blank">
                                                            <div style="padding:30px 0">
                                                                <img class="lazyload" loading="lazy" alt="..." style="width:120px;" src="img/faces/prtimes_logo.png"/>
                                                            </div>
                                                            <div class="description">
                                                                <h3 class="title" style="font-size: 1.2rem">株式会社PR TIMES　様</h3>
                                                            </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="card card-member">
                                                        <div class="content">
                                                            <a href= "https://elementsinc.jp/" target="_blank">
                                                            <div style="padding:30px 0">
                                                                <img class="lazyload" loading="lazy" alt="..." style="width:120px;" src="img/faces/elements_logo.png"/>
                                                            </div>
                                                            <div class="description">
                                                                <h3 class="title" style="font-size: 1.2rem">株式会社ELEMENTS　様</h3>
                                                            </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="card card-member">
                                                        <div class="content">
                                                            <a href= "https://www.advancer.co.jp/" target="_blank">
                                                            <div style="padding:27.4px 0">
                                                                <img class="lazyload" loading="lazy" alt="..." style="width:120px;" src="img/faces/advancer_logo.png"/>
                                                            </div>
                                                            <div class="description">
                                                                <h3 class="title" style="font-size: 1.2rem">アドバンサー株式会社　様</h3>
                                                            </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>


                                        <!-- END row10 -->
                                        <!-- row11 -->
                                        <div class="row">
                                                  <div class="col-md-4">
                                                      <div class="card card-member">
                                                          <div class="content">
                                                              <a href= "https://d-pops.co.jp/" target="_blank">
                                                              <div style="padding:30px 0">
                                                                  <img class="lazyload" loading="lazy" alt="..." style="width:140px;" src="img/faces/dpop_logo.jpg"/>
                                                              </div>
                                                              <div class="description">
                                                                  <h3 class="title" style="font-size: 1.2rem">株式会社ディ・ポップス 様</h3>
                                                              </div>
                                                              </a>
                                                          </div>
                                                      </div>
                                                  </div>
                                          </div>


                                          <!-- END row11 -->




                </div>
            </div>
        </div>
    </div>
</div>

<!-- END Accepting Company Section -->

<!-- News Section -->
    <div class="section section-news" id="news">
        <div class="container">
            <div class="row">
                <div class="title-area">
                  <h2 glot-model="News" >最新ニュース</h2>
                  <div class="separator separator-danger">✻</div>
                </div>

                <ul class="msr_newslist01">
                  <li>
                    <a>
                      <div class="clearfix">
                        <div class="item1">
                        <time datetime="2020-8-7">2020.08.07</time>
                        <div class="news">Info</div>
                        </div>
                        <div class="item2">
                        <div class="pr-text">導入決定企業が30社を越えました！</div>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="./documents/20200720pr.pdf" target="_blank">
                      <div class="clearfix">
                        <div class="item1">
                        <time datetime="2020-7-20">2020.07.20</time>
                        <div class="pr">PR</div>
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
                        <div class="news">Info</div>
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

              <h3 class="note-title">
                <a href="https://note.com/famiee"><img src="./img/thumnail/note.png"></a>
                <!-- <p>記事をみるにはサムネイルをクリックしてください</p> -->
              </h3>
                  <!-- Slider main container -->
                  <div class="swiper-wrap">
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

        </div>
    </div>
<!-- End News Section -->


<!-- One Word Section -->
    <div class="section section-our-clients-freebie">
        <div class="container">
            <div class="title-area">
                <h5 class="subtitle text-gray" glot-model="think">想い</h5>
                <h2 glot-model="OneWord" >発起人から一言</h2>
                <div class="separator separator-danger">∎</div>
            </div>

            <ul class="nav nav-text" role="tablist">
                <li>
                        <div class="image-clients">
                            <img loading="lazy" alt="..." class="img-circle lazyload" src="img/faces/uchiyama.jpg"/>
                        </div>
                </li>
            </ul>


            <div class="nav nav-text">
                <div class="tab-pane" id="testimonial3">
                    <p class="description text-left" glot-model="Word" > 「家族」という概念は、近年、とても多様化してきています。LGBTのカップル、事実婚のカップル、精子・卵子提供を受けてできた親子、代理母の協力でできた親子、互いに支え合って生活するシングルマザー同士など、従来の概念での「夫婦」「親子」「家族」に当てはまらない新しいカタチの家族の形態が生まれてきています。
                        しかし、従来の家族の概念に基づいて作られた社会制度の中で、新しい概念に基づき生きる人達は、多くの困難に直面しています。

                        国の法律や社会通念をいきなり変えるのはできません。しかし、そのような変化を受容し、社会がそれに対応していくべきであるという先進的な考えを持つ個人、民間の企業・団体、そして行政機関が、それぞれの力の及ぶ範囲の中で変化を起こせる部分はあるはずです。そして、そのような小さな変化が積み重なって初めて、新しい社会通念ができ、国の法律が変わっていくのだと思います。そう、「行動する事」が大事なのです。

                        多様な家族形態が当たり前に認められる社会が少しでも早く実現できるよう、皆様お一人お一人が、このプロジェクトの活動に賛同し、一緒に行動していただけると幸いです。</p>
                    <p class="description" glot-model="Uchiyama" >内山幸樹</p>
                </div>
            </div>

        </div>
    </div>
<!-- End of One Word Section -->


<!-- Members Section -->
    <div class="section section-our-team-freebie">
      <div class="parallax filter filter-color-black">
          <div class="image" style="background-color:#ffe500">
          </div>
            <div class="container">
                <div class="content">
                    <div class="row">
                        <div class="title-area">
                            <h2>プロジェクトメンバー</h2>
                            <div class="separator separator-danger">✻</div>
                            <br><br>
                            <h2>＊ メンバー ＊</h2>
                        </div>
                    </div>

                    <div class="team">
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">

                              <!-- row1 -->
                                <div class="row">

                                    <div class="col-md-4">
                                        <div class="card card-member">
                                            <div class="content">
                                                <div class="avatar ">
                                                    <img loading="lazy" alt="..." class="img-circle lazyload" src="img/faces/uchiyama.jpg"/>
                                                </div>
                                                <div class="description">
                                                    <h3 class="title" glot-model="Uchiyama">内山幸樹</h3>
                                                    <p class="small-text" glot-model="hottolinkK" >株式会社ホットリンク 代表取締役会長</p>
                                                    <p class="description text-justify" glot-model="UchiyamaD" >東京大学大学院博士課程在学中に日本最初期の検索エンジンの開発に関り、以降２０年以上に渡り、ビッグデータ・AI・検索技術をベースにしたビジネスを多く立ち上げ、世界規模で展開。上場経験後、日本初の全寮制インターナショナル・ハイスクール UWC ISAKの立ち上げに関り、プロジェクトメンバーの柳沢らとの出会いで、自らの経験・知識・人脈が会社経営以外の社会課題解決にも少なからず力を発揮する事に気づき、様々な社会貢献活動を開始</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="card card-member">
                                            <div class="content">
                                                <div class="avatar ">
                                                    <img loading="lazy" alt="..." class="img-circle lazyload" src="img/faces/ishiwata.jpg"/>
                                                </div>
                                                <div class="description">
                                                    <h3 class="title" glot-model="ishiwata">石渡広一郎</h3>
                                                    <p class="small-text" glot-model="hottolinkKK">株式会社ホットリンクCEO特別補佐</p>
                                                    <p class="description text-justify" glot-model="ishiwataD">音楽CD流通会社、芸能事務所を経て弁理士へ。独立後、縁あって株式会社ホットリンクの監査役に就任し、現在はCEO特別補佐を務める。中央集権に頼らない本人認証を可能にするブロックチェーン技術に着目し、さらに日本を始め世界でもまだ十分とはいえない多様性に対する不寛容に問題意識を持ち「famiee」の起ち上げから関わる。OneMile商標知的財産事務所。Arts and Lawメンバー。一般社団法人Thinking Entertainments共同代表</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="col-md-4">
                                        <div class="card card-member">
                                            <div class="content">
                                                <div class="avatar ">
                                                    <img loading="lazy" alt="..." class="img-circle lazyload" src="img/faces/kawa.png"/>
                                                </div>
                                                <div class="description">
                                                    <h3 class="title" glot-model="kawa">川大揮</h3>
                                                    <p class="small-text" glot-model="withidK">withID株式会社CEO</p>
                                                    <p class="description text-justify" glot-model="kawaD">東京工業大学大学院在学中からブロックチェーンに可能性を感じブロックチェーンに関わる学生団体の代表やイスラエルのスタートアップBancorの日本代表を通して、日本でのブロックチェーンの普及活動を行う。最近は、ブロックチェーンを用いた権利証明や本人確認の仕組みに可能性を感じ、本人確認プラットホームであるwithIDというIDのプラットホームを立ち上げた。開発メンバー。</p><br class="hidden-tb ">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                  </div>

                                  <!-- row2 -->
                                  <div class="row">

                                    <div class="col-md-4">
                                        <div class="card card-member">
                                            <div class="content">
                                                <div class="avatar ">
                                                    <img loading="lazy" alt="..." class="img-circle lazyload" src="img/faces/sota.jpg"/>
                                                </div>
                                                <div class="description">
                                                    <h3 class="title" glot-model="watanabe">渡辺創太</h3>
                                                    <p class="small-text" glot-model="stakeD">Stake株式会社 CEO</p>
                                                    <p class="description text-justify" glot-model="watanabeD">インド、中国、ロシアでのNPO活動を経て、2016年にブロックチェーンの可能性を感じ、シリコンバレーに渡航、現地のスタートアップであるChronicledでインターンシップを経て就職。帰国後、Staked株式会社を創業。ブロックチェーンのプロトコル開発を行うと同時に啓蒙活動を行っている。東京大学大学院工学部ブロックチェーン共同研究員。開発メンバー。</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card card-member">
                                            <div class="content">
                                                <div class="avatar ">
                                                    <img loading="lazy" alt="..." class="img-circle lazyload" src="img/faces/nice.jpg"/>
                                                </div>
                                                <div class="description">
                                                    <h3 class="title" glot-model="nice">村上乃須</h3>
                                                    <p class="small-text" glot-model="hottolinkKKK">株式会社ホットリンク<br  class="hidden-tb"><span class="show-tb"> </span>ダイバーシティ推進担当</p>
                                                    <p class="description  text-justify" glot-model="niceD">社会課題を解決するための仕組みづくりに強い関心を持ち、「たくさんの家族の形が当たり前に認められ、誰もが家族を持つことができる社会を実現する」というアプローチに共感し、「famiee」の起ち上げに参画。<br class="hidden-tb "><br class="hidden-tb "><br class="hidden-tb "><br class="hidden-tb "></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="card card-member">
                                            <div class="content">
                                                <div class="avatar ">
                                                    <img loading="lazy" alt="..." class="img-circle lazyload" src="img/faces/fumino.png"/>
                                                </div>
                                                <div class="description">
                                                    <h3 class="title" glot-model="sugiyama">杉山文野</h3>
                                                    <p class="small-text" glot-model="NPO2">株式会社ニューキャンバス代表取締役</p>
                                                    <p class="description text-justify" glot-model="sugiyamaD">フェンシング元女子日本代表。早稲田大学大学院にてセクシュアリティを研究後、トランスジェンダーである自身の体験を織り交ぜた『ダブルハッピネス』を講談社より出版、話題をよんだ。日本初となる渋谷区・同性パートナーシップ条例制定に関わり、現在は渋谷区男女平等・多様性社会推進会議委員も務める。<br class="hidden-tb "><br class="hidden-tb "><br class="hidden-tb ">
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                  </div>

                                  <!-- row3 -->
                                  <div class="row">

                                    <div class="col-md-4">
                                        <div class="card card-member">
                                            <div class="content">
                                                <div class="avatar ">
                                                    <img loading="lazy" alt="..." class="img-circle lazyload" src="img/faces/mai.jpg"/>
                                                </div>
                                                <div class="description">
                                                    <h3 class="title" glot-model="mai">藤本真衣</h3>
                                                    <p class="small-text">Gracone CEO<br class="hidden-tb"><span class="show-tb"> / </span>Miss Bitcoin</p>
                                                    <p class="description text-justify" glot-model="maiD">MissBitcoinとして世界中で知られる藤本真衣は、2011年から暗号通貨業界に携わり、キャリアの中で多くの成果を上げています。<br><br>暗号通貨とBlockchainをSDGsに活用することに最も関心があり、2017年には寄付プラットフォームKIZUNAを立ち上げ、BINANCE Charity Foundationの大使としても活動しています。<br><br>twitterやyoutubeでブロックチェーン業界全体の普及に務めるKOLとして活躍すると同時に、5つの会社を立ち上げるシリアルアントレプレナーであり、GMOなどの日本の上場会社やLayerXなどの有力IT企業を含む１０社以上の顧問としても活躍している。</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="card card-member">
                                            <div class="content">
                                                <div class="avatar ">
                                                    <img loading="lazy" alt="..." class="img-circle lazyload" src="img/faces/hosoda_tomomi.png"/>
                                                </div>
                                                <div class="description">
                                                    <h3 class="title">細田知美</h3>
                                                    <p class="small-text">PRコミュニケーション コンサルタント</p>
                                                    <p class="description text-justify">大手PR会社シニアコンサルタント。メディアとの強いエンゲージメントを持ち、メディアとともに新しい形の情報拡散を行いムーブメントを生み出す。日本大学芸術学部卒業後、デザイナーとして活動したのちフランスに5年間在住、異文化に触れながら子育てを行う。アートをベースにしたクリエイティブ思考を生かし、PR視点から個人や企業へのブランディングを行っている。日経XWOMANアンバサダー。<br class="hidden-tb"><br class="hidden-tb"><br class="hidden-tb"><br class="hidden-tb"><br class="hidden-tb"><br class="hidden-tb"><br class="hidden-tb"><br class="hidden-tb"><br class="hidden-tb"><br class="hidden-tb"></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="card card-member">
                                            <div class="content">
                                                <div class="avatar ">
                                                    <img loading="lazy" alt="..." class="img-circle lazyload" src="img/faces/kone.png"/>
                                                </div>
                                                <div class="description">
                                                    <h3 class="title" glot-model="mai">KONE</h3>
                                                    <p class="description text-justify" style="padding-top:32.5px">youtubeで「がんこちゃん」としてLGBTQに関する発信活動を行う。多様な家族が認められる社会に共感し、Famiee projectに携わる。<br class="hidden-tb"><br class="hidden-tb"><br class="hidden-tb"><br class="hidden-tb"><br class="hidden-tb"><br class="hidden-tb"><br class="hidden-tb"><br class="hidden-tb"><br class="hidden-tb"><br class="hidden-tb"><br class="hidden-tb"><br class="hidden-tb"><br class="hidden-tb"><br class="hidden-tb"><br class="hidden-tb"><br class="hidden-tb"><br class="hidden-tb"><br class="hidden-tb"></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>

                                <!-- row4 -->
                                <div class="row">

                                  <div class="col-md-4">
                                      <div class="card card-member">
                                          <div class="content">
                                              <div class="avatar ">
                                                  <img loading="lazy" alt="..." class="img-circle lazyload" src="img/faces/sato.jpg"/>
                                              </div>
                                              <div class="description">
                                                  <h3 class="title">佐藤 淳一</h3>
                                                  <p class="small-text">株式会社CRIEN CEO</p>
                                                  <p class="description text-justify">株式会社CELLにて10代の頃より多くのモバイルITサービスの開 発/運営を経験。ベンチャーの立ち上げ・メガベンチャー・ス タートアップと経て、現在は今までの経験を活かし新たな角度から、日本の地方創生を支えられるよう株式会社CRIENを立ち上げる。CRIENでは、2つの事業を展開しており、培ってきたITの知見を飲食業界に伝える「飲食店向けITコンシェルジュ」事業と、 研究開発としてSNS/インフルエンサーマーケティング・IoT・AI などをご活用し新規サービスの立ち上げを行なっている。<br>Famiee発起人の内山との出会いからそのミッションに共感しプロジェクトに開発メンバーとして参画。</p>
                                              </div>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="col-md-4">
                                      <div class="card card-member">
                                          <div class="content">
                                              <div class="avatar ">
                                                  <img loading="lazy" alt="..." class="img-circle lazyload" src="img/faces/kagami.jpg"/>
                                              </div>
                                              <div class="description">
                                                  <h3 class="title">加賀美サイ</h3>
                                                  <!-- <p class="small-text">PRコミュニケーション コンサルタント</p> -->
                                                  <p class="description text-justify" style="padding-top:32.5px">性やジェンダー、発達障害、生きづらさ、親子関係、音楽や文学などのカルチャーについて書いているライター。主にnoteやTwitterでコンテンツを発信している。本業もライター／編集者で、マーケティング関係の会社に勤務。自らのバックグラウンドもあり、Famieeのミッションやサービス、社会におけるゴールに共感。ライティングの経験を活かし、Famieeでは主に記事制作を行っている。<br class="hidden-tb"><br class="hidden-tb"><br class="hidden-tb"><br class="hidden-tb"><br class="hidden-tb"><br class="hidden-tb"><br class="hidden-tb"><br class="hidden-tb"><br class="hidden-tb"></p>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-md-4">
                                      <div class="card card-member">
                                          <div class="content">
                                              <div class="avatar ">
                                                  <img loading="lazy" alt="..." class="img-circle lazyload" src="img/faces/futaya.jpg"/>
                                              </div>
                                              <div class="description">
                                                  <h3 class="title">二谷輝郎</h3>
                                                  <p class="small-text">withID株式会社COO</p>
                                                  <p class="description text-justify">東京大学大学院在学中に世界34ヵ国を訪れた際、文化や習慣、人間のあり方など、多様性の大切さを実感。2019年の東京レインボープライドにおいてFamieeに出会い、多様な家族を認めていこうという考え方だけでなく、政治的には解決に時間がかかっていた社会課題を、新しい技術を用いることで民間から主体的に解決していこうという姿勢に賛同。開発担当。<br class="hidden-tb"><br class="hidden-tb"><br class="hidden-tb"><br class="hidden-tb"><br class="hidden-tb"><br class="hidden-tb"><br class="hidden-tb"></p>
                                              </div>
                                          </div>
                                      </div>
                                  </div>



                              </div>

                              <div class="row">

                                <div class="col-md-4">
                                    <div class="card card-member">
                                        <div class="content">
                                            <div class="avatar ">
                                                <img loading="lazy" alt="..." class="img-circle lazyload" src="img/faces/hirakawa.jpg"/>
                                            </div>
                                            <div class="description">
                                                <h3 class="title">平川大</h3>
                                                <p class="small-text">株式会社メディカルネット<br>代表取締役会長CEO</p>
                                                <p class="description text-justify">大学卒業後、外資系ITベンダーなどでPG・SE、製造業や通信・通販・メディア業界を担当するプリセールスやソリューション営業経験し、その後株式会社メディカルネットにて社会的課題を解決するアプローチで数々の事業を展開。上場後は新規事業や各種アライアンス・M&Aを手掛け、グループ経営として社会的課題を解決するアプローチを継続拡大。また、個人としても医療・ヘルスケア領域にて社会貢献活動を開始。発起人内山の想いに共感し、Famieeに参画。</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                            </div>



                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- <div class="col-md-4">
            <div class="card card-member">
                <div class="content pd-b-md-205">
                    <div class="avatar ">
                        <img loading="lazy" alt="..." class="img-circle lazyload" src="img/faces/sugawara.png"/>
                    </div>
                    <div class="description">
                        <h3 class="title">管原秀太</h3>
                        <p class="small-text">ザンシン株式会社 CEO</p>
                        <p class="description text-justify">2017年、文部科学省主催の国家プロジェクトメンバーとして、シリコンバレーへ渡る。現地でブロックチェーンに関するテクノロジーに可能性を感じ、帰国後、東京大学ブロックチェーン起業家支援プログラムに１期生として参画。同プログラムで最優秀賞を受賞。ブロックチェーン専門のIT企業にて開発経験を積んだのち、ザåンシン株式会社を設立。開発メンバー。</p>
                    </div>
                </div>
            </div>
        </div> -->
<!-- End Members Section -->


<!-- Adviser Section -->
        <div class="parallax filter filter-color-black">
            <div class="image" style="background-color:#ffe500">
            </div>
              <div class="container">
                  <div class="content">
                      <div class="row">
                          <div class="title-area">
                              <h2 glot-model="adviser" >＊ アドバイザー ＊</h2>
                          </div>
                      </div>



                      <div class="team">
                        <!-- row1 -->
                          <div class="row">
                              <div class="col-md-10 col-md-offset-1">
                                  <div class="row">
                                    <div class="col-md-4">
                                        <div class="card card-member">
                                            <div class="content">
                                                <div class="avatar ">
                                                    <img loading="lazy" alt="..." class="img-circle lazyload" src="img/faces/yanagisawa.jpg"/>
                                                </div>
                                                <div class="description">
                                                    <h3 class="title" glot-model="yanagisawa">柳沢正和</h3>
                                                    <p class="small-text" glot-model="NPO" >NPO法人グッドエイジングエールズ</p>
                                                    <p class="description text-justify" glot-model="yanagisawaD" >LGBT支援の認定NPO法人グッド・エイジング・エールズ所属。学校法人インターナショナル・スクール・オブ・アジア軽井沢（UWC ISAK Japan)評議員、ヒューマン・ライツ・ウォッチ東京委員。work with prideプロジェクトに参画し、企業によるLGBT施策の取り組みを評価する「Pride指標」を立ち上げる。2016年の世界経済フォーラムではLGBTセッションでパネリストを務め、ファイナンシャル・タイムス「世界のLGBTエクゼクティブ100人」にも選出</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                      <div class="col-md-4">
                                          <div class="card card-member">
                                              <div class="content">
                                                  <div class="avatar ">
                                                      <img loading="lazy" alt="..." class="img-circle lazyload" src="img/faces/okajima.jpg"/>
                                                  </div>
                                                  <div class="description">
                                                      <h3 class="title" glot-model="okajima">岡島悦子</h3>
                                                      <p class="small-text" glot-model="puronomaK">株式会社プロノバ 代表取締役社長</p>
                                                      <p class="description text-justify" glot-model="okajimaD">三菱商事、Harvard Business School(MBA)、マッキンゼー、グロービスの経営陣を経て、2006年に経営チーム強化コンサルティングのプロノバを設立。丸井グループ等、上場企業５社未上場３社の社外取締役を務める。2018年50代で1児の母となったことから多様な働き方や家族のあり方についても啓蒙活動、社会課題解決への貢献を行なっている。<br class="hidden-tb "><br class="hidden-tb "><br class="hidden-tb "><br class="hidden-tb "></p>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-md-4">
                                          <div class="card card-member">
                                              <div class="content">
                                                  <div class="avatar ">
                                                      <img loading="lazy" alt="..." class="img-circle lazyload" src="img/faces/fukushima.jpg"/>
                                                  </div>
                                                  <div class="description">
                                                      <h3 class="title"glot-model="fukushima" >福島良典</h3>
                                                      <p class="small-text" glot-model="LayerXD">株式会社LayerX代表取締役社長</p>
                                                      <p class="description text-justify" glot-model="fukushimaD">大学院在学中に『Gunosy（グノシー）』のサービスを開発し、2012年11月に株式会社Gunosyを創業、代表取締役に就任後、2013年11月代表取締役最高経営責任者に就任。同社は創業より約2年半というスピードで東証マザーズに上場、2017年12月には東証第一部へ市場変更する。2018年8月よりブロックチェーン領域の技術開発のために新たに設立した、株式会社LayerXの代表取締役社長に就任。2016年には『Forbes Asia』より『アジアを代表する「30歳未満」』に選出される。</p>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>




                                    </div>
                                    <!-- END row1 -->


                                    <!-- row2 -->
                                    <div class="row">
                                      <div class="col-md-4">
                                          <div class="card card-member">
                                              <div class="content">
                                                  <div class="avatar ">
                                                      <img loading="lazy" alt="..." class="img-circle lazyload" src="img/faces/竹中平蔵.jpg"/>
                                                  </div>
                                                  <div class="description">
                                                      <h3 class="title" glot-model="take">竹中平蔵</h3>
                                                      <p class="small-text" glot-model="keio">特別アドバイザー<br class="hidden-tb "><span class="show-tb"> / </span>慶應義塾大学名誉教授</p>
                                                      <p class="description text-justify" glot-model="takeD">博士（経済学）。ハーバード大学客員准教授、慶應義塾大学総合政策学部教授などを経て、2001年小泉内閣で経済財政政策担当大臣を皮切りに、金融担当大臣、郵政民営化担当大臣兼務、総務大臣を歴任。東洋大学教授、慶應義塾大学名誉教授、アカデミーヒルズ理事長等を兼務。プロジェクト特別アドバイザー。<br class="hidden-tb "><br class="hidden-tb "><br class="hidden-tb "><br class="hidden-tb "><br class="hidden-tb "><br class="hidden-tb "><br class="hidden-tb "><br class="hidden-tb "><br class="hidden-tb"><br class="hidden-tb ">
                                                      </p>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>

                                      <div class="col-md-4">
                                          <div class="card card-member">
                                              <div class="content">
                                                  <div class="avatar ">
                                                      <img loading="lazy" alt="..." class="img-circle lazyload" src="img/faces/song_mihyon.jpg"/>
                                                  </div>
                                                  <div class="description">
                                                      <h3 class="title" glot-model="song">宋美玄</h3>
                                                      <p class="small-text" glot-model="doctor">産婦人科専門医・医学博士<br class="hidden-tb ">・FMF認定超音波医</p>
                                                      <p class="description text-justify" glot-model="songD">2001年大阪大学医学部医学科卒業。大学卒業後、大阪大学医学部附属病院、りんくう総合医療センターなどを経て川崎医科大学講師就任。2009年ロンドンのFetal Medicine Foundationへ留学。胎児超音波の研鑽を積む。2015年川崎医科大学医学研究科博士課程卒業。周産期医療、女性医療に従事する傍ら、テレビ、インターネット、雑誌、書籍で情報発信を行う。産婦人科医の視点から社会問題の解決、ヘルスリテラシーの向上を目的とし活動中。<br class="hidden-tb "><br class="hidden-tb "><br class="hidden-tb "><br class="hidden-tb "><br class="hidden-tb "><br class="hidden-tb "></p>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-md-4">
                                          <div class="card card-member">
                                              <div class="content">
                                                  <div class="avatar ">
                                                      <img loading="lazy" alt="..." class="img-circle lazyload" src="img/faces/tsuji.jpg"/>
                                                  </div>
                                                  <div class="description">
                                                      <h3 class="title">辻愛沙子</h3>
                                                      <p class="small-text">株式会社arca CEO<br class="hidden-tb"><span class="show-tb"> / </span>Creative Director</p>
                                                      <p class="description text-justify">社会派クリエイティブを掲げ、「思想と社会性のある事業作り」と「世界観に拘る作品作り」の二つを軸として広告から商品プロデュースまで領域を問わず手がける越境クリエイター。リアルイベント、商品企画、ブランドプロデュースまで、幅広いジャンルでクリエイティブディレクションを手がける。2019年春、女性のエンパワメントやヘルスケアをテーマとした「Ladyknows」プロジェクトを発足。10月に実施したLadyknows Fes 2019では、500円で受診できるワンコイン婦人科健診を実施し話題に。2019年秋より報道番組 news zero にて水曜パートナーとしてレギュラー出演し、作り手と発信者の両軸で社会課題へのアプローチに挑戦している。</p>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>

                                  </div>
                                  <!-- END row2 -->

                                  <!-- row3 -->
                                  <div class="row">
                                    <div class="col-md-4">
                                        <div class="card card-member">
                                            <div class="content">
                                                <div class="avatar ">
                                                    <img loading="lazy" alt="..." class="img-circle lazyload" src="img/faces/hibino.jpg"/>
                                                </div>
                                                <div class="description">
                                                    <h3 class="title">日比野佐和子</h3>
                                                    <p class="small-text">医療法人康梓会Y's サイエンスクリニック広尾統括院長, 大阪大学大学院医学系研究科臨床遺伝子治療学 特任准教授</p>
                                                    <p class="description text-justify">内科医、皮膚科医、眼科医、日本抗加齢医学会専門医。同志社大学アンチエイジングリサーチセンター講師、森ノ宮医療大学保健医療学部准教授、（財）ルイ・パストゥール医学研究センター基礎研究部アンチエイジング医科学研究室室長などを歴任。現在はアンチエイジング医療における第一人者的な立場として、基礎研究から最新の再生医療の臨床に至るまで幅広く国際的に活躍するとともに、テレビや雑誌等メディアでも注目を集める。
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END row3 -->


                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
<!-- End Adviser Section -->

<!-- Partner Section -->
          <div class="parallax filter filter-color-black">
            <div class="image" style="background-color:#ffe500">
            </div>
              <!-- <div class="image" style="background-image:url('img/header2.jpg')">
              </div> -->
              <div class="container">
                  <div class="content">
                      <div class="row">
                          <div class="title-area">
                              <h2 glot-model="partner">＊ 支援企業・団体 ＊</h2>
                              <h5 class="subtitle">Famieeの活動に賛同し、人員やその他の<br class="br-sp">リソースを提供していただいています。</h5>
                          </div>
                      </div>

                      <div class="team">

                                  <!-- row1 -->
                                  <div class="row">

                                    <div class="col-md-4">
                                        <div class="card card-member">
                                            <div class="content">
                                                <a href= "https://www.microsoft.com/ja-jp/mscorp" target="_blank">
                                                <div style="padding:13px 0;">
                                                    <img loading="lazy" alt="..." style="width:150px; padding:0" class="lazyload imgMicrosoft" src="img/faces/microsoft.png"/>
                                                </div>
                                                <div class="description">
                                                    <h3 class="title" glot-model="microsoft">日本マイクロソフト</h3>
                                                </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- <div class="col-md-4">
                                        <div class="card card-member">
                                            <div class="content" style="height:216px;">
                                            <a href= "https://www.jurists.co.jp/" target="_blank">
                                                <div class="avatar " style="max-width:150px">
                                                    <img loading="lazy" alt="..." style="padding:42.35px 0" src="img/faces/nishimuraasahi.png"/>
                                                </div>
                                                <div class="description">
                                                    <h3 class="title">西村あさひ法律事務所</h3>
                                                </div>
                                            </a>
                                            </div>
                                        </div>
                                    </div> -->

                                    <div class="col-md-4">
                                        <div class="card card-member">
                                            <div class="content">
                                                <a href= "https://www.hottolink.co.jp/" target="_blank">
                                                <div style="">
                                                    <img loading="lazy" alt="..." class="lazyload" style="width:130px;" src="img/faces/ホットリンク.jpg"/>
                                                </div>
                                                <div class="description">
                                                    <h3 class="title" glot-model="hottolink" style="margin-top:0.5px">ホットリンク</h3>
                                                </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="col-md-4">
                                        <div class="card card-member">
                                            <div class="content">
                                                <a href= "https://staked.co.jp/" target="_blank">
                                                <div class="avatar ">
                                                    <img loading="lazy" alt="..." class="img-circle lazyload" src="img/faces/staked.jpg"/>
                                                </div>
                                                <div class="description">
                                                    <h3 class="title">Staked</h3>
                                                </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>


                                  </div>

                                  <!-- row2 -->
                                  <div class="row">



                                    <div class="col-md-4">
                                        <div class="card card-member">
                                            <div class="content">
                                            <a href= "https://withid.jp/" target="_blank">
                                                <div class="avatar ">
                                                    <img loading="lazy" style="padding:25px 0" alt="..." class="lazyload" src="img/faces/withid_new.png"/>
                                                </div>
                                                <div class="description">
                                                    <h3 class="title">withID</h3>
                                                </div>
                                            </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="card card-member">
                                            <div class="content">
                                                <a href= "https://jobrainbow.jp/" target="_blank">
                                                <div style="padding:37.75px 0">
                                                    <img loading="lazy" alt="..." style="width:150px" class="lazyload" src="img/faces/jobrainbow_for_white.png"/>
                                                </div>
                                                <div class="description">
                                                    <h3 class="title">JobRainbow</h3>
                                                </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="card card-member">
                                            <div class="content">
                                                <a>
                                                <div class="avatar" style="padding:10px">
                                                    <img loading="lazy" alt="..." class="lazyload" src="img/faces/sova.jpg"/>
                                                </div>
                                                <div class="description">
                                                    <h3 class="title">SoVa</h3>
                                                </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                  </div>

                                  <!-- row3 -->
                                  <div class="row">



                                    <div class="col-md-4">
                                        <div class="card card-member">
                                            <div class="content">
                                            <a href= "https://gracone.co.jp/" target="_blank">
                                                <div class="avatar" style="padding:10px;">
                                                    <img loading="lazy" style="height:90px; width:auto;" alt="..." class="lazyload" src="img/faces/gracone.png"/>
                                                </div>
                                                <div class="description">
                                                    <h3 class="title">グラコネ</h3>
                                                </div>
                                            </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="card card-member">
                                            <div class="content">
                                                <a href= "https://www.crien.jp/" target="_blank">
                                                <div class="avatar" style="padding:10px;">
                                                    <img loading="lazy" alt="..." class="lazyload" src="img/faces/crien.jpg"/>
                                                </div>
                                                <div class="description">
                                                    <h3 class="title">CRIEN</h3>
                                                </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="card card-member">
                                            <div class="content">
                                                <a href= "https://biz.trustdock.io/" target="_blank">
                                                <div style="padding:38px;">
                                                    <img loading="lazy" alt="..." style="width:140px" class="lazyload" src="img/faces/trustdock.png"/>
                                                </div>
                                                <div class="description">
                                                    <h3 class="title">TRUSTDOCK</h3>
                                                </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                  </div>

                                  <!-- row4 -->
                                  <div class="row">



                                    <div class="col-md-4">
                                        <div class="card card-member">
                                            <div class="content">
                                            <a href= "https://prtimes.jp/" target="_blank">
                                                <div class="avatar">
                                                    <img loading="lazy" style="padding:44px 0;" alt="..." class="lazyload" src="img/faces/prtimes_logo.png"/>
                                                </div>
                                                <div class="description">
                                                    <h3 class="title">PR TIMES</h3>
                                                </div>
                                            </a>
                                            </div>
                                        </div>
                                    </div>


                                  </div>



                      </div>
                  </div>
              </div>
          </div>
<!-- End Partner Section -->


<!-- ↓This is a Closing Tag for the backgrond color -->
    </div>


<!-- Supporter Section -->
<div class="section">
    <div class="container">
        <div class="row">
            <div class="title-area">
                <h2>賛同者</h2>
                <div class="separator separator-danger">✻</div>
                <h3><b>＊ Founding Sponsors ＊</b></h3>
                <br>
                <ul class='foundingsupporterList'>
                  <!-- リストの中身はadditional.jsで生成 -->
                </ul>
                <br>
                <br>
                <h3><b>＊ 賛同企業・賛同者 ＊</b></h3>
                <br>
                <ul class='supporterList'>
                  <!-- リストの中身はadditional.jsで生成 -->
                </ul>
            </div>
        </div>

    </div>
</div>
<!-- End Supporter Section -->


<!-- Contact Section -->
    <div class="section section-small section-get-started">
        <div class="parallax filter">
            <div class="image"
                style="background-image: url('img/balloon_footer.jpg')">
            </div>
            <div class="container">
                <div class="title-area">
                    <h2 class="text-white" glot-model="want" >賛同企業募集中！</h2>
                    <div class="separator line-separator">♦</div>
                    <p class="description" glot-model="wantD" > Famieeプロジェクトでは想いを共にする個人・企業を募集しております。ご興味のある方は「コンタクト」よりお問い合わせください。</p>
                </div>

                <div class="button-get-started">
                    <a href="https://forms.gle/yQdkwVT61gdUBWEr6" target="_blank" class="btn btn-danger btn-fill" glot-model="contact">コンタクト
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
