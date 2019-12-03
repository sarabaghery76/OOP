<?php
class contact_usController extends Controller{

    public $table = 'contact_us';
    
    function __construct() {
        parent::__construct();
    }
    
    function getMessages()
    {
        $allMessages = $this->model->get_all($this->table);
        $data['allMessages'] = $allMessages;
        $this->view->render('admin/messages/show_all_message_view', $data);
    }
    
    public function delete_message () {
        $id = $_GET['id'];
        echo $this->model->delete($this->table,$id);
        $this->getMessages();
    }
    
    public function edit_message () {
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $data['message'] = ($this->model->get_message($this->table,$id));
            $this->view->render("admin/messages/form_edit_message_view", $data);
        }
        if(isset($_POST['message']))
        {
            $message = $_POST['message'];
            $id = $_POST['id'];
            echo $this->model->edit($this->table,$id,$message);
            $this->getMessages();
        }
    }
    
}
