@echo off
echo Configuring mail settings...

powershell -Command "(Get-Content .env) -replace 'MAIL_MAILER=log', 'MAIL_MAILER=smtp' | Set-Content .env"
powershell -Command "(Get-Content .env) -replace 'MAIL_HOST=127.0.0.1', 'MAIL_HOST=smtp.gmail.com' | Set-Content .env"
powershell -Command "(Get-Content .env) -replace 'MAIL_PORT=2525', 'MAIL_PORT=587' | Set-Content .env"
powershell -Command "(Get-Content .env) -replace 'MAIL_USERNAME=null', 'MAIL_USERNAME=mo7ammaddev@gmail.com' | Set-Content .env"
powershell -Command "(Get-Content .env) -replace 'MAIL_PASSWORD=null', 'MAIL_PASSWORD=your-app-password-here' | Set-Content .env"
powershell -Command "(Get-Content .env) -replace 'MAIL_FROM_ADDRESS=.*', 'MAIL_FROM_ADDRESS=mo7ammaddev@gmail.com' | Set-Content .env"
powershell -Command "(Get-Content .env) -replace 'MAIL_FROM_NAME=.*', 'MAIL_FROM_NAME=\"Portfolio Contact\"' | Set-Content .env"
echo MAIL_ENCRYPTION=tls >> .env

echo Mail configuration updated!
echo.
echo IMPORTANT: Replace 'your-app-password-here' in .env with your Gmail App Password
echo.
pause
