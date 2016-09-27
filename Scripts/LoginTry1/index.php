<!DOCTYPE HTML>
<html>
<body><title>Webseitentestzeugs</title></body>
<head>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.0.min.js"></script>
<script>
$(function() {
    var action = '';
    var form_data = '';
    $('#login').click(function () {
         action = $("#form1").attr("action");
         form_data = {
         username: $("#username").val(),
         password: $("#password").val(),
         is_ajax: '1'};  

        $.ajax({
            type: 'POST',
            url: action,
            data: form_data, 
            success: function(response) {
                 if(response == 'success') {
					 $("#form1").slideUp('slow', function() {
                     	$("#message").html('<p class="success"> You have logged in. </p>');
					 });
                 } else { 
                    $("#message").html('<p class="error"> Invalid username and/or password. </p>');
                 }
            }

         }); 
        return false;      
    });  
});
</script>
</head>
<body> 
<div id="content"> 
 <h1>Login form</h1>   

    <form name="form1" id="form1"  method="post" action="doLogin.php">
        <p>
            <label for="username"> Username:</label>
            <input type="text" id="username"/>
        </p>
        <p>
             <label for="password">Password:</label>
            <input type="password" id="password"/> 
        </p>
        <p>
            <input type="submit" id="login" value="Enter" />
        </p>
    </form>
	
 </div>
 <p id="message">&nbsp;</p>   
</body>
</html>