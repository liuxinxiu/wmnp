@ECHO OFF
echo Stoping mysql
%~dp0..\tools\Process.exe -k mysqld.exe
%~dp0..\tools\Process.exe -k mysqld.exe
if "%1" == "/n" goto end
%~dp0..\tools\msgbox -e "Ã· æ" "Õ£÷πMysql" 64
:end
