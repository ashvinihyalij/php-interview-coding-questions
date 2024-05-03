<?php
	/* Sort numeric array without using php sort method */
	function sortArray($ages){
	  $n = count($ages);
	  for($i=0; $i < $n; $i++){
	   for ($j = 0; $j < count($ages) - $i - 1; $j++) {
            if($ages[$j] > $ages[$j+1]){
                $temp = $ages[$j];
                $ages[$j] = $ages[$j+1];
                $ages[$j+1] = $temp;
            }
        }
	  }
	  return $ages;
	}
	
	$ages = [44,13,10,20,4];
	$sortedAges = sortArray($ages);
	print_r($sortedAges);
?>