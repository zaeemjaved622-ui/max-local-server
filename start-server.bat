@echo off
title Max Local Server
echo ====================================
echo  Max Local Server شروع ہو رہا ہے...
echo ====================================
echo.
echo سرور: http://localhost:8080
echo.
echo سرور بند کرنے کے لیے: Ctrl + C
echo.
pause
php -S localhost:8080 index.php
