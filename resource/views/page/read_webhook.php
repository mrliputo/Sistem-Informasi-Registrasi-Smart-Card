<div id="data"></div>

<script>
	conn.onmessage = function(msg){
    	msg = JSON.parse(msg.data);

    	$.ajax({
		  url: "new_member_bc",
		  method: "POST",
		  data: {nim: msg.nim, id_registration: msg.registrasi},
		  success: function (data) {
		  	$('#data').append(JSON.stringify(data));
		  	console.log(data);
	      },
	      error: function (textStatus, errorThrown) {
	        console.log(textStatus + errorThrown);
	      }
		});
    }

</script>