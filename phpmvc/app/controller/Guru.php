<?php
class Guru extends Controller {
    public function index()
    {
        $data['judul'] = "Guru";
        $data['guru'] = $this->model("Guru_model")->getAllBlog();
        $this->view('templates/header', $data);
        $this->view('guru/index', $data);
        $this->view('templates/footer');
    }
    public function detail($id)
    {
        $data['judul'] = "Detail_Guru";
        $data['guru'] = $this->model("Guru_model")->getBlogById($id);
        $this->view('templates/header', $data);
        $this->view('guru/index', $data);
        $this->view('templates/footer');
    }
}