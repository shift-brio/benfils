<?php $this->load->view("headers/main"); ?>
<?php $this->load->view("components/nav") ?>
   <section id="home" class="section next">
      <div class="home-tabs">
         <button class="home-tab active">
            <span class="home-tab-in"></span>
         </button>
         <button class="home-tab">
            <span class="home-tab-in"></span>
         </button>
         <button class="home-tab">
            <span class="home-tab-in"></span>
         </button>
         <button class="home-tab">
            <span class="home-tab-in"></span>
         </button>
      </div>
      <div class="home-top">
         <div class="row">
            <div class="col s12 m12 l6">
               <div class="left-cover">
                  <div class="home-tag">
                     WE&nbsp;&bull;&nbsp;ARE
                  </div>
                  <img src="<?php echo base_url("assets/logos/be_white_text_no_border.png") ?>" alt="Benfils logo" class="home-logo">
               </div>
            </div>
            <div class="col s12 m12 l6">
              <img src="<?php echo base_url("assets/logos/benfils_white_text1.png") ?>" alt="Benfils logo" class="home-benfils">
              <div class="home-desc">
                A&nbsp;&bull;&nbsp;Progressive&nbsp;&bull;&nbsp;Engineering&nbsp;&bull;&nbsp;Construction<br>&nbsp;&bull;&nbsp;Consulting Company
              </div>
            </div>
         </div>
      </div>
      <div class="home-bottom">
         <div class="home-socials">
            <a title="Connect with us on Facebook" href="https://www.facebook.com/Benfilske">
               <img src="<?php echo base_url("assets/icons/fb_icon.svg"); ?>" alt="Facebook icon" class="home-social">
            </a>
            <a title="Connect with us on Twitter" href="">
               <img src="<?php echo base_url("assets/icons/twitter_icon.svg"); ?>" alt="Twitter icon" class="home-social">
            </a>
            <a title="Connect with us on Instagram" href="">
               <img src="<?php echo base_url("assets/icons/ig_icon.svg"); ?>" alt="Instagram icon" class="home-social">
            </a>
         </div>
         <div class="home-hint">
            <div class="hint-text">SCROLL</div>
            <div class="hint-bar">→</div>
         </div>
      </div>
   </section>

   <section class="section" id="about">
      <div class="clients">
         <img class="client" src="<?php echo base_url("assets/clients/magare.png"); ?>" alt="">
         <img class="client" src="<?php echo base_url("assets/clients/forest.png"); ?>" alt="">                      
         <img class="client" src="<?php echo base_url("assets/clients/dari.webp"); ?>" alt="">  
         <img class="client" src="<?php echo base_url("assets/clients/sitescape.png"); ?>" alt="">   
         <img class="client" src="<?php echo base_url("assets/clients/wecohas.png"); ?>" alt="">        
      </div>
      <div class="about-content">
        <div class="row">
           <div class="col s12 m12 l6 about-desc">
               <div class="title-1">
                  Who &nbsp;<div class="dark-text">we are</div>               
               </div>
               <div class="about-text">
                 We are an Engineering company established in Kenya dedicated to providing solutions in the built environment and the energy sector. Founded in 2013, we have endeavoured to master our craft and have managed to put together some of the most cost-effective and innovative solutions for construction. We approach our engineering and solution development as an Art anchored in science.
               </div>               
           </div>
           <div class="col s12 m12 l6 about-l">
              <img src="<?php echo base_url("assets/logos/be_full_transparent_tagged.png") ?>" alt="Benfils logo" class="about-logo">
           </div>
           <div class="col s12 m12 l12"></div>
            <div class="col s12 m12 l12 about-desc">
               <div class="title-1">
                  <div class="dark-text">Our</div>&nbsp;Methodology<br><br>                           
               </div>
            </div>
            <div class="col s12 m12 l6 about-text">
                Every project is first a dream. We capture the dream and stick with it to the end. Every project is unique so bespoke is our way.

                We listen keenly to the client's desires, we examine the prevailing circumstances, take note of the constraints, leverage existing resources and networks both on our side and the clients side and then deliver the most suitable solution.
            </div>
        </div>   
        <div class="row">
            <div class="title-1">
               <div class="dark-text">Our</div>&nbsp;Specialization                            
            </div>
            <div class="container">
               <div class="row">
                  <div class="col s12 l12 m12 spec">
                     <div class="row">
                        <div class="col s12 l4 m12">
                           <img src="<?php echo base_url("assets/stock_images/engineering.jpg"); ?>" alt="">
                        </div>
                        <div class="col s12 l8 m12">
                           <div class="spec-title">
                              Engineering
                           </div>                           
                        </div>
                     </div>
                  </div>

                  <div class="col s12 l12 m12 spec">
                     <div class="row">
                        <div class="col s12 l4 m12">
                           <img src="<?php echo base_url("assets/stock_images/workers.jpg"); ?>" alt="">
                        </div>
                        <div class="col s12 l8 m12">
                           <div class="spec-title">
                              CONSTRUCTION MANAGEMENT
                           </div>                         
                        </div>
                     </div>
                  </div>
                  <div class="col s12 l12 m12 spec">
                     <div class="row">
                        <div class="col s12 l4 m12">
                           <img src="<?php echo base_url("assets/stock_images/project.jpg"); ?>" alt="">
                        </div>
                        <div class="col s12 l8 m12">
                           <div class="spec-title">
                              PROJECT MANAGEMENT
                           </div>                           
                        </div>
                     </div>
                  </div>               
               </div>
            </div>
        </div>
      </div>
   </section>
   
   <section class="section" id="projects">
      <div class="row">
         <div class="col s12 m12 l2"></div>
         <div class="col s12 m12 l3">
            <div class="title-1">
               <div class="dark-text">Our</div>&nbsp;Projects                           
            </div>
         </div>
         <!-- <div class="col s12 m12 l6 projects-desc">
             Every project is first a dream. We capture the dream and stick with it to the end. Every project is unique so bespoke is our way.

             We listen keenly to the client's desires, we examine the prevailing circumstances, take note of the constraints, leverage existing resources and networks both on our side and the clients side and then deliver the most suitable solution.
         </div> -->
      </div>
      <div class="row">
         <a href="<?php echo base_url("projects/") ?>" class="col s12 m6 l4 project">
            <div class="project-image">
               <img src="<?php echo base_url('assets/project_images/image_11.jpg'); ?>" alt="">
            </div>
            <div class="project-desc">
               <div class="project-category">
                  Construction
               </div>
               <div class="category-desc">
                  Residential
               </div>
               <div class="material-icons">
                  arrow_forward
               </div>
            </div>
         </a>
         <a href="<?php echo base_url("projects/") ?>" class="col s12 m6 l4 project">
            <div class="project-image">
               <img src="<?php echo base_url('assets/project_images/image_14.jpg'); ?>" alt="">
            </div>
            <div class="project-desc">
               <div class="project-category">
                  Engineering
               </div>
               <div class="category-desc">
                  Commercial
               </div>
                <div class="material-icons">
                  arrow_forward
               </div>
            </div>
         </a>
         <a href="<?php echo base_url("projects/") ?>" class="col s12 m6 l4 project">
            <div class="project-image">
               <img src="<?php echo base_url('assets/stock_images/project.jpg'); ?>" alt="">
            </div>
            <div class="project-desc">
               <div class="project-category">
                  Consultation
               </div>
               <div class="category-desc">
                  Corporate
               </div>
               <div class="material-icons">
                  arrow_forward
               </div>
            </div>
         </a>
      </div>
   </section>
   
   <section class="section" id="contacts">
      <div class="row">
         <div class="col s12 m12 l6 contact-wing left">
            <img src="<?php echo base_url("assets/logos/be_tall_transparent_tagged.png"); ?>" alt="">
            <div class="copy">
               &copy;&nbsp;<?php echo date("Y"); ?>&nbsp;Benfils Ltd. All rights reserved
            </div>
         </div>
         <div class="col s12 m12 l6 contact-wing right">
            Ngong Road. Nairobi,<br>
            Professional center<br>            
            P.O. Box 322-00100<br>
            info@benfils.com<br>
            +254721943707
         </div>
      </div>
      <!-- <div class="tagline">Building your dream</div> -->
   </section>
   <script type="text/javascript" src="<?php echo base_url("bootstrap/js/main.js") ?>"></script>