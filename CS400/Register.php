<?php
/**
 * Created by IntelliJ IDEA.
 * User: Justin
 * Date: 2/10/14
 * Time: 9:23 PM
 */

class Register {

    var $username;

    var $password;

    // 0 = patient, 1 = doctor, 2 = admin
    var $type;

    function Register($uName, $password) {
        $this->username = $uName;
        $this->password = $password;
    }

    function getName() {
            return $this->username;
    }

    function setType($type) {
        switch ($type) {
            case 'patient':
                $this->type = 0;
                break;
            case 'Doctor':
                $this->type = 1;
                break;
            case 'admin':
                $this->type = 1;
                break;
        }
    }

    function getType() {
        return $this->type;
    }


} 