<?php
/**
 * Created by PhpStorm.
 * User: Andrew
 * Date: 4/1/2016
 * Time: 12:58 PM
 */

$function = $_POST['function'];

switch($function)
{
    case('update'):
    {
        $numLines = $_POST['numLines'];
        if(file_exists("log.txt"))
        {
            $lines = file("log.txt");
        }
        else{
            $logFile = fopen("newfile.txt", "w") or die("Could not create file");
            fwrite($logFile, "test line\n");
            fclose($logFile);
            $lines = file("log.txt");
        }

        $count = count($lines);

        if ($numLines == count($lines))
        {
            $log['numLines'] = $numLines;
            $log['text'] = false;
        }
        else
        {
            $text = array();
            //$numNewLines = $state + $count - $state;
            foreach($lines as $index => $line)
            {
                if($index >= $numLines)
                {
                    $line = str_replace("\n", "", $line);
                    $text[] = $line;
                }
            }

            $log['text'] = $text;
        }
    }break;
}
