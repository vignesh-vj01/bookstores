<?php
/**
 * this bage  coded  by Vignesh in  27  Mar  2022
 */

/**
 * this page  coded  by Vignesh in  27  SEP  2022
 */

class Admin
{
    private $id;
    private $name;
    private $pass;
    private static $admins=[];

    /**
     * Admin constructor.
     * @param $id
     * @param $name
     * @param $pass
     */
    public function __construct ($id, $name, $pass)
    {
        $this->id = $id;
        $this->name = $name;
        $this->pass = $pass;
        Admin::$admins;

    }

    /**
     * @return mixed
     */
    public function getId ()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getName ()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getPass ()
    {
        return $this->pass;
    }


}