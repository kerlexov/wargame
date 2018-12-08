<?php
//ovdje su magije {heal,damage,poison} rade na principu da ako je ostatak djeljenja id vojnika i rand stepa(2,4) manji od 3 onda tom vojniku baci random spel
class magic{
    public $magic_log=array();
    public function __construct($army1,$army2,$magic_count){
        for ($i=0;$i<$magic_count;$i++) {
            $rand_spell = mt_rand(1, 3);
            $rand_army = mt_rand(1, 2);
            if($rand_army===1){$army=$army1;}else{ $army=$army2;};
            $this->magic_log[]=new magic_log($i,$army->name);
            switch ($rand_spell){
                case 1:
                    $this->magic_log[$i]->name="heal";
                    if ($rand_army === 1){
                        $this->heal($army1,$i);
                    }
                    else {
                        $this->heal($army2,$i);
                    }
                    break;
                case 2:
                    $this->magic_log[$i]->name="damage";
                    if ($rand_army === 1) {
                        $this->damage($army1,$i);
                    }
                    else {
                        $this->damage($army2,$i);
                    }
                    break;
                case 3:
                    $this->magic_log[$i]->name="poison";
                    if ($rand_army === 1){
                        $this->poison($army1,$i);
                    }
                    else {
                        $this->poison($army2,$i);
                    }
                    break;
            }
        }
    }

function heal($army,$i){
    $step=mt_rand(2,4);
    $amount=mt_rand(2,4);
    $this->magic_log[$i]->step=$step;
    $this->magic_log[$i]->amount=$amount;
    foreach ($army->warriors as $warrior){
        if($warrior->get_id()%$step<3)
            $warrior->def+=$amount;
    }
}

function damage($army,$i){
    $step=mt_rand(2,5);
    $amount=mt_rand(1,2);
    $this->magic_log[$i]->step=$step;
    $this->magic_log[$i]->amount=$amount;
    foreach ($army->warriors as $warrior){
        if($warrior->get_id()%$step<3)
            $warrior->def-=$amount;
    }
}

function poison($army,$i){
    $step=mt_rand(4,5);
    $this->magic_log[$i]->step=$step;
    $this->magic_log[$i]->amount="∞";
    foreach ($army->warriors as $warrior){
        if($warrior->get_id()%$step>4)
            $army->kill_warrior($warrior->get_id());
    }
}
}

//ovdje se prikazuje koji spell u kojem stepu na koju vojsku s kojom kolicinom je bacen
class magic_log{
    public $id;
    public $name;
    public $army_name;
    public $step;
    public $amount;
    public function __construct($id,$army_name){
    $this->id=$id;
    $this->army_name=$army_name;}
}
