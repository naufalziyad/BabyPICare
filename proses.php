<?php
/**
 * Created by PhpStorm.
 * User: Carfin
 * Date: 24/08/2016
 * Time: 09.57
 */

if (isset($_GET['playlist']) && isset($_GET['act'])) {
    $PlaylistId = $_GET['playlist'];
    $Act = $_GET['act'];
    if ($PlaylistId==1) {
        //eksekusi python
        if ($Act=="play"){
            exec("sudo sh playmusik4.sh >/dev/null &");
        } else {
            shell_exec("sudo python offmusik.py");
        }
    } elseif ($PlaylistId==2) {
        //eksekusi python
        if ($Act=="play"){
            //skrip on music
        } else {
            //skrip off
        }
    } elseif ($PlaylistId==3) {
        //eksekusi python
        if ($Act=="play"){
            //skrip on music
        } else {
            //skrip off
        }
    } elseif ($PlaylistId==4) {
        //eksekusi python
        if ($Act=="play"){
            //skrip on music
        } else {
            //skrip off
        }
    } else {
        echo "error";
    }
}
?>
