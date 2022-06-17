<?php

class Form extends Controller {

    public function index() {
        $this->view('form/index');
    }

    public function perah() {
        $this->view('form/perah');
    }

    public function kambing_potong() {
        $this->view('form/kambing_potong');
    }

    public function kambing_perah() {
        $this->view('form/kambing_perah');
    }

    public function tambah() {
        if ( $_POST['jenis'] == 'sapipotong') {
            if( $this->model('Sapi_potong_model')->tambahData($_POST) > 0 ) {
                Flasher::setFlash('berhasil', 'ditambahkan', 'success');
                header('Location: ' . BASEURL . '/table');
                exit;
            }
        }
        else if ( $_POST['jenis'] == 'sapiperah') {
            if( $this->model('Sapi_perah_model')->tambahData($_POST) > 0 ) {
                Flasher::setFlash('berhasil', 'ditambahkan', 'success');
                header('Location: ' . BASEURL . '/table');
                exit;
            }
        }
        else if ( $_POST['jenis'] == 'kambingpotong') {
            if( $this->model('Kambing_potong_model')->tambahData($_POST) > 0 ) {
                Flasher::setFlash('berhasil', 'ditambahkan', 'success');
                header('Location: ' . BASEURL . '/table');
                exit;
            }
        }
        else if ( $_POST['jenis'] == 'kambingperah') {
            if( $this->model('Kambing_perah_model')->tambahData($_POST) > 0 ) {
                Flasher::setFlash('berhasil', 'ditambahkan', 'success');
                header('Location: ' . BASEURL . '/table');
                exit;
            }
        }
        else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/table');
            exit;
        }
    }

    public function hapus($id) {
        if ( $this->model('Ternak_model')->hapusData($id) > 0 ) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/table');
            exit;
        }
        else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/table');
            exit;
        }
        
    }

    public function ubah($id) {
        $data['ternak'] = $this->model('Ternak_model')->getData($id);
        if ( $data['ternak']['jenis'] == 'sapipotong') {
            // if( $this->model('Sapi_potong_model')->ubahData($data) > 0 ) {
            //     Flasher::setFlash('berhasil', 'diubah', 'success');
            //     header('Location: ' . BASEURL . '/table');
            //     exit;
            // }
            $this->view('edit/index', $data['ternak']);
        }
        else if ( $data['ternak']['jenis'] == 'sapiperah') {
            // if( $this->model('Sapi_perah_model')->ubahData($data) > 0 ) {
            //     Flasher::setFlash('berhasil', 'diubah', 'success');
            //     header('Location: ' . BASEURL . '/table');
            //     exit;
            // }
            $this->view('edit/perah', $data['ternak']);
        }
        else if ( $data['ternak']['jenis'] == 'kambingpotong') {
            // if( $this->model('Kambing_potong_model')->ubahData($data) > 0 ) {
            //     Flasher::setFlash('berhasil', 'diubah', 'success');
            //     header('Location: ' . BASEURL . '/table');
            //     exit;
            // }
            $this->view('edit/kambing_potong', $data['ternak']);
        }
        else if ( $data['ternak']['jenis'] == 'kambingperah') {
            // if( $this->model('Kambing_perah_model')->ubahData($data) > 0 ) {
            //     Flasher::setFlash('berhasil', 'diubah', 'success');
            //     header('Location: ' . BASEURL . '/table');
            //     exit;
            // }
            $this->view('edit/kambing_perah', $data['ternak']);
        }
        else {
            // Flasher::setFlash('gagal', 'diubah', 'danger');
            // header('Location: ' . BASEURL . '/table');
            // exit;
        }
        
    } 

    public function ubahData() {
        if ( $_POST['jenis'] == 'sapipotong') {
            if( $this->model('Sapi_potong_model')->ubahData($_POST) > 0 ) {
                Flasher::setFlash('berhasil', 'diubah', 'success');
                header('Location: ' . BASEURL . '/table');
                exit;
            }
        }
        else if ( $_POST['jenis'] == 'sapiperah') {
            if( $this->model('Sapi_perah_model')->ubahData($_POST) > 0 ) {
                Flasher::setFlash('berhasil', 'diubah', 'success');
                header('Location: ' . BASEURL . '/table');
                exit;
            }
        }
        else if ( $_POST['jenis'] == 'kambingpotong') {
            if( $this->model('Kambing_potong_model')->ubahData($_POST) > 0 ) {
                Flasher::setFlash('berhasil', 'diubah', 'success');
                header('Location: ' . BASEURL . '/table');
                exit;
            }
        }
        else if ( $_POST['jenis'] == 'kambingperah') {
            if( $this->model('Kambing_perah_model')->ubahData($_POST) > 0 ) {
                Flasher::setFlash('berhasil', 'diubah', 'success');
                header('Location: ' . BASEURL . '/table');
                exit;
            }
        }
        else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/table');
            exit;
        }
    }

}

?>