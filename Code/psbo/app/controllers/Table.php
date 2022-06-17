<?php

class Table extends Controller {

    public function index() {
        $data['ternak'] = $this->model('Ternak_model')->getAllData();
        
        $this->view('table/index', $data);
    }

}

?>