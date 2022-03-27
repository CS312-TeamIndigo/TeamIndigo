<?php

/**
 * @access public
 * @return Response
 */
Class Controller_Indigo extends Controller_Template{
    
    public $direction = "";
    public $direction2 = "";
    public $filename = "";
    public $template= "indigo_template";
    public $title="";
    public $name="";

	public function action_index()
	{
        $data = array();
		$this->template->title= 'Team Indigo';
        $this->template->content = View::forge('indigo/index',$data);
        $this->template->css = "east.css";
        $this->template->filename = "indigo.png";
        $this->template->direction = "about?direction=east";
        $this->template->direction2 = "biggie?direction=east";
	}

	public function action_east()
	{
        $data = array();
        $this->template->title= 'Team Indigo';
        $this->template->css= 'east.css';
        $this->template->filename = "indigo.png";
        $this->template->content = View::forge('indigo/index',$data);
        $this->template->direction = "about?direction=east";
        $this->template->direction2 = "biggie?direction=east";
	}


	public function action_west()
	{
        $data = array();
        $this->template->title= 'Team Indigo';
        $this->template->css= 'west.css';
        $this->template->filename = "indigo.png";
        $this->template->content = View::forge('indigo/index',$data);
        $this->template->direction = "about?direction=west";
        $this->template->direction2 = "biggie?direction=west";
	}

    public function action_about()
	{
        $data = array();
        if(isset($_GET['direction'])){
            $dir = $_GET['direction'];
            if($dir == "east"){
                $this->template->title= 'About';
                $this->template->content = View::forge('indigo/about',$data);
                $this->template->css = "east.css";
                $this->template->filename = "indigo.png";
                $this->template->direction = "about?direction=east";
                $this->template->direction2 = "biggie?direction=east";
            }
            elseif ($dir == "west") {
                $this->template->title= 'About';
                $this->template->content = View::forge('indigo/about',$data);
                $this->template->css = "west.css";
                $this->template->filename = "indigo.png";
                $this->template->direction = "about?direction=west";
                $this->template->direction2 = "biggie?direction=west";
            }
        }
	}

    public function action_biggie()
	{
        $data = array();
        if(isset($_GET['direction'])){
            $dir = $_GET['direction'];
            if($dir == "east"){
                $this->template->title= 'The Notorious B.I.G.';
                $this->template->content = View::forge('indigo/biggie',$data);
                $this->template->css = 'east.css';
                $this->template->filename = 'indigo.png';
                $this->template->direction = 'about?direction=east';
                $this->template->direction2 = 'biggie?direction=east';
            }
            elseif ($dir == "west") {
                $this->template->title= 'The Notorious B.I.G.';
                $this->template->content = View::forge('indigo/biggie',$data);
                $this->template->css = "west.css";
                $this->template->filename = "indigo.png";
                $this->template->direction = "about?direction=west";
                $this->template->direction2 = "biggie?direction=west";
            }
        }
	}
}
