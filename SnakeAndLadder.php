<?php
    function snakeAndLadder(){
        //UC1
        $playerPosition = 0; //initial positin of player

        //UC2
        $rollDie = rand(1, 6); //to generate random numbers between 1 to 6
        
        //UC3
        $option = rand(1,3); //random numbers to choose option for player like no play, snake and ladder
        if($option == 1){
            $playerPosition = $playerPosition;
            echo $playerPosition;
        }
        elseif($option == 2){
            $playerPosition += $rollDie;
            echo $playerPosition;
        }
        else{
            $playerPosition -= $rollDie;
            echo $playerPosition; 
        }
    }
    snakeAndLadder();
?>