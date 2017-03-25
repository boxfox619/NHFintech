var filterList = {
    init: function () {
      $('#portfoliolist').mixitup({
        targetSelector: '.portfolio',
        filterSelector: '.filter',
        effects: ['fade'],
        easing: 'snap',
        // call the hover effect
        onMixEnd: filterList.hoverEffect()
      });
    },
    hoverEffect: function () {
      $('#portfoliolist .portfolio').hover(
        function () {
          $(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
          $(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');
        },
        function () {
          $(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQua d');
          $(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');
        }
      );
    }
};

var item = 0;
function seeMore(category){
var params = 'begin='+item+'&count=10&category='+category;
  $.ajax({
  type: "POST",
  url: 'http://sprout.kr/nh/ReadPost.php',
  data: params,
  success: function(responseData){
      for( var i = 0; i < responseData.length; i += 1 ) {
        var data = responseData[i];
        if(data.title!=undefined){
        var item = createItemHtml(data['title'], data['image'], data['category'], data['price'], 50, data['no']);
        $('#portfoliolist').append(item);
        }
      }
    }
  });
  filterList.init();
}

function createItemHtml(title, image, category, price, percent, no){
  var progressClass = 'progress-bar-warning';
  if(percent>50){
    progressClass = 'progress-bar-info';
  }
  if(percent == 100){
    progressClass = 'progress-bar-success';
  }

  return '<div onclick="single('+no+')" class="portfolio '+category+' mix_all" data-cat="'+category+'" style="display: inline-block; opacity: 1;">'+
  						'<div class="portfolio-wrapper">'+
  							'<a class="b-link-stripe b-animate-go  thickbox">'+
  						     '<img src="'+image+'" class="img-responsive" alt="" /><div class="b-wrapper"><div class="atc"><p>장바구니로!</p></div><div class="clearfix"></div><h2 class="b-animate b-from-left    b-delay03 "><img src="images/icon-eye.png" class="img-responsive go" alt=""/></h2>'+
  						  	'</div></a>'+
  							'<div class="title">'+
  								'<div class="colors">'+
  								'<h4>'+title+'</h4>'+
  								'<p> 달성률:'+
                  '<span class="progress-mobile">'+percent+'%</span></p>'+
  									'<div class="progress percents">'+
                      '<div class="progress-bar percents '+progressClass+'" role="progressbar" aria-valuenow="'+percent+'" aria-valuemin="0" aria-valuemax="100" style="width: 100px;">'+
                      percent+'%'+
                      '</div>'+
                      '</div>'+
  								'</div>'+
  								'<div class="main-price">'+
  									'<h3>'+price+'<span>원</span></h3>'+
  								'</div>'+
  								'<div class="clearfix"></div>'+
  							'</div>'+
  		         '</div>'+
  					'</div>';
}

function single(no){
  window.location.href='/single?post_uid='+no;
}
