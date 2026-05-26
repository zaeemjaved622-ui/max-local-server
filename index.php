<?php
/**
 * Max Local Server
 * ایک سادہ لوکل ویب سرور جو PHP، HTML، CSS، JavaScript چلاتا ہے
 */

// سرور کی ترتیبات
$server_root = __DIR__ . '/public';
$server_host = 'localhost';
$server_port = 8080;

// اگر public فولڈر نہ ہو تو بنائیں
if (!is_dir($server_root)) {
    mkdir($server_root, 0755, true);
}

// فائل کی قسم معلوم کریں
function get_mime_type($file) {
    $mime_types = [
        'html' => 'text/html',
        'htm' => 'text/html',
        'php' => 'text/html',
        'css' => 'text/css',
        'js' => 'application/javascript',
        'json' => 'application/json',
        'xml' => 'application/xml',
        'pdf' => 'application/pdf',
        'png' => 'image/png',
        'jpg' => 'image/jpeg',
        'jpeg' => 'image/jpeg',
        'gif' => 'image/gif',
        'svg' => 'image/svg+xml',
        'ico' => 'image/x-icon',
        'mp3' => 'audio/mpeg',
        'mp4' => 'video/mp4',
        'txt' => 'text/plain',
    ];
    
    $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
    return $mime_types[$ext] ?? 'application/octet-stream';
}

// درخواست کا راستہ حاصل کریں
$request_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$request_path = str_replace('/index.php', '', $request_path);
$file_path = $server_root . $request_path;

// اگر براہ راست فولڈر ہے تو index.php کھولیں
if (is_dir($file_path)) {
    $file_path = rtrim($file_path, '/') . '/index.php';
    if (!file_exists($file_path)) {
        $file_path = rtrim($file_path, '/index.php') . '/index.html';
    }
}

// فائل موجود ہے تو اسے چلائیں
if (file_exists($file_path) && is_file($file_path)) {
    $ext = pathinfo($file_path, PATHINFO_EXTENSION);
    
    // اگر PHP فائل ہے
    if ($ext === 'php') {
        header('Content-Type: ' . get_mime_type($file_path));
        include $file_path;
    } else {
        // دوسری فائلیں براہ راست بھیجیں
        header('Content-Type: ' . get_mime_type($file_path));
        readfile($file_path);
    }
} else {
    // 404 خرابی
    http_response_code(404);
    echo "
    <!DOCTYPE html>
    <html dir='rtl' lang='ur'>
    <head>
        <meta charset='UTF-8'>
        <title>404 - فائل نہیں ملی</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                margin: 0;
                background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            }
            .container {
                text-align: center;
                background: white;
                padding: 40px;
                border-radius: 10px;
                box-shadow: 0 10px 25px rgba(0,0,0,0.2);
            }
            h1 { color: #764ba2; margin: 0; }
            p { color: #666; }
        </style>
    </head>
    <body>
        <div class='container'>
            <h1>404 - فائل نہیں ملی</h1>
            <p>درخواست شدہ فائل موجود نہیں ہے</p>
            <p><small>Max Local Server</small></p>
        </div>
    </body>
    </html>";
}
?>
