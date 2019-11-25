<?php
class curl {
    private $ch;
    private $host;

    public static function app($host){
        return new self($host);
    }

    private function __contruct(){
        $this->ch = curl_init();
        $his->host = $host;
        curl_setopt($this->ch, CURLOPT_RETURNTRANSFER, true);
        
    }
    public function __destruct(){
        curl_close($this->sh);
    }

    public function set($name, $value){
        curl_setopt($this->ch, $name, $value);
        return $this; // возвращает текущую переменную в начало
    } 

    public function request ($url){
        curl_setopt($this->ch, CURLOPT_URL, $his->makeUrl($url));
        $data = curl_exec($this->ch);
        return $data;
    }

    private function makeUrl($url){
        if($url[0] != '/'){
            $url = '/' . $url;
        }
        return $his->host . $url; 
    }

}