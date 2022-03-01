
<?php
  $ar_buah = ["p"=>"Pepaya","a"=>"Apel","m"=>"Mangga","j"=>"Jambu" ];
  echo '<ol>';
  foreach($ar_buah as $k =>$v){
    echo '<li>'.$k.' - ' . $v .'</li>';
  }
  echo '</ol>';

  sort($ar_buah);
  echo '<hr/>';
  echo '<ol>';
  foreach($ar_buah as $k =>$v){
    echo '<li>'.$k.' - ' . $v .'</li>';
  }
  echo '</ol>';


  arsort($ar_buah);
  echo '<hr/>';
  echo '<ol>';
  foreach($ar_buah as $k =>$v){
    echo '<li>'.$k.' - ' . $v .'</li>';
  }
  echo '</ol>';
  echo '<hr/>';
  

  $tims = ["erwrin","heru","ali","zaki"];
  array_pop($tims);
  foreach($tims as $person){
    echo $person. '<br/>';   
  }
  echo '<hr/>' ;

  $tims = ["erwrin","heru","ali","zaki"];
  array_push($tims);
  foreach($tims as $person){
    echo $person. '<br/>';   
  }
  echo '<hr/>' ;

  $tims = ["erwrin","heru","ali","zaki"];
  array_shift($tims);
  foreach($tims as $person){
    echo $person. '<br/>';   
  }
  echo '<hr/>' ;

  $tims = ["erwrin","heru","ali","zaki"];
  array_unshift($tims);
  foreach($tims as $person){
    echo $person. '<br/>';   
  }
  echo '<hr/>' ;
?>