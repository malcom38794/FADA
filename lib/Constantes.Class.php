<?php

setlocale(LC_TIME, 'es_AR.utf8');

/**
 * 
 * Clase para mantener las directivas de sistema.
 * Deben coincidir con las configuraciones del proyecto.
 * 
 * @author Eder dos Santos <esantos@uarg.unpa.edu.ar>
 * 
 */
class Constantes {

    
    const NOMBRE_SISTEMA = "F.A.D.A.";
    
    const WEBROOT = "/var/www/html/fada/";
    const APPDIR = "fada";
        
    const SERVER = "http://localhost";
    const APPURL = "http://localhost/fada";
    const HOMEURL = "http://localhost/fada/app/index.php";
    const HOMEAUTH = "http://localhost/fada/app/PantallaDocentes.php";
    const HOMEAUTHAREA = "http://localhost/fada/app/PantallaDocentes.php";
    
    
    const BD_SCHEMA = "bdUsuarios";
    const BD_USERS = "bdUsuarios";
    
}
