<?php
$x=10;/*kaç tane sayi istediğimizin değişkeni;*/
$y=100;/* rastgele sayi aralğı için minumum değerimiz*/
$z=999;/*rastgele sayi aralığı için maksimumum değerimiz*/
$t=[];/*rastgele sayıları sakladığımız array*/


for ($i = 1; count($t) <= $x; $i++) {/*for döngüsü ile üretilen sayılar bir aray içine yazılır*/
    $f = rand($y, $z);/*bu fonksiyon ile rastgele sayı üretilebilir. fonksiyonun içindeki ilk parametre minumum değer iken; ikinci değer maksimumdur.ek bilgi olarak: rand() fonksiyonu bilgisayarın içindeki saniye sayıcıya göre bir değer verir. lakin saniye saymanın da bir düzeni olduğu için; rastgele bir sayı belirleyen insandan biraz daha farklıdır. insan hayatındaki kaotiklik ve dışarıdan gelen uyarılara olan hassaslık göz önüne alınıp bir karşılaştırma yapıldığında; sürekli aynı paterne göre çalışan bir makineden verilen sayının ne kadar rastgele olduğu bir tartışma konusudur.*/


    if (in_array($f, $t)) {/*buradaki sorgu ile arayin içinde oluşturulmuş rastgele sayıdan "var mı?" diye bakılır eğer varsa bir önceki i sayısına dönülerek döngü adımı tekrarlanır*/
        $i -= 1;
        continue;
    }
    else {/*burada ise bir önceki sorgu argümanı gerçekleşmemiş ise oluşturulan random sayı dizinin içine atılır*/

        $t[$i] = $f;

    }


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

/*fonksiyon ilk başta yazılıp for döngüleri birleştirilebilirdi.lakin ödev tanımında ilk olarak sayıların yaratılıp; sonra fonksiyonun yazılarak son adımda bir for döngüsü ile üretilmiş fonksiyonun 10 kere dönmesi söylenmiştir. ama for döngülerini birleştirmek işlem sayısını gözle görülür bir şekilde azaltacaktır. çünkü programın yazıldığı 8gb ramlik bilgisayarda istenen random sayısı 900 olduktan sonra bilgisayar tıkanmaktadır*/










?>