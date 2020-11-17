<?php $this->load->view("components/nav", ["logo" => "be_full_transparent_tagged.png"]) ?>
<style type="text/css">  
   html,body{
      height: 100%;
   }    
   .team{
      background: url(assets/template_images/web_1.jpg);      
      background-size: 100% 100% !important;
      width: 100%;
      padding-top: 120px;      
      height: 100%;
      overflow-x: hidden;
      overflow-y: auto !important;
   }
   .team > .row{      
      height: calc(100% - 30px);
      width: 100%;     
      margin: 0px !important;
      margin-bottom: 50px !important;
   }
   .team > .row > .title-1{
      margin-left: 20px;
      margin-bottom: 30px;
      display: none;
   }
   .team-left{
      height: calc(100% - 70px);
      background: url("assets/project_images/image_11.jpg");
      background-size: 100% 100%;
      display: flex;
      flex-direction: column;
      align-items: flex-start;
      padding: 0px !important;       
      margin: 0px !important; 
   }
   .row:first-child > .team-left{
          
   }
   .left-profile{
      height: 100%;
      width: 250px;
      background: #161b2f;
      display: flex;
      flex-direction: column;
      align-items: center;
      padding-left: 10px;       
      margin-left: 15px;
      
   }
   .team-img{
      height: 150px;
      width: 150px;
      margin-top: 15px; 
      border-radius: 50%;
   }
   .member-name{
      margin-top: 15px;
      width: 100%;
      height: auto;
      font-weight: 600;
      color: #f2f2f2;
      text-align: left;
      padding: 5px;
      font-size: 1.3em;
   }
   .member-title{
      color: #fff;
      margin-top: 5px;
      font-family: Lato, Inter, sans-serif;      
      padding: 5px;
      display: flex;
      flex-wrap: wrap;
      flex-direction: row;
      align-items: flex-start;
      width: 100%;
   }
   @media only screen and (max-width: 993px) {
      .team-left{
         height: 397px !important;
      }      
      .team-right{
         height: auto;
         height: 400px !important;
         background: #fff !important;
         padding-top: 30px !important;
      }
      .left-profile{
         background: linear-gradient(to bottom, #101c46 30%, #0b0f20);
         margin-left: 0px !important;
         margin-top: -1px;
         align-items: flex-start;
         box-shadow: 8px 11px 14px rgb(0 0 0 / 69%);
      } 
      .team > .row > .title-1{
         display: flex !important;
         align-items: flex-end;
         flex-direction: row;
         justify-content: flex-end;
         padding-left: 0px !important;
         padding-right: 50px !important;
      }
      .team > .row{
         margin-bottom: 0px !important;
      }   
      .member::after{
         display: none !important;
      }  
   }
   @media only screen and (min-width: 800px){
      .team-right{         
         background: #fff;
         height: calc(100% - 70px) !important;
         padding: 30px !important;         
      }
      .extra-logo{
         display: none !important;
      }
      .member:first-child{
         margin-top: 100px !important;
      }
   }
   .top-logo{
      display: block !important;
   }   
   .team-right{
      height: 100%;
      background: #fff     
   }
   .team-right > .title-1{
      font-size: 1.5em !important;
      color: #0b0f20;      
   }
   .member-desc{
      margin-top: 10px;
      padding: 5px;
      color: #a0a4b8;
      font-size: 0.9em;
   }
   .member-text{
      margin-top: 40px;
   } 
   .member:not(:last-child)::after{      
      width: 100%;
      margin-top: 10px;
      margin-bottom: 10px;
      content: "⌄";
      font-weight: 300;
      font-size: 3em !important;
      color: #fff;
      display: flex;
      flex-direction: row; 
      align-items: center;
      justify-content: center;     
   } 
</style>
<div class="team section" id="home" style="background-size: 100% 100% !important;background: url(assets/template_images/web_4.jpg); background-position: center;">
   <div class="row member" >
      <div class="title-1">Our &nbsp;<div class="dark-text">Team</div></div>
      <div class="col s12 m12 l1"></div>
      <div class="col s12 m12 l5 team-left" style="background-size: 100% 100% !important;background: url(assets/project_images/image_11.jpg); background-position: center;">         
         <div class="left-profile">
            <img class="team-img" src="<?php echo base_url("assets/team/kelvin.jpg"); ?>" alt="">
            <div class="member-name">
               Kelvin Ageng'o
            </div>
            <div class="member-title">
               Senior  <div class="dark-text">&nbsp;Electrical Engineer</div>
            </div>
            <div class="member-desc">
               &bull;&nbsp;Team Leader<br>
               &bull;&nbsp;Electrical Engineer<br>
               &bull;&nbsp;Bsc Electrical and Electronics Engineering<br>
               &bull;&nbsp;Member IEK, EBK<br>
            </div>
         </div>
      </div>
      <div class="col s12 m12 l5 team-right">
         <div class="title-1">
            Credentials
         </div>
         <div class="member-text">
            Kelvin is the founder and team leader of Benfils Limited. He has a keen eye for identifying
            innovative opportunities and building solutions to meet them. Before founding Benfils Limited,
            Kelvin worked as an engineer in various leading organizations in the filed of consultancy in the
            built environment through which he got valuable exposure and experience in the industry. <br><br>Kelvin
            believes that some of society’s most pressing challenges can be surmounted by simply taking a
            few steps back and having another look at the challenge from a different perspective. This is also
            what Benfils embodies as solutions-oriented outfit.
         </div>
      </div>
   </div>
   <!--  -->

   <div class="row member">      
      <div class="col s12 m12 l1"></div>
      <div class="col s12 m12 l5 team-left" style="background-size: 100% 100% !important;background: url(assets/project_images/image_7.jpg); background-position: center;">         
         <div class="left-profile">
            <img class="team-img" src="<?php echo base_url("assets/team/engineer.png"); ?>" alt="">
            <div class="member-name">
               Edwin Wachira
            </div>
            <div class="member-title">
               Electrical Engineer
            </div>
            <div class="member-desc">
            &bull;&nbsp;Projects Engineer<br>
            &bull;&nbsp;Electrical Engineer<br>
            &bull;&nbsp;Bsc Electrical and Electronics Engineering<br>
            &bull;&nbsp;Member IEK, EBK<br>
            </div>
         </div>
      </div>
      <div class="col s12 m12 l5 team-right">
         <div class="title-1">
            Credentials
         </div>
         <div class="member-text">
            Edwin is a distinguished engineer who has mastered his art through over a decade of practice and wide
            spread exposure both locally and internationally. He is the leader in projects execution from inception all the
            way to handover. <br><br>Before joining Benfils, He had worked with international leading engineering firms from
            where he gleaned a lot of valuable experience. He brings this expertise and experience into every solution
            provided by Benfils.
         </div>
      </div>
   </div>
    <!--  -->

   <div class="row member">      
      <div class="col s12 m12 l1"></div>
      <div class="col s12 m12 l5 team-left" style="background-size: 100% 100% !important;background: url(assets/stock_images/project.jpg); background-position: center;">         
         <div class="left-profile">
            <img class="team-img" src="<?php echo base_url("assets/team/felix.jpg"); ?>" alt="">
            <div class="member-name">
               Felix Oriwo               
            </div>
            <div class="member-title">
               Project Administrator
            </div>
            <div class="member-desc">              
               &bull;&nbsp;B.A Regional and Urban Planning<br>
               &bull;&nbsp;Member Kenya Institute of Planners<br>
            </div>
         </div>
      </div>
      <div class="col s12 m12 l5 team-right">
         <div class="title-1">
            Credentials
         </div>
         <div class="member-text">
            Felix is your classical go-to person when you want something methodically put together and
            meticulously executed. Coming from a background of Urban Planning and having over seven years of practice
            in planning a number of urban centres and intricate projects, he has accumulated a wealth of experience in
            putting different pieces together to work seamlessly with utmost efficiency.<br><br>
            As projects administrator with Benfils, Felix is in charge of systems of delivery and ensuring that every promise
            made is kept.
         </div>
      </div>
   </div>

    <!--  -->

   <div class="row member">      
      <div class="col s12 m12 l1"></div>
      <div class="col s12 m12 l5 team-left" style="background-size: 100% 100% !important;background: url(assets/template_images/home_2.jpg); background-position: center;">         
         <div class="left-profile">
            <img class="team-img" src="<?php echo base_url("assets/team/design.jpg"); ?>" alt="">
            <div class="member-name">
               Felix Owino
            </div>
            <div class="member-title">
               Design Engineer
            </div>
            <div class="member-desc">
               &bull;&nbsp;Mechanical Engineer<br>
               &bull;&nbsp;Bsc Mechanical Engineering<br>
               &bull;&nbsp;Member IEK, EBK<br>
            </div>
         </div>
      </div>
      <div class="col s12 m12 l5 team-right">
         <div class="title-1">
            Credentials
         </div>
         <div class="member-text">
            Eng. Owino is yet another distinguished engineer leading the Mechanical Engineering wing at Benfils.
            His career has seen him work in many big, small, complicated and signature projects across the country. He
            enjoys the mix of years of consultancy practice and field(implementation) with some of the leading contractors
            in the region.<br><br>
            He ensures that designs make sense and solutions are optimum.
         </div>
      </div>
   </div>
    <!--  -->

   <div class="row member">      
      <div class="col s12 m12 l1"></div>
      <div class="col s12 m12 l5 team-left" style="background-size: 100% 100% !important;background: url(assets/template_images/web_4.jpg); background-position: center;">         
         <div class="left-profile">
            <img class="team-img" src="<?php echo base_url("assets/team/design.jpg"); ?>" alt="">
            <div class="member-name">
               Brian Vukindu
            </div>
            <div class="member-title">
               Design Engineer
            </div>
            <div class="member-desc">
               &bull;&nbsp;Civil and Structural Engineer<br>
               &bull;&nbsp;Msc. Bsc. Civil and Structural Engineering<br>
               &bull;&nbsp;Member IEK, EBK<br>
            </div>
         </div>
      </div>
      <div class="col s12 m12 l5 team-right">
         <div class="title-1">
            Credentials
         </div>
         <div class="member-text">
            Brian is decorated engineer who has designed and supervised the implementation of numerous
            signature projects in Kenya and the larger Africa. He has had considerable stints with leading international
            engineering firms in the continent through which he has gained immense experience and expertise in civil and
            structural engineering.<br><br>
            As he leads the Civil and Structural engineering department, his near decade of dedicated practice is a wealth
            that our clients get to enjoy. He is the engineer who gives you the comfort of ‘you are in a safe place’.
         </div>
      </div>
   </div>
    <!--  -->   
</div>
<script type="text/javascript" src="<?php echo base_url("bootstrap/js/main.js") ?>"></script>