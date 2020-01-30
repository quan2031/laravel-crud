$(document).ready(function() {
	$.noConflict();
	$.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
	});

	$(".destroy").click(function(){
  	url = $(this).data("url");
  	$.ajax({
  		url: url,
  		type: "post"
  	})
  	.done(function(){
  		console.log("done");
  	})
  	.fail(function(e){
  		console.log(e);
  	})
  	.always(function(){
  		location.reload();
  	});
  });
});