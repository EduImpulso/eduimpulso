<?php

require_once ("./Connection.php");

class Msg extends Connection
{
    private $name;
    private $msg;
    private $assunto;
    private $email;

    public function Msg($name, $msg, $assunto, $email){
        $this->name = $name;
        $this->msg = $msg;
        $this->assunto = $assunto;
        $this->email = $email;
    }

    public function getName(){
        return $this->name;
    }
    
    public function setName($name){
        $this->name =$name;
    }
    
    public function getMsg() {
        return $this->msg;
    }
    
    public function setMsg($msg){
        $this->msg =$msg;
    }
    

    public function sentMsg()
    {
        $conn = Connection::getDb();
        $stmt = $conn->query("INSERT INTO mensagens(name, email, assunto, msg) VALUES ('$this->name', '$this->email', '$this->assunto', '$this->msg')");
        $stmt->execute();
            if ($stmt->rowCount() > 0) {
                return true;
            } else {
                return false;
            }
    }
}