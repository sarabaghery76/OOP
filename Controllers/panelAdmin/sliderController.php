<?php
class sliderController extends Controller{
    function __construct() {
        parent::__construct();
    }
    
    public function insertSlider ()
	{
            $this->view->render('admin/sliders/form_insert_slider');
            if(isset($_POST['title']) && ($_POST['title'].trim("")) && isset($_FILES['fileToUpload']['name']) && ($_FILES['fileToUpload']['name'].trim("")))
            {
                if( ($_FILES['fileToUpload']['error']) > 0 ){
                    echo 'ERROR : ' . $_FILES['fileToUpload']['error'];
                }
                else {
                    if( $_FILES['fileToUpload']['size'] < 500000 ){
                        if( $_FILES['fileToUpload']['type'] == "image/png" ||  ($_FILES['fileToUpload']['type'] == "image/jpeg") )
                        {
                    
                            $title = $_POST['title'];

                            $name = $_FILES["fileToUpload"]["name"];
                            $tmp_name = $_FILES["fileToUpload"]["tmp_name"];
                
                            if(file_exists('../upload/'.$tmp_name))
                            {
                                echo '<br/>' . $tmp_name.' alredy exists.';
                            }
                            else {
                                move_uploaded_file($tmp_name, "upload/$name");
                                echo '<br/>Stored of File : upload/' . $name;
                                
                                $fileToUpload = "upload/".$name;
                                echo $this->model->insert($title,$fileToUpload);
                            }
                        }
                        else
                        {
                             echo 'you must select file with type jpg or png ';
                        }
                    }
                    else {
                        echo 'you must select file with size < 500KB ';
                    }
                }
                
            }
            
	}
}



