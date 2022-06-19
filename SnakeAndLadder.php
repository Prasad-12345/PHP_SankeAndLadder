<?php
    function snakeAndLadder(){
        $playerPosition = 0; //initial positin of player

        //repeat till player reaches to the winning position
        while($playerPosition <= 100){
            $rollDie = rand(1, 6); //to generate random numbers between 1 to 6
        
            $option = rand(1,3); //random numbers to choose option for player like no play, snake and ladder
            if($option == 1){
                $playerPosition = $playerPosition;
            }
            elseif($option == 2){
                $playerPosition += $rollDie;
            }
            else{
                $playerPosition -= $rollDie;
            }
        }
        echo "Player Position :" . $playerPosition;
    }
    snakeAndLadder();
?>