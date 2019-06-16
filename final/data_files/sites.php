<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyBzxENOLqBO-H5xWrnRdO-OHLmKLCEqcwU" ></script>
  
</head>
<body>
<style>
    .text-container > span {
    font-size: 50px;   
}
body{
    color:white;
    font-size:20px;
}

</style>
<div class="text-container">
        <span>K</span>
        <span>O</span>
        <span>R</span>
        <span>E</span>
        <span>A</span>
    </div>
    <div id="pic">
    <p style="padding:10px; margin-left:40px;">Namsan</p>
    <img src="../images/image1.jpg"/>
    <p style="padding:10px; margin-left:40px;">Bulguksa</p>
    <img src="../images/image2.jpg"/>
    <p style="padding:10px; margin-left:40px;">Hanok maeul</p>
    <img src="../images/image3.jpg"/>
    </div> 
    <div>
    <div id="map_ma" class="map_ma"></div>
    <div id="map_ma2" class="map_ma"></div>
    <div id="map_ma3" class="map_ma"></div>
    </div>

    <div style="margin-left:40px;">
        <p style="font-size:13px; margin-top:120px;">
            서울특별시 남산에 있는 송신탑이자 서울의<br/>
            대표적인 랜드마크. 정식 명칭은 남산서울타워로,<br/>
            보통은 남산타워나 CJ푸드빌에서 일부층을 임대하여<br/>
            운영하는 전망대 및 복합문화공간 이름인<br/>
            N서울타워로 많이 불린다.
        </p><br/>
        <p style="font-size:13px; margin-top:140px;">
        불국정토를 속세에 건설하겠다는 야심찬<br/>
        통일신라의 꿈을 드러내는 건축물로,<br/>
        이름인 불국사는 불국정토에서 유래하였다.<br/>
        불국사는 치밀한 구성의 완성도와 아름다움으로<br/>
        유명한 절이다
        </p><br/>
        <p style="font-size:13px; margin-top:140px;">
        전라북도 전주시 완산구 교동, 풍남동 일대에<br/>
        위치한 한옥 밀집거리. 전주의 대표적인 관광지로<br/>
        한옥 건물들과 경기전, 전주향교, 한벽당,<br/>
        오목대와 이목대, 전동성당 등 오래된 건물들이 있다.
        </p>
    </div>

    <div>
        <a href="../index.php" style="margin-left:20px; font-size:20px; height:20px;">Home</a>
    </div>
    

<script type="text/javascript">
		$(document).ready(function() {
			var myLatlng = new google.maps.LatLng(37.551442,126.988216 ); // 위치값 위도 경도
	var Y_point			= 37.551442;		// Y 좌표
	var X_point			= 126.988216 ;		// X 좌표
	var zoomLevel		= 18;				// 지도의 확대 레벨 : 숫자가 클수록 확대정도가 큼
	var markerTitle		= "남산타워";		// 현재 위치 마커에 마우스를 오버을때 나타나는 정보
	var markerMaxWidth	= 300;				// 마커를 클릭했을때 나타나는 말풍선의 최대 크기

	var myLatlng = new google.maps.LatLng(Y_point, X_point);
	var mapOptions = {
						zoom: zoomLevel,
						center: myLatlng,
						mapTypeId: google.maps.MapTypeId.ROADMAP
					}
	var map = new google.maps.Map(document.getElementById('map_ma'), mapOptions);
	var marker = new google.maps.Marker({
											position: myLatlng,
											map: map,
											title: markerTitle
	});
	var infowindow = new google.maps.InfoWindow(
												{
													content: contentString,
													maxWizzzdth: markerMaxWidth
												}
			);
	google.maps.event.addListener(marker, 'click', function() {
		infowindow.open(map, marker);
	});
});
		$(document).ready(function() {
			var myLatlng = new google.maps.LatLng(35.790341,129.332135); // 위치값 위도 경도
	var Y_point			= 35.790341;		// Y 좌표
	var X_point			= 129.332135;		// X 좌표
	var zoomLevel		= 18;				// 지도의 확대 레벨 : 숫자가 클수록 확대정도가 큼
	var markerTitle		= "불국사";		// 현재 위치 마커에 마우스를 오버을때 나타나는 정보
	var markerMaxWidth	= 300;				// 마커를 클릭했을때 나타나는 말풍선의 최대 크기

	var myLatlng = new google.maps.LatLng(Y_point, X_point);
	var mapOptions = {
						zoom: zoomLevel,
						center: myLatlng,
						mapTypeId: google.maps.MapTypeId.ROADMAP
					}
	var map = new google.maps.Map(document.getElementById('map_ma2'), mapOptions);
	var marker = new google.maps.Marker({
											position: myLatlng,
											map: map,
											title: markerTitle
	});
	var infowindow = new google.maps.InfoWindow(
												{
													content: contentString,
													maxWizzzdth: markerMaxWidth
												}
			);
	google.maps.event.addListener(marker, 'click', function() {
		infowindow.open(map, marker);
	});
});

	$(document).ready(function() {
		var myLatlng = new google.maps.LatLng(35.815636,127.153475 ); // 위치값 위도 경도
	    var Y_point			= 35.815636;		// Y 좌표
	    var X_point			= 127.153475 ;		// X 좌표
	    var zoomLevel		= 18;				// 지도의 확대 레벨 : 숫자가 클수록 확대정도가 큼
	    var markerTitle		= "전주 한옥마을";		// 현재 위치 마커에 마우스를 오버을때 나타나는 정보
	    var markerMaxWidth	= 300;				// 마커를 클릭했을때 나타나는 말풍선의 최대 크기

	    var myLatlng = new google.maps.LatLng(Y_point, X_point);
	    var mapOptions = {
						zoom: zoomLevel,
						center: myLatlng,
						mapTypeId: google.maps.MapTypeId.ROADMAP
					}
	    var map = new google.maps.Map(document.getElementById('map_ma3'), mapOptions);
	    var marker = new google.maps.Marker({
											position: myLatlng,
											map: map,
											title: markerTitle
	    });
	    var infowindow = new google.maps.InfoWindow(
												{
													content: contentString,
													maxWizzzdth: markerMaxWidth
												}
	    );
	google.maps.event.addListener(marker, 'click', function() {
		infowindow.open(map, marker);
	    });
    });
</script>
        
</body>
</html>