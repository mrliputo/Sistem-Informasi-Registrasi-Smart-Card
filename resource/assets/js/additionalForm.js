
conn.onmessage = function(msg){
	msg = JSON.parse(msg.data);

		$.ajax({
		  url: "../decryptNIM",
		  method: "POST",
		  data: {nim: msg.nim},
		  success: function (data) {
		  	console.log(data);
		  	
		  	if($(".key").html() == msg.registrasi){
				$(".member").html("NIM : " + data.nim);
				$(".submit").attr("disabled", false);
				$("input[name=nim]").val(msg.nim);
		  	}
	      },
	      error: function (textStatus, errorThrown) {
	        console.log(textStatus + errorThrown);
	      }
		});
};