(function ($) {

  jQuery.fn.reviews = function (e_review) {

    /* Save the product ID */
    var pid = $("#review-productId").text();

    /* Get and show the average rating for the product */
    $.get("current.php?show=average&productid=" + pid + "", function ( data ) {
      $("" + e_review + " .average-rating").append(data);
    });
    
    /* Get and show the current reviews for the product */
    $.get("current.php?productid=" + pid + "", function ( data ) {
      $("" + e_review + " .show-reviews").append(data);
    });
    
    /* Random number for 'Are you human?' check */
    var min1 = 1;
    var max1 = 5;
    var min2 = 5;
    var max2 = 10;
    var random1 = Math.floor(Math.random() * (max1 - min1 + 1)) + min1;
    var random2 = Math.floor(Math.random() * (max2 - min2 + 1)) + min2;
    var captcha = random2 - random1;

          
    /* Insert the HTML review form */
    /*$("" + e_review + " .add-review").append('');
          
    /* Load the rating stars using the barrating jquery plugin */
    $("" + e_review + " #rating-new").barrating({ 
      showSelectedRating:true
    });
          
    /* Validate and process the rating & review form */          
    $.validate({
      modules : 'security',
      form : '#form-add-review',
      onSuccess : function () { // If validation is valid we process the form 
            
        var rating = $("" + e_review + " #rating-new").val();
        var name = $("" + e_review + " #fullname").val();
        var email = $("" + e_review + " #emailaddress").val();
        var message = $("" + e_review + " #comments").val(); 
        var dataString = '&name=' + name + '&email=' + email + '&message=' + message + '&rating=' + rating;
            
        /* Make ajax call to our PHP file to save the review & rating */
        $.ajax({
            
          type : "POST",
          url : "productid=" + pid + "", // our php file for saving the review 
          data : dataString,
          cache : false,
          success : function (data) {				
            $("" + e_review + " .add-review #form-add-review").fadeOut(600);
            $("" + e_review + " .add-review .notice").append(data).fadeIn(1500); 
          }
              
        });
            
        return false;

      }
    });
   
  }
  
})(jQuery);