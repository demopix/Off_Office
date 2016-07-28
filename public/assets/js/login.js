/* Gabriela Fonseca*/
/* teste e validation du login*/
//loginu sers
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
            
            $('#alert').css("display", "block");
          }else{
          	window.location.href = 'http://localhost/git/Off_Office/public/';
         
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
                     
    });

    //login layout
    $("#log").submit(function( event ) {
     // alert("Handler for .submit() called."+ $(this).attr('action'));

    if ( $( "#username" ).val() != '' && $( "#pwd" ).val()!= '' ) {
      $.ajax({
        url: $(this).attr('action'),
        type: 'POST',
        data : $(this).serialize(),
        success: function(response) {

          if(response === "Arf :: login invalide<br />"){
            
            $('#alert').css("display", "block");

          }else{
            window.location.href = 'http://localhost/git/Off_Office/public/';
         
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
                      
    });

    //signup
  /*  $('#signup').keyup(function() {
            if ( $( "#pwd" ).val() != '' && $( "#pwd2" ).val()=== $( "#pwd" ).val()) 
            {
               $("#sub").prop('disabled', false);
            }
            else{
              $('#sub').prop('disabled', true);
            }
    }).keyup();

    $( "#signup" ).submit(function( event ) {
      
      alert ("hehfe");
      
      console.log( "Handler for .submit() called." + $(this).attr('action')  );

      if ( $( "#pwd" ).val() != '' && $( "#pwd2" ).val()!= '' ) {
        $.ajax({
              url: $(this).attr('action'),
              type: 'POST',
              data : $(this).serialize(),
              success: function(response) {

                if(response === "Arf :: password vide!<br />"){
                $('#alert').css("display", "block");
                }else{

                  window.location.href = 'http://localhost/git/Off_Office/public/';         
                
                }                 
              },
              error: function() {
                      alert("error de connextion");
              }
            }); 

          event.preventDefault();
          return;
      }
});*/
});

 