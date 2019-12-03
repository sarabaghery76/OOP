<?php
  class adminController extends Controller
  {
    function __construct()
    {
        parent::__construct();
    }
    
    private function is_admin()
    {
        if(isset($_SESSION['is_admin']) && $_SESSION['is_admin'])
        {
            return true;
        } else {
            return false;
        }
    }

    public function index()
    {
        if($this->is_admin())
        {
            redirect(BASE_URL . 'admin/dashboard');
        }
        $data = [];
        if(isset($_SESSION['errors']) && $_SESSION['errors']){
            $data['errors'] = $_SESSION['errors'];
            delete_session('errors');
        }

		$this->view->render("admin/_include/header_view");
		$this->view->render("admin/auth/login_form_view", $data);
    }
	
    
    
    public function dashboard()
    {
        $this->view->render("admin/_include/header_view");
        $this->view->render("admin/_include/dashboard_view");
    }

    public function login(){
        $result = $this->model->login();
        if ($result->num_rows) {
            $_SESSION['is_admin'] = true;
            redirect(BASE_URL . 'admin/dashboard');
        } else {
            $_SESSION['errors'] = 'نام کاربری یا رمز عبور اشتباه است';
            redirect(BASE_URL . 'admin');
        }
    }

	public function check_admin ()
	{
		if(isset($_POST['admin_username'])){
			$user = $_POST['admin_username'];
			$pass = $_POST['admin_password'];

			// admin login validation
			if($user == 'admin' && $pass == "123456"){
				$_SESSION['admin'] = true;
				include("Views/admin/dashboard_view.php");
			}
		} else {
			return $this->index();
		}
	}

	/**
	* log out admin
	*/
	public function logout () {
		delete_session('is_admin');
		redirect(BASE_URL . "admin");
	}
        	
  }