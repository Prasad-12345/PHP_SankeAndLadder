<?php
    class SnakeAndLadder{
        public function getPlayerPosition(){
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

                //To ensure tha player gets to exact winning position 100
                if($playerPosition > 100){
                    $extraPoints = $playerPosition - 100;
                    $playerPosition = $playerPosition - $extraPoints;
                }
                if($playerPosition == 100){
                    break;
                }
            }
            echo "Player Position :" . $playerPosition;
        }
    }
    //object
    $obj = new SnakeAndLadder();
    $obj->getPlayerPosition();
?>