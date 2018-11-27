<!DOCTYPE html>
<html>
<head>
	<title>Perulangan Berkondisi [Marlin Booking]</title>
</head>
<body>
	<?php
	class Perulangan {
		public function ulang($j) {
			for($i=1;$i<=$j;$i++)
			{
				$kata=""; 
				if( ($i % 3) == 0 )
				{
					$kata.=" Marlin ";
				}
				if( ($i % 5) == 0)
				{
					$kata.=" Booking ";
				}
				if($kata <> "") { 
					echo $kata."<br>";
				}
				if ((($i % 3) == 0) && ($i >=30)) {
					$kata.=" Booking <br>";
				}
				if ((($i % 5) == 0) && ($i >=30)) {
					$kata.=" Marlin <br>";
				}
				
				if (($i % 75) == 0) {
					break;
				}
				else  {
					echo $i."<br>";
				} 

			}
		} 
	}
	$cetak = new Perulangan;
	echo $cetak->ulang(999);

	?>


</body>
</html>