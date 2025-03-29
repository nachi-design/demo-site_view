<!doctype html>
<html>
<!-- InstanceBegin template="/Templates/base.dwt" codeOutsideHTMLIsLocked="false" -->

<head>
  <meta name="robots" content="noindex">
  <meta charset="utf-8">
  <!-- InstanceBeginEditable name="doctitle" -->
  <meta name="description" content="矢作ダム50周年記念特設サイト" />
  <meta name="keywords" content="矢作ダム,ダム,記念サイト,特設サイト,愛知県,岐阜県,長野県,豊田市" />
  <title>矢作ダム50周年記念特設サイト</title>
  <!-- InstanceEndEditable -->
  <link rel="shortcut icon" href="favicon.ico" />
  <link rel="stylesheet" href="css/app.css">
  <!--<script src="../js/menu.js"></script>-->

  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="js/common.js"></script>

  <!-- ↓viewport -->
  <script>
    var ua = navigator.userAgent;
    if ((ua.indexOf('iPhone') > 0) || ua.indexOf('iPod') > 0 || (ua.indexOf('Android') > 0 && ua.indexOf('Mobile') > 0)) {
      $('head').prepend('<meta name="viewport" content="width=device-width,initial-scale=1">');
    } else {
      $('head').prepend('<meta name="viewport" content="width=768">');
    }
  </script>

  <!-- ↓webフォント↓ -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@400;600&display=swap" rel="stylesheet">

  <!-- ↓fontawesome -->
  <link href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" rel="stylesheet">

  <!-- ↓モーダルウィンドウ -->
  <link rel="stylesheet" href="js/modaal/modaal.css">
  <script src="js/modaal/modaal.js"></script>
  <script>
    $(function() {
      $('.modal').modaal();
    });
  </script>
  <!-- InstanceBeginEditable name="head" -->

  <!-- 読み込み毎に画像表示 -->
  <!-- <script>
        $(function () {
            setTimeout(function () {
                $('.p-start').fadeOut(900);
            }, 1000);
        });
    </script> -->

  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script> -->
  <script>
    $(function() {
      setTimeout(function() {
        $('.p-start').fadeOut(900);
      }, 1000);
    });
  </script>

  <script>
    $(function() {
      var webStorage = function() {
        if (sessionStorage.getItem('access')) {
          /*
            2回目以降アクセス時の処理
          */
          $(".p-start").addClass('is-active');
        } else {
          /*
            初回アクセス時の処理
          */
          sessionStorage.setItem('access', 'true'); // sessionStorageにデータを保存
          $(".p-start__bg").addClass('is-active'); // loadingアニメーションを表示
          setTimeout(function() {
            // ローディングを数秒後に非表示にする
            $(".p-start").addClass('is-active');
            $(".p-start__bg").removeClass('is-active');
          }, 1000); // ローディングを表示する時間
        }
      }
      webStorage();
    });
  </script>

  <link rel="stylesheet" href="js/jquery-scrollify/my-scrollify.css">
  <!-- InstanceEndEditable -->
</head>

<!-- InstanceBeginEditable name="contents" -->

<body class="p-index">

  <div class="p-start">
    <div class="p-start__bg">
      <div class="p-start__loader"></div>
    </div>
  </div>

  <?php include("header.php"); ?>

  <main>
    <section id="mv" class="p-mv box" data-section-name="main">
      <div class="p-scrolldown"><span class="mincho">scroll</span></div>
      <div class="p-mv__video">
        <video playsinline muted autoplay>
          <source src="movie/main.mp4">
        </video>
      </div>
      <div class="p-mv__text">
        <img src="images/index/text-mv.png" alt="今までもこれからも 守り続けて50年">
      </div>
    </section>

    <section id="sec01" class="p-secCont box" data-section-name="01">

      <div class="p-secBg p-secBg--01"></div>
      <div class="p-contentWrap">
        <div class="u-textCenter--sp">
          <div class="p-titleCont p-am p-am--bt p-am--first">
            <img src="images/index/ttl_intro.png" alt="Introduction">
            <h2 class="mincho">はじめに</h2>
          </div>
        </div>
        <div class="l-inner">
          <div class="p-mainCont">
            <div class="p-mainCont__img p-am p-am--bt p-am--second">
              <img src="images/photo/mizuno.jpg" alt="国土交通省 中部地方整備局 矢作ダム管理所長 水野 徹">
            </div>
            <div class="p-mainCont__text p-mainCont__text--am p-am p-am--third">
              <div class="p-am--slideWrapper p-am--fourth">
                <div class="p-name-Sec1-2 mincho u-mb10--sp p-am--slide p-am--fourth">
                  <h3>国土交通省 中部地方整備局<br>
                    矢作ダム管理所長<br class="u-sp"><span class="jp">水野 徹</span><span class="en">Toru
                      Mizuno</span></h3>
                </div>
                <div class="p-mainCont__text__desc mincho p-am--slide p-am--fourth">
                  <p>矢作ダム完成50周年にあたり、「矢作ダム完成50周年記念事業実行委員会」を代表いたしまして、一言ご挨拶申し上げます。</p>
                </div>
                <div class="u-textCenter p-am--slide p-am--fourth">
                  <a href="intro/" class="c-btn c-btn--gold mincho">VIEW ALL</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="sec02" class="p-secCont box" data-section-name="02">
      <div class="p-secBg p-secBg--02"></div>
      <div class="p-contentWrap">
        <div class="l-inner">
          <div class="p-titleCont u-fitCont p-am p-am--bt p-am--first">
            <img src="images/index/ttl_greeting.png" alt="Greeting">
            <h2 class="mincho">ご挨拶</h2>
          </div>
          <div class="p-mainCont">
            <div class="c-flexBox space-around p-mainCont__flex">
              <div class="p-prof p-am p-am--tb p-am--second">
                <div class="p-prof__img">
                  <img src="images/photo/watanabe.jpg" alt="国土交通省 副大臣 渡辺 猛之">
                </div>
                <div class="p-prof__text">
                  <div class="p-name-Sec1-2 mincho">
                    <h3 class="u-textWhite">国土交通省 副大臣<br><span class="jp">渡辺 猛之</span><span class="en">Takeyuki Watanabe</span></h3>
                  </div>
                </div>
                <div class="u-textCenter">
                  <a href="greeting/01.php" class="p-prof__link c-btn c-btn--gold mincho">VIEW</a>
                </div>
              </div>
              <div class="p-prof p-am p-am--tb p-am--third">
                <div class="p-prof__img">
                  <img src="images/photo/omura.jpg" alt="愛知県知事（受益地域代表）大村 秀章">
                </div>
                <div class="p-prof__text">
                  <div class="p-name-Sec1-2 mincho">
                    <h3 class="u-textWhite">愛知県知事<span class="u-textSmall">（受益地域代表）</span><br><span class="jp">大村 秀章</span><span class="en">Hideaki Omura</span></h3>
                  </div>
                </div>
                <div class="u-textCenter">
                  <a href="greeting/02.php" class="p-prof__link c-btn c-btn--gold mincho">VIEW</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="sec03" class="p-secCont box" data-section-name="03">
      <div class="p-secBg p-secBg--03"></div>
      <div class="p-contentWrap">
        <div class="p-titleCont p-am p-am--bt p-am--first mincho">
          <h2>矢作ダム50周年に寄せて</h2>
          <p class="subtitle">地域の皆様からのメッセージ</p>
        </div>
        <div class="p-inner--sec03">
          <ul class="p-message flex">
            <li class="p-message__box p-am p-am--tb p-am--box p-am--box1">
              <a href="message/02.php">
                <div class="p-message__contentWrap">
                  <div class="p-message__img">
                    <img src="images/photo/yagi_top.jpg" alt="衆議院議員 八木 哲也 氏">
                  </div>
                  <div class="p-message__text gridCont mincho">
                    <div class="grid1">
                      <p>衆議院議員</p>
                    </div>
                    <div class="grid2">
                      <h3>八木 哲也 氏</h3>
                    </div>
                    <div class="grid3">
                      <p class="p-message__link c-btn"><span>VIEW</span></p>
                    </div>
                  </div>
                </div>
              </a>
            </li>
            <!-- <li class="p-message__box p-am p-am--tb p-am--box p-am--box2">
                            <a href="message/01.php">
                                <div class="p-message__contentWrap">
                                    <div class="p-message__img">
                                        <img src="images/photo/furuya_top.jpg" alt="衆議院議員 古屋 圭司 氏">
                                    </div>
                                    <div class="p-message__text gridCont mincho">
                                        <div class="grid1">
                                            <p>衆議院議員</p>
                                        </div>
                                        <div class="grid2">
                                            <h3>古屋 圭司 氏</h3>
                                        </div>
                                        <div class="grid3">
                                            <p class="p-message__link c-btn"><span>VIEW</span></p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li> -->
            <li class="p-message__box p-am p-am--tb p-am--box p-am--box2">
              <a href="message/03.php">
                <div class="p-message__contentWrap">
                  <div class="p-message__img">
                    <img src="images/photo/adachi_top.jpg" alt="参議院議員 全国治水期成同盟会 副会長 国土交通省 元 中部地方整備局長 足立 敏之 氏">
                  </div>
                  <div class="p-message__text gridCont gridCont--long mincho">
                    <div class="grid1">
                      <p class="long">参議院議員<br>全国治水期成同盟会 副会長<br>国土交通省 元 中部地方整備局長</p>
                    </div>
                    <div class="grid2">
                      <h3>足立 敏之 氏</h3>
                    </div>
                    <div class="grid3">
                      <p class="p-message__link c-btn"><span>VIEW</span></p>
                    </div>
                  </div>
                </div>
              </a>
            </li>
            <li class="p-message__box p-am p-am--tb p-am--box p-am--box3">
              <a href="message/04.php">
                <div class="p-message__contentWrap">
                  <div class="p-message__img">
                    <img src="images/photo/ota_top.jpg" alt="豊田市 市長 太田 稔彦">
                  </div>
                  <div class="p-message__text gridCont mincho">
                    <div class="grid1">
                      <p>豊田市　市長</p>
                    </div>
                    <div class="grid2">
                      <h3>太田 稔彦</h3>
                    </div>
                    <div class="grid3">
                      <p class="p-message__link c-btn"><span>VIEW</span></p>
                    </div>
                  </div>
                </div>
              </a>
            </li>
            <li class="p-message__box p-am p-am--tb p-am--box p-am--box4">
              <a href="message/05.php">
                <div class="p-message__contentWrap">
                  <div class="p-message__img">
                    <img src="images/photo/kosaka_top.jpg" alt="恵那市 市長 小坂 喬峰">
                  </div>
                  <div class="p-message__text gridCont mincho">
                    <div class="grid1">
                      <p>恵那市　市長</p>
                    </div>
                    <div class="grid2">
                      <h3>小坂 喬峰</h3>
                    </div>
                    <div class="grid3">
                      <p class="p-message__link c-btn"><span>VIEW</span></p>
                    </div>
                  </div>
                </div>
              </a>
            </li>
            <li class="p-message__box p-am p-am--tb p-am--box p-am--box5">
              <a href="message/06.php">
                <div class="p-message__contentWrap">
                  <div class="p-message__img">
                    <img src="images/photo/okubo_top.jpg" alt="根羽村 村長 大久保 憲一">
                  </div>
                  <div class="p-message__text gridCont mincho">
                    <div class="grid1">
                      <p>根羽村　村長</p>
                    </div>
                    <div class="grid2">
                      <h3>大久保 憲一</h3>
                    </div>
                    <div class="grid3">
                      <p class="p-message__link c-btn"><span>VIEW</span></p>
                    </div>
                  </div>
                </div>
              </a>
            </li>
            <li class="p-message__box p-am p-am--tb p-am--box p-am--box6">
              <a href="message/07.php">
                <div class="p-message__contentWrap">
                  <div class="p-message__img">
                    <img src="images/photo/nishikawa_top.jpg" alt="平谷村 村長 西川 清海">
                  </div>
                  <div class="p-message__text gridCont mincho">
                    <div class="grid1">
                      <p>平谷村　村長</p>
                    </div>
                    <div class="grid2">
                      <h3>西川 清海</h3>
                    </div>
                    <div class="grid3">
                      <p class="p-message__link c-btn"><span>VIEW</span></p>
                    </div>
                  </div>
                </div>
              </a>
            </li>
            <li class="p-message__box p-am p-am--tb p-am--box p-am--box7">
              <a href="message/08.php">
                <div class="p-message__contentWrap">
                  <div class="p-message__img">
                    <img src="images/photo/sugiyama_top.jpg" alt="中部電力株式会社再生可能エネルギーカンパニー 愛知水力センター所長 杉山 竜介">
                  </div>
                  <div class="p-message__text gridCont gridCont--long mincho">
                    <div class="grid1">
                      <p class="long">中部電力株式会社<br>再生可能エネルギーカンパニー<br>愛知水力センター　所長</p>
                    </div>
                    <div class="grid2">
                      <h3>杉山 竜介</h3>
                    </div>
                    <div class="grid3">
                      <p class="p-message__link c-btn"><span>VIEW</span></p>
                    </div>
                  </div>
                </div>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </section>

    <section id="sec04" class="p-secCont box" data-section-name="04">

      <div class="p-contentWrap">
        <div class="c-flexBox">
          <div class="p-panel p-panel--01">
            <div class="p-panel__link p-panel__link--01">
              <div class="p-panel__bg p-panel__bg--01"></div>
              <div class="p-panel__contents gridCont">
                <div class="p-panel__title ttlFlex row-1 grid1 mincho">
                  <p class="num">01</p>
                  <h3 class="p-panel__title__h3">矢作ダム50年のあゆみ</h3>
                </div>
                <!-- <div class="p-panel__desc grid2 mincho u-mb0--sp">
                                        <p></p>
                                    </div> -->
                <a href="special/01/" class="p-panel__btn grid2 u-mb20--sp">
                  <p class="mincho">動画を見る</p>
                </a>
                <a href="exhibition/" class="p-panel__btn grid3">
                  <p class="mincho">記念展示パネルを見る</p>
                </a>
              </div>
            </div>
          </div>
          <div class="p-panel p-panel--02">
            <a href="special/02/" class="p-panel__link p-panel__link--02-04">
              <div class="p-panel__bg p-panel__bg--02"></div>
              <div class="p-panel__contents gridCont">
                <div class="p-panel__title ttlFlex grid1 mincho">
                  <p class="num">02</p>
                  <h3 class="p-panel__title__h3">矢作川未来通信<br><span>（豊田市立西広瀬小学校 活動記録）</span></h3>
                </div>
                <div class="p-panel__desc grid2 mincho">
                  <p>豊田市立西広瀬小学校の児童と地域の方達が毎日行っている「矢作川の水質汚濁調査」を始めとした活動記録を「矢作川未来通信」として上映</p>
                </div>
                <div class="p-panel__btn grid3">
                  <p class="mincho">動画を見る</p>
                </div>
              </div>
            </a>
          </div>
          <div class="p-panel p-panel--03">
            <a href="special/03/" class="p-panel__link p-panel__link--02-04">
              <div class="p-panel__bg p-panel__bg--03"></div>
              <div class="p-panel__contents gridCont">
                <div class="p-panel__title ttlFlex grid1 mincho">
                  <p class="num">03</p>
                  <h3 class="p-panel__title__h3">岐阜県重要無形民俗文化財<br>中山太鼓 演奏</h3>
                </div>
                <div class="p-panel__desc grid2 mincho">
                  <p>岐阜県恵那市串原の中山太鼓保存会による演奏</p>
                </div>
                <div class="p-panel__btn grid3">
                  <p class="mincho">動画を見る</p>
                </div>
              </div>
            </a>
          </div>
          <div class="p-panel p-panel--04">
            <a href="special/04/" class="p-panel__link p-panel__link--02-04">
              <div class="p-panel__bg p-panel__bg--04"></div>
              <div class="p-panel__contents gridCont">
                <div class="p-panel__title ttlFlex row-1 grid1 mincho">
                  <p class="num">04</p>
                  <h3 class="p-panel__title__h3">水源地域紹介</h3>
                </div>
                <div class="p-panel__desc grid2 mincho">
                  <p>矢作ダム水源地域紹介や愛知県企業庁・中部電力事業紹介</p>
                </div>
                <div class="p-panel__btn grid3">
                  <p class="mincho">動画を見る</p>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- <div class="p-bannerArea">
                    <a href="exhibition/" class="p-bannerArea__link">
                        <img src="images/index/banner-panel.jpg" alt="矢作ダム完成50年記念展示パネル" class="u-pc">
                        <img src="images/index/banner-panel--sp.jpg" alt="矢作ダム完成50年記念展示パネル" class="u-sp">
                    </a>
                </div> -->


  </main>


  <div id="no-scroll">
    <div class="p-lastCont">
      <div class="l-inner--small">
        <div class="u-textCenter u-mb15">
          <p class="u-textBold">矢作ダム完成50周年記念事業実行委員会</p>
        </div>
        <div class="u-fitCont">
          <p>国土交通省中部地方整備局矢作ダム管理所、豊田市、恵那市、長野県根羽村、長野県平谷村、<br class="u-pc">愛知県企業庁、中部電力（株）再生可能エネルギーカンパニー愛知水力センター
          </p>
        </div>
      </div>
    </div>
    <div class="l-footer">
      <div class="l-footer__copyright">
        <p>© 2022 国土交通省 中部地方整備局 矢作ダム管理所</p>
      </div>
    </div>

  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/scrollify/1.0.21/jquery.scrollify.min.js"></script>
  <script src="js/jquery-scrollify/my-scrollify.js"></script>
  <script src="js/menu.js"></script>
</body>

<!-- InstanceEndEditable -->
<!-- InstanceEnd -->

</html>