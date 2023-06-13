<?php
//include "get_data_admin.php";
?>

<?php
$live_list  = array();
$goddess_list = array();
$conn = mysqli_connect("localhost", "root", "root***", "mq_links");

$live_data = mysqli_query($conn, "SELECT * FROM model where type='live'");
while ($live_row = mysqli_fetch_assoc($live_data)) {
  $live_list[] = $live_row;
}

$goddess_data = mysqli_query($conn, "SELECT * FROM model where type='goddess'");
while ($goddess_row = mysqli_fetch_assoc($goddess_data)) {
  $goddess_list[] = $goddess_row;
}
$main_data = mysqli_query($conn, "SELECT * FROM model where type='main'");
while ($main_row = mysqli_fetch_assoc($main_data)) {
  $main_list[] = $main_row;
}


// close the database connection
mysqli_close($conn);
?>
<?php
$liveJsonData = json_encode($live_list);
$goddessJsonData = json_encode($goddess_list);
$mainJsonData = json_encode($main_list);
// write the JSON strings into the data.js file
file_put_contents("./assets/js/data.js", "var liveData = " . $liveJsonData . "; var goddessData = " . $goddessJsonData . "; var mainData = " . $mainJsonData .";");
?>
<!DOCTYPE html>
<div style="display: none"></div>

<html lang="zh-CN" data-dpr="1" style="font-size: 41.4px">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <meta
      name="viewport"
      content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=no"
    />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="full-screen" content="yes" />
    <meta name="x5-fullscreen" content="true" />
    <meta name="applicable-device" content="mobile" />
    <title>梦幻娱乐app_官方下载</title>
    <link rel="stylesheet" href="/assets/css/swiper.min.css" />
    <link rel="stylesheet" href="/assets/css/m.css" />
    <!-- <script src="/assets/js/jquery-3.6.4.min.js"></script> -->

        <!-- FOR COPY SECTION -->

        <link rel="stylesheet" href="/tg6/css/style.min.css" />
        <link rel="stylesheet" href="/tg6/css/Swiper.css" />
        <!--页面样式-->
        <link rel="stylesheet" href="/tg6/css/animate.min.css" />
        <!--CSS3动画库-->
        <script src="/tg6/js/rem.js"></script>
        <!--设置字体大小-->
        <script type="text/javascript" charset="UTF-8"
            src="/appinstall.js"></script>
            
        <!-- FOR COPY SECTION -->
<!--  web 集成  start -->
<!-- 以下为appinstall集成代码，建议在html文档中尽量靠前放置，加快初始化过程 -->
<script type="text/javascript" charset="UTF-8" src="./appinstall.js"></script>
<!--script type="text/javascript" charset="UTF-8" src="/jquery-3.4.1.min.js"></script-->
<script type="text/javascript">
  	//AppInstall初始化时将与appinstall服务器交互，应尽可能早的调用
	/*web页面向app传递的json数据(json string/js Object)，应用被拉起或是首次安装时，通过相应的android/ios api可以获取此数据*/
	var data = AppInstall.parseUrlParams();///web/appinstall.js中提供的工具函数，解析url中的所有查询参数
	new AppInstall({
		/*appKey必选参数，平台为每个应用分配的ID*/
		appKey : "omu1iztu",
		/*直接指定渠道编号，默认通过当前页url中的channelCode参数自动检测渠道编号*/
		//channelCode:"渠道编号",
		/*自定义遮罩的html*/
		//mask:function(){
:		//  return "<div id='_shadow' style='position:fixed;left:0;top:0;background:rgba(0,255,0,0.5);filter:alpha(opacity=50);width:100%;height:100%;z-index:10000;'></div>"
		//},
		/*初始化完成的回调函数，可选*/
		onready : function() {
			/*用户点击某个按钮时(假定按钮id为downloadButton)，安装app*/
//			var m = this, button = document.getElementsByClassName("down_app");

				var m = this;
				$(".down_app").click(function () {
					console.log('点击下载:', m);
					m.install();
					return false;
				});

			/*button.onclick = function() {
			console.log('点击下载',m,button)
				m.install();
				/*跳过scheme拉起，直接安装*/
				//m.install({data:data,channelCode:"test-channelcode"});//延迟指定绑定参数与渠道编号
/*				return false;
			}*/
		}
	}, data);
</script>
<!--  web 集成  end -->

    <script>
      var android_app = ""
      var ios_app = ""

      document.addEventListener("DOMContentLoaded", function () {
        var xhr = new XMLHttpRequest()
        xhr.open("POST", "./admin/api.php")
        xhr.setRequestHeader(
          "Content-Type",
          "application/x-www-form-urlencoded"
        )
        xhr.onload = function () {
          if (xhr.status === 200) {
            var response = JSON.parse(xhr.responseText)
            android_app = response.android_app
            ios_app = response.ios_app
            document.querySelector("#m_service").href =
              response.m_customer_service
            document.querySelector("#d_service").href =
              response.customer_service
          }
        }
        xhr.send("action=get_links")
      })

      function getSystemInfo() {
        var us = navigator.userAgent.toLowerCase()
        if (
          us.indexOf("android") > -1 ||
          us.indexOf("linux") > -1 ||
          navigator.platform.toLowerCase().indexOf("linux") != -1
        ) {
          return "android"
        } else if (us.indexOf("iphone") > -1 || us.indexOf("ipad") > -1) {
          return "ios"
        }
      }

      function downloadapp() {
        if (getSystemInfo() == "ios") {
          var url = ios_app
          window.location.href = url
        } else {
          var url = android_app
          window.location.href = url
        }
      }
    </script>
    <script src="/assets/js/hm.js"></script>
    <script src="/assets/js/flexible.js"></script>

    <style>
      .kefu {
        bottom: 4rem;
        height: inherit;

        cursor: pointer;
        position: fixed;
        right: 0.533333rem;
        width: 1.266667rem;
        z-index: 1000;
        overflow: hidden;
      }

      .kefu img {
        width: 100%;
        height: 100%;
        display: block;
        margin: 0 auto;
      }

      /* 遮罩层 */
      .modal {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.2);
        z-index: 1;
      }

      .modal-content {
        position: relative;
        border-radius: 0.125rem;
        z-index: 2;
      }

      .modal-body {
        position: absolute;
        top: 300px;
        left: 0;
        margin-left: 66%;
      }

      .cancen {
        position: absolute;
        top: -1%;
        left: 100%;
        cursor: pointer;
      }

      .code_box2 {
        width: 200px;
        height: 200px;
        background-color: #fff;
        border-radius: 5px;
        overflow: hidden;
        margin: 0 auto;
      }

      .code_imgs img {
        width: 100%;
        height: 100%;
      }

      .bg {
        display: none;
      }

      * {
        margin: 0;
        padding: 0;
      }

      .bjs {
        width: 100%;
        height: 100%;
        background: url("/assets/images/index.webp") no-repeat;
        background-size: 100%;
        overflow: hidden;
      }

      .bj_content {
        width: 30%;
        height: 500px;
        margin: 0 auto;
        margin-top: 10%;
      }

      .sjs {
        width: 50%;
        height: 500px;
        margin-top: 10%;
      }

      .bj_contents {
        width: 150px;
        height: auto;
        margin: 0 auto;
      }

      .bj_contents img {
        width: 100%;
        height: 100%;
      }

      .tup3 {
        width: 300px;
        margin: 0 auto;
        margin-top: 20px;
      }

      .tup3 img {
        width: 100%;
        height: 100%;
      }

      .xiz1 {
        height: 50px;
        margin: 0 auto;
        margin-top: 20%;
        display: flex;
        justify-content: space-around;
      }

      .sjs img {
        height: 100%;
        margin-left: 25%;
      }

      .right_box {
        width: 100%;
        height: 500px;
        margin-top: 10%;
      }

      .logos {
        width: 200px;
        height: 80px;
        margin: 0 auto;
      }

      .logos img {
        width: 100%;
        height: 100%;
      }

      .fbt {
        width: 400px;
        height: 50px;
        margin: 0 auto;
        margin-top: 5%;
      }

      .fbt img {
        width: 100%;
        height: 100%;
      }

      .dz {
        width: 480px;
        height: 60px;
        margin: 0 auto;
        margin-top: 5%;
      }

      .dz img {
        width: 100%;
        height: 100%;
      }

      .xiaz {
        width: 480px;
        height: 10px;
        display: flex;
        justify-content: space-between;
        margin: 0 auto;
        margin-top: 5%;
      }

      .xxz {
        width: 220px;
        height: 55px;
      }

      .xxz img {
        width: 100%;
        height: 100%;
      }

      .xazi1 {
        width: 150px;
        height: auto;
      }

      .xazi1 img {
        width: 100%;
        margin-right: 10%;
      }

      @media (max-width: 991.98px) {
        .bjs {
          display: none;
        }

        .bg {
          display: block;
          width: 100%;
          background: url("/assets/images/bj4.jpg") no-repeat;
          background-size: 100%;
          overflow: hidden;
        }

        .kf {
          width: 120px;
          height: 40px;
        }

        .kf img {
          width: 100%;
          height: 100%;
          margin-top: 20px;
        }

        .tb {
          width: 100%;
          height: auto;
          display: flex;
          justify-content: space-between;
        }

        .tb1 {
          width: 35%;
          height: auto;
          margin-top: 10px;
          margin-left: 10px;
        }

        .tb1 img {
          width: 100%;
          height: 100%;
        }

        .sj img {
          width: 100%;
        }

        .logo1 {
          width: 120px;
          height: 50px;
          margin-top: 5px;
        }

        .logo1 img {
          width: 100%;
          height: auto;
        }

        .xz {
          width: 30%;
          height: 40px;
          margin-top: 10px;
        }

        .xz img {
          width: 100%;
        }

        .logo1_box {
          display: flex;
          justify-content: space-between;
          width: 100%;
          /* background: url("./image/logo21.png") no-repeat; */
          background-size: 100%;
          position: fixed;
          bottom: 0;
        }

        .logo1_box2 {
          display: flex;
          justify-content: space-between;
          width: 97%;
          margin: 0 auto;
        }
      }
    </style>
  </head>

  <body style="font-size: 12px; height: 736px; width: 414px">
    <div class="bjs">
      <div class="bj_content">
        <div class="bj_contents">
          <img src="/assets/images/img4.png" alt="" />
        </div>
        <div class="tup3">
          <img src="/assets/images/tup3.png" alt="" />
        </div>
        <div class="xiz1">
          <div class="xazi1" id="js_shows">
            <img src="/assets/images/xazi1.png" alt="" />
          </div>
          <div class="xazi1">
            <a href="#" id="d_service"
              ><img src="/assets/images/kefu2.png" alt=""
            /></a>
          </div>
        </div>
      </div>
    </div>
    <div class="zzz">
      <header>
        <input
          id="bar2"
          readonly=""
          style="
            position: absolute;
            bottom: 0;
            left: -9rem;
            opacity: 0;
            width: 100px;
            height: 200px;
            z-index: 999;
          "
        />
        <img class="appLogo" src="/assets/images/logo_1.png" alt="" />
        <p><label class="appName">梦幻娱乐</label>app，18岁以下禁入！</p>
        <a
          onclick="downloadapp();"
          class="js_down_app"
          data-clipboard-target="#bar2"
          >下载APP</a
        >
      </header>

      <section class="swiper">
        <div
          class="swiper-container swiper-container-horizontal swiper-container-ios"
        >
          <div
            class="swiper-wrapper-d admin-swipper-image"
            style="
              transition-duration: 0ms;
              transform: translate3d(-828px, 0px, 0px);
            "
          >
        </div>
          <div
            class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets"
          >
            <span
              class="swiper-pagination-bullet"
              tabindex="0"
              role="button"
              aria-label="Go to slide 1"
            ></span>
            <span
              class="swiper-pagination-bullet swiper-pagination-bullet-active"
              tabindex="0"
              role="button"
              aria-label="Go to slide 2"
            ></span>
            <span
              class="swiper-pagination-bullet"
              tabindex="0"
              role="button"
              aria-label="Go to slide 3"
            ></span>
            <span
              class="swiper-pagination-bullet"
              tabindex="0"
              role="button"
              aria-label="Go to slide 4"
            ></span>
            <span
              class="swiper-pagination-bullet"
              tabindex="0"
              role="button"
              aria-label="Go to slide 5"
            ></span>
            <span
              class="swiper-pagination-bullet"
              tabindex="0"
              role="button"
              aria-label="Go to slide 6"
            ></span>
          </div>
          <span
            class="swiper-notification"
            aria-live="assertive"
            aria-atomic="true"
          ></span>
        </div>
      </section>

      <section class="live">
        <div class="titH">
          热门直播
          <div class="status">
            <div class="zb_load">
              <span class="z1"></span>
              <span class="z2"></span>
              <span class="z3"></span>
              <span class="z4"></span>
            </div>
          </div>
        </div>
        <ul>
          <li>
            <a href="#" data-id="204736">
              <span class="pic">
                <span class="amount">2169</span> <span class="tag tag1"></span>
                <span class="distance">0.4km</span>
                <div class="userTagInfo">
                  <div class="trueuser_icon"></div>
                  <div class=""></div>
                </div>
              </span>
              <div class="des">
                <p class="name">若熙<span>20岁</span></p>
                <p>女神等你来撩</p>
              </div>
            </a>
          </li>
          <li>
            <a href="#" data-id="204737">
              <span class="pic">
                <span class="amount">1555</span> <span class="tag tag2"></span>
                <span class="distance">1.4km</span>
                <div class="userTagInfo">
                  <div class="trueuser_icon"></div>
                  <div class=""></div>
                </div>
              </span>
              <div class="des">
                <p class="name">梦楠<span>23岁</span></p>
                <p>骚年~能忍得住我舌头的挑逗吗</p>
              </div>
            </a>
          </li>
          <li>
            <a href="#" data-id="204738">
              <span class="pic">
                <span class="amount">1428</span> <span class="tag tag3"></span>
                <span class="distance">2.3km</span>
                <div class="userTagInfo">
                  <div class="trueuser_icon"></div>
                  <div class=""></div>
                </div>
              </span>
              <div class="des">
                <p class="name">Yumi<span>24岁</span></p>
                <p>Yumi给你温暖，抱抱我</p>
              </div>
            </a>
          </li>
          <li>
            <a href="#" data-id="204739">
              <span class="pic">
                <span class="amount">2459</span> <span class="tag tag1"></span>
                <span class="distance">3.4km</span>
                <div class="userTagInfo">
                  <div class="trueuser_icon"></div>
                  <div class=""></div>
                </div>
              </span>
              <div class="des">
                <p class="name">艾小青<span>23岁</span></p>
                <p>喜欢直接的哥哥，摸摸大…</p>
              </div>
            </a>
          </li>
          <li>
            <a href="#" data-id="204740">
              <span class="pic">
                <span class="amount">2454</span> <span class="tag tag3"></span>
                <span class="distance">2.3km</span>
                <div class="userTagInfo">
                  <div class="trueuser_icon"></div>
                  <div class=""></div>
                </div>
              </span>
              <div class="des">
                <p class="name">谭晓晓<span>21岁</span></p>
                <p>哥哥轻点，我怕疼~</p>
              </div>
            </a>
          </li>
          <li>
            <a href="#" data-id="204740">
              <span class="pic">
                <span class="amount">2964</span> <span class="tag tag1"></span>
                <span class="distance">3.4km</span>
                <div class="userTagInfo">
                  <div class="trueuser_icon"></div>
                  <div class=""></div>
                </div>
              </span>
              <div class="des">
                <p class="name">朱可儿<span>23岁</span></p>
                <p>清纯嫩模，求哥哥关爱。</p>
              </div>
            </a>
          </li>
        </ul>
      </section>

      <!-- <section class="goddess">
        <div class="titH">
          <label class="appName">女神</label>
          <p>
            <span>性感</span>
            <span>高清美女</span>
          </p>
        </div>
        <ul>
          <li>
            <a
              onclick="downloadapp();"
              class="js_down_app"
              data-clipboard-target="#bar2"
            >
              <span class="pic">
                <span class="amount">1428</span>
              </span>
              <p>翘臀销魂大尺度 BOBO </p>
            </a>
          </li>
          <li>
            <a
              onclick="downloadapp();"
              class="js_down_app"
              data-clipboard-target="#bar2"
            >
              <span class="pic">
                <span class="amount">1987</span>
              </span>
              <p>妩媚妖娆 求深入了解~</p>
            </a>
          </li>
          <li>
            <a
              onclick="downloadapp();"
              class="js_down_app"
              data-clipboard-target="#bar2"
            >
              <span class="pic"> <span class="amount">2118</span> </span>
              <p>巨乳肥臀激情四射</p>
            </a>
          </li>
          <li>
            <a
              onclick="downloadapp();"
              class="js_down_app"
              data-clipboard-target="#bar2"
            >
              <span class="pic"> <span class="amount">1521</span> </span>
              <p>巨大波波荡漾无常~欢迎来撩~</p>
            </a>
          </li>
        </ul>
      </section>

      <a href="#" class="more js_pop">更多女神</a>

      <section class="comment">
        <div class="titH">热门评论</div>
        <ul>
          <li>
            <a href="#" class="clearfix">
              <span class="adver"> </span>
              <div class="tit">
                <h5>大将军</h5>
                <span>30秒前</span>
              </div>
              <p class="des">同事说能看，我还不信，原来真的能看~</p>
            </a>
          </li>
          <li>
            <a href="#" class="clearfix">
              <span class="adver"> </span>
              <div class="tit">
                <h5>小星星</h5>
                <span>45秒前</span>
              </div>
              <p class="des">朋友推荐的，主播果然够惹火啊~好看~~</p>
            </a>
          </li>
          <li>
            <a href="#" class="clearfix">
              <span class="adver"> </span>
              <div class="tit">
                <h5>夜袭寡妇村</h5>
                <span>55秒前</span>
              </div>
              <p class="des">主播很漂亮，比一般的直播颜值要高</p>
            </a>
          </li>
          <li>
            <a href="#" class="clearfix">
              <span class="adver"> </span>
              <div class="tit">
                <h5>芳华正茂</h5>
                <span>1分钟前</span>
              </div>
              <p class="des">和妹子聊嗨了，还有热舞看，很不错</p>
            </a>
          </li>
          <li>
            <a href="#" class="clearfix">
              <span class="adver"> </span>
              <div class="tit">
                <h5>大侠饶命</h5>
                <span>2分钟前</span>
              </div>
              <p class="des">老婆不在的时候，一个人看看还是蛮开心的</p>
            </a>
          </li>
        </ul>
      </section> -->
      <div class="team" onClick="DownSoft();">
        <div class="title">
            <img src="/tg6/img/fbab40_674x102.png" alt="">
        </div>
        <div class="conts">
            <div class=" list swiper-no-swiping">
                <ul class="swiper-wrapper-d">
                    <li class="swiper-slide">
                        <img src="/tg6/img/cc612c_158x158.png" alt="">
                    </li>
                    <li class="swiper-slide">
                        <img src="/tg6/img/cb7d3c_158x158.png" alt="">
                    </li>
                    <li class="swiper-slide">
                        <img src="/tg6/img/89d7eb_158x158.png" alt="">
                    </li>
                    <li class="swiper-slide">
                        <img src="/tg6/img/accbe2_158x158.png" alt="">
                    </li>
                    <li class="swiper-slide">
                        <img src="/tg6/img/7d16b2_158x158.png" alt="">
                    </li>
                    <li class="swiper-slide">
                        <img src="/tg6/img/1737ad_158x158.png" alt="">
                    </li>

                </ul>
            </div>
            <div class=" list swiper-no-swiping" dir="rtl">
                <ul class="swiper-wrapper-d">
                    <li class="swiper-slide">
                        <img src="/tg6/img/b027d4_158x158.png" alt="">
                    </li>
                    <li class="swiper-slide">
                        <img src="/tg6/img/7ec4a4_158x158.png" alt="">
                    </li>
                    <li class="swiper-slide">
                        <img src="/tg6/img/e3c38c_158x158.png" alt="">
                    </li>
                    <li class="swiper-slide">
                        <img src="/tg6/img/3957db_158x158.png" alt="">
                    </li>
                    <li class="swiper-slide">
                        <img src="/tg6/img/3d7402_158x158.png" alt="">
                    </li>
                    <li class="swiper-slide">
                        <img src="/tg6/img/5c86e1_158x158.png" alt="">
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="hots" onClick="DownSoft();" style="margin-bottom: 2rem!important;">
        <div class="title">
            <img src="/tg6/img/2f6067_674x102.png" alt="">
        </div>
        <div class="conts">
            <div class=" list">
                <ul class="swiper-wrapper-d">
                    <li class="swiper-slide">
                        <img src="/tg6/img/5edcde_336x530.png" alt="">
                    </li>
                    <li class="swiper-slide">
                        <img src="/tg6/img/7c6053_336x530.png" alt="">
                    </li>
                    <li class="swiper-slide">
                        <img src="/tg6/img/be1e83_336x530.png" alt="">
                    </li>
                    <li class="swiper-slide">
                        <img src="/tg6/img/0447cb_336x530.png" alt="">
                    </li>
                    <li class="swiper-slide">
                        <img src="/tg6/img/22f209_336x530.png" alt="">
                    </li>
                    <li class="swiper-slide">
                        <img src="/tg6/img/4baaad_336x530.png" alt="">
                    </li>
                </ul>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </div>
      <footer>
        <img class="appLogo" src="/assets/images/logo_1.png" />
        <p>
          <span><label class="appName">梦幻娱乐</label>APP</span>
          <span>您的女神还有4秒抵达战场 →</span>
        </p>
        <a
          class="js_down_app btn_down"
          onclick="downloadapp();"
          data-clipboard-target="#bar2"
          >免费下载</a
        >
      </footer>
      <div class="kefu">
        <a href="#" id="m_service"> <img src="/assets/images/kef.png" /></a>
      </div>
      <div class="go_top">
        <img src="/assets/images/go_top.png" />
      </div>

      <div class="cover t_cover"></div>
      <div class="layer ucTips">
        <span class="t_close"></span>
        <p>
          您当前使用的是 UC
          浏览器，该浏览器不支持安装App。请在safari浏览器中打开，即可下载
        </p>
        <input type="text" id="pageUrl" value="" />
        <a href="#" class="js_copy" data-clipboard-target="#pageUrl"
          >复制链接</a
        >
      </div>
      <div class="layer t_layer">
        <img class="appLogo" src="/assets/images/aqh1.png" />
        <span class="t_close"></span>
        <p>
          为保护该主播隐私，<br />请下载<label class="appName">梦幻娱乐</label
          >APP观看激情表演，<br />建议18岁以上下载观看
        </p>
        <a
          onclick="downloadapp();"
          class="js_down_app"
          data-clipboard-target="#bar2"
          >立即下载</a
        >
      </div>
      <div class="mask" id="js_box2">
        <div class="alert-box">
          <div class="now-download">
            “<label class="appName">模特直播</label>”安装中...
          </div>
          <div class="close-btn" id="js_closeBtn2"></div>
          <div class="alert-btn">
            <div class="color-bar top-bar"></div>
            <div class="color-bar buttom-bar"></div>
          </div>
          <div class="course_pic"><img src="/assets/images/course.gif" /></div>
        </div>
      </div>
    </div>
    <!-- 弹窗 -->
    <div class="modal">
      <div class="modal-content">
        <div class="modal-body">
          <div class="code_box2">
            <div class="code_imgs" id="qrcode1" title="">
              <img width="200" height="200" src="/assets/images/qrcode.jpg" />
            </div>
          </div>
          <button class="cancen">x</button>
        </div>
      </div>
    </div>
    <script src="/assets/js/common.min.js"></script>
    <script src="/assets/js/swiper.min.js"></script>
    <script src="/assets/js/clipboard.min.js"></script>
    <script src="/assets/js/data.js"></script>
    <script src="/assets/js/m.js"></script>
    <script src="/assets/js/qrcode.min.js"></script>

    <script>
      var config = { android_url: "", ios_url: "" }
      var os = navigator.userAgent
      var devices = (function () {
        var u = navigator.userAgent,
          app = navigator.appVersion
        return {
          isAndroid: u.indexOf("Android") > -1 || u.indexOf("Linux") > -1,
          isIOS: !!u.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/),
          isSafari: u.indexOf("Safari") > -1,
          isQQ: u.match(/QQ\/[0-9]/i),
          isWx: u.match(/MicroMessenger\/[0-9]/i),
        }
      })()
      function getUrl() {
        if (devices.isIOS) {
          return config.ios_url
        } else {
          //安卓或其他平台 全部跳转安卓地址
          return config.android_url
        }
      }
      function jump() {
        window.location.href = getUrl()
      }

      $(function ($) {
        var inviteCode = ""

        function init() {
          var req = GetRequest()
          inviteCode = req["parent_icode"]
          if (inviteCode == undefined) {
            inviteCode = ""
          }
          $("#bar2").val(inviteCode)
          initClipboard()
        }

        function GetRequest() {
          var url = location.search //获取url中"?"符后的字串
          var theRequest = new Object()
          if (url.indexOf("?") != -1) {
            var str = url.substr(1)
            strs = str.split("&")
            for (var i = 0; i < strs.length; i++) {
              theRequest[strs[i].split("=")[0]] = unescape(
                strs[i].split("=")[1]
              )
            }
          }
          return theRequest
        }

        //复制粘贴
        function initClipboard() {}
        init()

        function getSystemInfo() {
          var us = navigator.userAgent.toLowerCase()
          if (
            us.indexOf("android") > -1 ||
            us.indexOf("linux") > -1 ||
            navigator.platform.toLowerCase().indexOf("linux") != -1
          ) {
            return "android"
          } else if (us.indexOf("iphone") > -1 || us.indexOf("ipad") > -1) {
            return "ios"
          }
        }

        $("body").on("click", ".editSrc,.js_down,.more", function () {
          $(".cover,.ucTips,.t_layer").show()
        })
      })
      // 打开弹窗
      var div = document.getElementById("js_shows")
      div.onclick = function () {
        var modal = document.querySelector(".modal")
        modal.style.display = "block"
      }
      // 点击取消 关闭弹窗
      var cancen = document.querySelector(".cancen")
      cancen.onclick = function () {
        var modal = document.querySelector(".modal")
        modal.style.display = "none"
      }
    </script>

<script src="/tg6/js/jquery-2.2.4.min.js"></script>
<!--jQ库-->
<script src="/tg6/js/swiper-4.2.0.min.js"></script>
<!--轮播库-->
<!--封装函数-->
<script>
    var swiper = new Swiper('.team .conts .list', {
        slidesPerView: 'auto',
        speed: 2500,//匀速时间
        loop: true,
        autoplay: {
            delay: 0,
            stopOnLastSlide: false,
            disableOnInteraction: true,
        },

    });
    var swiper = new Swiper('.hots .list', {
        effect: 'coverflow',
        // grabCursor: false,
        centeredSlides: true,
        slidesPerView: '3',
        loop: true,
        coverflowEffect: {
            rotate: 30,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows: true,
        },
        autoplay: {
            delay: 2500,
            disableOnInteraction: false
        },
        navigation: {
            nextEl: '.hots .list .swiper-button-next',
            prevEl: '.hots .list .swiper-button-prev',
        },
        // 如果需要前进后退按钮
    });
    var arr = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
    var i = 0;

    function web() {
        i++;
        if (i < 26) {

            $('.webtxt').text(arr[i] + arr[i])
        } else {
            i = 0;
            $('.webtxt').text(arr[i] + arr[i])
        }
    }
    var timer = setInterval(web, 1000);
    let app = new AppInstall({
        appKey: "ktxi7gsc"
    }, AppInstall.parseUrlParams());

    function DownSoft() {
        app.wakeupOrInstall();
    }
</script>
  </body>
</html>
