<?php
class newsController extends Controller
{
    function __construct()
    {
        parent::__construct();
    }
    
    /**
    * show all news
    */
    public function getNews ()
    {
            // if admin logged in
        //if(isset($_SESSION['admin'])){
            
            $allNews = $this->model->get_all();
            $data['allNews'] = $allNews;
            $this->view->render('admin/news/show_all_news_view', $data);
        //}
        //else {
                // redirect to login form
                //$this->check_admin();
        //}
    }

    public function delete_news () {
        //if(isset($_SESSION['admin'])){
            $id = $_GET['id'];
            echo $this->model->delete($id);
            $this->getNews();
        //}else {
            // redirect to login form
            //$this->check_admin();
        //}

    }

    public function insertNews ()
    {
        $this->view->render('admin/news/form_insert_new');

        if(isset($_POST['title']) && isset($_POST['excerpt']) && ($_POST['title'].trim("")) && ($_POST['excerpt'].trim("")))
        {
            $title = $_POST['title'];
            $excerpt = $_POST['excerpt'];
            $readMore = $_POST['readMore'];
            echo $this->model->insert($title,$excerpt,$readMore);
        } 
        else
        {
                echo "لطفا فیلدها را تکمیل کنید.";
        }

    }
	
}