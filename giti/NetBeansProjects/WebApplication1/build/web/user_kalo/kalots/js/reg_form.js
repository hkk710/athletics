 $(document).ready(function() {
            var x = ($(window).width()) / 2;
                $("#form_wrap,#events").css("width",x);

            
             $("#student_gender-0").click(function(){
                 $("#event-block-3,#event-block-2,#event-block-1").show();
                 $("#event_dropdown .event_male").css("display","block");
                 $("#event_dropdown .event_female").css("display","none");
             })
             
              $("#student_gender-1").click(function(){
                 $("#event-block-3,#event-block-2,#event-block-1").show();
                  $("#event_dropdown .event_female").css("display","block");
                 $("#event_dropdown .event_male").css("display","none");
             })
             
        });