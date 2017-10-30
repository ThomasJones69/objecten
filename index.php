<?php
    $boot1 = new Boot();
    $boot2 = new Boot();
    $boot3 = new Boot();
    
    $boot1->bootnaam = "RubberMania";
    $boot2->bootnaam = "Rotterdammer";
    $boot3->bootnaam = "Schalkje";
    
    $boot1->bootlengte=4;
    $boot2->bootlengte=45;
    $boot3->bootlengte=16;
    
    $boot1->diepgang=90;
    $boot2->diepgang=600;
    $boot3->diepgang=120;
    
    
    /* echo $boot1->bootnaam;
    echo $boot1->bootlengte;
    echo $boot1->diepgang;
    
    echo $boot2->bootnaam;
    echo $boot2->bootlengte;
    echo $boot2->diepgang;
    echo $boot3->bootnaam;
    echo $boot3->bootlengte;
    echo $boot3->diepgang;
    echo "<hr>";
    */
    bootWeergeven($boot1);
    bootWeergeven($boot2);
    bootWeergeven($boot3);
    
    function bootWeergeven($deBoot){
    echo "De boot heeft als naam: ".$deBoot->bootnaam;
    echo "<br>";
    echo "De boot heeft lengte: ".$deBoot->bootlengte." meter";
    echo "<br>";
    echo "De boot heeft diepgang: ".$deBoot->diepgang." cm";
    echo "<hr>";
    
}

    

    class Boot{
        public $bootnaam = "Nog niet bepaald";
        public $bootlengte = "Nog niet bepaald";
        public $diepgang = "Niet niet bepaald";
        
    }


?>