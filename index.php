<!DOCTYPE html><html><head>
   	<title>iHousekeeping | Intern</title>
    <?php include('/infastructure/media/favicon.php'); ?>
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
   	<script type="text/javascript" src="infastructure/jquery/jquery-1.3.2.min.js"></script>
	<script type="text/javascript" src="infastructure/jquery/jquery-ui-1.7.2.custom.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.0.min.js"></script>
    <script type="text/javascript" language="javascript"> 
	$(function() {
		$('#access_login').click(function () {
			action = $("#access_form").attr("action");
			form_data = {
				access_username: $("#access_username").val(),
				access_password: $("#access_password").val(),
				is_ajax: '1'
			};  
	
		$.ajax({
			type: 'POST',
			url: action,
			data: form_data, 
			success: function(response) {
				if(response == 'success') { 
					$("#message").html('You have logged in.');
				} else {
					$(".content-box").ready(function() {effect("shake",{times:2},100);});
					$("#message").html('Wrong.');
				}
			}
	
		}); 
		return false;      
		});  
	});
	</script>
	<!--<script type="text/javascript" language="javascript">$(document).ready(function(){$(".button").click(function(){$(".content-box").effect("shake",{times:2},100);});})</script>-->
	<link rel="stylesheet" type="text/css" href="infastructure/style/fad58de7366495db4650cfefac2fcd61.css">
	<link rel="stylesheet" type="text/css" href="infastructure/style/56119e6c1db3de8c70e32382605b5802.css">  
	</head><body>
   	<h1>iHousekeeping</h1>
		<div class="content-box">
        <form name="access_form" id="access_form"  method="POST" action="Access_Housekeeping.php">
                <input type="text" name="access_username" id="access_username" autofocus/> <input type="password" name="access_password" id="access_password"/>
                <input type="submit" class="button" name="access_login" id="access_login" value="Enter"/>
		</form>
        </div>
		<p id="message"></p>  
    </body>
</html>