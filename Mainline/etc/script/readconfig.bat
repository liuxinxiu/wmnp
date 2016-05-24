set wmnp_home=%cd%\
set strrpc_exe=%~dp0..\tools\strrpc.exe
if "%1" == "" goto read
if exist "%1" set wmnp_home=%1
cd /D "%wmnp_home%"
:read
for /R  %%I in (*.stpl) do type "%%~fnI" |  "%strrpc_exe%" ${wmnp_home} "%wmnp_home:\=/%" >%%~dpnI
if "%2" == "/n" goto end
%~dp0..\tools\msgbox -e "提示" "更新配置.." 64
:end
