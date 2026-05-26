# Max Local Server

اپنا خود کا لوکل PHP سرور!

## شروعات

### Windows:
1. `start-server.bat` فائل کو ڈبل کلک کریں
2. یا کمانڈ پروانپٹ میں یہ لکھیں:
```bash
php -S localhost:8080 index.php
```

### Linux/Mac:
1. ٹرمینل میں یہ لکھیں:
```bash
chmod +x start-server.sh
./start-server.sh
```

یا:
```bash
php -S localhost:8080 index.php
```

## سرور کھولیں

ایک ویب براؤزر میں یہ لکھیں:
```
http://localhost:8080
```

## فائلیں رکھیں

اپنی تمام ویب فائلیں `public` فولڈر میں رکھیں:
- HTML فائلیں
- PHP فائلیں
- CSS فائلیں
- JavaScript فائلیں
- تصاویریں وغیرہ

## مثال

`public/test.php` میں PHP کو ٹیسٹ کریں!

## فولڈر کی ساخت

```
Max-Local-Server/
├── index.php              (مین سرور فائل)
├── start-server.bat       (Windows کے لیے)
├── start-server.sh        (Linux/Mac کے لیے)
├── README.md              (معلومات)
└── public/                (آپ کی ویب فائلیں یہاں رکھیں)
    ├── index.html
    ├── style.css
    ├── script.js
    ├── test.php
    └── info.php
```

**مزید سوالات کے لیے رابطہ کریں!** 🚀
