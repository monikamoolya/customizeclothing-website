 var counts = 0;
$(document).ready(function(){
   //create variable
  
   $(".bag-btn").click(function () {
   //to number and increase to 1 on each click
      counts += 1;
      $(".cart-items").animate({
   //show span with number
                opacity: 1
            }, 300, function () {
   //write number of counts into span
                $(this).text(counts);
            });
        }); 
});






