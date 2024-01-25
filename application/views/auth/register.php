<div class="container">
	<div class="text-center pt-5 mb-4">
  		<img src="/assets/img/logo.png" class="img-logo-register"/>
	</div>
<!-- form -->
    <div class="row justify-content-center">
      <div class="col-md-8 col-lg-6">
        <?php
        $arr = $this->session->flashdata();
        if(!empty($arr['fail_message'])){
            $html = '<div class="alert alert-dismissible fail-change_password" role="alert">';
            $html .= '<i class="fa-solid fa-triangle-exclamation icon-fail-change_password"></i>';
            $html .= '<a class="font-success-change_password">';
            $html .= $arr['fail_message'];
            $html .= '</a>';
            $html .= '</div>';
            echo $html;
        }
        ?>
        <div class="card">
          <div class="card-body">
            <form action="/auth/register" method="post">
              <div class="row mb-3">
                <div class="col-xs-12 col-sm-6">
                  <label for="inputFirstname" class="form-label">Firstname</label>
                  <input 
                  type="text" name="firstname" class="form-control" 
                  id="inputFirstname" aria-describedby="emailHelp" 
                  value="<?php echo set_value('firstname') ?>"/>
                  <a class="font-error"><?php echo form_error('firstname');?></a>
                </div>
                <div class="col-xs-12 col-sm-6">
                  <label for="inputLastname" class="form-label">Lastname</label>
                  <input 
                  type="text" name="lastname" class="form-control" 
                  id="inputLastname" value="<?php echo set_value('lastname') ?>"/>
                  <a class="font-error"><?php echo form_error('lastname');?></a>
                </div>
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" 
                id="email" value="<?php echo set_value('email') ?>"">
                <a class="font-error"><?php echo form_error('email');?></a>
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" 
                id="password" value="<?php echo set_value('password') ?>">
                <a class="font-error"><?php echo form_error('password');?></a>
              </div>
              <div class="mb-3">
                <label for="conf_password" class="form-label">Confirm Password</label>
                <input type="password" name="conf_password" class="form-control" 
                id="conf_password" value="<?php echo set_value('conf_password') ?>">
                <a class="font-error"><?php echo form_error('conf_password');?></a>
              </div>
              <div class="mb-3">
                <input class="form-check-input" type="checkbox" value="" id="remember">
                <label class="form-check-label" for="remember">
                  Inform me about new features and updates.
                </label>
              </div>
              <div class="text-center">
                <button type="submit" class="btn btn-primary button-register">
                  Confirm
                </button>
              </div>
              <div class="text-center pt-2">
                <a href="<?php echo base_url('')?>" class="link-dark">Go back to homepage</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
</div>