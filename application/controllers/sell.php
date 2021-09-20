<?php
 class Sell extends CI_Controller {
    public function __construct()
    {
            parent::__construct();
            $this->load->helper('url');
            $this->load->helper('form');
            $this->load->library('form_validation');
    }
    public function index(){
        if ( ! file_exists(APPPATH.'views/forms/sellItem.php'))
            {
                    // Whoops, we don't have a page for that!
                    show_404();
            }
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('templates/banner');
            $this->load->view('forms/sellItem');
            $this->load->view('templates/footer');

    }
    public function create(){

    $this->form_validation->set_rules('title', 'Title', 'required');
    $this->form_validation->set_rules('text', 'Text', 'required');

    if ($this->form_validation->run() === FALSE)
    {
        $this->load->view('templates/header');
        $this->load->view('templates/guestsidebar');
        $this->load->view('templates/banner');
        $this->load->view('forms/sellItem');
        $this->load->view('templates/footer');

    }
    else
    {
        //insert data of item into the database
        //$this->news_model->set_news();
        $this->load->view('forms/success');
    }
    }
}
?>

<?php //ISSUES 
// Refreshing after wrong form submition goes to Aimr/sell/create
//Instead it should go to Aimr/sell/
?>