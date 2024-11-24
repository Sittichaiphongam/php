<?php
$x = 10;

if ($x > 0) {
    echo 'Porsitive';
} else {
    echo 'Negative';
}
?>

<di>Switch</di>

<?php
switch($x) {
    case 1 :
        echo 'Prosetive';
        break;
    case 2 :
        echo 'Two';
        break;
    case 3 :
        echo 'Three';
        break;
    default : {
        echo 'UnKnow';
    }
}
?>