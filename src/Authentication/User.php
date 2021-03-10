<?php

namespace wickedsoft\NetBox\Authentication;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * @return mixed
     */
    public function getAuthIdentifier()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getAuthIdentifierName()
    {
        return 'id';
    }

    /**
     * @return string
     */
    public function getAuthPassword()
    {
        return $this->password;
    }

    /**
     * @return string
     */
    public function getRememberToken()
    {
        //
    }

    /**
     * @return string
     */
    public function getRememberTokenName()
    {
        //
    }

    /**
     * @param string $value
     * @return void
     */
    public function setRememberToken($value)
    {
        //
    }
}
