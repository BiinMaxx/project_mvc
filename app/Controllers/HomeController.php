<?php


class HomeController extends Controller
{

    public function __construct()
    {
        $data = [];
        parent::__construct();
    }
    public function index(){
        $this->homePage();
    }


    public function homePage()
    {
        $data = '';
        $this->load->view($data,'header');
        $this->load->view($data,'slider');
        $this->load->view($data,'home');
        $this->load->view($data,'footer');
    }

    public function categoryProduct()
    {
        $data = '';
        $this->load->view($data,'header');
//        $this->load->view($data,'slider');
        $this->load->view($data,'categoryproduct');
        $this->load->view($data,'footer');
    }
    public function detailProduct()
    {
        $data = '';
        $this->load->view($data,'header');
//        $this->load->view($data,'slider');
        $this->load->view($data,'detailproduct');
        $this->load->view($data,'footer');
    }

    public function notFound()
    {
        $data = '';
        $this->load->view($data,'header');
        $this->load->view($data,'404');
        $this->load->view($data,'footer');
    }
}

?>