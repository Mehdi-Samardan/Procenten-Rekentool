<?php
class Dbconnection extends PDO
{
    private $host = "db-BSD-O-AUG23A";
    private $dbname = "rekenen";
    private $user = "reken_use";
    private $pass = "JF9KG!WwnkxJtXFn";
    public function __construct()
    {
        parent::__construct("mysql:host=".$this->host.";dbname=".$this->dbname."; charset=utf8", $this->user, $this->pass);
        $this->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    }
}
