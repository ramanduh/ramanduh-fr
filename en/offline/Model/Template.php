<?php
abstract class Model_Template
{
    protected $selectAll;
    protected $selectById;

    public function __construct()
    {
    }

    public function getAll()
    {
        $this->selectAll->execute();
        return $this->selectAll->fetchAll();
    }

    public function getById($id)
    {
        $this->selectById->execute(array($id));
        $row = $this->selectById->fetchAll();
        if(empty($row[0]))
        {
            return array();
        }
        else
        {
            return $row[0];
        }
    }
}
?>
