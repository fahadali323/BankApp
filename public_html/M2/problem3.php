<?php
$a1 = [-1, -2, -3, -4, -5, -6, -7, -8, -9, -10];
$a2 = [-1, 1, -2, 2, 3, -3, -4, 5];
$a3 = [-0.01, -0.0001, -.15];
$a4 = ["-1", "2", "-3", "4", "-5", "5", "-6", "6", "-7", "7"];

function bePositive($arr) {
    echo "<br>Processing Array:<br><pre>" . var_export($arr, true) . "</pre>";
    echo "<br>Positive output:<br>";
    //TODO use echo to output all of the values as positive (even if they were originally positive)
       /*
        ucid : fa376
        date: 5/30/22
        explanation: Iterate through the elements in the generic array.
        Then I used if statment where the if the generic array where
        variable d is used to assign each item. 
        Each item is then converted to positive values through using 
        absolute(). 
        I also created another array called positive values where
        the positive values will be added to the postivearray. At the end 
        I print the postive array to the server.
        */ 
    $postivearray = array();
    foreach($arr as $item)
    { 
        $d = $item;
        $positivevals = abs($d);
        $postivearray[] = $positivevals;
    }
    echo "<pre>" .var_export($postivearray, true). "</pre>" ;

}
echo "Problem 3: Be Positive<br>";
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
                <?php bePositive($a1); ?>
            </td>
            <td>
                <?php bePositive($a2); ?>
            </td>
            <td>
                <?php bePositive($a3); ?>
            </td>
            <td>
                <?php bePositive($a4); ?>
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
