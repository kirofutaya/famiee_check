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
                <h3>スライドと動画による詳しい説明も<br class="br-sp">ご用意しております</h3>
                <div class="separator separator-danger">✻</div>
            </div>

            <div class="flex" style="margin-top:30px;">
              <a href="./project" class="btn btn-danger btn-fill syomeisyo-btn" style="text-align:center; width:30%; margin: auto">
                  プロジェクトの詳しい説明
              </a>
              <a href="./services" class="btn btn-danger btn-fill syomeisyo-btn" style="text-align:center; width:30%; margin: auto">
                  証明書の詳しい説明
              </a>
              <a href="./forCompany" class="btn btn-danger btn-fill syomeisyo-btn" style="text-align:center; width:30%; margin: auto">
                  企業様向けのお願い
              </a>
              <!-- <a href="https://drive.google.com/file/d/1_SXUFI-CeVAkc9pr-s6qnClJCvB10czb/view?usp=sharing" target="_blank" class="btn btn-primary btn-fill syomeisyo-btn" style="text-align:center; width:30%; margin: auto">
                  証明書受け入れご提案書はこちら
              </a> -->
            </div>
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
                        <h5 class="subtitle">社内の福利厚生手続き等にFamieeの証明書を<br class="br-sp">ご利用していただく予定です。</h5>
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
                    <a href="./documents/0427release.pdf" target="_blank">
                      <div class="clearfix">
                        <div class="item1">
                        <time datetime="2020-4-27">2020.04.27</time>
                        <div class="news">PR</div>
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
                              <a href="https://note.com/famiee/n/n5af81a4bce47">
                                <img alt="..." src="img/thumnail/note_shimoyamada.png"/>
                              </a>
                            </div>
                            <div class="swiper-slide">
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
                            </div>
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
                                                    <p class="small-text" glot-model="hottolinkKKK">株式会社ホットリンク　ダイバーシティ推進担当</p>
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
                                                    <p class="small-text">Gracone CEO<br>Miss Bitcoin</p>
                                                    <p class="description text-justify" glot-model="maiD">MissBitcoinとして世界中で知られる藤本真衣は、2011年から暗号通貨業界に携わり、キャリアの中で多くの成果を上げています。<br><br>暗号通貨とBlockchainをSDGsに活用することに最も関心があり、2017年には寄付プラットフォームKIZUNAを立ち上げ、BINANCE Charity Foundationの大使としても活動しています。<br><br>twitterやyoutubeでブロックチェーン業界全体の普及に務めるKOLとして活躍すると同時に、5つの会社を立ち上げるシリアルアントレプレナーであり、GMOなどの日本の上場会社やLayerXなどの有力IT企業を含む１０社以上の顧問としても活躍している。</p>
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


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                                                      <p class="small-text" glot-model="keio">特別アドバイザー / 慶應義塾大学名誉教授</p>
                                                      <p class="description text-justify" glot-model="takeD">博士（経済学）。ハーバード大学客員准教授、慶應義塾大学総合政策学部教授などを経て、2001年小泉内閣で経済財政政策担当大臣を皮切りに、金融担当大臣、郵政民営化担当大臣兼務、総務大臣を歴任。東洋大学教授、慶應義塾大学名誉教授、アカデミーヒルズ理事長等を兼務。プロジェクト特別アドバイザー。<br class="hidden-tb "><br class="hidden-tb "><br class="hidden-tb "><br class="hidden-tb "><br class="hidden-tb "></p>
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
                                                      <p class="small-text" glot-model="doctor">産婦人科専門医・医学博士・FMF認定超音波医</p>
                                                      <p class="description text-justify" glot-model="songD">2001年大阪大学医学部医学科卒業。大学卒業後、大阪大学医学部附属病院、りんくう総合医療センターなどを経て川崎医科大学講師就任。2009年ロンドンのFetal Medicine Foundationへ留学。胎児超音波の研鑽を積む。2015年川崎医科大学医学研究科博士課程卒業。周産期医療、女性医療に従事する傍ら、テレビ、インターネット、雑誌、書籍で情報発信を行う。産婦人科医の視点から社会問題の解決、ヘルスリテラシーの向上を目的とし活動中。</p>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>

                                  </div>
                                  <!-- END row2 -->

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
                                    <hr class="hr-small">
                                    <a href="https://prtimes.jp/main/html/rd/p/000000006.000047881.html" target="_blank"><b>2020.4.27</b><br>みずほフィナンシャルグループなど17社が、同性カップル向け「パートナーシップ証明書」を企業内手続きに利用へ</a>
                                    <hr class="hr-small">
                                    <a href="" target="_blank"><b>2019.09.02</b><br>福島良典氏が一般社団法人Famieeの技術アドバイザーに就任</a>
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
