<?php namespace App\Utils;

class BytesFormat 
{

    public static function mbToBytes($mb) 
    {
        $bytes = static::convertToBytes($mb);
        
        if ($bytes > 0)
        {
            $unit = intval(log($bytes, 1024));
            $units = array('B', 'KB', 'MB', 'GB', 'TB');
            
            if (array_key_exists($unit, $units) === true)
            {
                return sprintf('%d %s', $bytes / pow(1024, $unit), $units[$unit]);
            }
        }
        
        return $bytes + ' B';
    }

    public static function convertToBytes($from)
    {
        $number = substr($from,0,-2);

        switch(strtoupper(substr($from, -2))){
            case "KB":
                return $number*1024;
            case "MB":
                return $number*pow(1024, 2);
            case "GB":
                return $number*pow(1024, 3);
            case "TB":
                return $number*pow(1024, 4);
            case "PB":
                return $number*pow(1024, 5);
            default:
                return $from;
        }
    }

}