<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>1로 모여!!</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
<!-- dropdown -->
<script src="js/jquery.easydropdown.js"></script>
<link href="css/nav.css" rel="stylesheet" type="text/css" media="all"/>
<script src="js/scripts.js" type="text/javascript"></script>
<script src="js/paging.js" type="text/javascript"></script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
                  <li class="active"><a href="/nh/NHFintech/contact.html">공구 등록</a></li>
        </ul>
      </div>
   </div>
          </div>
      </div>
   </div>

    <div class="content">
        <div class="container">
            <div class="products-section">
                <div class="products-section-head text-center">
                    <h3><span>1</span>로 모여!</h3>
                    <p>신개념 공동구매 플랫폼!</p>
                </div>
                <div class="products-section-grids">
                    <ul id="filters" class="clearfix">
                        <li><span class="filter active" data-filter="1 2 3 4 9"><label class="active"></label>전체</span></li>
                        <li><span class="filter" data-filter="1"><label></label>생필품</span></li>
                        <li><span class="filter" data-filter="2"><label></label>가공식품</span></li>
                        <li><span class="filter" data-filter="3"><label></label>농수산물</span></li>
                        </ul>

                    <div id="portfoliolist">
                    <div class="clearfix"></div>
                </div>
          <div class="clearfix"></div>
          <div class="seemore" style="text-align: center !important;" onclick="seeMore('*','<?php echo $_GET["search"]; ?>');">
                    <a>See More</a>
                </div>
          </div>

          <!-- script-for-portfolio -->
<script type="text/javascript">
jQuery(document).ready(function($) {
    $(".scroll").click(function(event){
        event.preventDefault();
        $('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
            });
        });
    </script>

<script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
<script type="text/javascript">
$(function () {
    seeMore('*','<?php echo $_GET["search"]; ?>');
    });
    </script>
                </div>
            </div>
        </div>
</body>
</html>
