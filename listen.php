<?php 

    exec('git pull', $output, $returnVar);

    var_dump($output);

    var_dump($returnVar);


 ?>