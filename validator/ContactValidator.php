<?php

require("BaseValidator.php");

class ContactValidator extends BaseValidator
{
    private $name;
    public function __construct()
    {
        $this -> validateText('name', 'REQUIRED');
        $this -> validateText('lname', 'REQUIRED');
        $this -> validateTel('phone', 'REQUIRED');
        $this -> validateEmail('email', 'REQUIRED');
        $this -> validateText('message', 'REQUIRED');
    }
    function __destruct() {
        echo "Username i perdoruesit eshte {$this->name}<br> ";
       // echo "Shfrytezuesi nuk mund te krijohet";
      }
}

?>