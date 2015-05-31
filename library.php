<?php
/**
 * Created by PhpStorm.
 * User: cmansfield85
 * Date: 5/30/15
 * Time: 8:40 PM
 */

class CreateDir {

    public $date;
    public $combined_dir;
    public $combined_date;

    public function __construct()
        {
            date_default_timezone_set("America/Chicago");
            $this->date = date("Y.m.d");
            $this->combined_dir = "\\Users\\cmansfield85\\Desktop\\Testing\\" . $this->date;
        }

    public function CreateDir()
        {
            if(file_exists($this->combined_dir) && is_dir($this->combined_dir))
                {
                    for ($letter=65; $letter<91; $letter++)
                        {
                            $this->combined_date = $this->combined_dir . "" . strtolower(chr($letter));

                            if(!file_exists($this->combined_date) && !is_dir($this->combined_date))
                                {
                                    mkdir($this->combined_date, 0777);
                                    break 1;
                                }
                        }
                    return $this->combined_date;
                }
            else
                {
                    mkdir($this->combined_dir, 0777);
                    return $this->combined_dir;
                }
        }
}

$createdir = New CreateDir();

echo "Directory Created " . $createdir->CreateDir();