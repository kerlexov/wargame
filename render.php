<?php
//stvaranje tablice vojske i pripadajucih vojnika
function build_table($army){
    // start table
        $html = '<table>';
    // header row
        $html .='<tr><th>N</th><th>alive</th><th>won</th></tr>';
        $html .='<tr><th>'.$army->warrior_num.'</th><th>'.$army->alive.'</th><th>'.$army->won.'</th></tr></table><table>';
        $html .= '<tr>';
        $html .= '<th>(ID)</th><th>(ATK)</th><th>(DEF)</th>';
        $html .= '</tr>';
    // data rows
    foreach ($army->warriors as $warrior) {
        if($warrior->get_def()>0){
        $html .= '<tr>';
        $html .= '<td>' .$warrior->get_id(). '</td>';
        $html .= '<td>' .$warrior->get_atk(). '</td>';
        $html .= '<td>' .$warrior->get_def(). '</td>';
        $html .= '</tr>';
        }
    }
    // finish table and return it
        $html .= '</table>';
        return $html;
}
//prikazi ko je pobjedio
function build_winner($army1,$army2){
    if($army1->won===1){
        echo "Pobjedila je ".$army1->name." kojoj je prezivjelo ".$army1->alive." dok je ".$army2->name." ostalo ".$army2->alive." vojnika.";
    }
    elseif ($army2->won===1){
            echo "Pobjedila je ".$army2->name." kojoj je prezivjelo ".$army2->alive." dok je ".$army1->name." ostalo ".$army1->alive." vojnika.";
    }
    else{
        if ($army1->warrior_num<$army2->warrior_num){
            echo "Pobjedila je ".$army1->name." jer je na pocetku imala ".$army1->warrior_num." dok je ".$army2->name." imala ".$army2->warrior_num." vojnika.";
        }
        elseif ($army1->warrior_num>$army2->warrior_num){
            echo "Pobjedila je ".$army2->name." jer je na pocetku imala ".$army2->warrior_num." dok je ".$army1->name." imala ".$army1->warrior_num." vojnika.";
        }
        else{
            echo "Nema pobjednika";
        }
    }
}

//pokreni stvaranje tablica i dizajn
function render($army1,$army2,$magic){
    check_winner($army1,$army2);
    echo "<head><link rel=\"stylesheet\" type=\"text/css\" href=\"style.css\"></head>";
    echo "<span class='a'>";
    echo "[".$army1->name."]";
    echo build_table($army1);
    echo "</span>";
    echo "<span class='b'>";
    echo "[".$army2->name."]";
    echo build_table($army2);
    echo "</span>";
    echo "<span class='c'>";
    echo "</<br>";
    echo build_winner($army1,$army2);
    echo "</span>";
    echo "<span class='m'>";
    echo "magic log</<br>";
    print_r($magic);
    echo "</span>";
}
