<?php

namespace Yk\LaravelOcr\Classes;

class Ocr {

    public static function recognize($imgPath = NULL)
    {
        if ( !$imgPath OR !\File::exists($imgPath) )
        {
        	return FALSE;
        }

        $cmd = "gocr ".escapeshellarg($imgPath);

        exec($cmd, $output, $exec_status);

        return join('\n', $output);
    }
}