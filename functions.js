$(document).ready(function() {

  let stop = false;

  function last_record() {
    var ID=$(".message_box:last").attr("id");
    $('div#loader').html('<img src="https://media2.giphy.com/media/3oEjI6SIIHBdRxXI40/200_d.gif">');
    $.post("load_more.php?action=get&last_id="+ID, function(data){
      if (data != "") {
        stop = false;
        console.log("Can fetch more records...");
        $(".message_box:last").after(data);
      }else{
        stop = true;
        console.log("End of records! Stop fetching...");
      }
      $('div#loader').empty();
    });
  };

  $(window).scroll(function(){
    if($(window).scrollTop() + $(window).height() > $(document).height() - 10) {
      if(!stop){
        last_record();
      }
   }
  });

  $('#load').click(function(){
    last_record();
  });
});