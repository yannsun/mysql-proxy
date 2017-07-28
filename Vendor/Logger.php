<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Logger {

    public static function log($data) {
        $time = date("Y-m-d H:i:s");
        echo $time . " : '" . $data . "'\n";
    }

}
