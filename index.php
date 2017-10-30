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
    
    $boot1->hoogte=3;
    $boot2->hoogte=10;
    $boot3->hoogte=12;
        
    bootWeergeven($boot1);
    bootWeergeven($boot2);
    bootWeergeven($boot3);
    
    function bootWeergeven($deBoot){
    echo "De boot heeft als naam: ".$deBoot->bootnaam;
    echo "<br>";
    echo "De boot heeft lengte: ".$deBoot->bootlengte." meter";
    echo "<br>";
    echo "De boot heeft diepgang: ".$deBoot->diepgang." cm";
    echo "<br>";
    echo "De boot heeft hoogte: ".$deBoot->hoogte." meter";
    echo "<hr>";
    
}
    class Boot{
        public $bootnaam = "Nog niet bepaald";
        public $bootlengte = "Nog niet bepaald";
        public $diepgang = "Niet niet bepaald";
        public $hoogte = "Nog niet bepaald";
        
    }


?>