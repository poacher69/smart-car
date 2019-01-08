<?php

  $raspberryPI_Car_IP = "http://192.168.58.138:5000/";
  $Forward_CMD = "forward";
  $Backward_CMD = "backward";
  // $TURNLEFT_CMD = "left";
  // $TURNRIGHT_CMD = "right";
  $Stop_CMD = "stop";

  $Right_Aalways_CMD = "right_always";
  $Right_Then_Go_CMD = "right_go";
  $Right_Then_Stop_CMD = "right_stop";

  $Left_Aalways_CMD = "left_always";
  $Left_Then_Go_CMD = "left_go";
  $Left_Then_Stop_CMD = "left_stop";  

  $Detection = "Detection";  



?>
<script type="text/javascript">
function SetCwinHeight()
{
var iframeid=document.getElementById("mainframe"); //iframe id
  if (document.getElementById)
  {   
   if (iframeid && !window.opera)
   {   
    if (iframeid.contentDocument && iframeid.contentDocument.body.offsetHeight)
     {   
       iframeid.height = iframeid.contentDocument.body.offsetHeight;   
     }else if(iframeid.Document && iframeid.Document.body.scrollHeight)
     {   
       iframeid.height = iframeid.Document.body.scrollHeight;   
      }   
    }
   }
}
</script>
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

<div class="Car_Button">
  <center>
    <h1>  Car Control</h1>  
    
    <div id="link_bar"><button type="button" class="btn btn-primary"><a href="<?php echo $raspberryPI_Car_IP.$Forward_CMD;?>">Forward</a></button><br></div>

    <div id="link_bar"><button type="button" class="btn btn-primary"><a href="<?php echo $raspberryPI_Car_IP.$Left_Then_Go_CMD;?>"><?php echo $Left_Then_Go_CMD;?></a></button><button type="button" class="btn btn-primary"><a href="<?php echo $raspberryPI_Car_IP.$Right_Then_Go_CMD;?>"><?php echo $Right_Then_Go_CMD;?></a></button><br></div>

    <div id="link_bar"><button type="button" class="btn btn-primary" ><a href="<?php echo $raspberryPI_Car_IP.$Left_Aalways_CMD;?>"><?php echo $Left_Aalways_CMD;?></a></button>    <button type="button" class="btn btn-danger"><a href="<?php echo $raspberryPI_Car_IP.$Stop_CMD;?>">Stop</a></button>    <button type="button" class="btn btn-primary"><a href="<?php echo $raspberryPI_Car_IP.$Right_Aalways_CMD;?>"><?php echo $Right_Aalways_CMD;?></a></button></div>
    
    <div id="link_bar"><button type="button" class="btn btn-primary"><a href="<?php echo $raspberryPI_Car_IP.$Right_Then_Stop_CMD;?>"><?php echo $Right_Then_Stop_CMD;?></a><button type="button" class="btn btn-primary"><a href="<?php echo $raspberryPI_Car_IP.$Left_Then_Stop_CMD;?>"><?php echo $Left_Then_Stop_CMD;?></a></button></button><br></div>

    <div id="link_bar"><button type="button" class="btn btn-primary"><a href="<?php echo $raspberryPI_Car_IP.$Backward_CMD;?>">Backward</a></button></div>
    
  </center>
</div>
<!-- <hr>
<div class="Car_Button" align="center">
  <iframe align="center" src="<?php echo $raspberryPI_Car_IP.$Detection;?>" width="50%" height="50%" marginwidth="100" marginheight="100" onload="Javascript:SetCwinHeight()"  scrolling="No" frameborder="0" id="mainframe"></iframe>  


</div>
 -->

</body>
</html>
