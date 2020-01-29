$(document).ready(function() {
	$.noConflict();
	$.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
	});
  $('#employees').DataTable({
  	"drawCallback": function( settings ) {
      $(".destroy").click(function(){
		  	console.log("click");
		  	url = $(this).data("url");
		  	console.log(url);
		  	$.ajax({
		  		url: url,
		  		type: "post",
		  		dataType: "html"
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
    }
  });
});