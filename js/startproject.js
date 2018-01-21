//add function(Daniel)
function accAdd(arg1, arg2) {
    var r1, r2, m, c;
    try {
        r1 = arg1.toString().split(".")[1].length;
    }
    catch (e) {
        r1 = 0;
    }
    try {
        r2 = arg2.toString().split(".")[1].length;
    }
    catch (e) {
        r2 = 0;
    }
    c = Math.abs(r1 - r2);
    m = Math.pow(10, Math.max(r1, r2));
    if (c > 0) {
        var cm = Math.pow(10, c);
        if (r1 > r2) {
            arg1 = Number(arg1.toString().replace(".", ""));
            arg2 = Number(arg2.toString().replace(".", "")) * cm;
        } else {
            arg1 = Number(arg1.toString().replace(".", "")) * cm;
            arg2 = Number(arg2.toString().replace(".", ""));
        }
    } else {
        arg1 = Number(arg1.toString().replace(".", ""));
        arg2 = Number(arg2.toString().replace(".", ""));
    }
    return (arg1 + arg2) / m;
}

//minus function(Daniel)
function accSub(arg1, arg2) {
    var r1, r2, m, n;
    try {
        r1 = arg1.toString().split(".")[1].length;
    }
    catch (e) {
        r1 = 0;
    }
    try {
        r2 = arg2.toString().split(".")[1].length;
    }
    catch (e) {
        r2 = 0;
    }
    m = Math.pow(10, Math.max(r1, r2)); 
    n = (r1 >= r2) ? r1 : r2;
    return ((arg1 * m - arg2 * m) / m).toFixed(n);
}

$(function(){
	//Products total price(Daniel)
	$("input[m]").click(function(){
		if($(this).is(":checked")){
			var $total=accAdd($("#totalFont").attr("t"),$(this).attr("m"));
			$("#totalFont").attr("t",$total);
			$("#totalFont").html("Total($):"+parseFloat($total).toFixed(2));
	    }else{
			var $total=accSub($("#totalFont").attr("t"),$(this).attr("m"));
			$("#totalFont").attr("t",$total);
			$("#totalFont").html("Total($):"+parseFloat($total).toFixed(2));
	    }
	});

	//Go to home page
	$("#bntHome").click(function(){
		window.location="index.html" ;
	});

	//add customer project
	$("button[type='button']").click(function(){
		var $wname = $("#wname").val();
		if($wname==""){
            $('#myModal').modal('show');
            $("#msgBody").html("Website name not be empty!");
            return;
		}
		var $conpn = $("#conpn").val();
		if($conpn==""){
            $('#myModal').modal('show');
            $("#msgBody").html("Contact Person not be empty!");
			return;
		}
		var $condtail = $("#condtail").val();
		if($condtail==""){
            $('#myModal').modal('show');
            $("#msgBody").html("Contact Detail not be empty!");
			return;
		}
		var $bcontent = $("#bcontent").val();
		if($bcontent==""){
            $('#myModal').modal('show');
            $("#msgBody").html("Business Range not be empty!");
			return;
		}
		var products = $("input[type='checkbox']:checked");
		if(products.length==0){
            $('#myModal').modal('show');
            $("#msgBody").html("Please select the product!");
			return;
		}
		var typeIds = "";
		for(var i=0;i<products.length;i++){
			typeIds = typeIds + $(products[i]).val()+',';
		}
		typeIds = typeIds.substring(0, typeIds.length-1);
		$.ajax({
		   type: "POST",
		   url: "addcustomer.php",
		   data: "name="+$wname+"&conpn="+$conpn+"&condtail="+$condtail+"&bcontent="+$bcontent+"&typeIds="+typeIds,
		   success: function(data){
			 if(data){
                 $('#myModal').modal('show');
                 $("#myModalLabel").html("Acknowledgement");
                 $("#msgBody").html("We have received your contact, our technical team will get in touch with you soon.");
			 }else{
                 $('#myModal').modal('show');
                 $("#msgBody").html("Data save failed!");
			 }
			 $("#wname").val("");
			 $("#conpn").val("");
			 $("#condtail").val("");
			 $("#bcontent").val("");
			 $(products).attr("checked",false);
		   }
		});
	});
	
});