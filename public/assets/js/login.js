/* Gabriela Fonseca*/
/* teste e validation du login*/
$(document).ready(function(){	 

	 $('#password').keyup(function() {
            
            if ( $("#username").val() != '' && $( "#password" ).val()!= '' ) 
            {
             $("#subSession").prop('disabled', false);
            }
            else{
              $('#subSession').prop('disabled', true);
            }

    }).keyup();

 	$("#loginUser").submit(function( event ) {
     // alert("Handler for .submit() called."+ $(this).attr('action'));

        if ( $( "#username" ).val() != '' && $( "#password" ).val()!= '' ) {
            $.ajax({
                    url: $(this).attr('action'),
                    type: 'POST',
                    data : $(this).serialize(),
                    success: function(response) {

                      if(response === "Arf :: login invalide<br />"){
                        //$("small#help-employn").text(response);
                        alert('mauvaise login');
                      }else{
                      	window.location.href = 'http://localhost/git/Off_Office/public/';
                     	//alert('fjfj');
                     // $("small#help-employn").css("display", "block").text(response);
                      }                 
                    },
                    error: function() {
                            alert("error de connextion");
                    }
                }); 

              event.preventDefault();
              return;
        }
    });

    $("#retour").click(function(){
     $("small#help-employn").hide( "slow" );                 
    });
});

 