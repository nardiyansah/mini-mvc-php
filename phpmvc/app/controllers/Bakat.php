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
}
?>