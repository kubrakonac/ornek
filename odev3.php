<?php


function diziIkiyleCarp(&$sayilar)	// parametre olarak dizinin referansını alan fonksiyon.
{
   for ($i=0; $i<count($sayilar); $i++) {	// diziyi gezen for döngüsü.
    $sayilar[$i] = $sayilar[$i] * 2;		// dizi elemanlari 2 ile çarpılıyor.
  }
}

$sayilar = array(1,2,3,4,5,6,7,8,9);	// dizi oluşturuluyor.

echo "Dizi ilk hali :\n";	
print_r($sayilar);	// dizinin baslangic hali.

diziIkiyleCarp($sayilar);	// diziyi ikiyle carpacak fonksiyon çağırılıyor.

echo "Dizi son hali :\n";	// dizinin son hali.
print_r($sayilar);


?>