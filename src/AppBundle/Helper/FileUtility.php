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

    public function decompressFile($compressed_file)
    {
        $buffer_size = 4096; // read 4kb at a time
        $decompressed_file_name = str_replace('.gz', '', $compressed_file); 

        // Open our files (in binary mode)
        $file_handle = gzopen($compressed_file, 'rb');
        $extracted = fopen($decompressed_file_name, 'wb'); 

        // Keep repeating until the end of the input file
        while (!gzeof($file_handle)) {
            // Read buffer-size bytes
            // Both fwrite and gzread and binary-safe
            fwrite($extracted, gzread($file_handle, $buffer_size));
        }

        // Files are done, close files
        fclose($extracted);

        gzclose($file_handle);
        return $decompressed_file_name;
    }
}
