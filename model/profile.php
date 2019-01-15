<?php 


class Person
{

    public $name;
    public $bday;
    public $bio;
    public $interests;


    public function __construct ($name, $bday, $bio, $interests) {
        $this->name = $name;
        $this->bday = $bday;
        $this->bio =  $bio;
        $this->interests = $interests;
       
    }

    function profile(){
        if (empty($this->name) || !isset($this->bday) || !isset($this->bio) || !isset($this->interests)){
            echo "<script>
            alert('Looks like you missed an entry...');
            window.location.href='index.php';
            </script>";

        }else{

        $person = new Person($this->name, $this->bday, $this->bio, $this->interests);
        return $person;
        }

    }

    
    

}


$profileModel = new Person($_POST['name'], date('Y-m-d', strtotime($_POST['bday'])), $_POST['bio'], $_POST['interests']);

