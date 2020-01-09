<nav class="navbar navbar-expand-lg navbar-light">
   <div class="container">

       <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
           <img class="img-fluid mr-1" alt="Hebert Thomas Law" src="https://res.cloudinary.com/empuls3/image/upload/v1578508905/Bb-icon.png" width="50">
           BLACK BUTTERLY
       </a>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
       </button>

       <div class="collapse navbar-collapse" id="navbarSupportedContent">
           <ul class="navbar-nav ml-auto">
               <li class="nav-item">
                   <a class="nav-link" href="<?php echo site_url('/'); ?>">home.</a>
               </li>
               <li class="nav-item">
                   <a class="nav-link" href="<?php echo site_url('/about'); ?>">about.</a>
               </li>
               <li class="nav-item">
                   <a class="nav-link" href="<?php echo site_url('books'); ?>">my books.</a>
               </li>
               <li class="nav-item">
                   <a class="nav-link" href="<?php echo site_url('/poems'); ?>">poems.</a>
               </li>
               <li class="nav-item">
                   <a class="nav-link" href="<?php echo site_url('/blog'); ?>">blog.</a>
               </li>
               <li class="nav-item">
                   <a class="nav-link" href="<?php echo site_url('/contact'); ?>">contact.</a>
               </li>
           </ul>
       </div>
   </div>
</nav>