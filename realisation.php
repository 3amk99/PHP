<?php
$question = [
"What is The name of morocco" => "morocco" ,
"what is the name of french" => "french",
"what is the name of italy" => "italy" ,
"what is the name of ruissia" => "ruissia"
] ;
 $i = 1 ;
 $score = 0 ;
 foreach($question as $key => $value )
 {
  echo $key . "\n";
  $answer = trim(fgets(STDIN));
  if($answer == $value )
  {
   $score++ ;
  }
  $i++;
 }
 echo "the score is " . $score ;