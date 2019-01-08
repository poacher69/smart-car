<?php

  $raspberryPI_Car_IP = "http://192.168.58.138:5000/";
  $FORWARD_CMD = "forward";
  $BACKWARD_CMD = "backward";
  $TURNLEFT_CMD = "left";
  $TURNRIGHT_CMD = "right";
  $STOP_CMD = "stop";

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
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <center>
    <h1>  Car Control</h1>  
    
    <div id="link_bar"><button type="button" class="btn btn-primary"><a href="<?php echo $raspberryPI_Car_IP.$FORWARD_CMD;?>">Forward</a></button><br></div>

    <div id="link_bar"><button type="button" class="btn btn-primary" ><a href="<?php echo $raspberryPI_Car_IP.$TURNLEFT_CMD;?>">Left</a></button>    <button type="button" class="btn btn-danger"><a href="<?php echo $raspberryPI_Car_IP.$STOP_CMD;?>">Stop</a></button>    <button type="button" class="btn btn-primary"><a href="<?php echo $raspberryPI_Car_IP.$TURNRIGHT_CMD;?>">Right</a></button></div>
    <div id="link_bar"><button type="button" class="btn btn-primary"><a href="<?php echo $raspberryPI_Car_IP.$BACKWARD_CMD;?>">Backward</a></button></div>
    
  </center>
</div>
<hr>

</body>
</html>
