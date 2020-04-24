$(function () {
  // IFrame Player API
  var tag = document.createElement('script');
  tag.src = "https://www.youtube.com/iframe_api";
  var firstScriptTag = document.getElementsByTagName('script')[0];
  firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

var $win = $(window);
var windowWidth = 0;

$win.on('load resize', function() {
  windowWidth = $win.width();
});

// ローディング
  // ロード終了後にフェードアウト
  $(window).on('load', function(){
    $('.loading-bg').delay(900).fadeOut(800);
    $('.loading-title').delay(600).fadeOut(300);
  });

  // (duration/1000)秒たったら強制的にフェードアウトをかける
  (function(){
    var duration = 3000;
    setTimeout('stopload()',duration);
  });

  function stopload(){
   $('.loading-bg').delay(900).fadeOut(800);
   $('.loading-title').delay(600).fadeOut(300);
  }


// https://script.google.com/macros/s/AKfycbymqc-CQOrcTZX5ZbvoYmcUoVgiR4zk3SEgKgIyy3ZoVWzMlu4/exec


// 動画ページ
  // if ($(window).width > 768){
  // var movieh = $('#movie-wrap').height();
  // // console.log(movieh);
  // $('.movie-nav').height(movieh);
  // }

  var movies = {};
  var currentIndex = 0;
  var $titleList = $("#title-list");
  var movie_len = 0;

  // 最初の読み込み
  // $.getJSON("https://script.google.com/macros/s/AKfycbymqc-CQOrcTZX5ZbvoYmcUoVgiR4zk3SEgKgIyy3ZoVWzMlu4/exec", function (data){
  //   if (data.length >=1){
  //     $(data).each(function(index){
  //       if (index==0){
  //         $('<li><a href="" class="active">' + this.title + '</li></a>').appendTo('#title-list');
  //       }else{
  //         $('<li><a href="">' + this.title + '</li></a>').appendTo('#title-list');
  //       };
  //     });
  //   }
  //   $('#youtube').html(data[0].url);
  //   $('#caption').html(data[0].title);
  //   movies = $(data);
  //   movie_len = data.length
  // });

    // テスト
    $.getJSON("https://script.google.com/macros/s/AKfycbymqc-CQOrcTZX5ZbvoYmcUoVgiR4zk3SEgKgIyy3ZoVWzMlu4/exec", function (data){
      if (data.length >=1){
        $(data).each(function(index){
            $('<li><a href="">' + this.title + '</li></a>').appendTo('#title-list');
        });
        };
      movies = $(data);
      movies_len = movies.length;
      console.log(movie_len);
      $('#caption').html(data[0].title);
      onYouTubeIframeAPIReady(0);
      updateNav(0);
    });

      // 埋め込む関数
      let ytPlayer;
      function onYouTubeIframeAPIReady(index) {
      ytPlayer = new YT.Player(
       'youtube', // 埋め込む場所の指定
        {
          // width: auto, // プレーヤーの幅
          // height: auto, // プレーヤーの高さ
          videoId: movies[0].id,
          events: {
            'onStateChange': onPlayerStateChange // プレーヤーの状態が変更されたときに実行
          }
         }
       );
      goToSlide(index);
     }


      function onPlayerStateChange(event) {
        // 現在のプレーヤーの状態を取得
        var ytStatus = event.data;
        // 再生終了したとき
        if (ytStatus == YT.PlayerState.ENDED) {
        console.log('再生終了');
        currentIndex ++;
        goToSlide(currentIndex);
        updateNav(currentIndex);
        console.log(currentIndex);
        }

      }

  // タイトルリストがクリックされたとき
  $titleList.on('click','a', function(event){
    event.preventDefault();
    if (!$(this).hasClass('active')){
      currentIndex = $(this).parent().index();
      goToSlide(currentIndex);
      updateNav(currentIndex);
    };

    if (windowWidth<=768) {
      $('body,html').animate({
            scrollTop: $('#movie-top').offset().top
        }, 500);
        return false;
    };
  });

  // Prev or Nextがクリックされた時
  $('.movie-arrow').on('click','a',function(event){
    event.preventDefault();
    if ($(this).hasClass('prev')){
      currentIndex --;
      if (currentIndex < 0){ currentIndex = movie_len;};
      goToSlide(currentIndex);
    }else if($(this).hasClass('next')){
      currentIndex ++;
      if (currentIndex > movie_len){ currentIndex = 0;};
      goToSlide(currentIndex);
    };
    updateNav(currentIndex);


  });

  // 動画を差し替える関数
  // function goToSlide(index){
  //   $('#youtube').html(movies[index].url);
  //   $('#caption').html(movies[index].title);
  // }
  function goToSlide(index){
    ytPlayer.cueVideoById({videoId: movies[index].id});
    $('#caption').html(movies[index].title);
  }
  // タブのハイライトを切り替える関数
  function updateNav(index){
    $titleList.find('a').removeClass('active');
    $titleList.find('a').eq(index).addClass('active');
  }





  // var num = 100
  // console.log(num);
  // new Promise((resolve, reject) => {
  // num += 100;
  // console.log(num);
  // resolve(num);
  // }).then((num) => {
  // setTimeout(function(){num += 200}, 0);
  // console.log(num);
  // }).then((num) => {
  // console.log(num);
  // })

// 賛同者リストをAPIを叩いてHTMLにappend
  //JSONデータを読み込みます
  $.getJSON("https://script.google.com/macros/s/AKfycbzEFeNTTuBSWm7Tm_3fMDCAw4dMlvKLe1O6YW23gAOPzD-Lyo4/exec", function (data) {
    //JSONの中のデータの個数を変数化し、1件以上の場合は出力します（0件の場合返り値が無いため）
    var infoCount = data.length;
    //1件以上ある場合
    if (infoCount >= '1') {
      $(data).each(function(){
        if (this.type == "founder") {
          switch( this.num ) {
            case 1:
              $('<li><span class="supporterName weight900">' + this.Name + '</span>' + '<p class="affiliation">' + this.Affiliation + '</p></li>').appendTo('ul.foundingsupporterList');
              break;

            case 2:
              $('<li><span class="supporterName weight700">' + this.Name + '</span>' + '<p class="affiliation">' + this.Affiliation + '</p></li>').appendTo('ul.foundingsupporterList');
              break;

            case 3:
              $('<li><span class="supporterName weight600">' + this.Name + '</span>' + '<p class="affiliation">' + this.Affiliation + '</p></li>').appendTo('ul.foundingsupporterList');
              break;

            case 4:
              $('<li><span class="supporterName weight500">' + this.Name + '</span>' + '<p class="affiliation">' + this.Affiliation + '</p></li>').appendTo('ul.foundingsupporterList');
              break;

            case 5:
              $('<li><span class="supporterName weight400">' + this.Name + '</span>' + '<p class="affiliation">' + this.Affiliation + '</p></li>').appendTo('ul.foundingsupporterList');
              break;

            case 6:
              $('<li><span class="supporterName weight300">' + this.Name + '</span>' + '<p class="affiliation">' + this.Affiliation + '</p></li>').appendTo('ul.foundingsupporterList');
              break;

            default:
              $('<li><span class="supporterName weight200">' + this.Name + '</span>' + '<p class="affiliation">' + this.Affiliation + '</p></li>').appendTo('ul.foundingsupporterList');
              break;
          };
        }else if (this.type == "supporter") {
          $('<li><span class="supporterName weight200">' + this.Name + '</span>' + '<p class="affiliation">' + this.Affiliation + '</p></li>').appendTo('ul.supporterList');
        }
      }); // end each()
    }; //end if count


  }); //end get json



}); // END tag
