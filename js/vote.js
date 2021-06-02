$(document).ready(function(){

    // if the user clicks on the like button ...
    $('.like-btn').on('click', function(){
      var post_id = $(this).data('id');
      $clicked_btn = $(this);
      if ($clicked_btn.hasClass('far fa-heart')) {
          action = 'like';
      } else if($clicked_btn.hasClass('fas fa-heart')){
          action = 'unlike';
      }
      $.ajax({
          url: 'peringkat_program.php',
          type: 'post',
          data: {
              'action': action,
              'post_id': post_id
          },
          success: function(data){
              res = JSON.parse(data);
              if (action == "like") {
                  $clicked_btn.removeClass('far fa-heart');
                  $clicked_btn.addClass('fas fa-heart');
              } else if(action == "unlike") {
                  $clicked_btn.removeClass('fas fa-heart');
                  $clicked_btn.addClass('far fa-heart');
              }
              // display the number of likes and dislikes
              $clicked_btn.siblings('span.likes').text(res.likes);
              $clicked_btn.siblings('span.dislikes').text(res.dislikes);
    
              // change button styling of the other button if user is reacting the second time to post
              $clicked_btn.siblings('i.fa-thumbs-down').removeClass('fa-thumbs-down').addClass('fa-thumbs-o-down');
          }
      });		
    
    });

    // if the user clicks on the dislike button ...
    $('.dislike-btn').on('click', function(){
      var post_id = $(this).data('id');
      $clicked_btn = $(this);
      if ($clicked_btn.hasClass('fa-thumbs-o-down')) {
          action = 'dislike';
      } else if($clicked_btn.hasClass('fa-thumbs-down')){
          action = 'undislike';
      }
      $.ajax({
          url: 'index.php',
          type: 'post',
          data: {
              'action': action,
              'post_id': post_id
          },
          success: function(data){
              res = JSON.parse(data);
              if (action == "dislike") {
                  $clicked_btn.removeClass('fa-thumbs-o-down');
                  $clicked_btn.addClass('fa-thumbs-down');
              } else if(action == "undislike") {
                  $clicked_btn.removeClass('fa-thumbs-down');
                  $clicked_btn.addClass('fa-thumbs-o-down');
              }
              // display the number of likes and dislikes
              $clicked_btn.siblings('span.likes').text(res.likes);
              $clicked_btn.siblings('span.dislikes').text(res.dislikes);
              
              // change button styling of the other button if user is reacting the second time to post
              $clicked_btn.siblings('i.fas fa-heart').removeClass('fas fa-heart').addClass('far fa-heart');
          }
      });	
    
    });

});