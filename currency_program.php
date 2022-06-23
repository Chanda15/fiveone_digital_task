
<?php
// PHP program to accept an amount
// and count number of notes
 
// function to count and
// print currency notes
function countCurrency($amount)
{
    $notes = array(500, 200, 100,
                   50, 20, 10, 5, 2, 1);
    $noteCounter = array(0, 0, 0, 0, 0,
                         0, 0, 0, 0);
    $GivenAmount = $amount;
	$array_currency = [];
    for ($i = 0; $i < 9; $i++)
    {
		
        if ($amount >= $notes[$i])
        {
			//echo $amount.' '.$notes[$i].'</br>';
           $noteCounter[$i] = intval($amount /
                                      $notes[$i]);
									 // echo '<br>';
            $amount = $amount -
                      $noteCounter[$i] *
                      $notes[$i];
					  //echo '<br>';
        }
		
		if ($noteCounter[$i] != 0)
        {
			$array_currency[$notes[$i]]=$noteCounter[$i];
        }
    }   
//echo '<pre>';	
	//print_r($noteCounter);
	
	echo $GivenAmount.'=>'.json_encode($array_currency);
}

$amount = 1800;
countCurrency($amount);
 echo '<br/>';
$amount = 48;
countCurrency($amount);
?>