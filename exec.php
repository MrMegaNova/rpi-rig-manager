<?php 

if (isset($_POST['r1']))
{
exec('$(uptime) > log.txt');
}


/*

if (isset($_POST['RedON']))
{
exec('sudo python /var/www/gpio/red_on.py');
}
if (isset($_POST['RedOFF']))
{
exec('sudo python /var/www/gpio/red_off.py');
}
if (isset($_POST['YellowON']))
{
exec('sudo python /var/www/gpio/yellow_on.py');
}
if (isset($_POST['YellowOFF']))
{
exec('sudo python /var/www/gpio/yellow_off.py');
}
if (isset($_POST['GreenON']))
{
exec('sudo python /var/www/gpio/green_on.py');
}
if (isset($_POST['GreenOFF']))
{
exec('sudo python /var/www/gpio/green_off.py');
}

*/