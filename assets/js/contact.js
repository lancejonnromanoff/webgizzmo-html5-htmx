$(function () {
    
    "use strict";

    // init the validator
    $('#ajax-contact').validator();

    // when the form is submitted
    $('#ajax-contact').on('submit', function (e) {

        // if the validator does not prevent form submit
        if (!e.isDefaultPrevented()) {
            var url = "/new/assets/php/contact.php";

            // POST values in the background the the script URL
            $.ajax({
                type: "POST",
                url: url,
                data: $(this).serialize(),
                success: function (data)
                {

                    // data = JSON object that contact.php returns
                    //console.log(data);
                    // if(data){
                    //     $( "#msgSubmit" ).removeClass( "hidden" );
                    //     $('#ajax-contact')[0].reset();
                    // }else{
                    //     console.log("message send failed!");
                    // }
                    window.location = "/new/index.html#t9";
                    
                }
                
            });
            return false;
        }
    })
});
