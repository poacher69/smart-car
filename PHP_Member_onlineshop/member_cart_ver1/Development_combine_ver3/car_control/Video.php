<?php

  $raspberryPI_Car_IP = "http://192.168.58.138:5000/";
 
  $Detection = "Detection";  



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Car Control</title>
  <style>
    
    #link_bar a:link { color:#ffffff;  }
    #link_bar a:visited { color:#ffffff;  }
    #link_bar a:hover { color:#ffffff;  }
    #link_bar a:active { color:#ffffff;  }
  </style>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,height=device-height, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>


<div class="Car_Button" align="center">
  <iframe align="center" src="<?php echo $raspberryPI_Car_IP.$Detection;?>" width="50%" height="450" marginwidth="10" marginheight="60"  scrolling="No" frameborder="0" id="mainframe"></iframe>  


</div>


</body>
</html>
<!--   <iframe align="center" src="<?php echo $raspberryPI_Car_IP.$Detection;?>" width="33%" height="33%" marginwidth="10" marginheight="10" onload="Javascript:SetCwinHeight()"  scrolling="No" frameborder="0" id="mainframe"></iframe>   -->