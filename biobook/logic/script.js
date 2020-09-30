$(document).ready(function(){
	
	$('.ppl_select').click(function(){
		
		var fid=$('.f_id').val();
		var fname=$('.f_name').val();
		var lname=$('.f_last').val();
		//var fimg=document.getElementById("f_img");
		//fimg.src='f_img';
		
		$('#show-name').text(fname +" "+ lname);
		$('#show-hide').hide();
		
	});
	
	
});