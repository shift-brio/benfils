<?php defined("BASEPATH") || exit("No direct scripts allowed");

   class Home extends CI_Controller{
      public function __construct(){
         parent::__construct();
         $this->load->helper("url_helper");
      }
      public function index(){
         $this->load->view("index");
      }
      /*public function projects($category = "residential"){
         $categories = [
            "residential",
            "architecture",
            "interior"
         ];
         if (!in_array($category, $categories)) {
            $category = $categories[0];
         }
         $d = [
            "title" => ucfirst($catgeory)." | Benfils Engineering"
         ];
         $this->load->view("headers/main");
         $this->load->view("categories/".$category);
      }*/
      public function team(){
         $this->load->view("headers/main", ["title" => "Our Team at Benfils Engineering"]);
         $this->load->view("teams");
      }
   }