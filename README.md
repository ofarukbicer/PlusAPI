# 🗄️ PlusAPI

## 📥 Kurulum

Yüklemek için `composer require ofarukbicer/plusapi`

## [📒 Kullanım (Örnekler Mevcuttur)](https://github.com/ofarukbicer/PlusAPI/blob/master/examples)

Örnek:

```php
use ofarukbicer\PlusAPI\PlusAPI;

$plusapi = new PlusAPI("token");


echo $plusapi->bilgi; // PlusAPI | Piyasa Verileri Sınıfı

$plusapi->hisse_ver("sasa")); // Hisse Sembol
$plusapi->hisse_sepet()); // Hisse Sepet
$plusapi->kripto_ver("btc")); // Kripto Sembol
$plusapi->kripto_haber()); // Kripto Haber
$plusapi->kripto_sepet()); // Kripto Sepet
```

## 🌐 Telif Hakkı ve Lisans

* *Copyright (C) 2021 by* [@ofarukbicer](https://github.com/ofarukbicer) ❤️️
* [MIT LICENSE](https://github.com/ofarukbicer/plusapi/blob/master/LICENSE) *Koşullarına göre lisanslanmıştır..*

## ♻️ İletişim

*Bizimle iletişime geçmek isterseniz, **Telegram**'dan mesaj göndermekten çekinmeyin;* [@PlusAPI](https://t.me/PlusAPI)


> **[PlusAPI](https://plusapi.org)** *için yazılmıştır..*
