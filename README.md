# Bradley Terry Model

Bradley-Terry Modeli, hangi öğenin en alakalı veya en iyi seçim olduğunu görmek için bir dizi eşleştirmenin sonuçlarını karşılaştırırken faydalıdır.

Herhangi bir spor dalındaki bir grupta yer alan çok sayıda takımın birbiriyle tekrarlı olarak yaptığı ikili karşılaşmaları analiz eden Bradley-Terry modeli, ikili karşılaşmada bir takımın kazanma olasılığını hesaplamaktadır

![image](https://github.com/user-attachments/assets/e39d1a42-82e7-42ce-8865-c9546f7ed784) *(1)*

Görsel (1)’de, , i. takımın j. takımı yenme olasılığı ve ve , sırasıyla, i. ve j. takımların genel yeteneğini ifade eden pozitif-değerli ölçek parametreleridir. Bir takımın kazandığı ve diğer takımın yenildiği herhangi bir (i, j) müsabaka çifti için,

![image](https://github.com/user-attachments/assets/c649b196-33b2-4e83-8c86-44de1422d84d) *(2)*

olarak elde edilir. Görsel (2)’de, , j. takımın i. takımı yenme olasılığıdır ve 1 ji ij p= p − ’dir. Karşılaşmaların tamamen bağımsız olduğu varsayımı altında, Bradley-Terry modeli,

![image](https://github.com/user-attachments/assets/b1ea7a3f-fd21-4628-bc5b-7da5a233fa86) *(3)*

biçiminde bir logit model ile de ifade edilebilmektedir. Görsel (3)’te ve ’dir. Eğer ise, i. takımın kazanma olasılığı 0.5’dir. Görsel (1)’deki klasik Bradley-Terry modelinin yanısıra, ev sahibi olma avantajının kazanma olasılığı üzerindeki etkisini inceleyen Bradley-Terry modeli Görsel (4)’teki gibi ifade edilmektedir (Agresti, 2002)

![image](https://github.com/user-attachments/assets/f3bac86d-3aca-437a-96d8-09eef0cd44d3) *(4)*

Görsel (4)’te, i. takım ev sahibi takım olmak üzere, , i. takımın j. takımı yenme olasılığıdır ve (>0) parametresi evsahibi olma avantajını gösteren parametredir. Tarafsızca eşleştirilmiş iki takımdan ev sahibi olan takımın kazanma olasılığı,

![image](https://github.com/user-attachments/assets/a7aa248c-9908-47f5-a51b-a290c39c09c9) *(5)*

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
