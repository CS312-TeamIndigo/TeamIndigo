<?php

use Fuel\Core\Input;
use Fuel\Core\Response;
use Fuel\Core\View;
use \Model\FuelFormExample;

/**
 * @access public
 * @return Response
 */

class Controller_Indigo extends Controller_Template
{

    public $filename = "";
    public $template = "indigo_template";
    public $title = "";
    public $name = "";

    public function action_index()
    {
        $data = array();
        $this->template->title = 'Team Indigo';
        $this->template->headerTitle = 'Welcome to Team Indigo';
        $this->template->content = View::forge('indigo/index', $data);
        $this->template->css = "east.css";
        $this->template->filename = "landscape.png";
        $this->template->smallPic = "small.png";
    }


    public function action_about()
    {
        $data = array();
        $this->template->title = 'Team Indigo | About';
        $this->template->headerTitle = 'About Team Indigo';
        $this->template->content = View::forge('indigo/about', $data);
        $this->template->css = "east.css";
        $this->template->filename = "";
        $this->template->smallPic = "small.png";
    }

    public function action_color_table()
    {

        $data = array();
        $this->template->title = 'Team Indigo | Color Coordination Table';
        $this->template->headerTitle = 'Color Coordination Table';
        $this->template->content = View::forge('indigo/color_table/color_table', $data);
        $this->template->css = 'east.css';
        $this->template->filename = "";
        $this->template->smallPic = "small.png";
    }


    public function post_color_table()
    {
        $rows = Input::post('rows') ? Input::post('rows') : 0;
        $colors = Input::post('colors') ? Input::post('colors') : 0;
        if ((($rows <= 26) && ($rows >= 1)) && (($colors <= 10) && ($colors >= 1))) {
            FuelFormExample::log_message($rows, $colors);
            $data = array();
            $this->template->title = 'Team Indigo | Color Coordination Table';
            $this->template->headerTitle = 'Color Coordination Table';
            $this->template->content = View::forge('indigo/color_table/success', $data);
            $this->template->css = 'east.css';
            $this->template->filename = "";
            $this->template->smallPic = "small.png";
            $this->template->image = Asset::img('small.png',$data);

        } else {
            $data = array();
            $this->template->title = 'Team Indigo | Color Coordination Table';
            $this->template->headerTitle = 'Color Coordination Table';
            $this->template->content = View::forge('indigo/color_table/failure', $data);
            $this->template->css = 'east.css';
            $this->template->filename = "";
            $this->template->smallPic = "small.png";

        }
    }
}