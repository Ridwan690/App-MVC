<?php

class Home extends Controller{
    public function index() {
        $data['list']  = $this->view('Home');
    }

}