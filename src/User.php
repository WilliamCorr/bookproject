<?php


namespace Itb;


class User
{
    private $id;
    private $Uname;
    private $Upassword;


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getUname()
    {
        return $this->Uname;
    }

    /**
     * @param mixed $Uname
     */
    public function setUname($Uname)
    {
        $this->Uname = $Uname;
    }

    /**
     * @return mixed
     */
    public function getUpassword()
    {
        return $this->Upassword;
    }

    /**
     * @param mixed $Upassword
     */
    public function setUpassword($Upassword)
    {
        $this->Upassword = $Upassword;
    }

    /**
     * @return mixed
     */


}