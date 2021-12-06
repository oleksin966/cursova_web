$(document).ready(function(e){
	$("#text").keyup(function(){
		$("#here").css("display","block");
		var x = $(this).val();
		$.ajax({
			type:'GET',
			url:'fetch.php',
			data:'q='+x,
			success:function(data){
				$("#here").html(data);
			}
		})
		if (x == '') {
			$("#here").css("display","none");
		}
	});
});

