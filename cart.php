<?php
session_start();
if(!$_SESSION["id"])
{
    echo "<script>document.location.href=\"/nh/NHFintech/signin.html\"</script>";
}

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
									<input class="sb-search-input" placeholder="Enter your search term..." type="search" name="search" id="search">
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
						</ul>
			</div>
		 </div>
				</div>
			</div>
		 </div>

		</div>
		<div class="container">
	<div class="dreamcrub" style="margin-bottom: 0px;">
				   	 <ul class="breadcrumbs" style="margin: 0 !important">

	                    <li class="home">
	                       <a href="index.html" title="Go to Home Page"><img src="images/home.png" alt=""/></a>&nbsp;
	                       <span>&gt;</span>
	                    </li>
	                    <li>
	                       Mypage
	                    </li>
	                </ul>
	                <ul class="previous"  style="margin: 0 !important">
	                	<li><a href="index.html">Back to Previous Page</a></li>
	                </ul>
	                <div class="clearfix"></div>
				   </div>
				   </div>
					 <div class="container">
					   <div class="row">
    			 		<div class="col-lg-5 col-md-12">
								<h2>내정보</h2>
								<div style="padding-left: 15px;">
					<div><label>아이디 : </label><span>id</span></div>
					<div><label>이름 : </label><span>김성래</span></div>
					<div><label>전화번호 : </label><span>김성래</span></div>
					<div><label>계좌번호 : </label><span>김성래</span></div>
				</div>
					     </div>
	    			 		<div class="col-lg-6 col-md-12">
									<h2>알림</h2>
									<div style="padding-left: 15px;">
										<div class="list-group notice-list">
											<!-- 알림이 존재하지 않습니다! -->
  									<span class="list-group-item">First item <a style="position: absolute; right:10px; top: 3px;" class="btn btn-warning">취소</a><a style="position: absolute; right: 65px; top: 3px;" class="btn btn-success">확정</a></span>
							</div>
								</div>
					     </div>
					   </div>
					 </div>

	<div class="container">
<div class="dreamcrub">
			   	 <ul class="breadcrumbs" style="margin: 0 !important">

                    <li class="home">
                       <a href="index.html" title="Go to Home Page"><img src="images/home.png" alt=""/></a>&nbsp;
                       <span>&gt;</span>
                    </li>
                    <li>
                       Cart(<span id="cart-count"></span>)
                    </li>
                </ul>
                <div class="clearfix"></div>
			   </div>
			   </div>

<div class="container">

						<div id="portfoliolist">



						<div class="clearfix"></div>
					</div>

	<div id="not-have" class="coats sing-c text-center">
			<h3 class="c-head">구매한 상품 개수(0)</h3>
			<span>현재 고객님께서 구매한 상품이 없습니다.</span><br>
			<span style="vertical-align: bottom;">신개념 공동구매 플랫폼
				<img src="./images/logo_b_ver2.png" style="width:60px; display: inline-block;"> 와 함께 현명한 소비생활을 즐겨보세요!</span><br>
			<span></span>
		</div>

</div>
<script type="text/javascript">
$(function () {
	getCart();
});</script>
</body>
</html>
