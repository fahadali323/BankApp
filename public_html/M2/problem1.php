<?php
$a1 = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$a2 = [0, 1, 3, 5, 7, 9, 2, 4, 6, 8, 10];
$a3 = [10, 9, 8, 7, 6, 5, 4, 3, 2, 1, 0];
$a4 = [0, 0, 1, 1, 2, 2, 3, 3, 4, 4, 5, 5, 6, 6, 7, 7, 8, 8, 9, 9, 10, 10];
function processArray($arr) {
    //use the $arr variable to iterate over
    echo "<br>Processing Array:<br><pre>" . var_export($arr, true) . "</pre>";
    echo "<br>Odds output:<br>";
    //TODO add logic here to echo out only odd values
     /*
        ucid : fa376
        date: 5/30/22
        explanation: coded the part for only outputting array numbers on a single line
        The code looks as each element in the array by index of item and takes that element
        divides it by 2 but gets the remainder by using %. If the remainder is  equal 
        to 1 then it is an odd number. Then for each index that is odd it gets printed out. 
        */
    $oddvalues = array();
    foreach($arr as $item)
    {
        if($item % 2 == 1)
        {   
            $oddvalues[]= $item;
        }
    }
    $unique = array();
    $unique = (array_unique($oddvalues));
    echo  var_export($unique, true); 
}
echo "Problem 1: Odd Output<br>";
?>
<table>
    <thread>
        <th>A1</th>
        <th>A2</th>
        <th>A3</th>
        <th>A4</th>
    </thread>
    <tbody>
        <tr>
            <td>
                <?php processArray($a1); ?>
            </td>
            <td>
                <?php processArray($a2); ?>
            </td>
            <td>
                <?php processArray($a3); ?>
            </td>
            <td>
                <?php processArray($a4); ?>
            </td>
        </tr>
</table>
<style>
    table {
        border-spacing: 2em 3em;
        border-collapse: separate;
    }

    td {
        border-right: solid 1px black;
        border-left: solid 1px black;
    }
</style>
