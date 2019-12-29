<?php

  $game_status = 'on';

  function draw_a_card($a){
    switch($a){
      case 1:
        $b = rand(1,2);
        if($b == 1){
          echo "Purple" . "\n";
        }else{
          echo "Double Purple" . "\n";
        }
        break;
      case 2:
      $b = rand(1,2);
      if($b == 1){
        echo "Green" . "\n";
        }else{
          echo "Double Green" . "\n";
        }
        break;
      case 3:
      $b = rand(1,2);
        if($b == 1){
          echo "Yellow" . "\n";
        }else{
          echo "Double Yellow" . "\n";
        }
        break;
      case 4:
      $b = rand(1,2);
        if($b == 1){
          echo "Purple" . "\n";
        }else{
          echo "Double Red" . "\n";
        }
        break;
      case 5:
      $b = rand(1,2);
        if($b == 1){
          echo "Blue" . "\n";
        }else{
          echo "Double Blue" . "\n";
        }
        break;
      case 6:
        $b = rand(1,4);
        if($b == 1){
          echo "Peppermint" . "\n";
        }else if($b == 2){
          echo "Peanut" . "\n";
        }else if($b == 3){
          echo "Lollipop" . "\n";
        }else{
          echo "Ice Cream Cone" . "\n";
        }
        break;
      }
    }

    while($game_status == 'on'){
      $random_number = rand(1,6);

      draw_a_card($random_number);

      $user_input = readline("Draw a card? (y/n) ");

      if($user_input != 'y'){
        $game_status = 'off';
        $winner = readline("Who won? ");
        echo "Congratulaions " . $winner;
      }
    }

?>
