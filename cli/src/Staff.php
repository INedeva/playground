<?php
namespace Acme;
class Staff {
    protected $members=[];

    public function add(Person $person)
    {
        // throws an exception :
        //Cannot use object of type Person as array
        $this->members[] = $person;
    }
    public function __construct($members=[])
    {
        $this->members=$members;
    }
    public function getMembers()
    {
        return $this->members;
    }
}