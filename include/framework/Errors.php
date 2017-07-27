<?php
/**
 * Created by PhpStorm.
 * User: fredp
 * Date: 7/27/2017
 * Time: 6:26 PM
 */

namespace Project;


class Errors
{
    public $errors = [];

    public function __construct()
    {
        $_SESSION['errors'] = isset($_SESSION['errors']) ? $_SESSION['errors'] : [];

        $this->errors = $_SESSION['errors'];

        return $this;
    }

    /**
     * @return array
     */
    public function getErrors()
    {
        unset($_SESSION['errors']);

        return $this->errors;
    }

    /**
     * @param array $errors
     */
    public function setError($index, $error)
    {
        $this->errors[$index] = $_SESSION['errors'][$index] = $error;

        return $this;
    }

    public function hasError($index)
    {
        return $this->errors[$index] ? true : false;
    }

    public function hasErrors()
    {
        return !empty($this->errors) ?: false;
    }

}