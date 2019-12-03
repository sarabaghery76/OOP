<?php
  class contact_usController extends Controller
  {
    function __construct()
    {
        parent::__construct();
    }
    function index()
    {
        $this->view->render("front/_include/header_view");
        $this->view->render("front/contact_us/index_view");
        $this->view->render("front/_include/footer_view");
    }
    
    function insertMessage()
    {
        //$this->view->render('front/contact_us/index_view');
        if(isset($_POST['email']) && isset($_POST['message']) && ($_POST['email'].trim("")) && ($_POST['message'].trim("")))
        {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $message = $_POST['message'];

            //include_once("Models/contact.php");
            //$news = new contact();
            $table = "contact_us" ;
            echo $this->model->insert($table,$name,$email,$phone,$message);
            $this->index();
        } 
        else
        {
                echo "لطفا فیلدها را تکمیل کنید.";
        }
    }
  }