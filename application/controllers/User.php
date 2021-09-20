<?php
class User extends CI_Controller{
    public function __construct()
    {
        parent::__construct();

        //LOAD RELEVENT MODEL
        
    }
    public function login()
    {
        //check if the user is already logged in
        //show a login form

    }

    public function signup()
    {
        //optional: check if the user is already logged in
        //show a signup form

    }

    public function logout()
    {
        //if no user is loged in then show invalid request error
        //destroy all session data

    }

    public function myprofile()
    {
        //check whether  user logged in

    }
}
?>
