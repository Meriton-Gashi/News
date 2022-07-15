<?php

namespace Admin\Libs;

use Exception;
use PDO;
use PDOException;

class Register extends Database
{
    use UploadPhoto;
    protected static $db_table = "registers";
    protected static $db_fields = array("firstname", "lastname", "phone", "photo", "email", "password");

    protected $id;
    protected $firstname;
    protected $lastname;
    protected $phone;
    protected $email;
    protected $password;
    protected $photo;
    protected $photoImage;


    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }

    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }
    public function getFirstname()
    {
        return $this->firstname;
    }

    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }
    public function getLastname()
    {
        return $this->lastname;
    }

    public function setPhone($phone)
    {
        $this->phone = $phone;
    }
    public function getPhone()
    {
        return $this->phone;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function setPassword($password)
    {
        $this->password = $password;
    }
    public function getPassword()
    {
        return $this->password;
    }

    public function setPhoto($photo)
    {
        $this->photo = $photo;
    }
    public function getPhoto()
    {
        return $this->photo;
    }
    public function setPhotoImage($photoImage)
    {
        $this->photoImage = $photoImage;
    }
    public function getPhotoImage()
    {
        return $this->photoImage;
    }
}
?>