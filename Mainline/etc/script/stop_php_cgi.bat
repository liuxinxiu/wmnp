@ECHO OFF
echo Stoping php-cgi
%~dp0..\tools\Process.exe -k php-cgi.exe
%~dp0..\tools\Process.exe -k php-cgi.exe
if "%1" == "/n" goto end
%~dp0..\tools\msgbox -e "Ã· æ" "Õ£÷πPHP-CGI" 64
:end
