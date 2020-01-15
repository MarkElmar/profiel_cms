$(document).ready(function(){
  $("#showSection").click(function(){
	$("#sectionBox").removeClass("d-none");
    $("#showSection").addClass("d-none");
    $("#geen-content-message").addClass("d-none");
  });
});
var prevVal;
$("#inputTemplate").on("change",function(){
	var val = $(this).find('option:selected').val();
	if(val == 00)
	{
		$("#alleen-tekst").removeClass("d-none");
		$("#blok-tekst").addClass("d-none");
		$("#links-tekst").addClass("d-none");
		$("#rechts-tekst").addClass("d-none");
	} else if(val == 01)
	{
		$("#alleen-tekst").addClass("d-none");
		$("#blok-tekst").removeClass("d-none");
		$("#links-tekst").addClass("d-none");
		$("#rechts-tekst").addClass("d-none");
	} else if(val == 02)
	{
		$("#alleen-tekst").addClass("d-none");
		$("#blok-tekst").addClass("d-none");
		$("#links-tekst").removeClass("d-none");
		$("#rechts-tekst").addClass("d-none");
	}else if(val == 03)
	{
		$("#alleen-tekst").addClass("d-none");
		$("#blok-tekst").addClass("d-none");
		$("#links-tekst").addClass("d-none");
		$("#rechts-tekst").removeClass("d-none");
	}else if(val == 99)
	{
		$("#alleen-tekst").addClass("d-none");
		$("#blok-tekst").addClass("d-none");
		$("#links-tekst").addClass("d-none");
		$("#rechts-tekst").addClass("d-none");
	}
});	