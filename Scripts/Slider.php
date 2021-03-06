<html>
<head>
      
  <!-- Load jQuery and jQuery UI -->
  <script src="//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="//code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
  
  <!-- Load the jQuery UI CSS -->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />


  <!-- jQuery UI Slider code -->
  <script>
  
  // When the browser is ready...
  $(function() {
  
    // Create a new jQuery UI Slider element
    // and set some default parameters.
    $( "#slider" ).slider({
      range: "min",
      value: 50,
      min: 0,
      max: 100,
      slide: function( event, ui ) {
      
        // While sliding, update the value in the #amount div element
        $( "#amount" ).html( ui.value );
        
      }
    });
    
    // Set the initial slider amount in the #amount div element
    var value = $( "#slider" ).slider( "value" );
    $( "#amount" ).html( value );
    
  });
  
  </script>
  
  
</head>
<body>

  <!--  The div that is used as the slider container  -->
  <div id="slider" style="margin-top:100px;"></div>
  
  <!--  The div that is used to display the slider value  -->
  <div id="amount" style="color:#777;font-size:72px;text-align:center;"></div>
  
</body>