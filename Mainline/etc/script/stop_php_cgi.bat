@ECHO OFF
echo Stoping php-cgi
%~dp0..\tools\Process.exe -k php-cgi.exe
%~dp0..\tools\Process.exe -k php-cgi.exe
if "%1" == "/n" goto end
%~dp0..\tools\msgbox -e "��ʾ" "ֹͣPHP-CGI" 64
:end
