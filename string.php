<?php 
$name = "John";
?>

<h3>String Function</h3>
<div>Count: <?php echo strlen($name); ?></div>
<div>Index Of: <?php echo strpos($name, "o") ?></div>
<div>UpperCase: <?php echo strtoupper($name) ?></div>
<div>LowerCase: <?php echo strtolower($name) ?></div>
<div>Replace: <?php echo str_replace("John","Jane",$name) ?></div>
<div>Substring: <?php echo substr($name, 0, 3) ?></div>