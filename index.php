<?php
//glavne operacije
require 'warrior.php';
require 'army.php';
require 'render.php';
require 'war.php';
require 'magic.php';
//unos iz GETa
    $army1num=$_GET["army1"];
    $army2num=$_GET["army2"];
//inicijalizacija vojske
    $army1= new army("army1",$army1num);
    $army2= new army("army2",$army2num);
//dodavanje vojnika u vojsku
    for($i = 0; $i < $army1num; $i++) {
        $warrior=new warrior($i,mt_rand(1, 3),mt_rand(10, 20));
        $army1->add_warrior($warrior);
}
    for($i = 0; $i < $army2num; $i++) {
        $warrior=new warrior($i,mt_rand(1, 3),mt_rand(10, 20));
        $army2->add_warrior($warrior);
}
    $magic_count=mt_rand(1,8);
    $magic=new magic($army1,$army2,$magic_count);
//BORBA
    brawl($army1,$army2);
//prikaz rezultata
    render($army1,$army2,$magic);
