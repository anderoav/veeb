<?php


class Core
{
 protected $currentController = "Pages";
 protected $currentMethod = "index";
 protected $params = array();


 public function __construct()
 {
   $this->getUrl();
 }

  public function getUrl(){
   print_r($_GET['url']);
 }
}