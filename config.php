<?php
//Aquí va toda la configuración de nuestra aplicación web

 error_reporting(E_ALL); 
 ini_set('display_errors', 1);

 define( 'SITE_URL', 'http://andrea.ifcd0211.tk/ejercicios-php/mi-proyecto-V5'); //en producción sería otra url

 define( 'SITE_TIMEZONE', 'Europe/Brussels');
 define( 'SITE_LANG', ['es', 'spa', 'es_ES'] );

 define( 'DB_HOST', 'localhost' );
 define( 'DB_USER', 'phpmyadmin' );
 define( 'DB_PASSWORD', 'p@ssw0rd' );
 define( 'DB_DATABASE', 'microcms' );
 define( 'DB_PORT', '3306' );

 
