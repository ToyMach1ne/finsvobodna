﻿<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Обучение торговле на опционах и консультирование по работе на бирже от Ильи Коровина - лучшего Трейдера в рейтинге Финама </title>
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
              <input type="text" class="form-control" id="exampleInputEmail8" placeholder="например: +7 495 123-45-67" name="phone">
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
   
  <!-- /.modal-dialog --> 
</div>
<!-- /.modal -->

<div id="wrapper">
  <div class="header">
    <div class="head-box">
      <div class="logo">
        <p>Илья </p>
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
        <h1>Обучение торговле на опционах</h1> <h2>и консультирование по работе на бирже</h2> 
 
        <h2>ОТ ИЛЬИ КОРОВИНА - <span>ЛУЧШЕГО ТРЕЙДEРА</span> В <a href="http://www.comon.ru/managers/?io=False&tm=1&tr=1" rel="nofollow noopener" target="_blank" style="text-decoration:underline; color:#fccc0a"><span style="color:black">РЕЙТИНГЕ ФИНАМА</span></a></h2>
        <h3>Доступна стратегия "Прикрытый интрадей", как на Финаме. Работайте только с Лучшими!</h3>
      </div>
      <div id="right">
        <div id="forma-right">
          <h3>Заявка на работу со мной</h3>
          <p class="txt_forma_right">Оставьте заявку прямо сейчас и стратегии, знания, опыт Ильи Коровина будут <span>работать на Вас!</span></p>
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
                    <input type="text" class="form-control" id="exampleInputEmail11" placeholder="Имя: Алексей" name="fio" /> 
                  </div>
              </div>
              <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-earphone"></span></span>
                    <input type="text" class="form-control mask" id="exampleInputEmail2" placeholder="Телефон: +7 495 123-45-67" name="phone" />
                  </div>
              </div>
               <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-home"></span></span>
                    <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Емайл: name@mail.ru" name="email" />
                  </div>
              </div> 
            
             <!--<div class="all_pole">(все поля обязательны)</div>-->
            <div id="f-center">
              <p>
                <button type="submit" onClick="idi=this.id;send2();" id="form_2" class="btn btn-danger btn-lg btn-block">Отправить</button>
                </p>
              <h5>Мы против спама</h5>
            </div>
             </form>	</table>	
			 </div>
        </div>
        <!--forma-right-->   
      </div><!--right-->
  
      
      <div id="center">
        <center><img src="images/1.jpg" width="680" height="450"/> <!---->
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
  <h2>ПОЧЕМУ 43 ИНВЕСТОРА РАБОТАЮТ СО МНОЙ</h2>
      <div class="clients_container">
  <div class="clients_box">
    <div>
        №1<br>
        <span><a href="http://www.comon.ru/managers/?io=False&tm=1&tr=1" rel="nofollow noopener" target="_blank" style="text-decoration:underline; color:#fccc0a"><span style="color:black">В РЕЙТИНГЕ</span></a><br>  
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
        340<br>
        <span>УСПЕШНЫХ<br>
        учеников</span>
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
			        <center><a href="http://www.comon.ru/user/Allirog74/strategy/detail/?id=2713" rel="nofollow noopener" target="_blank"><img src="images/4.jpg"/></a> <!---->
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
    </div>
    <!--v-work--> 
  </div>
  </div>
  
  

    </div>

  </div>
  </div>
    <div class="video-work">
    <div class="row">
    <h2>Стратегии и услуги</h2>
      <ul class="neznanie_zakona">
<li><b>1.Консультирование по работе на бирже с целью совершения операций с использованием опционов и фьючерсов.</b><br><br>
 Стратегии. Разные, в зависимости от задач клиента, срока денег, отношения клиента к риску и прибыли. В основном используются три подхода и их сочетания: авторская опционно-фьючерсная стратегия "Прикрытый Интрадей", продажа волатильности в дальних краях, направленные ратио-спреды.<br><br>
 Риски. Обязательно оговаривается лимит потерь, ниже которого счет не должен снижаться в течение отчетного периода (по крайней мере без дополнительного согласования с Клиентом). Как правило, это 20-30%, но есть клиенты которые ставят лимит потерь больше. Чем больше лимит потерь, тем, соответственно, на большую прибыль можно рассчитывать.<br><br>
	 Доходность. В очень среднем приближении, прибыль в годовых % превышает риск на период в 3-5 раз (при риске 10% можно выйти на 30-50% годовых, при риске в 20% можно выйти на 60-100% годовых и т.д.). <br><br>
</li>	  
<li><b>2.Структурные продукты.</b><br><br>Сочетание инструментов с фиксированной доходностью (как правило, евро бонды) и опционов. Позволяют создавать стратегии полностью без риска или с небольшим риском, но с возможностью заработка значительно выше фиксированной ставки. При этом, в основу доходности может быть положен широкий список инструментов (индексы, акции, золото, валюта, нефть), причем не только их рост, но и падение, а также различные сочетания под предпочтения каждого конкретного клиента, при его желании.
<br><br><i>Пример. Клиент предполагает рост золота на периоде в течение года, но не хочет терять деньги, в случае, если он будет не прав. В этом случае делается соответствующий структурник, и при росте золота, Клиент получает прибыль от этого роста на большую часть портфеля, если роста нет (или золото падает в цене), клиент ничего не теряет, но и не зарабатывает.</i>

 </li>
<li><b>3.Хеджирование опционами валютных рисков.</b> <br><br>
(в первую очередь по рубль/доллару). Опционы дают возможность закрыть риски по обесцениванию рублевой ликвидности, при этом не участвуя в рисках, если рубль будет дорожать. Никакими иными инструментами этого добиться невозможно. Очень востребованная услуга после прошлого года, особенно для экспортеров и импортеров (у которых существуют регулярные разрывы между периодами нахождения в рубле и обязательствами в  валюте, и, соотвественнно необходимости хеджироваться по изменению рубля к баксу), но также и для более широкого круга, от банков (не имеющих грамотного опционного деска) до физ.лиц.
<br><br>
<i>Пример. Через определенный срок Клиенту необходимо иметь определенную сумму в долларах, но в данный момент он не может их купить за рубли, так как у него нет всей суммы (рубли находятся в обязательствах, в товаре, на депозите и т.д.). При этом клиента устраивает текущий курс рубль/доллара и он не хотел бы нести риски по обесцениванию рубля в этот период. При помощи опционов, Клиент может зафиксировать для себя текущий курс рубль/доллара за весь срок ожидания, заплатив за это определенный процент (на данный момент порядка 1,8% в месяц), но при этом, если рубль подорожает к искомому сроку, то у клиента не уменьшается сумма в рублях, а значит он имеет возможность купить большую сумму в долларах за ту же сумму в рублях (то есть, не только спасти себя от обесценивания рубля, но и заработать в долларах).</i><br><br>
Возможны различные варианты более сложного хеджирования, например, можно значительно уменьшить стоимость хеджа, если ограничить пределы колебаний курса, в рамках которого мы хеджируемся. Также можно свести стоимость хеджирования к нулю и кроме того, даже заработать дополнительно к хеджу, при условии, что клиент будет согласен в будущем купить доллары значительно дешевле текущего курса и/или продать их значительно дороже (если туда уйдет цена). Более подробно по вариантам хеджирования - при консультации лично или по телефону. 
<br><br>


</li>
<li><b>4.Оптимизация долгосрочных инвестиционных портфелей.</b> <br><br>
При помощи опционов можно извлекать дополнительный заработок для клиентов, у которых уже есть долгосрочные портфели, в первую очередь - на акциях (например, купили портфель акций давно и дорого, не хотят продавать с убытком, но хотят, чтоб акции не лежали мертвым грузом - опционы позволяют генерировать дополнительную прибыль на основе уже имеющейся позиции). В том числе, это можно делать на золоте, в каком бы виде инвестор в нем не имел позицию  (металлсчета, физический металл, монеты, слитки и т.д.).<br><br>
<i>Пример. У клиента есть долгосрочная позиция в активе (акции, золото и т.д.) и он, в принципе был бы не против продать ее выше текущих цен (например на 20% выше в течении 3-х месяцев). При помощи опционов создается конструкция, при которой, если актив вырастает на 20% за 3 месяца, то Клиент продает его по этой цене, а если актив не вырастает на 20% (вырастает на меньшую величину или даже падает), то клиент ничего не продает, но получает дополнительно несколько процентов чистой прибыли в кэше, дополнительно к первоначальному активу.</i><br><br>



</li>
</ul>
      </div>
      
    </div>
  <div id="how-top"></div>
  <!--how-top-->
  <div id="how-work">
    <div id="tarif">
      <h2><br>Условия по консультированию по работе на бирже с целью совершения операций</h2>
        <ul class="delaem">
<li>1.Объем средств от  3 млн р (осенью 2016 зарегистрируем Инвестиционный фонд и сумма будет снижена), но у Клиента есть возможность инвестировать меньшую сумму "на пробу" от 100 тыс р на 1 месяц и после этого принимать решение по 1 млн р и выше.</li>
<li>2.Стоимость моего вознаграждения обсуждается индивидуально.</li>
<li>Обязательно оговаривается лимит потерь, ниже которого счет не должен снижаться в течение отчетного периода (по крайней мере без дополнительного согласования с Клиентом) . Как правило, это 20-30%, но есть клиенты, которые ставят лимит потерь больше. Чем больше лимит потерь, тем, соответственно, на большую прибыль можно рассчитывать. 
В очень среднем приближении, прибыль в годовых % превышает риск на период в 3-5 раз (при риске 20% можно выйти на 60-100% годовых).
</li>
<li>4.Консультирую по работе на ФОРТСЕ, опционами и фьючерсами, стратегии разные, в зависимости от задач клиента, срока денег, отношения клиента к риску и прибыли.</li>
<li>5.Возможна работа на опционах и на западных площадках, по желанию клиента, если счет от 200 тыс .уе. или пул клиентов с этой суммой. </li>	
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
<!-- /антибот -->
<a href="http://scroogefrog.com/en/"><img src="http://a.clickfrog.ru/img/clfg_ref/icon_0.png" alt="click fraud detection"></a><div id="clickfrog_counter_container" style="width:0px;height:0px;overflow:hidden;"></div><script type="text/javascript">(function(d, w) {var clickfrog = function() {if(!d.getElementById('clickfrog_js_container')) {var sc = document.createElement('script');sc.type = 'text/javascript';sc.async = true;sc.src = "//stat.clickfrog.ru/c.js?r="+Math.random();sc.id = 'clickfrog_js_container';var c = document.getElementById('clickfrog_counter_container');c.parentNode.insertBefore(sc, c);}};if(w.opera == "[object Opera]"){d.addEventListener("DOMContentLoaded",clickfrog,false);}else {clickfrog();}})(document, window);</script><noscript><div style="width:0px;height:0px;overflow:hidden;"><img src="//stat.clickfrog.ru/no_script.php?img" style="width:0px; height:0px;" alt=""/></div></noscript><script type="text/javascript">var clickfrogru_uidh='5c31332c8f9c09d2df9048d974beb809';</script>
<!-- /антибот -->
<!-- /google-analytics -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-68823517-2', 'auto');
  ga('send', 'pageview');

</script>
<!-- /google-analytics -->
  <div class="header">
      <div class="head-box">
      <div class="logo">
        <p>Илья </p>
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
  

  <script src="http://bezkreditoff.ru/dist/js/main.js"></script> <!-- <<<<<< В этом файле происходит вызов всех функций -->
  
 
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
    <td colspan="3" align="center"><a href="http://iljakorovin.ru/kurs4"   style="text-decoration:underline; color:black"><span style="color:black">2х дневны курс «Торговля временем на акциях»</span></a> 
	</table>
	
</body>
</html>
