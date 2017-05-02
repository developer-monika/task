<!-- //Swap 2 Word in a 2 Word String.Both Words In the strings are seprated by space "Futer Technologies","Sapna sangeeta" -->

<!DOCTYPE html>
<html>
<body>

	<?php
   $string="Future Technologies"; 
echo implode(array_reverse(explode(" ",$string))," ");  
	?>
<br/>
	<?php
   $string="Sapna Sangeeta"; 
echo implode(array_reverse(explode(" ",$string))," ");  
	?>
<!-- <p>In this example, we search for the string "Sapna sangeeta", find the value "Sapna sangeeta" and then replace the value with "Futer Technologies".</p> -->

</body>
</html>