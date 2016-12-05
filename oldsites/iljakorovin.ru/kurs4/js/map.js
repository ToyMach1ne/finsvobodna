Map = {
	Init: function(){
		$(document).ready(function(){
			
			Map.Func.map_load();

		});
	},

	Func: {

		map_load : function() {

			// Асинхронная загрузка
			function loadScript() {
				var script = document.createElement("script");
				script.type = "text/javascript";
				script.src = "http://maps.googleapis.com/maps/api/js?key=AIzaSyBh5SYPMcTOOaKK267F1GGeUv9b3EUUf5U&sensor=false&callback=Map.Func.map_options";
				document.body.appendChild(script);
			};

			//API Load
			window.onload = loadScript;

		},

		map_options : function() {
			var map;
			var myMapLatlng = new google.maps.LatLng(59.968361, 30.299276);
			var mapOptions = {
				zoom: 16,
				center: myMapLatlng,
				scrollwheel: false
			};

			//  Карта
			map = new google.maps.Map(document.getElementById('map'), mapOptions);

			var myLatlng = new google.maps.LatLng(59.968197,30.299285);


			//  Маркер
			var marker = new google.maps.Marker({
				position: myLatlng,
				map: map,
				title: 'БЦ "Резон" ул.Всеволода Вишневского 12а'
			});


			//Инфо окно
			/*
			var contentString = '<div class="marker">'+
				'<p>Санкт-Петербург <br>БЦ&nbsp;"Резон"&nbsp;ул.Всеволода&nbsp;Вишневского&nbsp;12а</p>'+
				'<p>График работы:<br> Пн-Пт, с 10:00 до 20:00</p>'+
				'<p>Почта: info@bezkreditoff.ru <span class="tel">8 (800) 333-58-34</span></p>'+
			'</div>';
			var infowindow = new google.maps.InfoWindow({
			  content: contentString
			});
			google.maps.event.addListener(marker, 'click', function() {
			infowindow.open(map,marker);
			});

			infowindow.open(map,marker);
			*/


			//  ДОБАВЛЯЕМ МАРШРУТЫ START

			//  От метро Start -----------------------------------------------------

			//  Путь
			var metroCoordinates = [
				new google.maps.LatLng(59.966578, 30.310846),
				new google.maps.LatLng(59.968053, 30.309409),
				new google.maps.LatLng(59.966807, 30.302768),
				new google.maps.LatLng(59.968198, 30.299324)
			];
			var metroPath = new google.maps.Polyline({
				path: metroCoordinates,
				strokeColor: "#FF0000",
				strokeOpacity: 0.5,
				strokeWeight: 4
			});
			metroPath.setMap(map);

			//Маркер
			var metroMarker = new google.maps.Marker({
				position: new google.maps.LatLng(59.966578, 30.310846),
				map: map,
				title: 'от метро Петроградская'
			});

			//Балун
			var metroWindow = new google.maps.InfoWindow({
				content: '<div>от&nbsp;метро&nbsp;Петроградская</div>'
			});
			google.maps.event.addListener(metroMarker, 'click', function() {
				metroWindow.open(map,metroMarker);
			});
			metroWindow.open(map,metroMarker);

			//  От метро End -----------------------------------------------------




			//  Трамвай Start------------------------------------------------------

			//  Путь
			var tramCoordinates = [
				new google.maps.LatLng(59.969385, 30.303283),
				new google.maps.LatLng(59.969964, 30.301191),
				new google.maps.LatLng(59.968144, 30.299565),
				new google.maps.LatLng(59.968198, 30.299324)
			];
			var tramPath = new google.maps.Polyline({
				path: tramCoordinates,
				strokeColor: "#009827",
				strokeOpacity: 0.5,
				strokeWeight: 4
			});
			tramPath.setMap(map);
			//  Маркер
			var tramMarker = new google.maps.Marker({
				position: new google.maps.LatLng(59.969385, 30.303283),
				map: map,
				strokeColor: "#009827",
				title: 'Трамвай №40'
			});

			//  Балун
			var tramWindow = new google.maps.InfoWindow({
				content: '<div>Трамвай&nbsp;№40</div>'
			});
			google.maps.event.addListener(tramMarker, 'click', function() {
			tramWindow.open(map,tramMarker);
			});

			//  Трамвай End------------------------------------------------------




			//  Автобус Start-------------------------------------------------

			//  Путь
			var busCoordinates = [
				new google.maps.LatLng(59.966259, 30.298186),
				new google.maps.LatLng(59.966246, 30.299404),
				new google.maps.LatLng(59.967406, 30.301244),
				new google.maps.LatLng(59.968198, 30.299324)
			];
			var busPath = new google.maps.Polyline({
				path: busCoordinates,
				strokeColor: "#00a2ff",
				strokeOpacity: 0.5,
				strokeWeight: 4
			});
			busPath.setMap(map);
			//  Маркер
			var busMarker = new google.maps.Marker({
				position: new google.maps.LatLng(59.966259, 30.298186),
				map: map,
				strokeColor: "#00a2ff",
				title: 'Автобус №10'
			});

			//  Балун
			var busWindow = new google.maps.InfoWindow({
				content: '<div>Автобус&nbsp;№10</div>'
			});
			google.maps.event.addListener(busMarker, 'click', function() {
			busWindow.open(map,busMarker);
			});
			busWindow.open(map,busMarker);

			//  Автобус End-------------------------------------------------

			// ДОБАВЛЯЕМ МАРШРУТЫ END


			//  Устанавливаем карту в нужное нам положение
			map.setCenter(myMapLatlng);
		}


	}
}

Map.Init();