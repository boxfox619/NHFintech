<?php
session_start();
$conn = new mysqli("127.0.0.1", "root", "sprout9427!#@", "nh");
$sql = "SELECT `title`,`latitude`,`hardness` FROM `post`";
$stmt = $conn->prepare($sql);
$stmt->execute();
$stmt->bind_result($title,$lat,$har);
?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
  <head>
    <title>Pakhi an E-Commerce online Shopping Category Flat Bootstarp responsive Website Template| Cart :: w3layouts</title>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Custom Theme files -->
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!-- Custom Theme files -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Pakhi Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
    Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!--webfont-->
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <!-- dropdown -->
    <script src="js/jquery.easydropdown.js"></script>
    <link href="css/nav.css" rel="stylesheet" type="text/css" media="all"/>
    <script type="text/javascript" src="js/hover_pack.js"></script>
    <script type="text/javascript">
      jQuery(document).ready(function($) {
        $(".scroll").click(function(event){
          event.preventDefault();
          $('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
        });
      });
    </script>
  </head>
  <body>
<<<<<<< HEAD
    <!-- header-section-starts -->
    <div class="header" id="home">
      <div class="top-header">
        <div class="container">
          <div class="logo">
            <a href="/nh/NHFintech/">
              <img src="./images/logo_w_ver2.png" style="width:60px;">
            </div>
            <div class="header-top-right">
              <!-- start search-->
              <div class="search-box">
                <div id="sb-search" class="sb-search">
                  <form>
                    <input class="sb-search-input" placeholder="항목 검색..." type="search" name="search" id="search">
                    <input class="sb-search-submit" type="submit" value="">
                    <span class="sb-icon-search"> </span>
                  </form>
                </div>
              </div>

              <!-- search-scripts -->
              <script src="js/classie.js"></script>
              <script src="js/uisearch.js"></script>
              <script>
                new UISearch( document.getElementById( 'sb-search' ) );
              </script>
              <!-- //search-scripts -->

              <a href="cart.php"><i class="cart"></i></a>
            </div>
            <div class="navigation">
              <div>
                <label class="mobile_menu" for="mobile_menu">
                  <span>Menu</span>
                </label>
                <input id="mobile_menu" type="checkbox">
                <ul class="nav">

                  <li class="active"><a href="/nh/NHFintech">Home</a></li>
                  <li class="active"><a href="/nh/NHFintech">공동 구매</a></li>
                  <li class="active"><a href="index.html">개인 설정</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
=======

      <!-- header-section-starts -->
      <div class="header" id="home">
          <div class="top-header">
              <div class="container">
              <div class="logo">
                  <a href="/nh/NHFintech/">
                      <img src="./images/logo_w_ver2.png" style="width:60px;">
              </div>
                  <div class="header-top-right">
                  <!-- start search-->
                      <div class="search-box">
                          <div id="sb-search" class="sb-search">
                              <form>
                                  <input class="sb-search-input" placeholder="상품명 또는 지역 검색" type="search" name="search" id="search">
                                  <input class="sb-search-submit" type="submit" value="">
                                  <span class="sb-icon-search"> </span>
                              </form>
                          </div>
                      </div>

                      <!-- search-scripts -->
                      <script src="js/classie.js"></script>
                      <script src="js/uisearch.js"></script>
    <script>
    new UISearch( document.getElementById( 'sb-search' ) );
    </script>
                      <!-- //search-scripts -->

                      <a href="cart.php"><i class="cart"></i></a>
                  </div>
              <div class="navigation">
              <div>
                <label class="mobile_menu" for="mobile_menu">
                <span>Menu</span>
                </label>
                <input id="mobile_menu" type="checkbox">
                  <ul class="nav">
                      <li class="active"><a href="/nh/NHFintech">Home</a></li>
                      <li class="active"><a href="/nh/NHFintech/map.php">공구 지도</a></li>
                      <li class="active"><a href="/nh/NHFintech/contact.html">공구 등록</a></li>
            </ul>
          </div>
       </div>
              </div>
          </div>
       </div>
>>>>>>> 8b3a1e194f780b5ae7a181d6fe8fa4161c7cccf5

  <div class="container"><div class="coats sing-c text-center" style="margin-top:50px;">
      <span><label style="display: inline-block; margin-right: 7px;">주소</span>
      <span><input id="place_input" onchange="place_change(this.value)" name="address" type="text" class="textbox"></span>
      <br><br>
      <div id="map" style="width:100%;height:500px;"></div>
    </div>
  </div>

  <script type="text/javascript" src="https://apis.daum.net/maps/maps3.js?apikey=559542baa77ce6bf92e6ff22daa358d7"></script>
  <script>
  var container = document.getElementById('map'); //지도를 담을 영역의 DOM 레퍼런스
  var options = { //php에서 렌더링하기로
    center: new daum.maps.LatLng(37.4950600,127.1224120), //지도의 중심좌표.
    level: 3 //지도의 레벨(확대, 축소 정도)
  };
  var map = new daum.maps.Map(container, options);
  /*
    if (navigator.geolocation) {

      navigator.geolocation.getCurrentPosition(function(position) {
        lat = position.coords.latitude
        lng =  position.coords.longitude
        console.log(lat, lng);
          mapOption = {
            center: new daum.maps.LatLng(lat, lng), // 지도의 중심좌표
            level: 2 // 지도의 확대 레벨
          };
          map.setCenter(mapOption["center"]);
      });
    } else { // HTML5의 GeoLocation을 사용할 수 없을때 마커 표시 위치와 인포윈도우 내용을 설정합니다
      var locPosition = new daum.maps.LatLng(50.450701, 129.570667),
        message = 'geolocation을 사용할수 없어요..'
      displayMarker(locPosition, message);
    }
    */

    function place_change(text) {
      var place_value = $('#place_input').val();
      url = "https://apis.daum.net/local/geo/addr2coord?apikey=559542baa77ce6bf92e6ff22daa358d7&q="+place_value+"&output=json";
      console.log(url);
      $.post("http://10.10.55.188:8282/",
        {
          url: url
        },
        function(data, status){
          data = JSON.parse(data);
          lat = data["channel"]["item"][0]["lat"];
          lng = data["channel"]["item"][0]["lng"];
          mapContainer = document.getElementById('map') // 지도를 표시할 div
          mapOption = {
            center: new daum.maps.LatLng(lat, lng), // 지도의 중심좌표
            level: 2 // 지도의 확대 레벨
          };
          console.log(lat,lng);
          map.panTo(mapOption["center"]);
        });
    }

    function displayMarker(locPosition, message) {

        // 마커를 생성합니다
        var marker = new daum.maps.Marker({
            map: map,
            position: locPosition
        });

        var iwContent = message, // 인포윈도우에 표시할 내용
            iwRemoveable = true;

        // 인포윈도우를 생성합니다
        var infowindow = new daum.maps.InfoWindow({
            content : iwContent,
            removable : iwRemoveable
        });

        // 인포윈도우를 마커위에 표시합니다
        infowindow.open(map, marker);
        }
<?php
while($stmt->fetch()){
    if($lat)
    {
        echo "displayMarker(new daum.maps.LatLng(".$lat.",".$har."), \"".$title."\");";
    }
}
?>

  </script>
</body>
</html>
