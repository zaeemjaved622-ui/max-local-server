<!DOCTYPE html>
<html dir="rtl" lang="ur">
<head>
    <meta charset="UTF-8">
    <title>PHP ٹیسٹ</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>✅ PHP کام کر رہا ہے!</h1>
        
        <div class="info">
            <h2>موجودہ وقت:</h2>
            <p><?php echo date('d/m/Y H:i:s'); ?></p>
            
            <h2>سرور کی معلومات:</h2>
            <p>PHP ورژن: <?php echo phpversion(); ?></p>
            <p>آپریٹنگ سسٹم: <?php echo php_uname(); ?></p>
            
            <h2>سنام:</h2>
            <p><?php echo gethostname(); ?></p>
        </div>
        
        <p><a href="index.html">← واپس جائیں</a></p>
    </div>
</body>
</html>
