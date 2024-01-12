<?php
    function kusht(&$konkluzione){
        if(!isset($_POST['regjistrohu']))
            return true;
        extract($_POST);

         if(empty($username)){
                $konkluzione = "Emri i perdoruesit eshte bosh";
                return false;
            }
            
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $konkluzione = "Shkruani nje email te sakte";
                return false;
            }
    

        if($password !== $password_k){
            $konkluzione = "Fjalekalimet nuk jane njesoj";
            return false;
        }

        $pattern = '/^(?=.*[a-z])(?=.*[0-9])(?=.*[A-Z]).{8,30}$/';

        if(!preg_match($pattern, $password)){
            $konkluzione = "Shkruani nje fjalekalim te vlefshem";
            return false;
        }

        if(empty($username)){
            $konkluzione = "Emri i perdoruesit eshte bosh";
            return false;
        }

        if(empty($name)){
            $konkluzione = "Emri eshte bosh";
            return false;
        }

        if(empty($lastname)){
            $konkluzione = "Mbiemri eshte bosh";
            return false;
        }

       
        $konkluzione = "";
        return true;
    }
?>
