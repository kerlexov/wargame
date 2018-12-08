<?php
//vojska s brojem vojnika koji su u arrayu
class army{
    public $name;
    public $warrior_num;
    public $alive;
    public $won=0;
    public $warriors=array();
    public function __construct($name,$warrior_num){$this->name=$name;$this->warrior_num=$warrior_num;$this->alive=$warrior_num;}
    public function add_warrior($warrior){$this->warriors[]=$warrior;}
    public function kill_warrior($id){unset($this->warriors[$id]);}
    public function get_warrior($id){return $this->warriors[$id];}
    public function get_name() {    return $this->name;    }
    public function get_warrior_num() {    return $this->warrior_num;    }
    public function get_alive(){    return $this->alive;    }
    public function get_won() {    return $this->won;      }
}
