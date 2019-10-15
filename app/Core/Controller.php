<?php

class Controller extends Auth {

  public function view($file, $data = NULL){
    if(isset($this->userId)) $auth = (isset($this->user()->{0})) ? $this->user()->{0} : $this->user();
    
    if(isset($data)) foreach ($data as $key => $value) $$key = $value;
    
    function url  ($url){ return $GLOBALS['root'].$url; }
    function view ($url){ return $GLOBALS['view'].$url; }

    require_once view('page/header.php');
    require_once $GLOBALS['view'].$file.'.php';
    require_once view('page/footer.php');
  }

  public function model($file = null){
    if(isset($file)){
      require_once __DIR__.'/../Models/'.$file.'.php';
      return new $file();
    } else {
      require_once __DIR__.'/../Core/Model.php';
      return new Model();
    }
  }

  public function redirect($file){
  	header("Location:".$GLOBALS['root'].$file);
  	exit;
  }

}