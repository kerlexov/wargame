<?php
/**
 * Created by PhpStorm.
 * User: Karlo
 * Date: 30.11.2018.
 * Time: 0:09
 */
/*class armija{
    var $name;
    var $broj_vojnika;
    var $alive;
    var $won=false;
    function set_name($new_name){$this->name=$new_name;     }
    function set_broj($new_broj){$this->broj_vojnika=$new_broj;     }
    function set_alive($new_alive){$this->alive=$new_alive;     }
    function set_won($new_won){$this->won=$new_won;      }
    function get_name() {    return $this->name;    }
    function get_broj() {    return $this->broj;    }
    function get_alive() {    return $this->alive;    }
    function get_won() {    return $this->won;      }
}
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