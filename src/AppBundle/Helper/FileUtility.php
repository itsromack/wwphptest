<?php

namespace AppBundle\Helper;

/**
 * Description of FileUtility
 *
 * @author romack
 */
class FileUtility
{
    public function getFileContents($filename)
    {
        $handle = fopen($filename, 'r');
        $contents = [];
        $index = 0;
        while(($buffer = fgets($handle, 4096)) !== false)
        {
            if ($index++ == 0) continue; // skip the Header line
            $sanitizedData = $this->sanitizeData($buffer);
            $contents[] = $sanitizedData;
        }
        if (!feof($handle))
        {
            echo 'Error: unexpected fgets()';
            return [];
        }
        return $contents;
    }
    
    public function sanitizeData($data)
    {
        $arrayData = explode(' ', $data);
        $content = [];
        foreach ($arrayData as &$item)
        {
            echo '.';
            if ($item !== '')
            {
                $asterisk = strpos($item, '*');
                if ($asterisk !== FALSE)
                {
                    $item = substr($item, 0, -1);
                }
                $charI = strpos($item, 'I');
                if ($charI !== FALSE)
                {
                    $item = substr($item, 0, -1);
                }
                $content[] = $item;
            }
        }
        echo "\n";
        return $content;
    }

    public function decompressFile($file)
    {
        //
    }
}