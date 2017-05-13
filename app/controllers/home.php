<?php

class Home extends Controller {
  
  public function index($id = '') {

  	$user = $this -> model('User');
    $u    = $user -> getUserById($id);

    $this -> view('home/index', [
    	'name' => $u['username']
    ]);

  }

}
