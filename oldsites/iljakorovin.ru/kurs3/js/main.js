App = {
	Init : function() {
		jQuery(document).ready(function() {
			//carousel init
			App.Funcs.sliders();
			

			//animate
			App.Funcs.animate();


			//menu scroll spy
			App.Funcs.menu();


			//smooth scroll
			App.Funcs.smoothscroll();


			//Окно обратного звонка
			App.Funcs.feedback0();

			//Отправка формы feedback_send(wrap-form)
			var feedback0 = new App.Funcs.feedback_send('#modal');
			var feedback1 = new App.Funcs.feedback_send('#feedback1');
			var feedback2 = new App.Funcs.feedback_send('#feedback2');
			var feedback3 = new App.Funcs.feedback_send('#feedback3');
			var feedback4 = new App.Funcs.feedback_send('#feedback4');

			//Удаляем фон всплывающего окна (BUG Bootstap)
			App.Funcs.removeModalBg();


			//Расширяем валидацию
			App.Funcs.validExtend();
			

			//Валидация
			App.Funcs.formValid();
			


			//Галерея
			App.Funcs.gallery();


			//Сноб
			App.Funcs.sbob();


			//Опрос
			App.Funcs.inquiry();
		})
	},


	Funcs : {
		//Опрос
		inquiry: function() {

			$('#carousel-inquiry').carousel({
				interval : false,
				keyboard : false
			});
			$('#carousel-wrap-inquiry').carousel({
				interval : false,
				keyboard : false
			});

			var item_count = $('.inquiry-title > .item').length;
			var one_p = 100 / item_count;
			item_count = item_count - 1;
			var item_num = 0;

			// Функция считающая прогресс 
			function setProgress(num) {
				var progress = (num) * one_p;
				$('.inquiry-status').css('width',progress+'%');
			}
			setProgress(item_num);


			$('.inquiry-tools').on('click', '.btn', function(){

				if (item_num < item_count) {
					$('#carousel-inquiry').carousel('next');
				} else {
					$('#carousel-inquiry').carousel('pause');
					$('#carousel-wrap-inquiry').carousel('next');
				}

				// Заносим ответ в атрибут data 
				$($('.inquiry-title > .item')[item_num]).data('answer', $(this).val());
				item_num++;
				setProgress(item_num);

			});
		},


		//Слайдеры
		sliders : function() {
			//carousel
			$('.webwestofthebest').carousel();
			$('.review').carousel();

		},



		//Анимация
		animate : function() {
			if (!jQuery.browser.mobile) {
				var s = skrollr.init();
			}
		},



		//Отмечаем активный пункт меню
		menu : function() {
			$('body').scrollspy({ 
				target: '.navbar-default',
				offset: 65
			});
			
			// Скрываем popup при клике в мобильной версии	
			$('.navbar-collapse').click(function(event) {
				$(this).removeClass('in');
			});
		},


		//Плавная прокрутка
		smoothscroll : function() {
			$('.navbar-nav a').smoothScroll({
				speed: 1000,
				offset: -61,
			});
		},



		//Окно обратного звонка
		feedback0 : function() {
			if($('.feed_back_win').length == 0) {
				$('#open-form').click(function(){
					$('#modal').load('form.html', function(){
						$('.feed_back_win').modal('show');
						$('#modal form').validate(App.Funcs.validParam);
						$('#wurl').val($('#furl').val());
					});			
					return false;
				});
			} else {
				$('.feed_back_win').modal('show');
			}

		},



		//Всплывающая форма
		feedback_send : function(form_wrap) {

			$(form_wrap).on('submit','form',function(event) {
				event.preventDefault();
				var thisForm = $(this);

				//Если форма в опроснике добавляем в форму скрыте поля 
				if($(this).hasClass('opros')) {
					$('.inquiry-title > .item').each(function() {
						var query = $(this).text();
						var answer = $(this).data('answer');
						var opros = query + ':' + answer;
						var newInp = $('<input type="hidden" name="opros[]" value="'+opros+'">')
						$(newInp).appendTo('form.opros');
					});
				}


				var dataSend = $(this).serialize();
				var action = $(this).attr('action');

				

				$.ajax({
						type: "POST",
						url: action,
						data: dataSend,
						dataType: "html",
						beforeSend: function(){

							//Меняем надпись на кнопке при отправке сообщения
							thisForm.find('button').text('Подождите').attr('disabled','true');
						},
						complete: function(){
							thisForm.find('button').text('Отправлено').removeAttr('disabled');

							//Обработка целей Yandexa в отдельном файле
							if(form_wrap === '#modal') {yaCounter248.reachGoal('bez-kred-callback1'); console.log('Goal-bez-kred-callback1');}
							if(form_wrap === '#feedback1') {yaCounter248.reachGoal('bez-kred-form1'); console.log('Goal-bez-kred-form1');}
							if(form_wrap === '#feedback2') {yaCounter248.reachGoal('bez-kred-form2'); console.log('Goal-bez-kred-form2');}
							if(form_wrap === '#feedback3') {yaCounter248.reachGoal('bez-kred-form3'); console.log('Goal-bez-kred-form3');}
							if(form_wrap === '#feedback4') {yaCounter248.reachGoal('bez-kred-form4'); console.log('Goal-bez-kred-form4');}
						}
				})
					.done(function(rezult) {
						$('.feed_back_win').modal('hide');

						//Показываем соощение от сервера
						App.Funcs.load_info_win(rezult);
					})
					.fail(function() {
						App.Funcs.load_info_win("Ошибка отправки заявки. Повторите отправку позже или позвоните по телефону!");
					});

			});

		},



		//Уведомление об успешной отправке
		load_info_win : function(rezult) {
			if($('.info_win').length == 0) {

				$('#modal').load('info.html',function(){
					$('#modal').find('h3').text(rezult);
					$('.info_win').modal('show');
				});
				
			} else {

				$('#modal').find('h3').text(rezult);
				$('.info_win').modal('show');

			}
			$('#modal').on('click', '#close', function(){
				$('.info_win').modal('hide');
			});
			
		},



		//Удаляем фон модального окна(BUG Bootstap)
		removeModalBg : function() {
			$('*').on('hide.bs.modal', function(){
				$('.modal-backdrop').remove();
			});
		},



		//Расширяем Валидатор
		validExtend : function() {
			jQuery.validator.addMethod("phone", function(value, element) {
				return this.optional(element) || /^[0-9\s+\(\)-]+$/.test(value);
			},	"Только цифры и пробелы");
		},



		//Валидация форм
		formValid : function() {
			$('#feedback1 form').validate(App.Funcs.validParam);
			$('#feedback2 form').validate(App.Funcs.validParam);
			$('#feedback3 form').validate(App.Funcs.validParam);
			$('#feedback4 form').validate(App.Funcs.validParam);
		},



		validParam : {
				rules: {
					tel: {
						required: true,
						minlength: 6,
						phone: true
					}
				},
				messages: {
					tel: {
						required: 'Укажите телефон',
						minlength: 'Слишком короткий'
					}
				},
				errorElement : 'div'
		},



		//Галерея
		gallery : function() {
			$('.docs').find('.scan').fancybox();
		},



		//Сноб
		sbob : function() {

			$('#web_link').click(function(){
				
				yaCounter248.reachGoal('web');

			});
			

			function timeSnob(elem) {
				if( parseInt($(elem).css('right')) < 0 ) {
					$(elem).animate({right: '0px', opacity: '1'}, 700);
				} else {
					$(elem).animate({right: '-285px', opacity: '0.6'}, 700);
				}
			}

			var timerId = setTimeout(function(){
				timeSnob($('#snob'));
			}, 3000)

			var timerId1 = setTimeout(function(){
				timeSnob($('#snob'));
			}, 8000)

			$('#snob_title').click(function(){
				timeSnob($('#snob'));
				clearTimeout(timerId);
				clearTimeout(timerId1);
			});

			$('.snob_close').click(function(){
				timeSnob($('#snob'));
				clearTimeout(timerId);
				clearTimeout(timerId1);
			});
		}


	}

}

App.Init();