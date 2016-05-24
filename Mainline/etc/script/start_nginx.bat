@ECHO OFF
echo Starting nginx
call stop_nginx.bat /n
cd /D %~dp0..\..\nginx\
%~dp0..\tools\hiddenCmd.exe nginx.exe -c  %~dp0..\set\nginx.conf
cd  /D %~dp0
if "%1" == "/n" goto end
%~dp0..\tools\msgbox -e "Ã· æ" "∆Ù∂ØNginx" 64
:end
