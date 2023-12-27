
// Array List
let sayilar = [2, 4, 8, 9, 10, 12, 16, 18, 20, 25];

// Kareköklerini bulma
let karekokler = sayilar.map(sayi => Math.sqrt(sayi)); //=> işareti, fonksiyonu tanımlamak için kullanılır ve genellikle bir parametre alır ve ardından ok işaretiyle ayrılmış bir ifadeyi içerir. 

// Karelerini bulma
let kareler = sayilar.map(sayi => sayi * sayi);

// Tüm sayıların toplamını bulma
let toplam = sayilar.reduce((acc, sayi) => acc + sayi, 0); //reduce ; bir dizi içindeki sayıların toplamını bulmak için kullanır. 
                                                        //acc (accumulate), başlangıçta 0 değeriyle başlar ve her adımda biriktirilen değeri temsil eder.

// Ortalamayı bulma
let ortalama = toplam / sayilar.length;

// En büyük ve en küçük sayıları bulma
let enBuyuk = Math.max(...sayilar); // Üç nokta (...) spread operatörünü temsil eder ve bu, bir dizi (array) ya da bir nesnenin elemanlarını ya da özelliklerini ayırarak işlem yapmak için kullanılır. 
let enKucuk = Math.min(...sayilar); // Spread operatörü, 'Math.max' ve 'Math.min' fonksiyonlarına array içindeki elemanları ayrı ayrı argümanlar olarak geçirmek için kullanılır.

// Sonuçları consola yazdırma
console.log("Karekökler: ", karekokler);
console.log("Kareler: ", kareler);
console.log("Toplam: ", toplam);
console.log("Ortalama: ", ortalama);
console.log("En Büyük Sayı: ", enBuyuk);
console.log("En Küçük Sayı: ", enKucuk);



