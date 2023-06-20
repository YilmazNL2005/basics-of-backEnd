<?php
date_default_timezone_set("Europe/Amsterdam");
$time = date("h:i:sa");
$hour = date("h");
// echo "The time is " . date("h:i:sa");

if($hour < 6){
    $message = "goede nacht";
    $image = "night";
}
elseif ($hour < 12){
    $message = "goede morgen";
    $image = "morning";
}
elseif($hour < 18){
    $message = "goede middag";
    $image = "evening";
}
elseif($hour <= 23){
    $message = "goede avond";
    $image = "afternoon";
}
?>
    <div>
    <?php
        echo $message;
        echo "<br>";
        echo "Het is " . $time;
    ?>
    </div>


<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title> <?php echo $message ?></title>
        <link rel="stylesheet" href="styleTime.css">
    </head>
<body class= "<?php echo $image ?>">


</body>
</html>