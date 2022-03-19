<?php
// pengulangan

// Untuk for
for( $i = 0; $i < 6; $i++ ) {
    echo "Hello world! <br>";
}

// untuk while
$i = 0;
while ( $i < 10 ) {
    echo "Hello Friend! <br>";
$i++;

}

// untuk do while
$i = 0;
do {
    echo "Hello Guys! <br>";
$i++;
} while( $i < 4 );
?>

<?php

// pengkondisian

// if else
$x = 10;
if( $x < 20 ) {
    echo "benar";   
} else {
    echo "salah";
}

// if else if else
$x = 20;
if( $x < 20 ) {
    echo "benar";  
} else if ( $x == 20 ){
    echo "Hello!";
} else {
    echo "salah";
}
?>
