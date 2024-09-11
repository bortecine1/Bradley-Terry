# Bradley Terry Model

Bradley-Terry Modeli, hangi öğenin en alakalı veya en iyi seçim olduğunu görmek için bir dizi eşleştirmenin sonuçlarını karşılaştırırken faydalıdır.

Herhangi bir spor dalındaki bir grupta yer alan çok sayıda takımın birbiriyle tekrarlı olarak yaptığı ikili karşılaşmaları analiz eden Bradley-Terry modeli, ikili karşılaşmada bir takımın kazanma olasılığını hesaplamaktadır

![image](https://github.com/user-attachments/assets/99cc575f-b2b3-4ba1-b9a3-6fbaa0f9eaa0) *(1)*

Görsel (1)’de, , i. takımın j. takımı yenme olasılığı ve ve , sırasıyla, i. ve j. takımların genel yeteneğini ifade eden pozitif-değerli ölçek parametreleridir. Bir takımın kazandığı ve diğer takımın yenildiği herhangi bir (i, j) müsabaka çifti için,

![image](https://github.com/user-attachments/assets/18695fd2-ab31-48db-b8c8-6c9faef742a4) *(2)*

olarak elde edilir. Görsel (2)’de, , j. takımın i. takımı yenme olasılığıdır ve 1 ji ij p= p − ’dir. Karşılaşmaların tamamen bağımsız olduğu varsayımı altında, Bradley-Terry modeli,

![image](https://github.com/user-attachments/assets/0a04abba-937e-42c2-b7ab-b4295752c02f) *(3)*

biçiminde bir logit model ile de ifade edilebilmektedir. Görsel (3)’te ve ’dir. Eğer ise, i. takımın kazanma olasılığı 0.5’dir. Görsel (1)’deki klasik Bradley-Terry modelinin yanısıra, ev sahibi olma avantajının kazanma olasılığı üzerindeki etkisini inceleyen Bradley-Terry modeli Görsel (4)’teki gibi ifade edilmektedir (Agresti, 2002)

![image](https://github.com/user-attachments/assets/cec9775a-040c-4aa7-9fe9-8457ff1147c3) *(4)*

Görsel (4)’te, i. takım ev sahibi takım olmak üzere, , i. takımın j. takımı yenme olasılığıdır ve (>0) parametresi evsahibi olma avantajını gösteren parametredir. Tarafsızca eşleştirilmiş iki takımdan ev sahibi olan takımın kazanma olasılığı,

![image](https://github.com/user-attachments/assets/a1151f94-d2b1-4f59-9bf9-f68d2f9dc606) *(5)*

eşitliği ile hesaplanır (Agresti, 2002). ve parametrelerine dayalı en çok olabilirlik fonksiyonunun iteratif çözüm yöntemleri geliştirilmiştir.

## Örnek

Aşağıdaki örnekte A-D takımlarının birbirleriyle karşılaştıkları maç sonuçları (matrisi) yer almaktadır (her puan bir galibiyettir).
```php
BradleyTerry::rating
(
    [
        'A' => ['A' => 0, 'B' => 2, 'C' => 0, 'D' => 1],
        'B' => ['A' => 6, 'B' => 0, 'C' => 5, 'D' => 0],
        'C' => ['A' => 0, 'B' => 4, 'C' => 0, 'D' => 3],
        'D' => ['A' => 4, 'B' => 0, 'C' => 3, 'D' => 0],
    ],
    10
)
```

## Referanslar

https://en.wikipedia.org/wiki/Bradley%E2%80%93Terry_model

https://dergipark.org.tr/tr/download/article-file/463833

https://web.stanford.edu/class/archive/stats/stats200/stats200.1172/Lecture24.pdf
