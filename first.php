<?php

$products = array(
    "Apple" => 1.20,
    "Banana" => 0.50,
    "Orange" => 0.80,
    "Grapes" => 2.50,
    "Pineapple" => 3.00
);
?>

<h2>Product Table</h2>
<table>
    <tr>
        <th>Fruit</th>
        <th>Price</th>
    </tr>
<?php

foreach($products as $product => $price){ ?>
    <tr>
        <td><?php echo($product)?></td>
        <td><?php echo($price)?></td>
    </tr>

<?php
}
?>

</table>


<!-- Problem: Find the Second Largest Number in an Array -->

<?php 
$numbers = array(10, 34, 56, 23, 45, 78, 67, 89, 90);

sort($numbers);
$position = count($numbers) - 2;

echo("Second Largest Number: " . $numbers[$position]);

?>
