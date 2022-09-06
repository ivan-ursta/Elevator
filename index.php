<?php
use App\Elevator\Elevator;

require_once realpath("vendor/autoload.php");

if (isset($_GET['floor'])) {
    $elevator = new Elevator($_GET['floor']);
    $elevator->moveDirection($_GET['currentFloor'], $_GET['floor']);
    $currentFloor = $_GET['currentFloor'];
}
else{
    $elevator = new Elevator();
}

$currentFloor = $elevator->floor;
?>

<html>
    <body>
        <h1>You are on the <?php echo $elevator->floor?> floor </h1>
        <form action="index.php" method="get">
            Enter floor: <input type="number" name="floor" min="1" max="10">
            <input type="hidden" name="currentFloor" value="<?php echo $currentFloor ?>">
            <input type="submit">
        </form>
    </body>
</html>

<?php

