<?php
    require '../php/fetch_date.php'; 

    if($vote_stat==1){
        require 'inc/ongoing.html';
    }elseif($vote_stat==2){
        require 'inc/after_election.html';
    }elseif($vote_stat==3){
        require 'front_ElectRes_v2_0.php';
    }else{
        require 'inc/no_election.html';
    }
    
?>
