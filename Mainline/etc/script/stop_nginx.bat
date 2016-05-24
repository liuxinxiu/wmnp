@ECHO OFF
echo Stoping php-cgi
%~dp0..\tools\Process.exe -k nginx.exe
%~dp0..\tools\Process.exe -k nginx.exe
if "%1" == "/n" goto end
%~dp0..\tools\msgbox -e "Ã· æ" "Õ£÷πNginx" 64
:end
