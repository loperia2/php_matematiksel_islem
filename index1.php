<?php
$x=10;/*kaç tane sayi istediğimizin değişkeni;*/
$y=100;/* rastgele sayi aralğı için minumum değerimiz*/
$z=1000;/*rastgele sayi aralığı için maksimumum değerimiz*/
$t=[];/*rastgele sayıları sakladığımız array*/
for ($i=1; $i <= $x; $i++) {/*for döngüsü ile üretilen sayılar bir aray içine yazılır*/
        $t[$i]=rand($y,$z);/*bu fonksiyon ile rastgele sayı üretilebilir. fonksiyonun içindeki ilk parametre minumum değer iken; ikinci değer maksimumdur.ek bilgi olarak: rand() fonksiyonu bilgisayarın içindeki saniye sayıcıya göre bir değer verir. lakin saniye saymanın da bir düzeni olduğu için; rastgele bir sayı belirleyen insandan biraz daha farklıdır. insan hayatındaki kaotiklik ve dışarıdan gelen uyarılara olan hassaslık göz önüne alınıp bir karşılaştırma yapıldığında; sürekli aynı paterne göre çalışan bir makineden verilen sayının ne kadar rastgele olduğu bir tartışma konusudur.*/
}
function son($n){/*bu fonksiyon aldığı sayının son basamaktaki sayısına göre yüzde değeri belirleyip,yine alınan sayının yüzdesini alarak ona ekler.*/
    $adim1=($n%10);/*bir sayının 10 a göre modunu yani 10 bölümünden kalanını bulursanız son basamaktaki sayısını bulursunuz*/
    $adim2=($adim1)/100;
    $adim3=($adim2)*$n;
    $sonadim=$adim3+$n;
    return $sonadim;
}
for($i=1;$i<=$x;$i++){/*buradaki döngü ise daha önce belirlenip, t arrayine atanmış sayıları, üretilen fonksiyonda kullanır ve ekranda yazdırır.*/
    echo"üretilen sayi:".$t[$i]." işlem sonucu:".son($t[$i])." - "."\n";
}
/* ilk fonksiyon yazılıp; iki for döngüsü tek bir for döngüsüne birleştirilebilirdi. böylece on kere dönen rand() fonksiyonu, çağırdığı sayıyı her döngünün başında bir değişkene atayıp,sonra o değişken yazılan fonksiyonda kullanılarak; hem atadığı değişken hem de fonksiyon sonucu ekrana echo edilebilirdi. lakin verilen ödev açıklamasında; ilk önce sayılar yaratılacak sonra işlem fonksiyonu yazılıp fonksiyon 10 kere döndürülerek; sonuç ekrana echo edilecekti*/












?>