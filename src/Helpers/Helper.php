<?php


namespace Helpers;


class Helper
{
    public function debug($data,$status = true,$title = null){
        if ($status == false) { return false; }
        echo '<pre>' . $title. print_r($data,1) . '</pre>';
    }

    public function writeToLog($data, $title,$log_file) {
        $log = "\n------------------------\n";
        $log .= date("Y.m.d G:i:s") . "\n";
        $log .= time() . "\n";
        $log .= (strlen($title) > 0 ? $title : 'DEBUG') . "\n";
        $log .= print_r($data, 1);
        $log .= "\n------------------------\n";
        file_put_contents($log_file, $log, FILE_APPEND);
        return true;
    }

}