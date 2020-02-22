<?php
    do{
        $firstRand = rand( 0, 100 );
        $secondRand = rand( 0, 100 );
        $thirdRand = rand( 0, 100 );
    }
    while( $firstRand == $secondRand && $firstRand == $thirdRand);
    echo "Числа: $firstRand, $secondRand, $thirdRand";
?>
