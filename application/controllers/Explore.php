<?php
class Explore extends CI_Controller{
    public function __construct()
    {
        parent::__construct();

        parent::__construct();
        $this->load->model('Category_model');
        
    }
    public function index()
    {
        $data['categories'] = $this->Category_model->get_categ();
        $data['title'] = 'Explore All Categories';

        $this->load->view('templates/header');
        $this->load->view('templates/guestsidebar');
        $this->load->view('templates/banner');
        $this->load->view('explorer.php',$data);
        $this->load->view('templates/footer');
    }

    public function category($categ_name='ALL',$subcateg_name='ALL')
    {
        //extact items from db if categ_name is all AND subcateg_name is also all
        //if categ_name is all and subcateg_name is not all then show 404  error
        //extract data from db when categ_name is given and subcateg_name is all
        // extract data from db when both parameters are given

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
