var OK=OK||{};OK.CONNECT=OK.CONNECT||{hostName:"https://connect.ok.ru",defaultStyle:"border:0;",frameId:0,uiStarted:!1,insertGroupWidget:function(t,e,n){this.insertWidget(t,"Group","st.groupId="+e,n,250,335)},insertShareWidget:function(t,e,n,i,o,r){var s="st.shareUrl="+encodeURIComponent(e);"undefined"!=typeof i&&(s+="&st.title="+encodeURIComponent(i)),"undefined"!=typeof o&&(s+="&st.description="+encodeURIComponent(o)),"undefined"!=typeof r&&(s+="&st.imageUrl="+encodeURIComponent(r)),this.insertWidget(t,"Share",s,n,170,30)},insertWidget:function(t,e,n,i,o,r){var s=document.getElementById(t);if(null==s)return"error";"undefined"==typeof i&&(i="{}"),this.startUI();var d=document.createElement("iframe");d.id="__ok"+e+this.frameId++,d.scrolling="no",d.frameBorder=0,d.allowTransparency=!0,d.src=this.hostName+"/dk?st.cmd=Widget"+e+"&"+n+"&st.fid="+d.id+"&st.hoster="+encodeURIComponent(window.location)+"&st.settings="+encodeURIComponent(i);var a=this.UTIL.parseJson(i),l=this.defaultStyle;l+="width:"+this.UTIL.getJsonAttr(a,"width",o)+"px;",l+="height:"+this.UTIL.getJsonAttr(a,"height",r)+"px;",this.UTIL.applyStyle(d,l),s.appendChild(d)},startUI:function(){if(!this.uiStarted){this.uiStarted=!0;try{window.addEventListener?window.addEventListener("message",this.onUI,!1):window.attachEvent("onmessage",this.onUI)}catch(t){}}},onUI:function(t){if(t.origin==OK.CONNECT.hostName){var e=t.data.split("$");if("ok_setStyle"==e[0]){var n=document.getElementById(e[1]);OK.CONNECT.UTIL.applyStyle(n,e[2])}}},UTIL:{applyStyle:function(t,e){for(var n=e.split(";"),i=0;i<n.length;i++){var o=n[i].split(":");2==o.length&&o[0].length>0&&(t.style[o[0]]=o[1])}},parseJson:function(jsonStr){return eval("(function(){return "+jsonStr+";})()")},getJsonAttr:function(t,e,n){var i=t[e];return null!=i?i:n}}};
//# sourceMappingURL=maps/connect.js.map
