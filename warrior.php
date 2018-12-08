<?php
//vojnik ima id, napad i obranu
class warrior{
    public $id;
    public $atk;
    public $def;
    public function __construct($id,$atk,$def){$this->id=$id;$this->atk=$atk;$this->def=$def;}
    public function get_id() {    return $this->id;    }
    public function get_atk() {    return $this->atk;    }
    public function get_def() {    return $this->def;    }
}