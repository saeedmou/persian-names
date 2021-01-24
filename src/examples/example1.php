<?php

require '..\PersianNames\Names.php' ;

$x = new PersianNames\Names();

var_dump($x->isBoy('احمد')) ;
// var_dump($x->getAllBoys());
var_dump($x->getAllNames());


?>