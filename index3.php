<?php

$x=10;/*kaç tane sayi istediğimizin değişkeni;*/
$y=100;/* rastgele sayi aralğı için minumum değerimiz*/
$z=999;/*rastgele sayi aralığı için maksimumum değerimiz*/

function islem($n){
    $f=((($n%10)/100)*$n)+$n;/*değişkenlere adım adım atmak yerine tek returnda işlem tanımlanmıştır*/
    return $f;
}
function sonuc($n,$m,$s){/*yazılan fonksiyon üç değişkenlidir ilk değişken kaç sayı istediğimiz,ikinci değişken istenilen sayının minumum değeri iken; üçüncü değişken maksimum değeridir*/
    for($i=1;$i<=$n;$i++){
        $f=rand($m,$s);
        $t[$i]="üretilen sayi:".$f."-"."islemsonucu:".islem($f);
    }
    return array_values($t);

}
 echo "<pre>";print_r(sonuc($x,$y,$z));echo "</pre>"/*oluşturulan sayı bir array da toplanmak yerine sayı oluşturulduktan hemen sonra bir değişkene atılır, değişken fonksiyon yardımıyla işlemi yaparak hemen başka bir değişkene atılarak iki farklı değişken aynı adımda hemen echo edilir böylece ramde fonksiyon çalışırken ikiden fazla sayı tutulmaz ve her for döngüsünde ramda tutulan sayı yerine başka sayı geçer.*/








?>