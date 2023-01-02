echo off
cls
echo EXECUTANDO TESTES
.\vendor\bin\phpunit tests --colors -v --stop-on-failure --stop-on-warning --testdox
