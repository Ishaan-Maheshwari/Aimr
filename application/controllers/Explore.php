<?php
class Explore extends CI_Controller{
    public function __construct()
    {
        parent::__construct();

        parent::__construct();
        $this->load->model('Category_model');
        $this->load->helper('url');
        
    }
    public function index()
    {
        $data['categories'] = $this->Category_model->get_categ();
        $data['title'] = 'Explore All Categories';

        $this->load->view('templates/header');
        $this->load->view('templates/guestsidebar',$data);
        $this->load->view('templates/banner');
        $this->load->view('explorer.php',$data);
        $this->load->view('templates/footer');
    }

    public function category($Categ_name='ALL',$SubCateg_name='ALL')
    {
        if(($Categ_name == 'ALL') && ($SubCateg_name != 'ALL'))
        {
            show_404();
        }
        elseif(($Categ_name != 'ALL') && ($SubCateg_name == 'ALL'))
        {
            $data['categories'] = $this->Category_model->get_categ($Categ_name);
            $data['title'] = 'Explore '.$Categ_name;

            $this->load->view('templates/header');
            $this->load->view('templates/guestsidebar',$data);
            $this->load->view('templates/banner');
            $this->load->view('explorer.php',$data);
            $this->load->view('templates/footer');
        }
        elseif(($Categ_name != 'ALL') && ($SubCateg_name != 'ALL'))
        {
            $data['categories'] = $this->Category_model->get_categ($Categ_name=$Categ_name,$SubCateg_name=$SubCateg_name);
            $data['title'] = 'Explore '.$SubCateg_name.' in '.$Categ_name;

            $this->load->view('templates/header');
            $this->load->view('templates/guestsidebar',$data);
            $this->load->view('templates/banner');
            $this->load->view('explorer.php',$data);
            $this->load->view('templates/footer');
        }
        

    }

    public function rent($itemid)
    {
        //check whether  user logged in
        //check for valid id for eg. it should be numeric
        //do renting

    }

    public function buy($itemid)
    {
        //check whether  user logged in
        //check for valid id for eg. it should be numeric
        //do buying

    }
}
?>
