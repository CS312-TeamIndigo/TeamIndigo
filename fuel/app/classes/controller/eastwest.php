<?php

/**
 * @access public
 * @return Response
 */
Class Controller_EastWest extends Controller_Template{
    
    public $direction = "";
    public $direction2 = "";
    public $filename = "";
    public $template= "template";
    public $title="";
    public $name="";

	public function action_index()
	{
        $data = array();
		$this->template->title= 'Hip-Hop';
        $this->template->content = View::forge('eastwest/index',$data);
        $this->template->css = "east.css";
        $this->template->filename = "hip-hop.png";
        $this->template->direction = "kendrick?direction=east";
        $this->template->direction2 = "biggie?direction=east";
	}

	public function action_east()
	{
        $data = array();
        $this->template->title= 'Hip-Hop';
        $this->template->css= 'east.css';
        $this->template->filename = "hip-hop.png";
        $this->template->content = View::forge('eastwest/index',$data);
        $this->template->direction = "kendrick?direction=east";
        $this->template->direction2 = "biggie?direction=east";
	}


	public function action_west()
	{
        $data = array();
        $this->template->title= 'Hip-Hop';
        $his->template->css= 'west.css';
        $this->template->filename = "hip-hop.png";
        $this->template->content = View::forge('eastwest/index',$data);
        $this->template->direction = "kendrick?direction=west";
        $this->template->direction2 = "biggie?direction=west";
	}

    public function action_kendrick()
	{
        $data = array();
        if(isset($_GET['direction'])){
            $dir = $_GET['direction'];
            if($dir == "east"){
                $this->template->title= 'Kendrick Lamar';
                $this->template->content = View::forge('eastwest/kendrick',$data);
                $this->template->css = "east.css";
                $this->template->filename = "kendrick.png";
                $this->template->direction = "kendrick?direction=east";
                $this->template->direction2 = "biggie?direction=east";
            }
            elseif ($dir == "west") {
                $this->template->title= 'Kendrick Lamar';
                $this->template->content = View::forge('eastwest/kendrick',$data);
                $this->template->css = "west.css";
                $this->template->filename = "kendrick.png";
                $this->template->direction = "kendrick?direction=west";
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
                $this->template->content = View::forge('eastwest/biggie',$data);
                $this->template->css = 'east.css';
                $this->template->filename = 'biggie.png';
                $this->template->direction = 'kendrick?direction=east';
                $this->template->direction2 = 'biggie?direction=east';
            }
            elseif ($dir == "west") {
                $this->template->title= 'The Notorious B.I.G.';
                $this->template->content = View::forge('eastwest/biggie',$data);
                $this->template->css = "west.css";
                $this->template->filename = "biggie.png";
                $this->template->direction = "kendrick?direction=west";
                $this->template->direction2 = "biggie?direction=west";
            }
        }
	}
}
