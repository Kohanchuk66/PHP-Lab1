<?php
    $A = array(
        'x' => 0,
        'y' => 0
    );
    $B = array(
        'x' => 0,
        'y' => 5
    );
    $C = array(
        'x' => 5,
        'y' => 5
    );
    $D = array(
        'x' => 5,
        'y' => 0
    );
    $AB = sqrt( ( $B[x] - $A[x] ) * ( $B[x] - $A[x] ) + ( $B[y] - $A[y] ) * ( $B[y] - $A[y] ) );
    $BC = sqrt( ( $B[x] - $C[x] ) * ( $B[x] - $C[x] ) + ( $B[y] - $C[y] ) * ( $B[y] - $C[y] ) );
    $CD = sqrt( ( $D[x] - $C[x] ) * ( $D[x] - $C[x] ) + ( $D[y] - $C[y] ) * ( $D[y] - $C[y] ) );
    $AD = sqrt( ( $D[x] - $A[x] ) * ( $D[x] - $A[x] ) + ( $D[y] - $A[y] ) * ( $D[y] - $A[y] ) );
    $p = ( $BC + $AB + $CD + $AD ) / 2;
    $S = sqrt( ( $p - $AB ) * ( $p - $BC ) * ( $p - $CD ) * ( $p - $AD ) );
    echo $S;
?>
