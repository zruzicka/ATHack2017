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

array("2017-06-17", 7676),
array("2017-06-24", 7218),
array("2017-06-01", 11876),
array("2017-06-02", 13787),
array("2017-06-03", 14926),
array("2017-06-04", 14158),
array("2017-06-05", 14157),
array("2017-06-06", 12306),
array("2017-06-08", 13788),
array("2017-06-09", 12442),
array("2017-06-10", 12556),
array("2017-06-11", 13641),
array("2017-06-12", 11534),
array("2017-06-13", 12007),
array("2017-06-14", 11951),
array("2017-06-15", 13592),
array("2017-06-16", 13876),
array("2017-06-18", 11881),
array("2017-06-19", 13185),
array("2017-06-20", 13022),
array("2017-06-21", 12437),
array("2017-06-22", 14503),
array("2017-06-23", 13577),
array("2017-06-25", 13318),
array("2017-06-26", 13325),
array("2017-06-27", 12071),
array("2017-06-28", 22593),
array("2017-06-29", 24548),
array("2017-06-30", 27305),
        
array("2017-07-15", 12703),
array("2017-07-22", 9955),
array("2017-07-29", 9168),
array("2017-07-01", 18591),
array("2017-07-02", 17254),
array("2017-07-03", 17413),
array("2017-07-04", 27492),
array("2017-07-05", 27569),
array("2017-07-06", 28308),
array("2017-07-07", 17440),
array("2017-07-08", 17500),
array("2017-07-09", 21134),
array("2017-07-10", 28293),
array("2017-07-11", 30539)

        
        //array("Jan",3000.25),array("Feb",2250.75),array("Mar",440.50),array("Apr",2509.50),array("May",2500.80),array("Jun",3000)
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
