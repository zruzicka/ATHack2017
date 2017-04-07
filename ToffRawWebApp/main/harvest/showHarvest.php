<?php

$query = new Query($conn);
$harvest = $query->loadHarvest();
for ($index = 0; $index < sizeof($harvest); $index++) {
    $item = $harvest[$index];
    echo "odate: ". $item->odate ."; idate: ".$item->idate;
}
//foreach ($item as $harvest) {
//    echo $item;
//}

//include("../../config.php"); 
include("lib/chartphp_dist.php"); 

$p = new chartphp(); 

//$p->data_sql = "select strftime('%Y-%m',o.orderdate) as Year, sum(d.quantity) as Sales 
//                    from `order details` d, orders o 
//                    where o.orderid = d.orderid 
//                    group by strftime('%Y-%m',o.orderdate) limit 50"; 
//                     
//$p->chart_type = "line"; 
//
//// Common Options 
//$p->title = "Sales Summary"; 
//$p->xlabel = "Month"; 
//$p->x_data_type = "date"; 
//$p->ylabel = "Sales"; 
//
//$out = $p->render('c1'); 



$p = new chartphp(); 

$p->data = array(array(array("Jan",48.25),array("Feb",238.75),array("Mar",95.50),array("Apr",300.50),array("May",286.80),array("Jun",400)),array(array("Jan",300.25),array("Feb",225.75),array("Mar",44.50),array("Apr",259.50),array("May",250.80),array("Jun",300)));

$p->chart_type = "line"; 

// Common Options 
$p->title = "Transparent Offers"; 
$p->ylabel = "Prices"; 
$p->series_label = array("2014","2015"); 

$p->options["axes"]["yaxis"]["tickOptions"]["prefix"] = '€'; 

$out = $p->render('c1');

echo $out;

?>
