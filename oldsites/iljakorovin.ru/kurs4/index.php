<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Вебинар: "Торговля Временем на акциях" от Ильи Коровина - лучшего Трейдера в рейтинге Финама </title>
<meta name="description" content="">
<meta name="Keywords" content="">
<link href="css/template.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">

  <link href="js/fancybox/jquery.fancybox.css" rel="stylesheet">
  <link href="css/animate.css" rel="stylesheet" data-skrollr-stylesheet/>
  <link href="js/player/skin/minimalist.css" rel="stylesheet"/>
<style type="text/css">
.scrollTop {
	background: url(images/arrows2.png) 0 0 no-repeat;
	display: none;
	width: 64px;
	height: 64px;
	position: fixed;
	bottom: 10px;
	left: 95%;
	z-index: 2000;
}
.scrollTop:hover {
	background-position: 0 -58px;
}
</style>

<style>
   h6 {
     font-size: 220%; /* Размер шрифта в процентах */ 
	
   } 
</style>

<script type="text/javascript" src="js/jquery-1.9.0.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/mod_form.js"></script>

<script type="text/javascript" src="js/main.js"></script>
<!--script type="text/javascript" src="js/jquery-1.11.2.min.js"></script-->
<script async src='plugin/index.php?id=4898194'></script>
</head>

<body>

<a id="gotop" class="scrollTop" href="#" onclick="top.goTop(); return false;"></a> 
<!-- Modal 0 -->
<div id="modal0_fon"></div>
<div id="modal0_content">
  <div id="x" onClick="hide_modal0();"></div>
  <div id="player" style="position:absolute; background-color:#000; z-index:5000">You need Flash player 8+ and JavaScript enabled to view this video.</div>
</div>
<!-- Modal 0 --> 
<script>
      // 2. This code loads the IFrame Player API code asynchronously.
      var tag = document.createElement('script');

      tag.src = "https://www.youtube.com/iframe_api";
      var firstScriptTag = document.getElementsByTagName('script')[0];
      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

      // 3. This function creates an <iframe> (and YouTube player)
      //    after the API code downloads.

      var player;
      function onYouTubeIframeAPIReady() {
        player = new YT.Player('player', {
          height: '366',
          width: '585',
          videoId: '',
          events: {
            'onReady': onPlayerReady,
            'onStateChange': onPlayerStateChange
          }
        });
      }

      // 4. The API will call this function when the video player is ready.
      function onPlayerReady(event) {
        event.target.playVideo();
      }

      // 5. The API calls this function when the player's state changes.
      //    The function indicates that when playing a video (state=1),
      //    the player should play for six seconds and then stop.
      var done = false;
      function onPlayerStateChange(event) {
        if (event.data == YT.PlayerState.PLAYING && !done) {
          //setTimeout(stopVideo, 6000);
          done = true;
        }
      }
      function stopVideo() {
        player.stopVideo();
      }
    </script> 
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" id="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" id="but_close" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Мы Вам перезвоним</h4>
      </div>
      <div class="modal-body">
        <form role="form" name="form_1" onSubmit="return false;">
          <div class="form-group">
            <label for="exampleInputEmail7">Имя</label>
            <div class="input-group"> <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
              <input type="text" class="form-control" id="exampleInputEmail7" placeholder="Имя" name="fio">
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail8">Телефон</label>
            <div class="input-group"> <span class="input-group-addon"><span class="glyphicon glyphicon-earphone"></span></span>
              <input type="text" class="form-control" id="exampleInputEmail8" placeholder="Телефон" name="phone">
            </div>
          </div>
          <p>
            <button type="submit" onClick="send();" id="form_1" class="btn btn-primary">Отправить</button>
          </p>
        </form>
      </div>
    </div>
    <!-- /.modal-content --> 
  </div>
  <!-- /.modal-dialog --> 
</div>
<!-- /.modal --> 

<!-- Modal -->
<div class="modal fade" id="myVideo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
     
  </div>
  <!-- /.modal-dialog --> 
</div>
<!-- /.modal -->

<div id="wrapper">
  <div class="header">
    <div class="head-box">
      <div class="logo">
        <p>Илья</p>
        <p>Коровин</p>
      </div>
      <!--logo-->
      <div class="telefon"> <span class="t-forma"><a data-toggle="modal" data-target="#myModal" href="#">Заказать звонок</a></span> </div>
      <!--telefon-->
	   <div class="inform"> <span class="email">	  <script language="JavaScript">
var login  = 'info';
var server = 'iljakorovin.ru';
var email  = login+'@'+server;
var url = 'mailto:'+email;
document.write('<a href="'+url+'">'+email+'</a>');
</script></span> </div>
      <div class="inform"> <span class="i-city">Санкт-Петербург</span> <span class="t-nomer">8 (812) 244-54-05</span> </div>
      <div class="inform"> <span class="i-city">Москва</span> <span class="t-nomer">8 (499) 501-99-12</span> </div>
      <div class="inform"> <span class="work">Работаю по<br>
        всей России!</span> 
        <!--span class="t-nomer">Пн-Пт: с 9.00 до 18.00</span--> 
      </div>
    </div>
    <!--head-box--> 
  </div>
  <!--header-->
  <div id="shape">
    <div id="shape-box">
      <div class="descrip">
        
        <h1>Курс:<br>"Торговля Временем на акциях"</h1> 
        <h2>ОТ ИЛЬИ КОРОВИНА - <span style="color:black">ЛУЧШЕГО</span> ТРЕЙДEРА В <a href="http://www.comon.ru/managers/?io=False&tm=1&tr=1" target="_blank" style="text-decoration:underline; color:#fccc0a"><span style="color:black">РЕЙТИНГЕ ФИНАМА</span></a></h2>
     
	  </div>
      <div id="right">
        <div id="forma-right">
          <h3>Приобрести курс</h3>
          <p class="txt_forma_right">Данный курс представляется в записи + 2 месяца поддержки: общение с Ильей Коровиным после курса в закрытом Skype-чате.
Обсуждение результатов, рекомендации - все это входит в стоимость курса.<br>Стоимость 19 000 руб.</p>
          <!--timer  
<script type="text/javascript">function get_timer_7(string_was_7,string_sec_7) {var date_new_was_7 = new Date(string_was_7); var date_new_sec_7 = string_sec_7; var date_7 = new Date();var razn_7,left_7,left_n_7,vraz_7,ost_7;razn_7 = date_7 - date_new_was_7;left_7 = date_new_sec_7 - razn_7;if(left_7>0){left_n_7 = left_7;} else {if(Math.abs(left_7)>date_new_sec_7){vraz_7 = (Math.abs(left_7))/date_new_sec_7;vraz_7 = vraz_7.toString().split(".");left_n_7 = Math.abs(left_7) - (vraz_7[0])*date_new_sec_7;left_n_7 = date_new_sec_7 - left_n_7;} else {left_n_7 = date_new_sec_7 - Math.abs(left_7);}}ost_7 = left_n_7;var day_7 = parseInt(ost_7/(60*60*1000*24));if(day_7 < 10) {day_7 = "0" + day_7;}day_7 = day_7.toString();var hour_7 = parseInt(ost_7/(60*60*1000))%24;if(hour_7 < 10) {hour_7 = "0" + hour_7;}hour_7 = hour_7.toString();var min_7 = parseInt(ost_7/(1000*60))%60;if(min_7 < 10) {min_7 = "0" + min_7;}min_7 = min_7.toString();var sec_7 = parseInt(ost_7/1000)%60;if(sec_7 < 10) {sec_7 = "0" + sec_7;}sec_7 = sec_7.toString(); timethis_7 = day_7 + " : " + hour_7 + " : " + min_7 + " : " + sec_7;$(".timerhello_7 p.result .result-day").text(day_7);$(".timerhello_7 p.result .result-hour").text(hour_7);$(".timerhello_7 p.result .result-minute").text(min_7);$(".timerhello_7 p.result .result-second").text(sec_7);}function getfrominputs_7(){string_was_7 = "Sun Jun 14 2015 23:00:00 GMT+0300 (RTZ 2 (зима))"; string_sec_7 = "54000000"; get_timer_7(string_was_7,string_sec_7);setInterval(function(){get_timer_7(string_was_7,string_sec_7);},1000);}$(document).ready(function(){ getfrominputs_7();});</script>

<div class="first-my timerhello timerhello_7">
					<div class="first-my-content">
						<p class="titloftimer"></p> 
						<p class="titles">
							<span class="hh">часов</span>
							<span class="mm">минут</span>
							<span class="ss">секунд</span>
						</p>
						<p class="result">
							<span class="result-hour">14</span>  
							<span class="result-minute">59</span>
							<span class="result-second">58</span> 
						</p> 
						<div class="clearf"></div>
					</div>
				</div>
<p class="hellotimercopy"></p>
 end timer-->
          <!-- <center><h3> <a href="franshiza.html" style="color:black" target="_blank">Узнайте условия по Франшизе</a></center></h3>
           <h3>Обучающий курс продвижения роликов в сети всем нашим клиентам В ПОДАРОК</h3>--> 
          <div class="row form_top">
            <!--<form role="form" name="form_2" onSubmit="return false;">
              <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                    <input type="text" class="form-control" id="exampleInputEmail11" placeholder="Имя" name="fio" /> 
                  </div>
              </div>
              <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-earphone"></span></span>
                    <input type="text" class="form-control mask" id="exampleInputEmail2" placeholder="Телефон" name="phone" />
                  </div>
              </div>
               <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-home"></span></span>
                    <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Email" name="email" />
                  </div>
              </div> 
            
             <div class="all_pole">(все поля обязательны)</div>-->
            <div id="f-center">
              <p>
                <a href="http://goo.gl/Dp5rtB" class="btn btn-danger btn-lg btn-block" rel="nofollow noopener" target="_blank">Приобрести</a>
			   </p>
	 
            </div>
             </form>
        </div>
        </div>
        <!--forma-right--> 
        
      </div>
      <!--right-->
      
      <div id="center">
        <center><img src="images/1.jpg" width="680" height="450" /> <!---->
              </center></div>
			  
			  
<h3>			  
Бесплатный вебинар «Торговля Временем, или правда о бирже, которую от вас скрывают» <a href="http://goo.gl/Znb3l1" rel="nofollow noopener" target="_blank">Ссылка</a><br><br>
2х дневный курс «Торговля Временем на опционах» - возможно только купить запись <a href="https://goo.gl/xQiNhN" rel="nofollow noopener" target="_blank">Ссылка</a> <br><br>
5ти дневный курс «Прикрытый интрадей» - платно, можно пройти обучение в группе или купить запись <a href="http://goo.gl/FpWiCL" rel="nofollow noopener" target="_blank">Ссылка</a> <br><br>
2х дневны курс «Торговля временем на акциях» - возможно только купить запись <a href="http://goo.gl/Dp5rtB" rel="nofollow noopener" target="_blank">Ссылка</a> 
	</h3>  
	
    </div>
  </div>
  <!--shape-->
  <div class="video-work">
    <div class="row">
  <h2>ПОЧЕМУ 457 УЧЕНИКОВ УЖЕ ПРОШЛИ ОБУЧЕНИЕ</h2>
      <div class="clients_container">
  <div class="clients_box">
    <div>
        №1<br>
        <span><a href="http://www.comon.ru/managers/?io=False&tm=1&tr=1" target="_blank" style="text-decoration:underline; color:#fccc0a"><span style="color:black">В РЕЙТИНГЕ</span></a><br>  
        Финама</span>
    </div>
    <div>
        120 млн.р.<br>
        <span>СУММА в<br>
        консультировании</span>
    </div>
	   
    <div>
        21 ГОД<br>
        <span>
        трейдинга<br> за плечами</span>
    </div>
	<div>
        2 млрд.р.<br>
        <span>захеджированных<br>
         валютных рисков
</span>
    </div>
    <div>
        43<br>
        <span>ИНВЕСТОРА в<br>
        консультировании</span>
    </div>
  </div>
</div>
      </div>
      
    </div>
    <!--v-work--> 
  </div>
  <div class="preimushestva">
    <div class="promo6" id="victory">
    <div class="container-theme">

	<h2>РЕЗУЛЬТАТЫ</h2><br>

      <center><a href="http://www.comon.ru/managers/?io=False&tm=1&tr=1" target="_blank"><img src="images/3.jpg"/></a> <!---->
              </center><br>
			        <center><a href="http://www.comon.ru/user/Allirog74/strategy/detail/?id=2713" target="_blank"><img src="images/4.jpg"/></a> <!---->
              </center><br>
			  
   <h2>ВИДЕО</h2><br>
    <div class="video-work">
   
    <div class="row">
	
	<table border="0" cellpadding="5" width="100%" style="color:black">
    <tr>
    <td align="center">
	<div id="EoHCG-RFWFQ" onclick="idi=this.id;visible();">
        <div class="v-work">
          <div class="video">
            <div class="treugolnick"><a data-toggle="modal" data-target="#myVideo_5" href="#"><img src="images/treug.png" alt=""></a></div>
            <img src="http://img.youtube.com/vi/EoHCG-RFWFQ/0.jpg" width="225" height="177" alt=""> </div>
         
        
   <div><b>Илья Коровин</b></br>
               Хеджирование валютных рисков</div>
            
             
        </div>
        <!--v-work--> 
      </div>
	  
	  </td>
    <td align="center"><div id="tZePMQuC_Xs" onclick="idi=this.id;visible();">
        <div class="v-work">
          <div class="video">
            <div class="treugolnick"><a data-toggle="modal" data-target="#myVideo_5" href="#"><img src="images/treug.png" alt=""></a></div>
            <img src="http://img.youtube.com/vi/tZePMQuC_Xs/0.jpg" width="225" height="177" alt=""> </div>
           
          <div><b>Илья Коровин</b><br>
               Бинарные опционы лохотрон</div>
              </div>
          <!--v-cont--> 
        </div>
        <!--v-work--> 
      </div></td>
    <td align="center"><div id="Z4StX0MfuKY" onclick="idi=this.id;visible();">
        <div class="v-work">
          <div class="video">
            <div class="treugolnick"><a data-toggle="modal" data-target="#myVideo_5" href="#"><img src="images/treug.png" alt=""></a></div>
            <img src="http://img.youtube.com/vi/Z4StX0MfuKY/0.jpg" width="225" height="177" alt=""> </div>
          
		  <div><b>Илья Коровин</b><br>
              Опционы</div>
              </div>
          <!--v-cont--> 
        </div>
        <!--v-work--> 
      </div></td>
      
	 
	     </tr>
    <tr>
    <td align="center"><div  id="aP1UwzuqwLI" onclick="idi=this.id;visible();">
        <div class="v-work">
          <div class="video">
            <div class="treugolnick"><a data-toggle="modal" data-target="#myVideo_5" href="#"><img src="images/treug.png" alt=""></a></div>
            <img src="http://img.youtube.com/vi/aP1UwzuqwLI/0.jpg" width="225" height="177" alt=""> </div>
          <!--video-->
          <div><b>Илья Коровин</b><br>
              Вебинар Торговля Временем</div>
              </div>
          <!--v-cont--> 
        </div>
        <!--v-work--> 
      </div></td>
    <td align="center"><div  id="G8LYhPrgqtM" onclick="idi=this.id;visible();">
        <div class="v-work">
          <div class="video">
            <div class="treugolnick"><a data-toggle="modal" data-target="#myVideo_5" href="#"><img src="images/treug.png" alt=""></a></div>
            <img src="http://img.youtube.com/vi/G8LYhPrgqtM/0.jpg" width="225" height="177" alt=""> </div>
          <!--video-->
          <div><b>Илья Коровин</b><br>
               Торговый план. Пример.</div>
              </div>
          <!--v-cont--> 
        </div>
        <!--v-work--> 
      </div></td>
    <td align="center"><div  id="PRmvhuC0KLE" onclick="idi=this.id;visible();">
        <div class="v-work">
          <div class="video">
            <div class="treugolnick"><a data-toggle="modal" data-target="#myVideo_5" href="#"><img src="images/treug.png" alt=""></a></div>
            <img src="http://img.youtube.com/vi/PRmvhuC0KLE/0.jpg" width="225" height="177" alt=""> </div>
          <!--video-->
         <div><b>Илья Коровин</b><br>
               Лекция по Опционам</div>
			   
              </div>
          <!--v-cont--> 
        </div>
        <!--v-work--> 
      </div></td>
      
	 
	     </tr>
    
   
      </table> 
	

      
     
  
      
      
      <!--v-cont--> 
    </div></div>
	
	
      <!-- Сканы -->
      <!--<ul class="docs">
       <li>
          <h3 class="title">ООО "БМВ-Банк"</h3>
          <p class="num">Взыскание с банка незаконной комисси за выдачу кредита 25 882 руб. 41 коп.</p>
          <a href="images/docs/1/1.jpg" class="scan" rel="album1">
            <img src="images/docs/1/1_min.jpg" alt="">
          </a>
          <a href="images/docs/1/2.jpg" class="scan hidden" rel="album1"></a>
          <a href="images/docs/1/3.jpg" class="scan hidden" rel="album1"></a>
          <a href="images/docs/1/4.jpg" class="scan hidden" rel="album1"></a>
 
        </li>
        <li>
		   <h3 class="title">ОАО "Банк ИТБ"</h3>
          <p class="num">Признание третейского соглашения нарушающего права заёмщика ничтожным</p>
	
          <a href="images/docs/2/1.jpg" class="scan" rel="album2">
            <img src="images/docs/2/1_min.jpg" alt="">
          </a>
		<a href="images/docs/2/2.jpg" class="scan hidden" rel="album2"></a>
        </li>
        <li>
		  <h3 class="title">Банк Хоум Кредит</h3>
          <p class="num">Отмена судебного приказа о взыскании 128 746 руб.</p>
    
          <a href="images/docs/3/1.jpg" class="scan" rel="album3">
            <img src="images/docs/3/1_min.jpg" alt="">
          </a>
           
        </li>
  
        <li>
		<h3 class="title">Райффайзен Банк</h3>
          <p class="num">Взыскание с банка 84 360 руб. за незаконные действия</p>  
		  
        
          <a href="images/docs/4/1.jpg" class="scan" rel="album4">
            <img src="images/docs/4/1_min.jpg" alt="">
          </a>
          <a href="images/docs/4/2.jpg" class="scan hidden" rel="album4"></a>

	  </li>
        <li>
		<h3 class="title">ООО "Ренессанс Кредит"</h3>
          <p class="num">Отмена незаконного пункта кредитоного договора.</p>
       	            
          <a href="images/docs/5/1.jpg" class="scan" rel="album5">
            <img src="images/docs/5/1_min.jpg" alt="">
          </a>
        <a href="images/docs/5/2.jpg" class="scan hidden" rel="album5"></a>
        <a href="images/docs/5/3.jpg" class="scan hidden" rel="album5"></a>
		<a href="images/docs/5/4.jpg" class="scan hidden" rel="album5"></a>
   
        </li>
        
       <li>
              <h3 class="title">ООО Банк "Оранжевый"</h3>
          <p class="num">Снижение суммы долга в 2 раза с 3 884 539 руб. 56 коп. до 1 862 359 руб. 86 коп.</p>
          <a href="images/docs/6/1.jpg" class="scan" rel="album6">
            <img src="images/docs/6/1_min.jpg" alt="">
          </a>
          <a href="images/docs/6/2.jpg" class="scan hidden" rel="album6"></a>
          <a href="images/docs/6/3.jpg" class="scan hidden" rel="album6"></a>
          <a href="images/docs/6/4.jpg" class="scan hidden" rel="album6"></a>
          <a href="images/docs/6/5.jpg" class="scan hidden" rel="album6"></a>
        </li>
        
 
      </ul>-->

    </div>

  </div>
  </div>
    <div class="video-work">
    <div class="row">
	
	<h2>Программа курса "Торговля временем на акциях"</h2><br> 
 <ul class="neznanie_zakona">
<li style="font-weight:bold">День 1-ый:</li>
<ul>
<li style="font-style:italic">Базовые предпосылки философии “Торговля Временем”.</li>
<li style="font-style:italic">Основные  принципы “Торговли Временем”.</li>
<li style="font-style:italic">Практические приемы  “Торговли Временем”  на акциях  (с 1-го по 5-ый).</li>

 </ul>
  <li style="font-weight:bold"><br>День 2-ой (упор на практику):</li>
<ul>
<li style="font-style:italic">Практические приемы Торговли Временем на акциях (с 6-го по 12-ый).</li>
<li style="font-style:italic">Ответы на вопросы.</li>
</ul>
<li>Общее время курса - 6 часов.</li>
 </ul>
	
	
    <h2>Для кого этот курс:</h2>
      <ul class="neznanie_zakona">
<li>1. Этот курс предназначен для широкого круга слушателей.</li>
<li>2. Он будет весьма интересен тем, кто уже давно торгует на бирже и нашел свой персональный путь к успеху, но хотел бы ознакомиться со взглядом своего коллеги, обобщающим и систематизирующим в единые принципы практически все индивидуальные долгосрочные истории биржевого успеха на спотовом рынке.</li> 
<li>3. Он будет очень полезен тем, кто имея разный стаж  биржевой торговли, трудного пути проб и ошибок, так и не нашли для себя способов стабильного заработка на рынке  акций, но  хотели бы понять - за счет каких практических принципов они могли бы наконец выйти на стабильную долгосрочную положительную торговлю.</li>
<li>4. Он будет просто необходим новичкам, тем, кто уже ознакомился с первичными принципами биржевого инвестирования на рынке акций и начинает первые практические шаги - они имеют возможность благодаря этому курсу сразу получить правильный взгляд на эту профессию, без лишних иллюзий и ложных путей, что сэкономит им массу времени, сил и конечно же – денег.</li>

</ul>
      </div>
      
    </div>
  <div id="how-top">
    </div>
  <!--how-top-->
  <div id="how-work">
    <div id="tarif">
      <h6 style="text-align: center;"><span style="color:#ffffff">Преимущества курса:</span></h6>
        <ul class="delaem">
		
<li>1. Этот курс досконально описывает, как практически применять философию  “Торговля Временем” при работе с акциями в фондовой секции Российской Биржи. А именно – как стабильно зарабатывать на акциях без стоп-лоссов, плечей и прогнозов.</li>
<li>2. Вы получите подробные ответы на все вопросы, которые возникли у Вас после ознакомления с “Торговлей Временем” в одноименной статье , а также на бесплатном одноименном семинаре.</li>
<li>3. Вы получите в руки бесценное конкурентное преимущество – способность воспринимать биржевую торговлю совершенно не так, как ее понимают большинство участников рынка в нашей стране.</li>


<h6 style="text-align: center;">Что Вы получите после прохождения Курса:</h6>
     
<li>1. Вы поймете, что стабильный долгосрочный доход в 25-35% годовых независимо от движений рынка и умения его прогнозировать – это действительно реально.</li>
<li>2. Вы узнаете 12 авторских технических, торговых и психологических приемов, позволяющих максимально повысить эффективность при работе на акциях без стоп-лоссов, плечей и прогнозов.</li>
<li>3. Вы совершенно по-новому взглянете на такие традиционные вопросы как :</li>
<ul>
    <li>инвестиции и спекуляции</li>
    <li>мотивация на результат в трейдинге</li>
   <li>психологический комфорт трейдера</li>
    <li>трендовость и флетовость торговли</li>
</ul>
<li>Этот вебинар – это красная таблетка Морфеуса, возможность выйти из матрицы традиционных представлений о бирже и взглянуть на нее по-настоящему!  Решать только Вам  – рискнуть или нет?!</li>

<li>+ 2 месяца поддержки: общение с Ильей Коровиным после курса в закрытом Skype-чате.<br>Обсуждение результатов, рекомендации - все это входит в стоимость курса.</li>


<li style="text-align: center;"><br>Стоимость: 19 000 рублей</li>


</ul>
    
    </div>
    <!--tarif--> 
  </div>
 
 
<!--wrapper--> 
<script type="text/javascript">


document.getElementById('exampleInputEmail8').onkeypress =
document.getElementById('exampleInputEmail2').onkeypress =
document.getElementById('exampleInputEmail5').onkeypress = function(e) {
e = e || event;
if (e.ctrlKey || e.altKey || e.metaKey) return;
var chr = getChar(e);
if (chr == null) return;
if (chr < '0' || chr > '9') {
    return false;
  }
}

function getChar(event) {
  if (event.which == null) {
    if (event.keyCode < 32) return null;
    return String.fromCharCode(event.keyCode) // IE
  }
if (event.which!=0 && event.charCode!=0) {
if (event.which < 32) return null;
return String.fromCharCode(event.which)   // остальные
  }
return null; // специальная клавиша
}
</script> 
<script type="text/javascript">
(function() {  
  
function $(id){  
    return document.getElementById(id);  
}  
  
function goTop(acceleration, time) {  
    acceleration = acceleration || 0.1;  
    time = time || 12;  
  
    var dx = 0;  
    var dy = 0;  
    var bx = 0;  
    var by = 0;  
    var wx = 0;  
    var wy = 0;  
  
    if (document.documentElement) {  
        dx = document.documentElement.scrollLeft || 0;  
        dy = document.documentElement.scrollTop || 0;  
    }  
    if (document.body) {  
        bx = document.body.scrollLeft || 0;  
        by = document.body.scrollTop || 0;  
    }  
    var wx = window.scrollX || 0;  
    var wy = window.scrollY || 0;  
  
    var x = Math.max(wx, Math.max(bx, dx));  
    var y = Math.max(wy, Math.max(by, dy));  
  
    var speed = 1 + acceleration;  
    window.scrollTo(Math.floor(x / speed), Math.floor(y / speed));  
    if(x > 0 || y > 0) {  
        var invokeFunction = "top.goTop(" + acceleration + ", " + time + ")"  
        window.setTimeout(invokeFunction, time);  
    }  
    return false;  
}  
  
//*  
function scrollTop(){  
    var el = $('gotop');  
    var stop = (document.body.scrollTop || document.documentElement.scrollTop);  
    if(stop>400){  
        if(el.style.display!='block'){  
            el.style.display='block';  
            smoothopaque(el, 0, 100, 1);  
        }  
    }  
    else  
        el.style.display='none';  
  
    return false;  
}  
  
// Плавная смена прозрачности  
function smoothopaque(el, startop, endop, inc){  
    op = startop;  
    // Устанавливаем прозрачность  
    setopacity(el, op);  
    // Начинаем изменение прозрачности  
    setTimeout(slowopacity, 1);  
    function slowopacity(){  
        if(startop < endop){  
            op = op + inc;  
            if(op < endop){  
                setTimeout(slowopacity, 1);  
            }  
        }else{  
            op = op - inc;  
            if(op > endop){  
                setTimeout(slowopacity, 1);  
            }  
        }  
        setopacity(el, op);  
    };  
};  
// установка opacity  
function setopacity(el, opacity){  
    el.style.opacity = (opacity/100);  
    el.style.filter = 'alpha(opacity=' + opacity + ')';  
};  
  
if (window.addEventListener){  
    window.addEventListener("scroll", scrollTop, false);  
    window.addEventListener("load", scrollTop, false);  
}  
else if (window.attachEvent){  
    window.attachEvent("onscroll", scrollTop);  
    window.attachEvent("onload", scrollTop);  
}     
  
window['top'] = {};  
window['top']['goTop'] = goTop;           
  
})();
</script> 



<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter32364735 = new Ya.Metrika({
                    id:32364735,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/32364735" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

  <div class="header">
      <div class="head-box">
       <div class="logo">
        <p>Илья</p>
        <p>Коровин</p>
      </div>
      <!--logo-->
      <div class="telefon"> <span class="t-forma"><a data-toggle="modal" data-target="#myModal" href="#">Заказать звонок</a></span> </div>
      <!--telefon-->
	   <div class="inform"> <span class="email">	  <script language="JavaScript">
var login  = 'info';
var server = 'iljakorovin.ru';
var email  = login+'@'+server;
var url = 'mailto:'+email;
document.write('<a href="'+url+'">'+email+'</a>');
</script></span> </div>
      <div class="inform"> <span class="i-city">Санкт-Петербург</span> <span class="t-nomer">8 (812) 244-54-05</span> </div>
      <div class="inform"> <span class="i-city">Москва</span> <span class="t-nomer">8 (499) 501-99-12</span> </div>
      <div class="inform"> <span class="work">Работаю по<br>
        всей России!</span> 
        <!--span class="t-nomer">Пн-Пт: с 9.00 до 18.00</span--> 
      </div>
    </div>
    <!--head-box--> 
  </div>
<!--header-->

  <script src="js/jquery-1.11.2.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/player/flowplayer.min.js"></script>
  <script src="js/skrollr.min.js"></script>
  <script src="js/skrollr.stylesheets.min.js"></script>
  <script src="js/jquery.smooth-scroll.js"></script>
  <script src="js/jquery.validate.min.js"></script>
  <script src="js/fancybox/jquery.fancybox.pack.js"></script>
  

   
 
  <div id="preim-center">
 <center><h4><br>

 <table border="1" cellpadding="5" width="100%" style="color:black">
    <tr>
    <td align="center"><a href="http://iljakorovin.ru/"   style="text-decoration:underline; color:black"><span style="color:black">Консультирование по работе на бирже</span></a> 
</td>
      
	 
	 <td align="center"><a href="http://iljakorovin.ru/biografy.html"   style="text-decoration:underline; color:black"><span style="color:black">Биография</span></a> </td>
	 <td align="center"><a href="http://iljakorovin.ru/privacypolicy.html"  style="text-decoration:underline; color:black"><span style="color:black">Политика конфиденциальности</span></a> </td>
    </tr>
     <tr>
    <td colspan="3" align="center" style="color:black">Обучение торговли на Бирже: 
</td>
   <tr>
    <td colspan="3" align="center"><a href="http://iljakorovin.ru/kurs1"   style="text-decoration:underline; color:black"><span style="color:black">Бесплатный вебинар «Торговля Временем, или правда о бирже,<br> которую от вас скрывают»</span></a> 
</td>
 
<tr>
    <td colspan="3" align="center"><a href="http://iljakorovin.ru/kurs2"   style="text-decoration:underline; color:black"><span style="color:black">2х дневный курс «Торговля Временем на опционах»</span></a> 
</td>
 
<tr>
    <td colspan="3" align="center"><a href="http://iljakorovin.ru/kurs3"   style="text-decoration:underline; color:black"><span style="color:black">5ти дневный курс «Прикрытый интрадей»</span></a> 
</td>
 
<tr>
    <td colspan="3" align="center"><a href="http://iljakorovin.ru/kurs4"   style="text-decoration:underline; color:black"><span style="color:black">2х дневный курс: «Торговля временем на акциях»</span></a> 
</td> 
   
	 </tr>
	
      </table>  
	 </center>    
       
</div> 

</body>
</html>
