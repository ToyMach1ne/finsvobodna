<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Бесплатный вебинар "Торговля Временем, или правда о бирже, которую от вас скрывают" от Ильи Коровина - лучшего Трейдера в рейтинге Финама </title>
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
        <h1><span>Бесплатный</span> вебинар</h1>
        <h2>"Торговля Временем, или правда о бирже, которую от вас скрывают"</h2> 
        <h2>ОТ ИЛЬИ КОРОВИНА - <span style="color:black">ЛУЧШЕГО</span> ТРЕЙДEРА В <a href="http://www.comon.ru/managers/?io=False&tm=1&tr=1" target="_blank" style="text-decoration:underline; color:#fccc0a"><span style="color:black">РЕЙТИНГЕ ФИНАМА</span></a></h2>
     
	  </div>
      <div id="right">
        <div id="forma-right">
          <h3>Записаться на вебинар</h3>
          <p class="txt_forma_right">Дата:  9 сентября 2015<br>Время: с 19:30 до 21:30<br>Оставьте заявку прямо сейчас - количество мест <span>ограничено!</span></p>
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
            <form role="form" name="form_2" onSubmit="return false;">
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
            
             <!--<div class="all_pole">(все поля обязательны)</div>-->
            <div id="f-center">
              <p>
                <button type="submit" onClick="idi=this.id;send2();" id="form_2" class="btn btn-danger btn-lg btn-block">Отправить</button>
                </p>
				 
             <h5>Мы против спама</h5>
            </div>
             </form>
        </div>
        </div>
        <!--forma-right--> 
        
      </div>
      <!--right-->
      
      <div id="center">
        <center><img src="images/1.jpg" width="680" height="450" alt="Доверительное упарвление на фондовой бирже"/> <!---->
              </center></div>
    </div>
  </div>
  <!--shape-->
  <div class="video-work">
    <div class="row">
  <h2>ПОЧЕМУ 340 УЧЕНИКОВ УЖЕ ПРОШЛИ ОБУЧЕНИЕ</h2>
      <div class="clients_container">
  <div class="clients_box">
    <div>
        №1<br>
        <span><a href="http://www.comon.ru/managers/?io=False&tm=1&tr=1" target="_blank" style="text-decoration:underline; color:#fccc0a"><span style="color:black">В РЕЙТИНГЕ</span></a><br>  
        Финама</span>
    </div>
    <div>
        120 млн.р.<br>
        <span>СУММА<br>
        в управлении</span>
    </div>
    <div>
        20 ЛЕТ<br>
        <span>
        трейдинга<br> за плечами</span>
    </div>
    <div>
        39<br>
        <span>СЧЕТОВ<br>
        в управлении</span>
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
      <h2>ПРОГРАММА ВЕБИНАРА</h2><br> 
 <ul class="neznanie_zakona">
<li>1.	Психологическая природа рыночной мифологии.</li>
<li>2.	Три доказательства того, что рынок – хаос и не поддается прогнозу.</li>
<li>3.	Стоп-лосс - как метод торговли, убивающий счета трейдеров.</li>
<li>4.	Время – как кардинальное отличие биржи от азартной игры с непрогнозируемым исходом. Время против стоп-лосса.Торговля без стопов на СПОТЕ. Новый подход к понятию инвестиций. Реальные задачи при биржевой торговле.</li>
<li>5.	Иллюстрация Торговли Временем на примере основных прибыльных стратегий на ВСЕХ финансовых  рынках.</li>
<li>6.	Введение в тему, что опционы - это самый ИДЕАЛЬНЫЙ способ Торговли Временем из ВСЕХ существующих  способов и инструментов торговли на ВСЕХ финансовых рынках.</li>
</ul>
 
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
    <h2>Для кого создан этот вебинар</h2>
      <ul class="neznanie_zakona">
	  
<li>1. Этот вебинар для того рыночного большинства, кто уже несколько лет торгует на бирже и все это время теряет деньги или не может выйти на положительную стабильную доходность.</li>
<li>2. Это вебинар для того рыночного большинства, кто безуспешно пытается улучшить свои биржевые результаты, потребляя информацию из профильных биржевых СМИ, финансовой литературы и из уст всевозможных гуру, обещающих научить вас понимать и предсказывать рынок.</li>
<li>3. Этот вебинар для того рыночного большинства, кто постоянно отслеживает все экономические новости, следит за десятками графиков в поисках закономерностей, использует Технический и Фундаментальный анализ, и тем не менее – так и не может вывести свой биржевой счет на стабильный плюс.</li>
<li>4. Этот вебинар для того рыночного большинства, которое постепенно приходит к пониманию, что если большинство на рынке теряет деньги, то для успеха нужно как минимум перестать думать и действовать так, как думает и действует большинство.</li>

</ul>
      </div>
      
    </div>
  <div id="how-top">
    </div>
  <!--how-top-->
  <div id="how-work">
    <div id="tarif">
      <h6 style="text-align: center;"><span style="color:#ffffff">Этот вебинар окончательно поставит перед Вами вопросы, которые, безусловно, периодически мелькали у Вас в голове, но Вы их гнали  от себя: </span></h6>
        <ul class="delaem">
<li>1.Почему, если рыночные движения можно научиться предсказывать – никто до сих пор не нашел способа это сделать и не заработал все деньги рынка?</li>
<li>2.Почему финансисты уверяют вас, что могут научить практически любого  зарабатывать на рынке 10-15 % в месяц, но сами финансовые учреждения охотно раздают деньги под 10-15% в год?</li>
<li>3.Почему на рынке не добиваются успеха ни профессиональные финансисты ни профессиональные гадалки, ни умнейшие люди с учеными степенями из точных и гуманитарных наук, почему вообще ни какой профессиональный успех в иной сфере человеческой деятельности не может гарантировать биржевого успеха?</li>

<h6 style="text-align: center;">Этот вебинар даст вам ответы, которые Вы сами себе боялись дать, а именно:</h6>
     

<li>1.Что рынок – это ХАОС в абсолютном большинстве случаев и его невозможно прогнозировать с вероятностью большей чем 50%.</li>
<li>2.Что большинство трейдеров сами превращают биржевую торговлю в азартную игру, ставя себе непосильные задачи и применяя ложные инструменты в достижении нереальных целей.</li>
<li>3.Что все многочисленные усилия, затрачиваемые трейдерами на попытку изучать и прогнозировать рынок – это бессмысленная трата времени и сил, это ложный путь, уводящий от прибыли к ошибкам и неизбежным материальным потерям.
<br><br>Но тогда, спросите Вы, неужели вся биржевая торговля бессмысленна и из хаотичных движений рынка  нельзя извлекать стабильный положительный результат? 
Нет, отвечает Вам автор , конечно же – можно!</li>

<h6 style="text-align: center;">И из этого вебинара Вы узнаете:</h6>

<li>1.Что при всей внешней схожести биржи с рулеткой и другими азартными играми с непрогнозируемым исходом, у биржи есть одно кардинальное и принципиальное отличие, делающее возможным долгосрочный стабильный заработок независимо от точности биржевых прогнозов.</li>
<li>2.Что корень успешной биржевой  торговли заключен не в умении трейдера прогнозировать рынок, а в последовательности правильных действий трейдера, как при сбывшемся так и при не сбывшемся прогнозе.</li>
<li>3.Что практически все положительные стратегии, существующие на всех финансовых рынках от инвестиций до арбитража, от скальпинга до опционных стратегий – все они построены на общих универсальных базовых принципах, которые не имеют ничего общего с прогнозами.</li>

<h6 style="text-align: center;">Этот  универсальный способ биржевого заработка на всех финансовых рынках, 
автор называет -  Торговля Временем!</h6>

<li>1. Торговля Временем – это взгляд на рынок, который кардинально противоречит всему тому, что постоянно вбивается в голову биржевому большинству.</li>
<li>2. Торговля Временем – это тот способ действий, которым меньшинство стабильно зарабатывает деньги на бирже. Более того – оно зарабатывает даже в том случае, если не постулирует для себя эти принципы, но следует им по факту.</li>
<h6 style="text-align: center;">Итак:</h6>

<li>1.Если вы готовы, наконец, перестать быть стандартно мыслящим и стандартно теряющим деньги биржевым большинством.</li>
<li>2.Если Вы готовы начать мыслить и действовать так, как думает и действует успешное на рынке меньшинство.</li>
<h6 style="text-align: center;">Тогда: Этот вебинар для Вас!</h6>
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
            w.yaCounter29075350 = new Ya.Metrika({id:29075350,
                    webvisor:true,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true});
        } catch(e) { }
    });

    var n = d.getElementsByTagName("script")[0],
        s = d.createElement("script"),
        f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

    if (w.opera == "[object Opera]") {
        d.addEventListener("DOMContentLoaded", f, false);
    } else { f(); }
})(document, window, "yandex_metrika_callbacks");
</script>
 
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
  

   
 
  <div id="preim-center"><?php print file_get_contents('http://iljakorovin.ru/kurs1/footermenu.html'); ?></div> 

</body>
</html>
