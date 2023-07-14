<?php

class Biodata extends Controller {
    public function index() {
        $data['nama'] = 'Ridwan Nurhakim';
        $data['nim'] = 'D112111039';
        $data['kelas'] = 'IF4B';
    
        $this->view('biodata', $data);
    }
}
