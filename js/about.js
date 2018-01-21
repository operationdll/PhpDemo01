$(function(){
	//Go to home page
	$("#bntHome").click(function(){
		window.location="index.html" ;
	});
	
	//add contact information
	$("button[type='button']").click(function(){
		$cname = $("#cname").val();
		if($cname==""){
            $('#myModal').modal('show');
            $("#msgBody").html("Name not be empty!");
			return;
		}
		$cdetail = $("#cdetail").val();
		if($cdetail==""){
            $('#myModal').modal('show');
            $("#msgBody").html("Phone/email not be empty!");
			return;
		}
		$ccontent = $("#ccontent").val();
		if($ccontent==""){
            $('#myModal').modal('show');
            $("#msgBody").html("Content not be empty!");
			return;
		}
		$.ajax({
		   type: "POST",
		   url: "addcontacts.php",
		   data: "cname="+$cname+"&cdetail="+$cdetail+"&ccontent="+$ccontent,
		   success: function(data){
			 if(data){
                 $('#myModal').modal('show');
                 $("#myModalLabel").html("Acknowledgement");
                 $("#msgBody").html("We have received your contact, our technical team will get in touch with you soon.");
			 }else{
                 $('#myModal').modal('show');
                 $("#msgBody").html("Data save failed!");
			 }
			 $("#cname").val("");
			 $("#cdetail").val("");
			 $("#ccontent").val("");
		   }
		});
	});
});