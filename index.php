<?php

$presentTime = new DateTime();
$destinationTime = new DateTime();

$presentTime->setDate(2015, 10, 21);
$presentTime->setTime(04, 06);
$destinationTime->setDate(2015, 10, 21);
$destinationTime->setTime(04, 29);

echo $presentTime->format('M-d-Y-G-i'); ?> <br/>
<?= $destinationTime->format('M-d-Y-G-i'); ?> <br/>

<?php $difference = $presentTime->diff($destinationTime); ?> <br/>
<?= $difference->format('%Y-%M-%D-%H-%I'); ?> <br/>