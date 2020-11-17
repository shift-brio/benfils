<body>
   <div class="extra-logo"></div>
   <nav class="header">
      <div class="nav-left nav-side">
         <a class="top-logo-a" href="<?php echo base_url() ?>">
            <img class="top-logo" src="<?php echo base_url("assets/logos/".(isset($logo) ? $logo : 'be_white_text.png')); ?>" alt="">
         </a>
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