var WLike={loading:!1,hideCallback:null,nextStats:!1,checkboxEl:null,mainEl:null,init:function(){if(window.fastXDM){this.override("lite.js"),this.checkboxEl=ge("checkbox"),this.mainEl=ge("main");var e=!1;addEvent(this.mainEl,"mouseover",function(t){!noAuthVal&&cur.Rpc&&(e?counter&&setTimeout(cur.Rpc.callMethod.bind(cur.Rpc,"showTooltip"),100):(e=!0,setTimeout(cur.Rpc.callMethod.bind(cur.Rpc,"initTooltip",counter),100)))}),addEvent(this.checkboxEl,"mouseup mousedown mouseover mouseout click",function(e){if("mouseup"==e.type||"mousedown"==e.type)return void window["mousedown"==e.type?"addClass":"removeClass"](this.checkboxEl,"checkbox_pressed");if("mouseover"==e.type||"mouseout"==e.type){var t="mouseover"==e.type;return window[t?"addClass":"removeClass"](this,"checkbox_over"),void(t||removeClass(this.checkboxEl,"checkbox_pressed"))}if(window.noAuthVal)return Widgets.auth();var i=!hasClass(this.checkboxEl,"checked");if(WLike.saveLike(i))return i?addClass(this.checkboxEl,"checked"):removeClass(this.checkboxEl,"checked"),cancelEvent(e)}.bind(this)),cur.Rpc=new fastXDM.Client({onInit:function(){},share:WLike.shareThisPage,shared:WLike.sharedThisPage,hide:function(){this.hideCallback&&this.hideCallback()}.bind(this)},{safe:!0}),setTimeout(function(){this.resizeWidget(),setStyle("stats_text","visibility","visible"),setInterval(this.resizeWidget.bind(this),1e3)}.bind(this),0)}},saveLike:function(e){return!this.loading&&(this.loading=!0,cur.captchaHide=cur.recaptchaHide=function(){this.loading=!1}.bind(this),counter+=e?1:-1,cur.Rpc.callMethod("proxy",e?"showUser":"hideUser"),e&&1==counter?cur.Rpc.callMethod("showTooltip",!0):counter||cur.Rpc.callMethod("hideTooltip",!0),!e&&cur.Rpc.callMethod("proxy","unpublish"),ajax.post("widget_like.php",{act:"a_like",value:e?1:0,hash:likeHash,app:_aid,pageQuery:_pageQuery,s:cur.shorter?1:0,verb:cur.verb},{onDone:function(t){this.loading=!1,delete cur.captchaHide,delete cur.recaptchaHide,WLike.updateStats(t,!0),cur.Rpc.callMethod("proxy","update",t),this.nextStats=extend({},t,{stats:t.next_stats}),cur.Rpc.callMethod("publish",e?"widgets.like.liked":"widgets.like.unliked",t.num)}.bind(this),onFail:function(){this.loading=!1,delete cur.captchaHide,delete cur.recaptchaHide}.bind(this),hideProgress:function(){hide("loading")}}),hasClass(this.mainEl,"like_dived")&&ge("stats_text")&&(null!==this.hideCallback?this.hideCallback=null:this.hideCallback=function(){this.hideCallback=null,this.nextStats&&(WLike.updateStats(this.nextStats),this.resizeWidget()),this.nextStats=!1}.bind(this),!e&&this.hideCallback&&(setTimeout(this.hideCallback,200),this.hideCallback=null)),!0)},updateStats:function(e,t){var i=ge("stats_num");if(i&&animateCount(i,e.num?e.num_text||"":"+1",{str:1,leftOnly:1,onDone:function(){cur.autoWidth&&this.resizeWidget()}.bind(this)}),counter=e.num,ge("stats_text")&&stripHTML(ge("stats_text").innerHTML).toLowerCase()!=stripHTML(e.stats).toLowerCase()){var a=ge("stats_text");if(t)return a.innerHTML=e.stats||"",void this.resizeWidget();a.innerHTML?animate(a,{opacity:0},100,function(){(a.innerHTML=e.stats)&&animate(a,{opacity:1},100)}):(setStyle(a,{opacity:0}),a.innerHTML=e.stats,animate(a,{opacity:1},100)),setTimeout(this.resizeWidget.bind(this),150)}},shareThisPage:function(e,t){t==shareData.wall_hash&&(ajax.post("widget_like.php",{act:"a_recommend",hash:shareData.wall_hash,description:shareData.description,title:shareData.title,url:likeURL,text:shareData.text,val:e?1:0,app:_aid,pageQuery:_pageQuery,s:cur.shorter?1:0},{onDone:function(t){WLike.sharedThisPage(t,e)}}),e&&!hasClass(this.checkboxEl,"checked")&&(addClass(this.checkboxEl,"checked"),counter++))},sharedThisPage:function(e,t){t&&!hasClass(this.checkboxEl,"checked")&&(addClass(this.checkboxEl,"checked"),counter++),cur.Rpc.callMethod("publish",t?"widgets.like.shared":"widgets.like.unshared",e.num)},showMore:function(){return!cur.loadingMore&&(cur.loadingMore=!0,void ajax.post("widget_like.php",{act:"a_stats_box",offset:cur.shown,app:cur.aid,url:cur.url,page:cur.page,obj:cur.obj,from:cur.from,tab:cur.tab||"",check_hash:cur.likeCheckHash||""},{onDone:function(e,t,i){ge("like_users_cont").appendChild(cf(e)),cur.shown=t,i?show("like_more_link"):hide("like_more_link"),cur.loadingMore=!1},showProgress:function(){lockButton("like_more_link"),addClass("like_more_link","flat_button_loading")},hideProgress:function(){unlockButton("like_more_link"),removeClass("like_more_link","flat_button_loading")}}))},switchTab:function(e,t){return!cur.loadingTab&&(cur.loadingTab=!0,void ajax.post("widget_like.php",{act:"a_stats_box",offset:0,app:cur.aid,url:cur.url,page:cur.page,obj:cur.obj,from:cur.from,tab:e,check_hash:cur.likeCheckHash||""},{onDone:function(i,a,s){var n=ge("like_users_cont");n.innerHTML="",n.appendChild(cf(i)),cur.shown=a,s?show("like_more_link"):hide("like_more_link"),cur.loadingTab=!1,cur.loadingMore=!1,t&&uiTabs.switchTab(t),cur.tab=e},showProgress:function(){var e=curBox();e&&addClass(e.bodyNode,"box_loading")},hideProgress:function(){var e=curBox();e&&removeClass(e.bodyNode,"box_loading")}}))},resizeWidget:function(){cur.Rpc&&(cur.autoWidth&&ge("main")?cur.Rpc.callMethod("resizeWidget",Math.round(getSize(ge("main"))[0]),cur.height):ge("like_table")&&cur.Rpc.callMethod("resize",getSize(ge("like_table"))[1]))},override:function(e,t){!StaticFiles[e]&&t!==!0||"lite.js"!==e||extend(window,{showTooltip:Widgets.showTooltip,showBox:Widgets.showBox(null,function(){cur.Rpc.callMethod("hideTooltip",!0)}),showCaptchaBox:Widgets.showCaptchaBox,showReCaptchaBox:Widgets.showReCaptchaBox,openFullList:function(){cur.Rpc.callMethod("statsBox","show")},goAway:function(e){return!0},gotSession:function(e){setTimeout(function(){location.reload()},1e3),location.href=location.href+"&1"},animateCount:function(e,t,i){if(e=ge(e),i=i||{},t=i.str?trim(t.toString())||"":positive(t),e){if(browser.mobile&&!browser.safari_mobile&&!browser.android)return void val(e,t||"");var a=data(e,"curCount"),s=data(e,"nextCount");if("number"==typeof s||i.str&&"string"==typeof s)return void(t!=s&&data(e,"nextCount",t));if("number"==typeof a||i.str&&"string"==typeof a)return void(t!=a&&data(e,"nextCount",t));if(a=i.str?trim(val(e).toString())||"":positive(val(e)),"auto"===i.str&&(i.str=!a.match(/^\d+$/)||!t.match(/^\d+$/),i.str||(a=positive(a),t=positive(t))),a!=t){data(e,"curCount",t);var n,o,r,c=i.str?a.length==t.length?a<t:a.length<t.length:a<t,l=(c?t:a).toString(),h=(c?a:t).toString(),u=[],d=[],p="",g="";for(i.str||(h=new Array(l.length-h.length+1).join("0")+h),n=0,o=l.length;n<o&&(r=l.charAt(n))===h.charAt(n);n++)u.push(r);if(p=l.substr(n),g=h.substr(n),i.str){for(n=p.length;n>0&&(r=p.charAt(n))===g.charAt(n);n--)d.unshift(r);d.length&&(p=p.substr(0,n+1),g=g.substr(0,n+1))}u=u.join("").replace(/\s$/,"&nbsp;"),d=d.join("").replace(/^\s/,"&nbsp;"),trim(val(e))||val(e,"&nbsp;");var b=e.clientHeight||e.offsetHeight;val(e,'<div class="counter_wrap inl_bl"></div>');var m,_,k,f,v=e.firstChild,w=!0;u.length&&v.appendChild(m=ce("div",{className:"counter_const inl_bl",innerHTML:u})),u.length||(g=g.replace(/^0+/,"")),g&&("0"!=g||u.length)||(g="&nbsp;",w=!!u.length),v.appendChild(k=ce("div",{className:"counter_anim_wrap inl_bl"})),k.appendChild(f=ce("div",{className:"counter_anim "+(c?"counter_anim_inc":"counter_anim_dec"),innerHTML:'<div class="counter_anim_big"><span class="counter_anim_big_c">'+p+"</span></div>"+(w?'<div class="counter_anim_small"><span class="counter_anim_small_c">'+g+"</span></div>":"")},w?{marginTop:c?-b:0}:{right:0})),i.str&&setStyle(f,{textAlign:"right",right:0});var C=getSize(geByClass1("counter_anim_big_c",f,"span"))[0],x=w?"&nbsp;"==g?C:getSize(geByClass1("counter_anim_small_c",f,"span"))[0]:0;if(d.length&&v.appendChild(_=ce("div",{className:"counter_const inl_bl",innerHTML:d})),setStyle(v,{width:(m&&getSize(m)[0]||0)+(_&&getSize(_)[0]||0)+C+0}),void 0===browser.csstransitions){var y=browser,T=floatval(y.version);browser.csstransitions=y.chrome&&T>=9||y.mozilla&&T>=4||y.opera&&T>=10.5||y.safari&&T>=3.2||y.safari_mobile||y.android}var M=browser.csstransitions;setStyle(k,{width:c?x:C});var S=function(){val(e,t||" ");var a=data(e,"nextCount");data(e,"curCount",!1),data(e,"nextCount",!1),("number"==typeof a||i.str&&"string"==typeof a)&&setTimeout(animateCount.pbind(e,a,i),0),i.onDone&&i.onDone()},L=w?{marginTop:c?0:-b}:{marginRight:c?-x:0};M?(getStyle(k,"width"),addClass(k,"counter_css_anim_wrap"),C!=x&&setStyle(k,{width:c?C:x}),w&&setStyle(f,L),setTimeout(S,300),i.fadeMode&&(setStyle(geByClass1("counter_anim_big",e),"opacity",1),setStyle(geByClass1("counter_anim_small",e),"opacity",0))):(C!=x&&animate(k,{width:c?C:x},{duration:100}),w?animate(f,L,{duration:300,transition:Fx.Transitions.easeOutCirc,onComplete:S}):setTimeout(S,300))}}}})}};try{stManager.done("api/widgets/al_like.js")}catch(e){}
//# sourceMappingURL=maps/al_like.js.map