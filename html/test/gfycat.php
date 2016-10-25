<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="/assets/css/style.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js" type="text/javascript"></script>
<script src="//s1.daumcdn.net/cfs.tistory/custom/blog/153/1538088/skin/images/clipboard.min.js" type="text/javascript"></script>	
<script src="//s1.daumcdn.net/cfs.tistory/custom/blog/153/1538088/skin/images/jquery.noty.js" type="text/javascript"></script>
</head>
<body>


<script type="text/javascript">
(function(){var g=this;var l=String.prototype.trim?function(a){return a.trim()}:function(a){return a.replace(/^[\s\xa0]+|[\s\xa0]+$/g,"")},m=function(a,b){return a<b?-1:a>b?1:0};var n=function(a,b,c,d,h){if(h)c=a+("&"+b+"="+c);else{var f="&"+b+"=",e=a.indexOf(f);0>e?c=a+f+c:(e+=f.length,f=a.indexOf("&",e),c=0<=f?a.substring(0,e)+c+a.substring(f):a.substring(0,e)+c)}return 2E3<c.length?void 0!==d?n(a,b,d,void 0,h):a:c};var p;a:{var q=g.navigator;if(q){var r=q.userAgent;if(r){p=r;break a}}p=""};var u=function(a,b){var c=t;Object.prototype.hasOwnProperty.call(c,a)||(c[a]=b(a))};var v=-1!=p.indexOf("Opera"),w=-1!=p.indexOf("Trident")||-1!=p.indexOf("MSIE"),x=-1!=p.indexOf("Edge"),y=-1!=p.indexOf("Gecko")&&!(-1!=p.toLowerCase().indexOf("webkit")&&-1==p.indexOf("Edge"))&&!(-1!=p.indexOf("Trident")||-1!=p.indexOf("MSIE"))&&-1==p.indexOf("Edge"),z=-1!=p.toLowerCase().indexOf("webkit")&&-1==p.indexOf("Edge"),A=function(){var a=g.document;return a?a.documentMode:void 0},B;a:{var C="",D=function(){var a=p;if(y)return/rv\:([^\);]+)(\)|;)/.exec(a);if(x)return/Edge\/([\d\.]+)/.exec(a);if(w)return/\b(?:MSIE|rv)[: ]([^\);]+)(\)|;)/.exec(a);if(z)return/WebKit\/(\S+)/.exec(a);if(v)return/(?:Version)[ \/]?(\S+)/.exec(a)}();D&&(C=D?D[1]:"");if(w){var E=A();if(null!=E&&E>parseFloat(C)){B=String(E);break a}}B=C}var F=B,t={},G=function(a){u(a,function(){for(var b=0,c=l(String(F)).split("."),d=l(String(a)).split("."),h=Math.max(c.length,d.length),f=0;0==b&&f<h;f++){var e=c[f]||"",k=d[f]||"";do{e=/(\d*)(\D*)(.*)/.exec(e)||["","","",""];k=/(\d*)(\D*)(.*)/.exec(k)||["","","",""];if(0==e[0].length&&0==k[0].length)break;b=m(0==e[1].length?0:parseInt(e[1],10),0==k[1].length?0:parseInt(k[1],10))||m(0==e[2].length,0==k[2].length)||m(e[2],k[2]);e=e[3];k=k[3]}while(0==b)}return 0<=b})},H;var I=g.document;H=I&&w?A()||("CSS1Compat"==I.compatMode?parseInt(F,10):5):void 0;var J;if(!(J=!y&&!w)){var K;if(K=w)K=9<=Number(H);J=K}J||y&&G("1.9.1");w&&G("9");var L=function(a,b){var c=window;c.addEventListener?c.addEventListener(a,b,!1):c.attachEvent&&c.attachEvent("on"+a,b)};var O=function(a){var b=M,c=N;a=a||document;var d=a.createElement("script");d.type="text/javascript";c&&(void 0!==d.onreadystatechange?d.onreadystatechange=function(){if("complete"==d.readyState||"loaded"==d.readyState)try{c()}catch(f){}}:d.onload=c);d.src=b;var h=a.getElementsByTagName("head")[0];if(h)try{window.setTimeout(function(){h.appendChild(d)},0)}catch(f){}};var M,P,Q,R,S,T=function(){var a=window,b=T;a.removeEventListener?a.removeEventListener("load",b,!1):a.detachEvent&&a.detachEvent("onload",b);!S&&(a=document.createElement("IFRAME"),a.frameBorder=0,a.style.height=0,a.style.width=0,a.style.position="absolute",S=a,document.body&&(document.body.appendChild(a),a=S))&&(a=a.contentWindow)&&(Q="1",a.document.open(),a.document.write("<!doctype html><html><head></head><body></body></html>"),a.document.close(),O(a.document))},N=function(){var a=S;if(a&&(a=a.contentWindow))if(Q="",a.botguard){var b=a.botguard.bg;if(b)try{U(function(){R=new b(P)})}catch(c){Q="5"}else Q="3"}else Q="2"},V=function(){try{var a=window.rvdt,a="number"==typeof a?36E5>a?""+a:"M":null}catch(b){}return a||null},X=function(){return["bg",W(),"9"]},U=function(a){window.wrpfc=a;window.wrpfc()},W=function(){var a=R;if(Q)return Q;if(!a)return"5";if(!a.invoke)return"4";var b;try{U(function(){a.invoke(function(a){b=a})})}catch(c){return"6"}return b&&b.length?3>b.length?"7":770<b.length?(L("unload",function(){var a=["bg",b],d=["id","bg"];if(d&&a&&d.length&&a.length&&d.length==a.length){for(var h=["https","://","pagead2.googlesyndication.com","/pagead/gen_204"],f="?",e=0;e<d.length;e++)h.push(f+d[e]+"="+a[e]),f="&";a=h.join("");d=window;d.google_image_requests||(d.google_image_requests=[]);h=d.document.createElement("img");h.src=a;d.google_image_requests.push(h)}}),"8"):b:"6"};window.bga=function(a,b,c){M=a;P=b;Q="0";c&&window.osdlac&&window.osdlac(X);L("load",T)};window.bgy=function(a){var b=V();b&&(a=n(a,"rvdt",b));return n(a,"bg",W(),"9")};window.bgz=function(a){var b=document.getElementById(a);if(b){var c=V();c&&(window.css?css(a,"rvdt",c,void 0,void 0):b&&(b.href=n(b.href,"rvdt",c,void 0,void 0)));c=W();window.css?css(a,"bg",c,!1,"9"):b&&(b.href=n(b.href,"bg",c,"9",!1))}};}).call(this);bga('https://pagead2.googlesyndication.com/bg/7zjptjcyAt08DUe0iv5XhxhDVFiWVeyLb0s17ZkQqVI.js','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');
</script>
<b>URL 입력</b>
<br>
<input id="origin" style="height: 20px; width: 92%;" onclick="this.value=''; setTimecode();" placeholder="ex. https://gfycat.com/BeautifulGorgeousPenguin">
<br>
<br>
<b><span id="mp4Size">MP4</span></b>
<span style="cursor:pointer;" onclick="if($(&quot;#mp4Url&quot;).val().length>0)window.open(&quot;about:blank&quot;).location.href=$(&quot;#mp4Url&quot;).val();">새 창 열기</span>
<br>
<input class="copyTrigger" data-clipboard-target="#mp4Url" id="mp4Url" style="height: 20px; width: 92%;" readonly="readonly" onclick="this.select()">
<br>
<br><b><span id="webmSize">WEBM</span></b><span style="cursor:pointer;" onclick="if($(&quot;#webmUrl&quot;).val().length>0)window.open(&quot;about:blank&quot;).location.href=$(&quot;#webmUrl&quot;).val();"> 새 창 열기</span>
<br>
<input class="copyTrigger" data-clipboard-target="#webmUrl" id="webmUrl" style="height: 20px; width: 92%;" readonly="readonly" onclick="this.select()">
<br>
<br>
<b>Video HTML5 Code </b>
<a href="javascript:;" onclick="previewHTML5();layer_open('layer2');">미리보기</a>
<br>
<textarea class="copyTrigger" data-clipboard-target="#html5_Code" id="html5_Code" style="height: 100px; width: 92%;" readonly="readonly" onclick="this.select()"></textarea>
<div>
<span data-tip-event="mouseover" title="자동재생" style="cursor:help;">
<input type="checkbox" id="Autoplay" onclick="embed()" checked="">autoplay</span>
<span data-tip-event="mouseover" title="컨트롤바 보이기" style="cursor:help;">
<input type="checkbox" id="Controls" onclick="embed()" checked="">controls</span>
<span data-tip-event="mouseover" title="Gfycat 주소 링크" style="cursor:help;">
<input type="checkbox" id="Sourcelink" onclick="embed()" checked="">Gfycat URL</span>
<span data-tip-event="mouseover" title="가운데 정렬" style="cursor:help;">
<input type="checkbox" id="Center" onclick="embed()">center</span>
<br>
<br>
<b>GIF(5MB 이하)</b>
<span style="cursor:pointer;" onclick="if($(&quot;#max5mbGif&quot;).val().length>0)window.open(&quot;about:blank&quot;).location.href=$(&quot;#max5mbGif&quot;).val();"> 새 창 열기</span>
<br>
<input class="copyTrigger" data-clipboard-target="#max5mbGif" id="max5mbGif" style="height: 20px; width: 92%;" readonly="readonly" onclick="this.select()">
<br>
<br>
<b><span data-tip-event="mouseover" title="느린 속도, 서버에서 파일을 완전히 생성하기전까지는 이미지가 나오지 않을 수도 있습니다." style="cursor:help;" id="gifSize">GIF</span></b>
<span style="cursor:pointer;" onclick="if($(&quot;#gifUrl&quot;).val().length>0)window.open(&quot;about:blank&quot;).location.href=$(&quot;#gifUrl&quot;).val();"> 새 창 열기</span>
<br>
<input class="copyTrigger" data-clipboard-target="#gifUrl" id="gifUrl" style="height: 20px; width: 92%;" readonly="readonly" onclick="this.select()">
<br>
<br>
<b>GIF(2MB 이하)</b>
<span style="cursor:pointer;" onclick="if($(&quot;#max2mbGif&quot;).val().length>0)window.open(&quot;about:blank&quot;).location.href=$(&quot;#max2mbGif&quot;).val();"> 새 창 열기</span>
<br>
<input class="copyTrigger" data-clipboard-target="#max2mbGif" id="max2mbGif" style="height: 20px; width: 92%;" readonly="readonly" onclick="this.select()">
<br>
<br>
<b><span data-tip-event="mouseover" title="저용량 고화질, 크롬과 오페라 등 일부 브라우저에서만 재생됩니다" style="cursor:help;">WEBP(저용량)</span></b>
<span style="cursor:pointer;" onclick="if($(&quot;#webpUrl&quot;).val().length>0)window.open(&quot;about:blank&quot;).location.href=$(&quot;#webpUrl&quot;).val();"> 새 창 열기</span>
<br>
<input class="copyTrigger" data-clipboard-target="#webpUrl" id="webpUrl" style="height: 20px; width: 92%;" readonly="readonly" onclick="this.select()">
<br>
<br>
<b>Img HTML Code</b>
<br>
<input class="copyTrigger" data-clipboard-target="#imgsrc" id="imgsrc" style="width: 92%; height: 20px;" readonly="readonly" onclick="this.select()">
<br>
<select id="selectImgType" onchange="embed()">
   <option value="5mbGif">GIF(5 MB)</option>
   <option value="hqGif">GIF(고용량)</option>
   <option value="2mbGif">GIF(2 MB)</option>
   <option value="webp">WEBP(저용량)</option>
</select>
</div>
