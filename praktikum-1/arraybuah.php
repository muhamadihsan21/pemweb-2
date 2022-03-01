<?php
  $ar_buah = ["Pepaya", "Mangga","Pisang","Jambu" ];
  echo 'baris buah ke 4 adalah : ' . $ar_buah[4];
  echo '<br/>Jumlah Buah : ' . count($ar_buah);

  // cetak seluruh buah
  echo '<ol>';
  foreach($ar_buah as $buah) {
    echo '<li>'. $buah .'</li>';
  }
  echo '</ol>';
  // tambahkan buah
  $ar_buah[]="Durian";
  // hapus buah index ke 1
  unset($ar_buah[1]);
  // ubah buah index ke 2 menjadi Manggis
  $ar_buah[2]="Manggis";
  // cetak seluruh buah dengan index nya
  echo '<ul>';
  foreach($ar_buah as $urutan => $buah){
    echo '<li> buah index - ' . $urutan .' adalah '. $buah .'</li>';
  }
  echo '</ul>';

?>