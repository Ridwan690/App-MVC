<?php

class Databarang extends Controller {
    public function index() {
        /*
        $data['nama'] = 'Laptop';
        $data['harga'] = '10.000.000';
        $data['stok'] = '20';
    
        $this->view('databarang', $data);
        */

        $this->view('layouts/header');
        $this->view('databarang/index');
        $this->view('layouts/footer');
    }
}
