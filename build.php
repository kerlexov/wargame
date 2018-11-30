<?php
/**
 * Created by PhpStorm.
 * User: Karlo
 * Date: 30.11.2018.
 * Time: 17:06
 */

include("index.php");

function build_table($vojska){
    // start table
    $html = '<table>';
    // header row
    $html .= '<tr>';
    $html .= '<th>id</th><th>atk</th><th>def</th>';
    $html .= '</tr>';
    // data rows
    foreach ($vojska as $warrior) {
        $html .= '<tr>';
        $html .= '<td>' .$warrior->get_id(). '</td>';
        $html .= '<td>' .$warrior->get_atk(). '</td>';
        $html .= '<td>' .$warrior->get_def(). '</td>';
        $html .= '</tr>';
    }
    // finish table and return it
    $html .= '</table>';
    return $html;}

function build_alive($vojska){
    // start table
    $html = '<table>';
    // header row
    $html .= '<tr>';
    $html .= '<th>id</th><th>atk</th><th>def</th>';
    $html .= '</tr>';
    // data rows
    $counter=0;
    foreach ($vojska as $warrior) {
        if($warrior->get_def()>0){
        $html .= '<tr>';
        $html .= '<td>' .$warrior->get_id(). '</td>';
        $html .= '<td>' .$warrior->get_atk(). '</td>';
        $html .= '<td>' .$warrior->get_def(). '</td>';
        $html .= '</tr>';
        $counter++;}
    }
    // finish table and return it
    $html .= '</table>';
    return $html;}

    function render($vojska1,$vojska2){

        }