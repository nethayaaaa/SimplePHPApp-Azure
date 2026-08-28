<?php
$currentTime = date("Y-m-d H:i:s");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Simple PHP Azure App</title>
</head>

<body style="font-family: Arial; text-align:center; margin-top:80px;">

    <h1>Simple PHP Azure App</h1>

    <p>This application is running using PHP 8.x on Azure App Service.</p>

    <h3>Current Server Time</h3>

    <p><?php echo $currentTime; ?></p>

</body>
</html>