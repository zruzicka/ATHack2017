<?php
   class Query {
   
	  var $_conn;
	  
	  function Query($conn) {
		$this->_conn = $conn;
	  }	
      
      function loadHarvest(){
		$sql = "SELECT * FROM harvest";
		$result = mysqli_query($this->_conn, $sql);
		if(!$result) {
			return false;
		}
		$totalCamsAmount = mysqli_num_rows($result);

		$array = array($totalCamsAmount);
		$rowCounter = 0;
		while($row = mysqli_fetch_assoc($result)) {
			$harvest = new Harvest;
			$harvest->odate = $row["odate"];
                        $harvest->idate = $row["idate"];
			$array[$rowCounter] = $harvest;
			$rowCounter++;
		}
		return $array;
      }
      
   }
?>