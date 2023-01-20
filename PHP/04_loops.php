<?php
/* ---------- For Loop ----------*/

/*
** For Loop Syntax
for (initialize; condition; increment) {
    // code to be executed
 }
*/

/*for($x = 0; $x <= 10; $x++) {
    //echo $x;
    echo 'Number ' . $x . '<br>';
}*/

$x =1;

/*while($x <= 15) {
    echo 'number'  . $x . '<br>';
    $x = $x + 1;
}*/

/* ------------ Do While Loop ------------ */

/*
** Do While Loop Syntax
do {
    // code to be executed
   } while (condition);

do. . .while loop will always execute the block of code once, even if the 
condition is false
*/

$x = 6;

/*do {
    echo 'Number ' . $x . '<br>';
    $x++;
}while($x <= 5);
*/

/* ---------- Foreach Loop -----------*/

/*
** Foreach Loop Syntax
   foreach ($array as $value) {
    // code to be executed
   }
*/

$posts = ['First post', 'Second post', 'Third post'];

/*for($x = 0; $x < count($posts);$x++) {
    echo $posts[$x];
}
*/

/*foreach($posts as $post) {
    echo $post;
}
*/

/*foreach($posts as $index => $post) {
    echo $index + 1 . ' - ' . $post . '<br>';
}
*/

$person = [
    'first_name' => 'Bima',
    'Last_name' => 'Rizqy',
    'email' => 'emailbima.com'
  ];
  foreach($person as $key => $value) {
    echo "$key - $value<br>";
  }