<?php
  $i = 0;
	rekursif(5); 
	function rekursif($a){
		global $i;
		newrekursif($i,$a);
		echo "<br>";
		if (--$a > $i) {
			rekursif($a);
		}
	}
	function newrekursif($j,$a){
		global $i;
		if ($j > $i - $a) {
			echo "*";
			newrekursif($j - 1,$a);
		}
	}
	echo "<br>====================================================================<br>";
	$column = 5;
	rek(0,1);
	function rek($q,$c){
		global $column;
		newrek($column,$q,$c);
		echo "<br>";
		if (++$q < $column) {
			rek($q,$c);
		}
	}
	function newrek($p,$q,$r){
		global $column;
		if ($p > $column - $q - 1) {
			echo $r;
			newrek($p - 1,$q,$r + 1);
		}
	}
?>
