function loadNotifications(){
    $.ajax({
    type: "POST",
    url: '/nh/NHFintech/ReadMyPost.php',
    success: function(responseData){
        for( var i = 0; i < responseData.length; i += 1 ) {
          var data = responseData[i];
          if(data.title!=undefined){
          var item = createNotification(data['title'], data['per'], data['no']);
          $('#notifi-list').append(item);
          }
        }
      }
    });
}

function createNotification(title, percent, no){
  '<span class="list-group-item">First item <a style="position: absolute; right:10px; top: 3px;" onclick="cancel('+no+', '+percent+')" class="btn btn-warning">취소</a><a onclick="complete('+no+', '+percent+')" style="position: absolute; right: 65px; top: 3px;" class="btn btn-success">확정</a></span>';
}

function cancel(no, percent){
  var result = confirm("정말로 삭제하시겠습니까?");
  if(result){
    $.ajax({
    type: "POST",
    url: '/nh/NHFintech/DeletePost.php',
    data: 'post_pid='+no,
    success: function(responseData){
      location.reload();
    }
    });
  }
}

function complete(no, percent){
  if(percent<100){
    alert('조건이 충족되지 않았습니다!');
  }else{
  var result = confirm("공동구매를 확정하시겠습니까??");
    if(result){
      $.ajax({
      type: "POST",
      url: '/nh/NHFintech/Confirm.php',
      data: 'post_pid='+no,
      success: function(responseData){
        location.reload();
      });
    }
  }
}
>>>>>>> 41a00da7c1ef6f408736fc79eb4b447745d35579
