@ECHO OFF
echo Starting mysql
call stop_mysql.bat /n
%~dp0..\tools\hiddenCmd.exe %~dp0..\..\mysql\bin\mysqld.exe  --defaults-file="%~dp0..\set\my.ini"
if "%1" == "/n" goto end
%~dp0..\tools\msgbox -e "Ã· æ" "∆Ù∂ØMysql" 64
:end


