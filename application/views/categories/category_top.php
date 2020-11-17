<script type="text/javascript" src="<?php echo base_url("bootstrap/js/main.js") ?>"></script>
<body>   
   <div class="project-category-main section" id="home" style="background-image: url(assets/template_images/web_4.jpg);">
      <nav class="header">
         <div class="nav-left nav-side ">
            <!-- <img class="top-logo" src="<?php echo base_url("assets/logos/be_white_text.png"); ?>" alt=""> -->
         </div>
         <div class="nav-right nav-side">
            <div class="nav-items">
               <a href="<?php echo base_url()."#home"; ?>">Home</a>
               <a href="<?php echo base_url()."#about"; ?>">about</a>
               <a href="<?php echo base_url()."team"; ?>">Our Team</a>
               <a href="<?php echo base_url()."#projects"; ?>">Projects</a>
               <a href="<?php echo base_url()."#contacts"; ?>">Contact</a>
            </div>
            <button class="hidden material-icons nav-toggle">
               menu
            </button>
            <button class="hidden material-icons nav-toggle close-nav">
            close
         </button>
         </div>
      </nav>
      <style type="text/css">
         .nav-toggle{
            color: #a0a4b8 !important;
         }
         .category-body{
            height: calc(100% + 100px);
            width: 100%;
            margin: 0px !important;
            margin-top: -100px !important;
            overflow-y: auto;
            padding-bottom: 200px !important;
         }
         .category-sleeve{            
            background: #fff;
            display: flex;
            height: auto;
            padding-bottom: 40px !important;
            flex-direction: column;align-items: center;
            justify-content: center;
         }
         .cat-logo{
            height: 120px;
            margin-top: 30px;            
         }
         .category-name{
            margin-top: 150px;
            font-size: 1.3em;
            font-weight: 600;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: #2c2c4f !important;
         }
         .category-details{
            margin-top: 150px;
            padding-left: 50px !important;
         }
         .category-details > .title-1{
            font-size: 3em !important;
         }
         .category-exp{
            margin-top: 20px;
            color: #fff;
            font-size: 1em;
            font-weight: 300 !important;
         }
         @media only screen and (max-width: 993px) {
            .category-sleeve{            
               background: #fff;
               display: flex;
               height: auto;              
               flex-direction: column;
               align-items: center;
               justify-content: center;
            }
            .cat-logo{
               height: 80px;
               margin-top: 30px;
            }
            .category-name{
               margin-top: 15px;
               font-size: 1.3em;
               font-weight: 600;
               display: flex;
               align-items: center;
               justify-content: center;
               text-align: center;               
            }
            .category-details{
               margin-top: 15px;  
               display: inherit;
               padding-left: 10px !important;             
            }
            .category-details > .title-1{
               font-size: 1.6em !important;
               justify-content: flex-start;
               text-align: left;
               display: block !important;
               margin-top: 30px;
            }
         }
      </style>
      <script type="text/javascript">
      $(".nav-toggle").click(function(){
            console.log("kkkkk");
            if ($(this).is(".close-nav")) {
               $(".nav-items").hide();
               $(".close-nav").hide();
            }else{
               $(".nav-items").css("display","flex");
               $(".close-nav").show();
            }
         })
         $(".nav-items > a").click(function(){
            $(".nav-items").hide();
            $(".close-nav").hide();
         })
      </script>
      <div class="category-body row">
         <div class="col s12 m12 l2 category-sleeve">
            <a href="<?php echo base_url(); ?>">
               <img class="cat-logo" src="<?php echo base_url("assets/logos/be_tall_white.png") ?>" alt="">
            </a>
            <div class="category-name">
               Our Projects
            </div>

         </div> 
