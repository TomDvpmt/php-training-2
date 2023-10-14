<?php

namespace PhpTraining2\models\forms;

use PhpTraining2\models\forms\UserForm;

final class UserFormSignIn extends UserForm {

    /**
     * The fields that need to be validated in the sign in form.
     */
    public const SIGNIN_TO_VALIDATE = ["email"];

    /**
     * The required fields in the sign in form. 
     */
    public const SIGNIN_REQUIRED = ["email", "password"];

    public function __construct()
    {
        parent::__construct();
    }

    public function getInputData(): array {
        $data = [
            "email" => $_POST["email"],
            "password" => $_POST["password"],
        ];
        
        return $data;
    }
}