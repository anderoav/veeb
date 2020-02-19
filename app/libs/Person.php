<?php


class Person
{
  private $firstName = '';
  private $lastName = '';
  private $age = 0;

  public function hello() {
    echo 'Hello, I am ' .$this->firstName. ' ' .$this->lastName. '<br>';
  }

}

