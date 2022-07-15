<?php
namespace Admin\Libs;
use PDO;

class Contact extends Database{
    protected static $db_table="contacts";
    protected static $db_fields=array("firstname","lastname", "email", "message");

    protected $id;
    protected $firstname;
    protected $lastname;
    protected $email;
    protected $message;

    public function setId($id){
        $this->id=$id;
    }
    public function getId(){
        return $this->id;
    }

    public function setFirstname($firstname){
        $this->firstname=$firstname;
    }
    public function getFirstname(){
        return $this->firstname;
    }

    public function setLastname($lastname){
        $this->lastname=$lastname;
    }
    public function getLastname(){
        return $this->lastname;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function setMessage($message)
    {
        $this->message = $message;
    }
    public function getMessage()
    {
        return $this->message;
    }
}
?>