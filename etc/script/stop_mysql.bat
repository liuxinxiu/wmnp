@ECHO OFF
echo Stoping mysql
%~dp0..\tools\Process.exe -k mysqld.exe
%~dp0..\tools\Process.exe -k mysqld.exe
if "%1" == "/n" goto end
%~dp0..\tools\msgbox -e "��ʾ" "ֹͣMysql" 64
:end
