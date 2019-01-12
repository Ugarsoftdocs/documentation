<?php
//print elements backwards 
$major_city_info = array();
$major_city_info[0] = 'A';
$major_city_info['A'] = 'B';
$major_city_info[1] = 'C';
$major_city_info['C'] = 'D';
$major_city_info[2] = 'E';
$major_city_info['E'] = 'F';

function print_all_array_backwards($city_array)
{  
  $current_item = end($city_array); //fast-forward to last
  
  if ($current_item)
    print("$current_item<BR>");
  else
    print("There's nothing to print");
  while($current_item = prev($city_array))
    print("$current_item<BR>");
}
print_all_array_backwards($major_city_info);
?>


<?php
//print elements forward
$major_city_info = array();
$major_city_info[0] = 'A';
$major_city_info['A'] = 'B';
$major_city_info[1] = 'C';
$major_city_info['C'] = 'D';
$major_city_info[2] = 'E';
$major_city_info['E'] = 'F';


function print_all_array($city_array)
{  
  $current_item = current($city_array);
  if ($current_item)
    print("$current_item<BR>");
  else
    print("There's nothing to print");
  while($current_item = next($city_array))
    print("$current_item<BR>");
}

print_all_array($major_city_info);
?>

<?php
//indexes
  $arr = array();

  $arr[0] = "First ";
  $arr[1] = " PHP ";
  $arr[2] = "array";

  echo( $arr[0] . $arr[1] . $arr[2] );
?>
<hr>
<?php

  $mo = array( "Jan ", "Feb ", "Mar " );
  $dy = array( "21 ", "22 ", "23 " );
  $yr = array( "2005", "2006", "2007" );
    
  echo( $mo[1] . $dy[0] . $yr[1] );
?>
  
<?php 
//Assign elements from array to variables
$scores = array(88, 75); 

@list($maths, $english, $history) = $scores; 

@printf("<p>Maths: %d; English: %d; History: %d; Biology: %d.</p>\n", $maths, $english, $history, $biology); 
?>

<?php
//list Assign elements from array to variables
$w3r1_array = array("php","javascript","asp");
list($x, $y, $z) = $w3r1_array;
echo "We have covered $x,  $y and $z. <br>" ;
$w3r2_array = array("php","javascript","asp");
list($x, , $z) = $w3r2_array;
echo "We have covered $x and $z and so many other topics";
?>

<?php
//example of %d and %s(formatted strings)
//they represent variable types 
//they are displayed with printf and sprintf    
$num = 5;
$location = 'tree';

$format = 'There are %d monkeys in the %s';
echo sprintf($format, $num, $location);
?>