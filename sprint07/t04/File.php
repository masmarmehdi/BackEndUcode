<?php

    class File{
        public function __construct($path){
            $this->path = $path;
            $this->file = fopen($path, 'a+');
        }
        public function __destruct(){
            fclose($this->file);
        }
        public function write($data){
            fwrite($this->file, $data);
        }
    }