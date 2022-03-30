<?php
use \Model\FuelFormExample;

/**
 * @access public
 * @return Response
 */
Class Controller_Indigo extends Controller_Template{
    
    public $filename = "";
    public $template= "indigo_template";
    public $title="";
    public $name="";

	public function action_index() {
        $data = array();
	    $this->template->title= 'Team Indigo';
        $this->template->content = View::forge('indigo/index',$data);
        $this->template->css = "east.css";
        $this->template->filename = "indigo.png";
	}


    public function action_about() {
        $data = array();
        $this->template->title= 'About';
        $this->template->content = View::forge('indigo/about',$data);
        $this->template->css = "east.css";
        $this->template->filename = "indigo.png";
    }

    public function action_color_table() {
    
        $data = array();
        $this->template->title= 'Color Table';
        $this->template->content = View::forge('indigo/color_table/color_table',$data);
        $this->template->css = 'east.css';
        $this->template->filename = 'indigo.png';
	}


    public function post_color_table() {
        $rows = Input::post('rows');
        $colors = Input::post('colors');
        if (($rows <= 26 && !($rows < 1)) && ($colors <= 10 && !($colors < 1))) {
            FuelFormExample::log_message($rows, $colors);
            $success_view = View::forge("indigo/color_table/success.php");
            $data = array(
                "success_view" => $success_view
            );
            return Response::forge(View::forge("indigo/color_table/color_table", $data));
        } else {
            $fail_view = View::forge("indigo/color_table/failure.php");
            $data = array(
                "failure_view" => $fail_view
            );
            return Response::forge(View::forge("indigo/color_table/color_table", $data));
        }
        $data = array();
        $this->template->title= 'Color Table';
        $this->template->content = View::forge('indigo/color_table/color_table',$data);
        $this->template->css = 'east.css';
        $this->template->filename = 'indigo.png';
	}
    
}
