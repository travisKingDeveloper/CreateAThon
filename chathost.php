<?php
/**
 * Created by PhpStorm.
 * User: Andrew
 * Date: 4/1/2016
 * Time: 12:58 PM
 */
if(isset($_POST['function'])) {
    $function = $_POST['function'];
}
else
    $function = "def";

$log = array();

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

            $logFile = fopen("log.txt", "a") or die("Could not create file");
            fwrite($logFile, "test line\n");
            fclose($logFile);
            $lines = file("log.txt");
        }
//        var_dump($file);
//        var_dump($lines);

        $count = count($lines);

//        if ($numLines == count($lines))
//        {
//            $log['numLines'] = $numLines;
//            $log['text'] = false;
//        }
//        else
//        {
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

            
//        }
    }break;

    case('send'):
    {
        $username = "PLACEHOLDER";
        $message = htmlentities($_POST['message']);
//        if(strcmp($message, "\n") != 0)
//        {
            $message = str_replace("\n", " ", $message);
            $fileHandle = fopen("log.txt", "a") or die("Failed to open file");
            fwrite($fileHandle, "<span>" . $username . "</span>" . $message );
            fflush($fileHandle);
            fclose($fileHandle);
//        }
    }break;

    json_encode($log);
}
