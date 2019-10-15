
	/*
	 * Initial Websocket
	 *
	 */

    var conn = new WebSocket('ws://192.168.12.1:8080');

	/*
	 * Validation
	 *
	 */

	$(document).on("keyup", ".validate-password", function(e){
		if($("input[name*='password']").val() != $("input[name*='validate']").val()){
			$(".msg-password").text('Konfirmasi password tidak cocok');
			$('input[type=submit]').prop('disabled', true);
		} else {
			$(".msg-password").text('');
			$('input[type=submit]').prop('disabled', false);
		}
	});

	$(document).on("keyup", ".validate-username", function(e){	
	 	$.ajax({
		  url: "cek_username",
		  method: "POST",
		  data: {username: $("input[name*='username']").val()},
		  success: function (response) {
		  	if(response == 1){
		  		$(".msg-username").text('Username sudah pernah digunakan');
				$('input[type=submit]').prop('disabled', true);
			} else {
				$(".msg-username").text('');
				$('input[type=submit]').prop('disabled', false);
			}
	      },
	      error: function (textStatus, errorThrown) {
	      	alert("Terjadi kesalahan. Silahkan coba beberapa saat lagi");
	        console.log(textStatus + errorThrown);
	      }
		});
	});


	/*
	 * Copy Key
	 *
	 */

	 $(document).on("click", ".copyKey", function(e){
	 	e.preventDefault();
	 	
	 	$('.key').select();
  		document.execCommand("Copy");
  		$('.msgKey').text("Copied");
	 });

	/*
	 * Webhook URL
	 *
	 */

	 $(document).on("submit", ".webhook", function(e){
		e.preventDefault();

		data = $("form.webhook").serializeArray();
	 	
	 	$.ajax({
		  url: "tambah_url",
		  method: "POST",
		  data: data,
		  success: function (response) {
	         $(".response").text(response);
	      },
	      error: function (textStatus, errorThrown) {
	      	alert("Terjadi kesalahan. Silahkan coba beberapa saat lagi");
	        console.log(textStatus + errorThrown);
	      }
		});
	 });

	/*
	 * Download CSV
	 *
	 */

	 $(document).on("click", ".download_csv", function(e){
	 	$(".hiddenTable").load('../download_csv', function(){
		 	$('#csvTable').each(function () {
			    var $table = $(this);

			    var csvdata = $table.table2CSV({
			        delivery: 'value'
			    });

		        var byteNumbers = new Uint8Array(csvdata.length);

				for (var i = 0; i < csvdata.length; i++) {
					byteNumbers[i] = csvdata.charCodeAt(i);
				}
				
				var blob = new Blob([byteNumbers], {type: "text/csv"});
				var uri  = URL.createObjectURL(blob);

				var link = document.createElement("a");
				link.download = 'data_registrasi.csv';
				link.href = uri;

				document.body.appendChild(link);
				link.click();
				document.body.removeChild(link);
				delete link;
			});
	 	});
	 });