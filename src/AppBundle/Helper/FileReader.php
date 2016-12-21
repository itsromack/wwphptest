<?php

namespace AppBundle\Helper;

/**
 * Description of FileReader
 *
 * @author romack
 */
class FileReader
{
    public function getFileContents($filename)
    {
        $handle = fopen($filename, 'r');
        $contents = [];
        while(($buffer = fgets($handle, 4096)) !== false)
        {
            $sanitizedData = static::sanitizeData($buffer);
            print_r($sanitizedData);
            $contents[] = $sanitizedData;
        }
        if (!feof($handle))
        {
            echo 'Error: unexpected fgets()';
            return [];
        }
        return $contents;
    }
    
    public static function sanitizeData($data)
    {
        $arrayData = explode(' ', $data);
        $content = [];
        foreach ($arrayData as &$item)
        {
            if ($item !== '')
            {
                $content[] = $item;
            }
        }
        return $content;
    }
}
