jQuery( document ).ready( function($) {

	$("#video_metabox").hide();
	$("#quote_metabox").hide();
	
	$('#in-type-3').click(function() {
    if( $(this).is(':checked')) {
        $("#video_metabox").show();
    } else {
        $("#video_metabox").hide();
    }
	});

	$('#in-type-2').click(function() {
    if( $(this).is(':checked')) {
        $("#quote_metabox").show();
    } else {
        $("#quote_metabox").hide();
    }
	});
	
});