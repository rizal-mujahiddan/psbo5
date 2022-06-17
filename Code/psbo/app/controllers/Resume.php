<?php

class Resume extends Controller {

    public function index() {
        $data['jsp'] = $this->model('Ternak_model')->getJumlahSapiPerah();
        $data['jspo'] = $this->model('Ternak_model')->getJumlahSapiPotong();
        $data['jkp'] = $this->model('Ternak_model')->getJumlahKambingPerah();
        $data['jkpo'] = $this->model('Ternak_model')->getJumlahKambingPotong();
        $data['js'] = $this->model('Ternak_model')->getJumlahSehat();
        $data['jsk'] = $this->model('Ternak_model')->getJumlahSakit();
        $data['ss'] = $this->model('Sapi_perah_model')->milkproduce();
        $data['sk'] = $this->model('Kambing_perah_model')->milkproduce();
        $data['ds'] = $this->model('Sapi_model')->meatproduce();
        $data['dk'] = $this->model('Kambing_model')->meatproduce();
        $data['rk'] = $this->model('Kambing_model')->hairproduce();
        $this->view('resume/index', $data);
    }

}

?>