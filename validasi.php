<?php

class validate{
    private $data;
    private $eror = [];
    private static $input = ['username', 'email'];

    public function __construct($post_data){
        $this->data = $post_data;
    }

    public function validasiform(){
        foreach(self::$input as $isi){
            if(!array_key_exists($isi, $this->data)){
                trigger_error("$isi tidak ada di data");
                return;
            }
        }

        $this->validasiusername();
        $this->validasiemail();
        $this->validasinama();
        $this->validasitmplahir();
        $this->validasitgllahir();
        $this->validasiaslsekolah();
        return $this->eror;
    }

    private function validasiusername(){
        $val = trim($this->data['username']);
        if(empty($val)){
            $this->adderor('username','username harus di isi');  
        } 
            else{
                echo "<br>username : ",$val;
            }
        
        
    }

    private function validasiemail(){
        $val = trim($this->data['email']);
        if(empty($val)){
            $this->adderor('email','email harus di isi');
        }else if(!filter_var($val, FILTER_VALIDATE_EMAIL)){
            
                $this->adderor('email','email harus benar');
                }
        else{
            echo "<br>email : ",$val;
        }
        
    }

    private function validasinama(){
        $val = trim($this->data['nama']);
        if(empty($val)){
            $this->adderor('nama','nama harus di isi');
            }else{
                echo "<br>nama : ",$val;
            } 
        
    }

    private function validasitmplahir(){
        $val = trim($this->data['tmplahir']);
        if(empty($val)){
            $this->adderor('tmplahir','tempat lahir harus di isi');
            }else{
                echo "<br>tempat lahir : ",$val;
            }
        
    }

    private function validasitgllahir(){
        $val = trim($this->data['tgllahir']);
        if(empty($val)){
            $this->adderor('tgllahir','tanggal lahir harus di isi');
            }else{
                echo "<br>tanggal lahir : ",$val;
            }
        
    }

    private function validasiaslsekolah(){
        $val = trim($this->data['aslsekolah']);
        if(empty($val)){
            $this->adderor('aslsekolah','asal sekolah harus di isi');
            }else{
                echo "<br>asal sekolah : ",$val;
            }
        
    }

    private function adderor($key, $val){
        $this->eror[$key] = $val;

    }
}
?>