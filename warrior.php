<?php
/**
 * Created by PhpStorm.
 * User: Karlo
 * Date: 30.11.2018.
 * Time: 0:09
 */

class warrior{
    var $id;
    var $atk;
    var $def;
    function set_id($new_id) {$this->id = $new_id;  }
    function set_atk($new_atk) {$this->atk = $new_atk;  }
    function set_def($new_def) {$this->def = $new_def;  }
    function get_id() {    return $this->id;    }
    function get_atk() {    return $this->atk;    }
    function get_def() {    return $this->def;    }

}