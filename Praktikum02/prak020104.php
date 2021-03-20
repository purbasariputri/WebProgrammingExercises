<!DOCTYPE html>
<html>
<head>
	Headings
</head>
<body>
	<?php 
		$i = 1;
		while ($i <= 6) {
			if ($i % 2 == 0) {
				echo "<font color='red'><h".$i.">Heading ".$i."</h".$i."></font>";
			} else {
				echo "<h".$i.">Heading ".$i."</h".$i.">";
			}
			$i++;
		}
	?>
</body>
</html>