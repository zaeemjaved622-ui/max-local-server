<!DOCTYPE html>
<html dir="rtl" lang="ur">
<head>
    <meta charset="UTF-8">
    <title>سرور معلومات</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f5f5f5;
            padding: 20px;
            direction: rtl;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        h1 { color: #764ba2; }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        th, td {
            padding: 12px;
            text-align: right;
            border-bottom: 1px solid #ddd;
        }
        th {
            background: #667eea;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>📊 سرور کی تفصیلات</h1>
        
        <table>
            <tr>
                <th>خصوصیت</th>
                <th>قدر</th>
            </tr>
            <tr>
                <td>PHP ورژن</td>
                <td><?php echo phpversion(); ?></td>
            </tr>
            <tr>
                <td>سرور سافٹ ویئر</td>
                <td><?php echo $_SERVER['SERVER_SOFTWARE']; ?></td>
            </tr>
            <tr>
                <td>موجودہ وقت</td>
                <td><?php echo date('d/m/Y H:i:s'); ?></td>
            </tr>
            <tr>
                <td>آپریٹنگ سسٹم</td>
                <td><?php echo php_uname(); ?></td>
            </tr>
            <tr>
                <td>میموری حد</td>
                <td><?php echo ini_get('memory_limit'); ?></td>
            </tr>
        </table>
        
        <p><a href="index.html">← واپس جائیں</a></p>
    </div>
</body>
</html>
