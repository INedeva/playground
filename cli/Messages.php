<?php
use Acme\Person;
use Acme\Business;
use Acme\Staff;
$me = new Person('I.N.');
$staff = new Staff($me);
$laracast = new Business($staff);
var_dump($laracast);