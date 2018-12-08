<?php
//borba vojnika
function brawl($army1,$army2){
  foreach ($army1->warriors as $warrior1) {
      foreach ($army2->warriors as $warrior2) {
          if ($warrior1->get_def() > 0) {
              if ($warrior2->get_def() > 0) {
                  $warrior1->def=($warrior1->def)-($warrior2->atk);
                  $warrior2->def=($warrior2->def)-($warrior1->atk);
              }
              else{$army2->kill_warrior($warrior2->get_id());}

          }
          else{$army1->kill_warrior($warrior1->get_id());}
      }
  }
}
//provjeri pobjednika na temelju prezivjelih vojnika
function check_winner($army1,$army2){
    $alive_army1=0;
    $alive_army2=0;
//provjeri jel vojnik ziv za svakog vojnika vojski
    foreach ($army1->warriors as $warrior1){
        if($warrior1->get_def() > 0){
            $alive_army1++;
        }
    }
    foreach ($army2->warriors as $warrior2){
        if($warrior2->get_def() > 0){
            $alive_army2++;
        }
    }
//uvjeti za pobjedu
    if($alive_army1>$alive_army2){
        $army1->won=1;
        $army1->alive=$alive_army1;
        $army2->alive=$alive_army2;
    }
    elseif($alive_army1<$alive_army2){
            $army2->won=1;
            $army1->alive=$alive_army1;
            $army2->alive=$alive_army2;
    }
    else{
        if($army1->warrior_num>$army2->warrior_num) {
            $army2->won=1;
            $army1->alive=$alive_army1;
            $army2->alive=$alive_army2;
        }
        elseif ($army1->warrior_num<$army2->warrior_num){
                $army1->won=1;
                $army1->alive=$alive_army1;
                $army2->alive=$alive_army2;
        }
        else{
            $army1->alive=$alive_army1;
            $army2->alive=$alive_army2;
        }
    }
}