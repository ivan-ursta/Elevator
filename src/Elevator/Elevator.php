<?php
namespace App\Elevator;

class Elevator
{
    public int $floor;

    public function __construct( int $f = 1) {
        $this->floor = $f;
    }

    function moveDirection($currentFloor, $newFloor){
        if ($newFloor > $currentFloor){
            echo "Go Up!";
        }
        elseif ($newFloor < $currentFloor){
            echo "Go Down!";
        }
        else{
            echo "Select other floor";
        }
    }
}

