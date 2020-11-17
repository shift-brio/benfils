<?php defined("BASEPATH") || exit("No direct scripts allowed");

   class Projects extends CI_Controller{
      public function __construct(){
         parent::__construct();
         $this->load->helper("url_helper");
      }
      public function index($category = "residential"){
         $categories = [
            "residential",
            "commercial",
            "interior"
         ];
         if (!in_array($category, $categories)) {
            $category = $categories[0];
         }
         $d = [
            "category" => $category,
            "title" => ucfirst($category)." | Benfils Engineering"
         ];
         $this->load->view("headers/main", $d);
         $this->load->view("categories/".$category);
      }      
   }