@ECHO OFF
echo Starting php-cgi
call stop_php_cgi.bat /n
%~dp0..\tools\hiddenCmd.exe  %~dp0..\..\php\php-cgi.exe -b 127.0.0.1:9000 -c %~dp0..\set\php.ini
if "%1" == "/n" goto end
%~dp0..\tools\msgbox -e "��ʾ" "����PHP-CGI" 64
:end