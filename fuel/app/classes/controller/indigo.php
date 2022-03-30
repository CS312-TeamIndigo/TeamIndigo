<?php

/**
 * @access public
 * @return Response
 */
Class Controller_Indigo extends Controller_Template{
    
    public $filename = "";
    public $template= "indigo_template";
    public $title="";
    public $name="";
    public $rows=0;
    public $colors=0;

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
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            if($_GET['rows']){
                $this->template->$rows = $_GET["rows"];
            }
            else{ $this->template->$rows = 0; }
        }
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            if($_GET['colors']){
                $this->template->$colors = $_GET["colors"];
            }
            else{ $this->template->$colors = 0; }
        }
        $this->template->title= 'Color Table';
        $this->template->content = View::forge('indigo/color_table/color_table',$data);
        $this->template->css = 'east.css';
        $this->template->filename = 'indigo.png';
	}
}
