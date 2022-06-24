<?php

namespace Bag2\EmailValidator;

class Validator
{
    /**
     * @param string $email
     * @return bool
     */
    public function validate($email)
    {
         return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
    }
}
