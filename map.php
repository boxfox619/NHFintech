<?php
session_start();

$conn = new mysqli("127.0.0.1", "root", "sprout9427!#@", "nh");
if (mysqli_connect_error())
{
    printf("ERROR");
}

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
                      <li class="active"><a href="/nh/NHFintech/map.phpl">공구 등록</a></li>
            </ul>
          </div>
       </div>
              </div>
          </div>
       </div>

  <!-- start Contact-page -->
  <div class="container"><div class="coats sing-c text-center" style="margin-top:50px;">
      <div id="map" style="width:100%;height:500px;"></div>
    </div>
  </div>

  <script type="text/javascript" src="https://apis.daum.net/maps/maps3.js?apikey=799c201accc6d335ad64e9cb2989703c"></script>
<script>
var container = document.getElementById('map'); //지도를 담을 영역의 DOM 레퍼런스
var options = { //php에서 렌더링하기로
center: new daum.maps.LatLng(33.450701, 126.570667), //지도의 중심좌표.
    level: 3 //지도의 레벨(확대, 축소 정도)
  };
  var map = new daum.maps.Map(container, options);
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
while($stmt->fetch())
{
    if($lat)
        echo "displayMarker(new daum.maps.LatLng(".$lat.",".$har."),\"".$title."\");";
}
?>
</script>
</body>
</html>
