<?php
  class newsController extends Controller
  {
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $allNews = $this->model->get_all();
        $i = 0;
        while ($row = $allNews->fetch_assoc())
        {
            $news[$i]['title'] = $row['title'];
            $news[$i]['excerpt'] = $row['excerpt'];
            $news[$i]['pic'] = $row['pic'];
            $news[$i]['id'] = $row['id'];
//            $news[$i]['content'] = $row['content'];
//            $news[$i]['visit_count'] = $row['visit_count'];
            $i++;
        }
        $data['news'] = $news;

        $this->view->render("front/_include/header_view");
        $this->view->render("front/news/index_view", $data);
        $this->view->render("front/_include/footer_view");
    }
    
    public function get_one()
    {
        $id = $_REQUEST['id'];
        $new = $this->model->get_new($id);
        $new = $new->fetch_assoc();
        ++ $new['visit_count'];
        $this->model->update_counter($id,$new['visit_count']);
        $data['new'] = $new;
        $this->view->render("front/_include/header_view");
        $this->view->render("front/news/show_new_view", $data);
        $this->view->render("front/_include/footer_view");
    }
    
  }