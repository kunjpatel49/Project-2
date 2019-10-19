<script>
            var endpoint = "https://data.cityofchicago.org/resource/7piw-z6r6.json";
            var count = 0;
            var parkName;
            parkName =  $("#names").val();
            var string = parkName;
            const nameCapitalized = name.charAt(0).toUpperCase() + name.slice(1)
            console.log(parkName);
            $(document).ready(function(){
                $("#txtSearch").on("click", function(){
                   $.get(endpoint + "?park=" + $("#names").val(), 
                         function(response){
                       console.log($("#names").val());
                             $.each(response, function(i,v){
                                 if(v.day == $("#day1").val() && $('#day1').prop('checked')){
                                    $("body").append("<br>" + v.day + v.park + v.title + "<br>")
                                     count = 1;
                                 }
                                 else if(v.day == $("#day2").val() && $('#day2').prop('checked')){
                                    $("body").append("<br>" + v.day + v.park + v.title + "<br>")
                                     count = 1;
                                 }
                                 else if(v.day == $("#day3").val() && $('#day3').prop('checked')){
                                    $("body").append("<br>" + v.day + v.park + v.title + "<br>")
                                     count = 1;
                                 }
                                 else if(v.day == $("#day4").val() && $('#day4').prop('checked')){
                                    $("body").append("<br>" + v.day + v.park + v.title + "<br>")
                                     count = 1;
                                 }
                                 else if(v.day == $("#day5").val() && $('#day5').prop('checked')){
                                    $("body").append("<br>" + v.day + v.park + v.title + "<br>")
                                     count = 1;
                                 }
                                 else if(v.day == $("#day6").val() && $('#day6').prop('checked')){
                                    $("body").append("<br>" + v.day + v.park + v.title + "<br>")
                                     count = 1;
                                 }
                                 else if(v.day == $("#day7").val() && $('#day7').prop('checked')){
                                    $("body").append("<br>" + v.day + v.park + v.title + "<br>")
                                     count = 1;
                                 }

                             });
                       if(count == 0){
                              alert("No Shows Available on this day!");
                          }
                          
                    }); 
                });
            });
        </script>