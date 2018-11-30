<?php
/**
 * Created by PhpStorm.
 * User: Karlo
 * Date: 29.11.2018.
 * Time: 23:49
 */
include("class_lib.php");
include("build.php");
$army1num=$_GET["army1"];
$army2num=$_GET["army2"];
//$army2num=18;
//$army1num=15;

$vojska1 = array();
for($i = 0; $i < $army1num; $i++) {
    $warrior=new warrior();
    $warrior->set_id($i);
    $warrior->set_atk(mt_rand(2, 5));
    $warrior->set_def(mt_rand(5, 20));
    array_push($vojska1, $warrior);}

$vojska2 = array();
for($i = 0; $i < $army2num; $i++) {
    $warrior=new warrior();
    $warrior->set_id($i);
    $warrior->set_atk(mt_rand(2, 5));
    $warrior->set_def(mt_rand(5, 20));
    array_push($vojska2, $warrior);}


function check_hp($vojska){
    foreach ($vojska as $warrior){
         if ($warrior->get_def()<0)
         {
             unset($vojska[$warrior->get_id()]);
         }
         //    array_slice($vojska,$warrior->get_id(),1);
}}

function show($vojska){
    asort($vojska);
    //print_r($vojska);
    echo build_table($vojska);}

function alive($vojska){
    asort($vojska);
}

function brawl($vojska1,$vojska2){
   // do{
        check_hp($vojska1);
        check_hp($vojska2);
    if ($vojska2>$vojska1)
        for($i = 0; $i < count($vojska1); $i++) {
            $vojska1[$i]->set_def(($vojska1[$i]->get_def())-($vojska2[$i]->get_atk()));
            $vojska2[$i]->set_def(($vojska2[$i]->get_def())-($vojska1[$i]->get_atk()));
        }
        else
            for($i = 0; $i < count($vojska2); $i++) {
                $vojska2[$i]->set_def(($vojska2[$i]->get_def())-($vojska1[$i]->get_atk()));
                $vojska1[$i]->set_def(($vojska1[$i]->get_def())-($vojska2[$i]->get_atk()));
            }
       // }while((count($vojska1)>0)||(count($vojska2)>0));
}

brawl($vojska1,$vojska2);
brawl($vojska1,$vojska2);
brawl($vojska1,$vojska2);
brawl($vojska1,$vojska2);

echo "<head><link rel=\"stylesheet\" type=\"text/css\" href=\"style.css\"></head>";
echo "<span class='a'>";
echo "VOJSKA 1";
show($vojska1);
echo "</span>";
echo "<span class='a'>";
echo "VOJSKA 2";
show($vojska2);
echo "</span>";
echo "<span class='c'>";
echo "PREZIVJELI VOJSKA 1";
echo "</span>";
echo "<span class='c'>";
echo "PREZIVJELI VOJSKA 2";
echo "</span>";

render($vojska1,$vojska2);