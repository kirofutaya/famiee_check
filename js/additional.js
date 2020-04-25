$(function () {

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

// ロード時にurlごとに異なるapiを叩く
$(window).on('load', function(){
  //console.log("ロード完了");
  if(document.URL.match("project")) {
    //console.log("ロードプロジェクト");
    createYoutube("https://script.google.com/a/withid.jp/macros/s/AKfycbwI6iimv0RwvyZ4oSgOw0xBEV_9tKvg3Fes7aKH/exec");
  }else if(document.URL.match("services")){
    //console.log("ロードサービス")
    createYoutube("https://script.google.com/a/withid.jp/macros/s/AKfycbypmBaU8p6ohjQrglFxbvtONBQZ6NGwSYJOODSA/exec");
  }else if(document.URL.match("forCompany")){
    //console.log("ロードカンパニー");
    createYoutube("https://script.google.com/a/withid.jp/macros/s/AKfycbyJQ5dAsvC0kbJvFiNhMBq9agHA9yyvT_RIQGjKHQ/exec");
  }else{
    //console.log("ロードその他")
    createSupporterList("https://script.google.com/macros/s/AKfycbzEFeNTTuBSWm7Tm_3fMDCAw4dMlvKLe1O6YW23gAOPzD-Lyo4/exec");
  }
});


// ロード時にapiを叩いてyoutubeを埋め込む関数
function createYoutube(api_url){
$.getJSON(api_url, function (data){
  if (data.length >=1){
    $(data).each(function(index){
      if (index==0){
          $('<li><a href="" class="active">' + this.title + '</li></a>').appendTo('#title-list');
      }else{
        $('<li><a href="">' + this.title + '</li></a>').appendTo('#title-list');
      }
    });
    };
  movies = $(data);
  movies_len = movies.length;
  // console.log(movies_len);
  $('#caption').html(data[0].title);
  onYouTubeIframeAPIReady(0);
  updateNav(0);
});
}

// iframe player apiの読み込み
var tag = document.createElement('script');
tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

var movies = {};
var currentIndex = 0;
var $titleList = $("#title-list");
var movies_len = 0;
// $.getJSON("https://script.google.com/macros/s/AKfycbymqc-CQOrcTZX5ZbvoYmcUoVgiR4zk3SEgKgIyy3ZoVWzMlu4/exec", function (data){
//   if (data.length >=1){
//     $(data).each(function(index){
//       if (index==0){
//           $('<li><a href="" class="active">' + this.title + '</li></a>').appendTo('#title-list');
//       }else{
//         $('<li><a href="">' + this.title + '</li></a>').appendTo('#title-list');
//       }
//     });
//     };
//   movies = $(data);
//   movies_len = movies.length;
//   // console.log(movies_len);
//   $('#caption').html(data[0].title);
//   onYouTubeIframeAPIReady(0);
//   updateNav(0);
// });


// youtubeのidからyoutubeを埋め込む関数
let ytPlayer;
function onYouTubeIframeAPIReady(index) {
  ytPlayer = new YT.Player(
   'youtube', // 埋め込む場所の指定
   // プロパティの指定
    {
      videoId: movies[0].id,
      events: {
        'onStateChange': onPlayerStateChange // プレーヤーの状態が変更されたときに実行
      },
      playerVars:{
        rel:0, //停止時に関連動画の表示を当該チャンネルのものだけにする。
        // origin: location.protocol + '//' + location.hostname + "/"
      }
    }
   );
  goToMovie(index);
}


// youtubeのイベントごとに実行したいこと
function onPlayerStateChange(event) {
  // 現在のプレーヤーの状態を取得
  var ytStatus = event.data;
  // 再生終了したとき
  if (ytStatus == YT.PlayerState.ENDED) {
  // console.log('再生終了');
  currentIndex ++;
  goToMovie(currentIndex);
  updateNav(currentIndex);
  ytPlayer.playVideo();
  }
}

var windowWidth = 0;
$(window).on('load resize', function(){
  windowWidth = $(window).width();
});
// タイトルリストがクリックされたとき
$titleList.on('click','a', function(event){
  event.preventDefault();
  if (!$(this).hasClass('active')){
    currentIndex = $(this).parent().index();
    goToMovie(currentIndex);
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
    if (currentIndex < 0){ currentIndex = movies_len;};
    goToMovie(currentIndex);
    //console.log(currentIndex)
  }else if($(this).hasClass('next')){
    currentIndex ++;
    if (currentIndex > movies_len){ currentIndex = 0;};
    goToMovie(currentIndex);
    //console.log(currentIndex);
  };
  updateNav(currentIndex);
});

// youtubeの中身を切り替える関数
function goToMovie(index){
  ytPlayer.cueVideoById({videoId: movies[index].id});
  $('#caption').html(movies[index].title);
}
// タブのハイライトを切り替える関数
function updateNav(index){
  $titleList.find('a').removeClass('active');
  $titleList.find('a').eq(index).addClass('active');
}




// サポーターリストを作る関数
function createSupporterList(api_url){
  //APIを叩いてjsonを取得
  $.getJSON(api_url, function (data) {
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
  //console.log("ちゃんと呼び出された")
}


}); // END tag
