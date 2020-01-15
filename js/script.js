$(document).ready(function(){
  $("#showSection").click(function(){
	$("#sectionBox").removeClass("d-none");
    $("#showSection").addClass("d-none");
    $("#geen-content-message").addClass("d-none");
  });
});
var prevVal;
$("#inputTaste").on("change",function(){
  var val = $(this).find('option:selected').val();
  $(".content").removeClass(`content-${prevVal}`).addClass(`content-${val}`);
  prevVal = val;
});	