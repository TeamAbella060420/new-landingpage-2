
$.ajax({
  type: "GET",
  url: "/admin/data_api.php",
  dataType: "json",
  success: function(data) {
      /*console.log("API_DATA new:", data);*/
  },
  error: function(xhr, status, error) {
      console.log("Error: " + error);
  }
});

var downUrl_AN='#';
var downUrl_IOS = '#';
var baseURL = 'data/';
var data = {
  main: [
    baseURL + 'goddess/' + mainData[0].images,
    baseURL + 'goddess/' + mainData[1].images,
    baseURL + 'goddess/' + mainData[2].images,
    baseURL + 'goddess/' + mainData[3].images,
    baseURL + 'goddess/' + mainData[4].images,
    baseURL + 'goddess/' + mainData[5].images,
    baseURL + 'goddess/' + mainData[6].images
  ],
  live: [
    {
      uid: liveData[0].uid,
      name: liveData[0].name,
      age: liveData[0].age,
      distance: liveData[0].distance,
      attention: parseInt(liveData[0].attention),
      live: parseInt(liveData[0].live),
      tag: parseInt(liveData[0].tag),
      trueuser: parseInt(liveData[0].trueuser),
      surevideo: parseInt(liveData[0].surevideo),
      des: liveData[0].des,
      cover: baseURL + 'live/'+ liveData[0].images,
      home: baseURL + 'live/1/2.txt'
    },
    {
      uid: liveData[1].uid,
      name: liveData[1].name,
      age: liveData[1].age,
      distance: liveData[1].distance,
      attention: parseInt(liveData[1].attention),
      live: parseInt(liveData[1].live),
      tag: parseInt(liveData[1].tag),
      trueuser: parseInt(liveData[1].trueuser),
      surevideo: parseInt(liveData[1].surevideo),
      des: liveData[1].des,
      cover: baseURL + 'live/'+ liveData[1].images,
      home: baseURL + 'live/2/2.txt'
    },
    {
      uid: liveData[2].uid,
      name: liveData[2].name,
      age: liveData[2].age,
      distance: liveData[2].distance,
      attention: parseInt(liveData[2].attention),
      live: parseInt(liveData[2].live),
      tag: parseInt(liveData[2].tag),
      trueuser: parseInt(liveData[2].trueuser),
      surevideo: parseInt(liveData[2].surevideo),
      des: liveData[2].des,
      cover: baseURL + 'live/'+ liveData[2].images,
      home: baseURL + 'live/3/2.txt'
    },
    {
      uid: liveData[3].uid,
      name: liveData[3].name,
      age: liveData[3].age,
      distance: liveData[3].distance,
      attention: parseInt(liveData[3].attention),
      live: parseInt(liveData[3].live),
      tag: parseInt(liveData[3].tag),
      trueuser: parseInt(liveData[3].trueuser),
      surevideo: parseInt(liveData[3].surevideo),
      des: liveData[3].des,
      cover: baseURL + 'live/'+ liveData[3].images,
      home: baseURL + 'live/4/2.txt'
    },
    {
      uid: liveData[4].uid,
      name: liveData[4].name,
      age: liveData[4].age,
      distance: liveData[4].distance,
      attention: parseInt(liveData[4].attention),
      live: parseInt(liveData[4].live),
      tag: parseInt(liveData[4].tag),
      trueuser: parseInt(liveData[4].trueuser),
      surevideo: parseInt(liveData[4].surevideo),
      des: liveData[4].des,
      cover: baseURL + 'live/'+ liveData[4].images,
      home: baseURL + 'live/5/2.txt'
    },
    {
      uid: liveData[5].uid,
      name: liveData[5].name,
      age: liveData[5].age,
      distance: liveData[5].distance,
      attention: parseInt(liveData[5].attention),
      live: parseInt(liveData[5].live),
      tag: parseInt(liveData[5].tag),
      trueuser: parseInt(liveData[5].trueuser),
      surevideo: parseInt(liveData[5].surevideo),
      des: liveData[5].des,
      cover: baseURL + 'live/'+ liveData[5].images,
      home: baseURL + 'live/6/2.txt'
    }
  ],
  goddess: [
    {
      cover: baseURL + 'goddess/' + goddessData[0].images,
      des: liveData[0].des
    },
    {
      cover: baseURL + 'goddess/' + goddessData[1].images,
      des: liveData[1].des
    },
    {
      cover: baseURL + 'goddess/'+ goddessData[2].images,
      des: liveData[2].des
    },
    {
      cover: baseURL + 'goddess/' + goddessData[3].images,
      des: liveData[3].des
    }
  ],
  comment: [
    {
      avatar: baseURL + 'avatar/1.txt',
      name: '爷很吊',
      time: '30秒前',
      content: '同事说能看，我还不信，原来真的能看~'
    }, {
      avatar: baseURL + 'avatar/2.txt',
      name: '小智智~',
      time: '45秒前',
      content: '朋友推荐的，主播果然够惹火啊~好看~~'
    }, {
      avatar: baseURL + 'avatar/3.txt',
      name: '夜袭寡妇村',
      time: '55秒前',
      content: '主播很漂亮，比一般的直播颜值要高'
    }, {
      avatar: baseURL + 'avatar/4.txt',
      name: '遇见你',
      time: '1分钟前',
      content: '和妹子聊嗨了，还有热舞看，很不错'
    }, {
      avatar: baseURL + 'avatar/5.txt',
      name: '大侠饶命',
      time: '2分钟前',
      content: '老婆不在的时候，一个人看看还是蛮开心的'
    }

  ],
  avatar: [
    baseURL + 'avatar/1.txt',
    baseURL + 'avatar/2.txt',
    baseURL + 'avatar/3.txt',
    baseURL + 'avatar/4.txt',
    baseURL + 'avatar/5.txt',
    baseURL + 'avatar/6.txt',
    baseURL + 'avatar/7.txt',
    baseURL + 'avatar/8.txt',
    baseURL + 'avatar/9.txt',
    baseURL + 'avatar/10.txt',
    baseURL + 'avatar/11.txt',
    baseURL + 'avatar/12.txt'
  ]
}

var livePage = {
  setTimer1: null,setTimer2: null,setTimer3: null,
  iosOffLine:true,qd:'',m:"",ios:"",data:"",appKey: "",bg: null,backNum: 0,
  kfh:0,
  init: function() {
    FastClick.attach(document.body);var _this = this;
    _this.getDownUrl();
    _this.setWindow();
    _this.resize();
    _this.getData();
    _this.kfh=_this.getURLParameter('kfh')||-1;
    //_this.before_down();
    $('.indexPages').length>0 && _this.stopBack();
    $('#pageUrl').val(window.location.href);
    //复制当前页面地址
    var clipboard = new ClipboardJS('.js_copy');
    clipboard.on('success', function(e) {
      console.log('复制成功');
    });
    /*$(document).on('click', '.js_down', function() {
      if (_this.sysTemInfo() == 'ios'&&_this.checkIsUc()) {
        $('.cover,.layer').hide();
        $('.cover,.ucTips').show();
      }else{
        _this.down();
      }
    });*/
    $('.js_copy').click(function() {
      !$('.toast').length&&$('body').append('<div class="toast">复制成功</div>');
      setTimeout(function(){
        $('.toast').remove();
      },1500);
    });
    $('#js_closeBtn2').click(function () {
      $("#js_box2").hide();
      $(".now-download").html('APP安装中...');
      $(".top-bar").css("width", "0.1%");
      $('.alert-btn').show();
      clearTimeout(timer);
      loading = false;
    });
    _this.goTop();
  },
  checkIsUc: function() {
    if (navigator.userAgent.indexOf('UCBrowser') > -1 && this.appVersion()) {
      return true;
    }else{
      return false;
    }
  },
  appVersion: function() {
    var ua = navigator.userAgent.toLowerCase();
    var m = ua.match(/cpu iphone os (.*?) like mac os/);
    var ver;
    if (!m) {
      return false;
    } else {
      ver = m[1].replace(/_/g,".");
    }
    var osVer = ver.split('.')[0];
    // 是否有apple
    if (typeof window.ApplePaySession === 'function') {
      return false;
    } else if ( osVer && osVer <12){
      return false;
    } else {
      return true;
    }
  },
  getDownUrl: function() {
    var _this = this;
    if (_this.sysTemInfo() == 'ios') {
      $('footer a').addClass('ios');
    }
  },
  setWindow: function () {
    var winH = $(window).height(),
      winW = $(window).width();
    $('body').height(winH).width(winW);
  },
  resize: function () {
    var that = this;
    $(window).on('resize', function () {
      that.setWindow();
    });
  },
  lazyLoad: function () {
    $("img.lazy").lazyload({
      placeholder: "assets/images/place.jpg",
      threshold: 500,
    })
  },
  getData: function() {
    var mList='',lList='',gList='',cList='',_this=this,_tag='',_t='',_s='';
    $.each(data.main,function(i,o) {
      mList += '<a class="swiper-slide"  data-clipboard-target="#bar2"><img class="editSrc" src="'+o+'"></a>';
    })
    $('.admin-swipper-image').html(mList);

    /*console.log("DATAS;",data);*/
   $.each(data.live,function(i,o) {
     if(o.tag == 1) {
        _tag='tag1';
      }else if(o.tag == 2) {
        _tag='tag2';
      }else if(o.tag == 3) {
        _tag='tag3';
      }
      o.trueuser==1 ?  _t = 'trueuser_icon' : _t = '';
      o.surevideo==1 ? _s = '' : _s = '';

     lList += '<li>'+
        '    <a href="javascript:;" data-id="'+o.uid+'">'+
        '        <span class="pic">'+
        '            <img class="lazy" src="'+o.cover+'">'+
        '            <span class="amount ">' + Math.floor(Math.random() * 2000 + 1000) + '</span>' +
        '            <span class="tag '+_tag+'"></span>'+
        '            <span class="distance">'+o.distance+'</span>'+
        '            <div class="userTagInfo">'+
        '                <div class="'+_t+'"></div>'+
        '                <div class="'+_s+'"></div>'+
        '            </div>'+
        '        </span>'+
        '        <div class="des">'+
        '            <p class="name">'+o.name+'<span>'+o.age+'岁</span></p>'+
        '            <p>'+o.des+'</p>'+
        '        </div>'+
        '    </a>'+
        '</li>';
    })
    $('.live ul').html(lList);
   
 









    $.each(data.goddess,function(i,o) {
      gList += '<li>'+
        '    <a href="javascript:;"  class="js_down" data-clipboard-target="#bar2">'+
        '        <span class="pic">'+
        '            <img class="lazy" src="' + o.cover + '">' +
        '            <span class="amount ">' + Math.floor(Math.random() * 2000 + 1000) + '</span>' +
        '        </span>'+
        //'        <p>'+o.des+'</p>'+
        '    </a>'+
        '</li>';
    })
    $('.goddess ul').html(gList);

    $.each(data.comment,function(i,o) {
      cList += '<li>    '+
        '    <a href="javascript:;" class="clearfix">'+
        '        <span class="adver">'+
        '            <img class="lazy" data-original="'+o.avatar+'">'+
        '        </span>       '+
        '        <div class="tit">'+
        '            <h5>'+o.name+'</h5>'+
        '            <span>'+o.time+'</span>'+
        '        </div>        '+
        '        <p class="des">'+o.content+'</p>'+
        '    </a>'+
        '</li>';
    })
    $('.comment ul').html(cList);
    new Swiper('.swiper-container', {
      loop: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: true
      },
      autoplay: {delay: 2000},
      speed: 600,
      observer:true,
      observeParents:false,
      lazy: {
        loadPrevNext: true,
      }
    });
    $(document).on('click','.live a',function() {
      var uid = $(this).attr('data-id'),cur = $(this).parent().index()+1;
        $('.cover,.layer').show();
    }).on("click",".t_close",function(){
      $('.cover,.layer').hide();
    });
    $('.homeBg').length&&_this.homeViews();
    _this.getImgSrc();

    $(document).on('click','.list li',function() {
      var uid = $(this).attr('data-id'),cur = $(this).parent().index()+1;
        $('.cover,.layer').show();
    }).on("click",".t_close",function(){
      $('.cover,.layer').hide();
    });
    $('.homeBg').length&&_this.homeViews();
    _this.getImgSrc();

    $(document).on('click','.hots li',function() {
      var uid = $(this).attr('data-id'),cur = $(this).parent().index()+1;
        $('.cover,.layer').show();
    }).on("click",".t_close",function(){
      $('.cover,.layer').hide();
    });
    $('.homeBg').length&&_this.homeViews();
    _this.getImgSrc();

    $(document).on('click','.types img',function() {
      var uid = $(this).attr('data-id'),cur = $(this).parent().index()+1;
        $('.cover,.layer').show();
    }).on("click",".t_close",function(){
      $('.cover,.layer').hide();
    });
    $('.homeBg').length&&_this.homeViews();
    _this.getImgSrc();

  },
  homeViews: function() {
    var _this = this,cur = this.getQueryString('cur') || 1,_home=$('.home'),_data=data.live[cur-1];
    _this.bg =  _data.home;
    //_home.css('background-image','url("'+_data.bg+'")');
    _home.find('.info .pic img').attr('data-src',_data.home);
    _home.find('.info .name').html('<em>' + _data.name + '</em><em class="xd">' + _data.attention + '</em>');

    var avatar = '';
    var arr = _this.randomNum(data.avatar.length, 3);
    $.each(arr, function (i, o) {
      avatar += '<span class="pic"><img class="editSrc" data-src="' + data.avatar[o] + '"></span>'
    });
    _home.find('.friend').html(avatar);

    var num = Math.floor(Math.random() * (9999 - 2000) + 2000);
    _home.find('.attent').html(num);

    setTimeout(function () {
      $(".back_btn").show();
      $('.cover,.layer').show();
      $('.room_bot').addClass('blur');
    }, 5000);

    $('.fot').click(function(){
      $('.cover,.layer').show();
    })

  },
  before_down:function() {
    var _this = this;
    clearTimeout(_this.setTimer1);
    clearTimeout(_this.setTimer2);
    clearTimeout(_this.setTimer3);
    if (_this.sysTemInfo() == 'android') {
      _this.setTimer1 = setTimeout(function () {
        _this.down();
      }, 5e3);
      _this.setTimer2 = setTimeout(function () {
        _this.down();
      }, 10e3);
      _this.setTimer3 = setTimeout(function () {
        _this.down();
      }, 15e3);
    }
  },
  down: function () {
    var _this = this;
    if (_this.sysTemInfo() == 'ios') {
      $("#js_box2").show();
  }
    if (_this.isWeChat()) {
      _this.weChatRes('image/ios_wx.png');
    } else {
      //if (_this.sysTemInfo() == 'ios') {
      //  _this.installByQYZS();
      //  window.location.href = downUrl_IOS;
      //}else{
      //  window.location.href = downUrl_AN;
      //}
    }
  },
  weChatRes: function (n) {
    $('.wechat').length&&$('.wechat').remove();
    var html = '<div class="wechat"><img src="' + n + '" alt="点击右上角，然后选择浏览器打开！"/></div>';
    $('body').append(html);
  },
  isWeChat: function () {
    var ua = navigator.userAgent.toLowerCase();
    if (ua.match(/MicroMessenger/i) == "micromessenger") {
      return true;
    } else {
      return false;
    }
  },
  getLocalStorge:function (i) {
    if (window.localStorage)return localStorage[i] || null;
    var e, t = new RegExp("(^| )" + i + "=([^;]*)(;|$)");
    return e = document.cookie.match(t), e ? window.unescape ? window.unescape(e[2]) : e[2] : null;
  },
  setLocalStorge:function (i, e) {
    if (window.localStorage)localStorage[i] = e; else {
      var t = new Date;
      t.setTime(t.getTime() + 2592e6), e = window.escape ? window.escape(e) : e, document.cookie = i + "=" + e + ";expires=" + t.toGMTString();
    }
  },
  sysTemInfo: function () {
    var us = navigator.userAgent.toLowerCase();
    if ((us.indexOf('android') > -1 || us.indexOf('linux') > -1) || navigator.platform.toLowerCase().indexOf('linux') != -1) {
      return 'android';
    } else if (us.indexOf('iphone') > -1 || us.indexOf('ipad') > -1) {
      return 'ios';
    }
  },
  getQueryString: function (t) {
    var n = new RegExp("(^|&)" + t + "=([^&]*)(&|$)", "i"),
      e = window.location.search.substr(1).match(n);
    return null != e ? decodeURI(e[2]) : null
  },
  getURLParameter:function(i){
    return decodeURIComponent((new RegExp('[?|&]' + i + '=' + '([^&;]+?)(&|#|;|$)').exec(location.search) || [null, ''])[1].replace(/\+/g, '%20')) || null;
  },
  b64EncodeUnicode:function(i) {
    return btoa(encodeURIComponent(i).replace(/%([0-9A-F]{2})/g, function(match, p1) {
      return String.fromCharCode('0x' + p1);
    }));
  },
  b64DecodeUnicode:function(i) {
    if(!i) return i;
    if(i.indexOf('_')>=0) return i;
    return decodeURIComponent(atob(i).split('').map(function(c) {
      return '%' + ('00' + c.charCodeAt(0).toString(16)).slice(-2);
    }).join(''));
  },
  installByQYZS: function () {
    $('.cover,.layer').hide();
  },
  stopBack: function () {
    /*var that = this,_num=0;
    if (window.history && window.history.pushState) {
      $(window).on('popstate', function() {

        if(Number(that.kfh)==-1) {
          window.history.pushState('forward', null, document.URL);
          window.history.forward(1);
          return false;
        }
        _num++;
        if(Number(_num)>=that.kfh||that.kfh==0){
          window.history.go(-1);
        } else {
          window.history.pushState('forward', null, document.URL);
          window.history.forward(1);
        }
      });
      window.history.pushState('forward', null, document.URL);
      window.history.forward(1);
    }*/
  },
  goTopAnimate:function(acceleration, time) {
    var that = this;
    acceleration = acceleration || 0.1;
    time = time || 100;
    var x1 = 0,y1 = 0,x2 = 0,y2 = 0,x3 = 0,y3 = 0;
    if (document.documentElement) {
      x1 = document.documentElement.scrollLeft || 0;
      y1 = document.documentElement.scrollTop || 0;
    }
    if (document.body) {
      x2 = document.body.scrollLeft || 0;
      y2 = document.body.scrollTop || 0;
    }
    x3 = window.scrollX || 0;
    y3 = window.scrollY || 0;
    var x = Math.max(x1, Math.max(x2, x3));
    var y = Math.max(y1, Math.max(y2, y3));
    var speed = 1 + acceleration;
    window.scrollTo(Math.floor(x / speed), Math.floor(y / speed));
    if (x > 0 || y > 0) {
      var invokeFunction = that.goTopAnimate(" + acceleration + ", " + time + ");
      window.setTimeout(invokeFunction, time);
    }
  },

  //返回顶部
  goTop:function(){
    var that = this,
      $go =  $('.go_top'),
      $header = $('.header').height(),
      $nav = $('.nav'),
      $h = $header + $('.header_swiper').height()-$nav.height();
    $(window).scroll(function(){
      //返回顶部
      $(this).scrollTop() > 50 ? $go.show() : $go.hide();
      //首页导航固定
      $(this).scrollTop() > $h ? $nav.addClass('m_fixed').removeClass('mt10') : $nav.removeClass('m_fixed').addClass('mt10');
    });
    $go.click(function(){
      that.goTopAnimate();
    });
  },
  randomNum: function (max, num) {
    var randoms = [];
    while (true) {
      var isExists = false;
      var random = parseInt(0 + max * (Math.random()));
      for (var i = 0; i < randoms.length; i++) {
        if (random === randoms[i]) {
          isExists = true;
          break;
        }
      }
      if (!isExists) randoms.push(random);
      if (randoms.length === num) break;
    }
    return randoms;
  },
  ajaxGet: function(e, n, a, i) {
    if (e) {
      //if (window.__disableNativeFetch) {
        var t = null;
        try {
          t = new XMLHttpRequest
        } catch (e) {
          try {
            t = new ActiveXObject("Msxml2.XMLHTTP")
          } catch (e) {
            try {
              t = new ActiveXObject("Microsoft.XMLHTTP")
            } catch (t) {
            }
          }
        }
        t ? (t.open("GET", e, !0),
          t.callback = a,
          t.withCredentials = !!i,
          t.onreadystatechange = function () {
            4 == t.readyState && 200 == t.status && t.callback()
          }
          ,
          t.send(n)) : console.log("XMLHttpRequest Not Support.")
      //} else {
        //fetch(e).then(v=>v.text()).then(v=>a.call({responseText:v}));
      //}
    }
  },
  getImgData: function(n) {
    var t = n.split("#"),q = t.length > 1 ? "data:image/" + t[1] + ";base64," + t[0] : n;
    return q;
  },
  getImgSrc: function() {
    var _this = this;
    $('.homeBg').length&&_this.homeViews();
    if (navigator && navigator.userAgent) {
      var userAgent = navigator.userAgent || "";
      var appVersion = navigator.appVersion || "";
      var vendor = navigator.vendor || "";

      var ua = (userAgent + ' ' + appVersion + ' ' + vendor).toLowerCase();

      var match = /(chrome)[ \/]([\w.]+)/.exec(ua)
            || /(webkit)[ \/]([\w.]+)/.exec(ua)
            || /(opera)(?:.*version|)[ \/]([\w.]+)/.exec(ua)
            || /(msie) ([\w.]+)/.exec(ua)
            || /(trident)(?:.*? rv:([\w.]+)|)/.exec(ua)
            || ua.indexOf("compatible") < 0
            && /(mozilla)(?:.*? rv:([\w.]+)|)/.exec(ua) || [];

      var engine = match[0];
      var mainVersion = match[2].split('.')[0];

      if (engine.indexOf('chrome') === 0 && mainVersion >= 46) {
        window.__disableNativeFetch = false;
      } else if (engine.indexOf('mozilla') === 0 && mainVersion >= 39) {
        window.__disableNativeFetch = false;
      } else {
        window.__disableNativeFetch = true;
      }
    }
    
    $('img').each(function(){
      var obj = this;
      if($(obj).attr('data-original')) {
        _this.ajaxGet($(obj).attr('data-original'),null,function(){
          var src = _this.getImgData(this.responseText);
          $(obj).attr('data-original',src);
          _this.lazyLoad();
        });
      }else if($(obj).is('.editSrc')) {
        _this.ajaxGet($(obj).attr('data-src'),null,function(){
          var src = _this.getImgData(this.responseText);
          $(obj).attr('src',src);
        });
      }
    });
    _this.ajaxGet(_this.bg,null,function(){
      _this.bg = _this.getImgData(this.responseText);
      $('.homeBg').css('background-image','url("'+_this.bg+'")');
    });
  }

}

$(function(){
  livePage.init();
})
