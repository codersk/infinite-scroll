$(document).ready(function() {
  function last_record() {
    var ID=$(".message_box:last").attr("id");
    $('div#loader').html('<img src="https://media2.giphy.com/media/3oEjI6SIIHBdRxXI40/200_d.gif">');
    $.post("load_more.php?action=get&last_id="+ID, function(data){
      if (data != "") {
        $(".message_box:last").after(data);
      }
      $('div#loader').empty();
    });
  };

  $(window).scroll(function(){
    if ($(window).scrollTop() == $(document).height() - $(window).height()){
      last_record();
    }
  });
  $('#load').click(function(){
    last_record();
  });
});