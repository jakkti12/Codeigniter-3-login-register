<nav class="navbar navbar-expand-sm navbar-light bg-light">
  <div class="container-fluid nav-fixed">
    <a class="navbar-brand" href="<?php echo base_url('')?>">
    	<img class="img-logo-nav" src="/assets/img/logo.png" alt="logo">
    </a>
    <?php if($this->session->userdata('email')){ ?>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
     <div class="collapse navbar-collapse row" id="collapsibleNavbar">
            <ul class="navbar-nav">
            
            	<div class="col-md-auto">
                	<li class="nav-item">
                    	<a class="navbar1" href="<?php echo base_url('')?>">Homepage</a>
                	</li>
                </div>
                
                <div class="col-md-auto">
                <li class="nav-item">
                    <a class="navbar1" href="<?php echo base_url('auth/edit_profile')?>">Edit profile</a>
                </li>
                </div>
                
                <div class="col-md-8">
                <li class="nav-item">
                    <a class="navbar1" href="<?php echo base_url('auth/change_password')?>">Change password</a>
                </li>
                </div>
                
                <div class="col-md-2">
                <li class="nav-item">
                	<a href="<?php echo base_url('auth/logout')?>">
                		<button type="button" class="btn btn-danger">
                			Log out
                		</button>
                	</a>
                </li>
                </div>
            </ul>
    </div>
    <?php }else{ ?>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
	    <div class="collapse navbar-collapse row" id="collapsibleNavbar">
    		<ul class="navbar-nav">
    			<div class="col-md-10">
    			</div>
    			<div class="col-md-1">
    				<li class="nav-item">
          				<a class="nav-link login" href="<?php echo base_url('auth/login')?>">Login</a>
        			</li>
    			</div>
    			<div class="col-md-1">
    				<li class="nav-item">
          				<a class="nav-link register" href="<?php echo base_url('auth/login')?>">Register</a>
        			</li>
    			</div>
      		</ul>
    	</div>
    <?php }?>
  </div>
</nav>