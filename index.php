<?php 
if(isset($_GET["user"])){
    session_start();
    $_SESSION["user"]=$_GET["user"];
}

?>
<!doctype html>
<html>
    <head>
        <title>Chat Window</title>
        <link href="css/customcss.css" rel="stylesheet">
        <script src="js/jquery.js" type="text/javascript"></script>
        <script src="js/customjs.js" type="text/javascript"></script>
        <script type="text/javascript"></script>
    </head>
    <body>
        <div>
            <div class="window"><div class="messages"></div></div>
        <textarea id="area" rows="5" cols="30" placeholder="Type the message and press enter"></textarea>
        </div>
    </body>
</html>