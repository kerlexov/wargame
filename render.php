<?php
///**
// * Created by PhpStorm.
// * User: Karlo
// * Date: 30.11.2018.
// * Time: 17:06
// */

function build_table($army){
    // start table
    $html = '<table>';
    // header row
    $html .= '<tr>';
    $html .= '<th>id</th><th>atk</th><th>def</th>';
    $html .= '</tr>';
    // data rows
    foreach ($army->warriors as $warrior) {
        $html .= '<tr>';
        $html .= '<td>' .$warrior->get_id(). '</td>';
        $html .= '<td>' .$warrior->get_atk(). '</td>';
        $html .= '<td>' .$warrior->get_def(). '</td>';
        $html .= '</tr>';
    }
    // finish table and return it
    $html .= '</table>';
    return $html;}
