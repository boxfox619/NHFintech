<?php
session_start();

$conn = new mysqli("127.0.0.1", "root", "sprout9427!#@", "nh");

$sql = "SELECT `title`, `image`, `price`, `item_count`, `content`, `address` FROM `post` WHERE `post_uid`=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('s',$_GET["post_uid"]);
$stmt->execute();
$stmt->bind_result($title,$image,$price,$item_count,$content,$address);
$stmt->fetch();
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
    <title>Pakhi an E-Commerce online Shopping Category Flat Bootstarp responsive Website Template| Single :: w3layouts</title>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Custom Theme files -->
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/form.css" rel="stylesheet" type="text/css" media="all" />
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
    <link rel="stylesheet" href="css/etalage.css">
    <script src="js/jquery.etalage.min.js"></script>
    <script>
      jQuery(document).ready(function($){

        $('#etalage').etalage({
          thumb_image_width: 300,
          thumb_image_height: 400,
          source_image_width: 800,
          source_image_height: 1000,
          show_hint: true,
          click_callback: function(image_anchor, instance_id){
            
          }
        });

      });
    </script>
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
  <!-- start-single-page -->
  <!-- content -->
  <!-- start content -->
  <div class="women_main" style="margin-top:30px;">
    <div class="container">
      <div class="row single">
        <div class="col-md-9 span-single">
          <div class="single_left" style="position: relative;">
            <div class="grid images_3_of_2" style="display: inline-block;">
              <ul id="etalage">
                <li>
                  <a href="optionallink.html">
                  <img class="etalage_thumb_image" src="<?php echo $image; ?>" class="img-responsive" />
                    <img class="etalage_source_image" src="<?php echo $image; ?>" class="img-responsive" title="" />
                  </a>
                </li>

              </ul>
              <div class="clearfix"></div>
            </div>
            <div class="desc1 span_3_of_2"; style="position:absolute; bottom:0px; right:0px;">
            <h3><?php echo $title; ?></h3>
            <p>$ <?php echo $price; ?> <a>/<?php echo $item_count; ?></a></p>
              <div class="btn_form">
                <form action="../buyProduct.php" method="post" id="buy_form">
                <input type="hidden" name="post_uid" value="<?php echo $_GET["post_uid"]; ?>">
                <input type="hidden" name="price" value="<?php echo $price/$item_count; ?>">
                <input type="text" name="count" value="1" style="width: 3em;">
                <a href="javascript:{}" onclick="document.getElementById('buy_form').submit();">buy now</a>
</form>
              </div>
            </div>
            <div class="clearfix"></div>
          </div>
          <div class="single-bottom1">
            <h6>내용</h6>
            <p class="prod-desc"><?php echo $content; ?></p>
          </div>
          <div class="single-bottom2">
            <h6>댓글</h6>
            <div class="product">
<?php
$stmt->close();
$sql2 = "SELECT `user`,`content` FROM `comment` WHERE `post_uid`=?";
$stmt2 = $conn->prepare($sql2);
$stmt2->bind_param('s',$_GET["post_uid"]);
$stmt2->bind_result($user,$content);
$stmt2->execute();
while($stmt2->fetch())
{
    echo "<p class=\"prod-desc\"><span style=\"font-size:18px;paddinng 10px; border-right:1px solid #9e9e9e;\">".$user."&ensp;</span>&ensp;".$content."</p>";
}
            ?>
            </div>
            <br>
            <div class="single-bottom2">
              <form action="../WriteCommentProcess.php"  method="post" style="display: inline;">
              <input type="hidden" name="post_uid" id="post_uid" value="<?php echo $_GET["post_uid"] ?>">
                <h6>댓글 입력<div style="float:right"><input type="submit" value="쓰기"></div>
                  <br><br>
                  <input style="width:100%; height: 50px;" type="text" name="content">
                </h6>
              </form>
            </div>
          </div>
    </div></div></div>
    <!-- end content -->
    <!-- content-section-ends -->
  </body>
</html>
