<?php
class Task{
    public $aProperty;

    public $completion = false;
    public function __construct($aProperty)
    {
      $this->aProperty=$aProperty;
    }
    public function completed(){
        $this->completion=true;
    }
}
$task = new Task('Let`s start!');
$task2 = new Task('A second Instance.');
$task->completed();
var_dump($task->aProperty);
var_dump($task2->aProperty);
if ($task->completion==true) {
   var_dump($task2->aProperty);
}