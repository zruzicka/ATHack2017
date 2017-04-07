<?php
        
$query = new Query($conn);
$harvest = $query->loadHarvest();
for ($index = 0; $index < sizeof($harvest); $index++) {
    $item = $harvest[$index];
    echo "<div>".$item->toString()."</div>";
}
include("config.php"); 
include("lib/chartphp_dist.php"); 
include("config.php"); 

$p = new chartphp(); 

$p->data_sql = "select h.odate as ODate, h.price as Price
                from harvest h";

showChart($p, "c0");

$p = new chartphp(); 

$p->data = array(
    array(
        array("Jan",48.25),array("Feb",238.75),array("Mar",95.50),array("Apr",300.50),array("May",286.80),array("Jun",400)
        ),
    array(
        array("Jan",300.25),array("Feb",225.75),array("Mar",44.50),array("Apr",259.50),array("May",250.80),array("Jun",300)
        )
    );

    showChart($p, "c1");

$p = new chartphp(); 

$query = new Query($conn);
$harvest = $query->loadHarvest();
$length = sizeof($harvest);
$array = array($length);
for ($index = 0; $index < $length; $index++) {
    $item = $harvest[$index];
    $array[$index] = array($item->odate,intval($item->price));
}

$p->data = array(
    $array,
    array(
        array("Jan",3000.25),array("Feb",2250.75),array("Mar",440.50),array("Apr",2509.50),array("May",2500.80),array("Jun",3000)
        )
    );

    showChart($p, "c2");

    
function showChart($p, $str) {
    $p->chart_type = "line"; 

    // Common Options 
    $p->title = "Transparent Offers 2"; 
    $p->ylabel = "Prices"; 
    $p->series_label = array("2014","2015"); 

    $p->options["axes"]["yaxis"]["tickOptions"]["prefix"] = '€'; 

    $out = $p->render($str);
    echo "<div>".$out."</div>";
}    

?>
