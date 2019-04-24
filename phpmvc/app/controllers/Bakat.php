<?php

class Bakat extends Controller
{
    public function index()
    {
        $data['judul'] = 'Bakat';
        $data['bakat'] = $this->model('Data_Bakat')->getALLBakat();
        $this->view('templates/header',$data);
        $this->view('bakat/index',$data);
        $this->view('templates/footer');
    }

    public function detail($nomor)
    {
        $data['judul'] = 'Detail Programmer';
        $data['bakat'] = $this->model('Data_Bakat')->getBakatByNomor($nomor);
        $this->view('templates/header',$data);
        $this->view('bakat/detail',$data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if( $this->model('Data_Bakat')->tambahData($_POST) > 0)
        {
            header('Location: ' . BASEURL . '/bakat');
            exit;
        }
    }
}
?>
