<?php
    class SnakeAndLadder{
        //function to return position after eech rolldie
        public function getPlayerPosition(){
            $playerPosition = 0;
            $rollDie = rand(1, 6); //to generate random numbers between 1 to 6

            $option = rand(1,3); //random numbers to choose option for player like no play, snake and ladder
                if($option == 1){
                    $playerPosition = $playerPosition;
                }
                elseif($option == 2){
                    $playerPosition += $rollDie;
                    $additionalPoints = self::getPlayerPosition();
                    $playerPosition = $playerPosition + $additionalPoints;
                }
                else{
                    $playerPosition -= $rollDie;
                }
            return $playerPosition;
        }

        public function getWinner(){
            $player1Position = 0; //initial position of player
            $player2Position = 0;
            
            //repeat till player reaches to the winning position
            while($player1Position <= 100 && $player2Position <= 100){
                $player1Position = self::getPlayerPosition() + $player1Position;

                //to ensure player should not go in negative position
                if($player1Position < 0){
                    $player1Position = 0;
                }

                //To ensure tha player gets to exact winning position 100
                if($player1Position > 100){
                    $extraPoints = $player1Position - 100;
                    $player1Position = $player1Position - $extraPoints;
                } 

                //echo "Count :" . $count . "|" . "Player Position :" . $player1Position . "\n";

                if($player1Position == 100){
                    echo "Player1 win the game \n";
                    break;
                }

                $player2Position = self::getplayerPosition() + $player2Position;

                //to ensure player should not go in negative position
                if($player2Position < 0){
                    $player2Position = 0; 
                }

                //To ensure tha player gets to exact winning position 100
                if($player2Position > 100){
                    $extraPoints2 = $player2Position - 100;
                    $player2Position = $player2Position - $extraPoints2;
                } 

                if($player2Position == 100){
                    echo "Player2 win the game \n";
                    break;
                }
            }
            echo "Player1 Position :" . $player1Position . "\n";
            echo "Player2 Position :" . $player2Position;
        }
    }
    //object
    $obj = new SnakeAndLadder();
    $obj->getWinner();
?>