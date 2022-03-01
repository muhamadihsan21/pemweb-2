<?php
 // definisikan konstansta
  define('PHI',3.14);
  define('DBNAME','inventori');
  define('DBSERVER','localhost');

  $jari = 18;
  $luas = PHI * $jari * $jari;
  $kll = 2 * PHI * $jari;

  echo 'Luas Lingkaran dengan Jari-jari '.$jari.' : '.$luas;
  echo '<br/>Kelilingnya : '.$kll;
?>
  <hr/>
  <br/>
  <?php
  echo 'Nama databasenya : '.DBNAME;
  echo '<br/>Lokasi databasenya ada di '.DBSERVER;

?>