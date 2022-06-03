<?php
session_start();
$plan = "";
$price = "";
$value = "";
$cost = "";
if (isset($_POST['submit'])) {
    $plan = $_POST['plan'];
    $price = $_POST['price'];
}
?>

<!DOCTYPE HTML>
<html>

<head>
    <style>

    </style>
</head>

<body onload="checkButt()">

    <?php
    echo "<h1> -Payment Page- </h1>";
    if (isset($_POST['submit'])) {
        echo "Plan : " . $plan . "<br>";
        echo "Price : " . $price;
    }


    ?>
    <div>Your plan : <?php echo checkButt($plan) ?></div>
    <div>cost : <?php echo getPrice($plan) ?> </div>


    <?php
    function checkButt($plan)
    { {
            $plan = $_POST['plan'];
            if ($plan == "essential") {
                $value = "essential";
            } else {
                $value = "justuno plus";
            }
        }
        return $value;
    }
    function getPrice($plan)
    { {
            $plan = $_POST['plan'];
            if ($plan == "essential") {
                $cost = $_POST['price'];
            } else {
                $cost = "199$";
            }
        }
        return $cost;
    } ?>

    <script>
        
    </script>



</body>

</html>
<html>

<body>