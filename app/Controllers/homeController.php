<?php

class homeController extends Controller {
  
  public function index(){
    if(isset($this->userId)) $this->redirect('home'); 

    return $this->view('page/login');
  }

  public function error($type){
    if(isset($this->userId)) $this->redirect('home'); 

    if ($type == 'login') return $this->view('page/login', ['msg' => 'Username atau password tidak cocok']);
    else if($type == 'verify') return $this->view('page/login', ['msg' => 'Silahkan scan kartu identitas sesuai NIP / NIM penanggung jawab sebelum menggunakan akun']);
    else if($type == 'berkas') return $this->view('page/login', ['msg' => 'Harap menunggu berkas disetujui oleh admin sebelum menggunakan akun.']);
  }

  public function login(){
  	$organization = $this->model('Organization')->select()->where('username', $_POST['username'])->execute();

  	if(!empty($organization)){
  		if($this->verify($_POST['password'], $organization->password)){
        if($organization->verify == 2){
          $_SESSION['id'] = $organization->id;

          if($organization->role == 1) $this->redirect('home');
          else $this->redirect('lihat_organisasi/'.Security::encrypt($organization->id));
        } 
        else if($organization->verify == 1) $this->redirect('error/berkas');
        else $this->redirect('error/verify');
      } else $this->redirect('error/login');
  	} else $this->redirect('error/login');
  }

  public function logout(){
  	session_destroy();
    $this->redirect('');
  }

  public function realtime($nim, $registrasi, $webhook = 0){
    echo $this->view('page/realtime', ['nim' => $nim, 'registrasi' => $registrasi, 'webhook' => $webhook]);
  }
  
  public function getWebhook(){
   var_dump($_POST);
  }

  public function readWebHook(){
    return $this->view('page/read_webhook');
  }
}