
<?php
function __autoload($Money) {
    include 'NEO/'.$Money . '.php';
}

//$obj  = new Money(5);
//$obj2 = new Money(1);
?>
