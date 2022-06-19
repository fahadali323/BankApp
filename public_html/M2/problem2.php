<?php
$a1 = [10.001, 11.591, 0.011, 5.991, 16.121, 0.131, 100.981, 1.001];
$a2 = [1.99, 1.99, 0.99, 1.99, 0.99, 1.99, 0.99, 0.99];
$a3 = [0.01, 0.01, 0.01, 0.01, 0.01, 0.01, 0.01, 0.01, 0.01, 0.01];
$a4 = [10.01, -12.22, 0.23, 19.20, -5.13, 3.12];
function getTotal($arr) {
    echo "<br>Processing Array:<br><pre>" . var_export($arr, true) . "</pre>";
    $total = 0.00;
    //TODO do adding here
     //set the double to a string variable
        /*
        ucid : fa376
        date: 5/30/22
        explanation: I iterate through the array by
        adding each element to total=total+item.
        So for every new element gets added to the previous total. 
        For roundoff I used sprintf() which rounds to two decimal places
        and then print the total.
        */
    foreach($arr as $item)
    {
        $total = $total + $item;
    }
    //TODO do rounding stuff here
    $total = sprintf('%.2f', $total);
    echo "The total is " . var_export($total, true);
}
echo "Problem 2: Adding Floats<br>";
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
                <?php getTotal($a1) ?>
            </td>
            <td>
                <?php getTotal($a2) ?>
            </td>
            <td>
                <?php getTotal($a3) ?>
            </td>
            <td>
                <?php getTotal($a4); ?>
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
