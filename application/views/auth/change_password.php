<div class="change_password">
<?php
    $arr = $this->session->flashdata();
    if(!empty($arr['success_message'])){
        $html = '<div class="alert alert-dismissible success-change_password" role="alert">';
        $html .= '<i class="fa-solid fa-circle-check icon-success-change_password"></i>';
        $html .= '<a class="font-success-change_password">';
        $html .= $arr['success_message'];
        $html .= '</a>';
        $html .= '</div>';
        echo $html;
    }elseif (!empty($arr['fail_message'])){
        $html = '<div class="alert alert-dismissible fail-change_password" role="alert">';
        $html .= '<i class="fa-solid fa-triangle-exclamation icon-fail-change_password"></i>';
        $html .= '<a class="font-success-change_password">';
        $html .= $arr['fail_message'];
        $html .= '</a>';
        $html .= '</div>';
        echo $html;
    }
?>
	<div class="card card-change_password">
		<div class="head-change_password">
			<h1 class="fonthead-change_password pt-1">Edit profile</h1>
		</div>
            <form action="" method="post">
            	<div class="card-body body-change_password">
            	
            		<div class="row">
                		<div class="col-md-4">
                			<h5 class="font-change_password">Current password</h5>
                		</div>
                		<div class="col-md-8">
                    		<input 
                    			class="input-change_password form-control" 
                    			type="password" 
                    			name="old_password" 
                    			value="">
                    			<div style="margin-left: 10px;">
                    				<?php echo form_error('old_password') ?>
                    			</div>
                		</div>
            		</div>
            		
            		<div class="row">
                		<div class="col-md-4">
                			<h5 class="font-change_password">New password</h5>
                		</div>
                		<div class="col-md-8">
                    		<input 
                    			class="input-change_password form-control" 
                    			type="password" 
                    			name="new_password" 
                    			value="">
                    			<div style="margin-left: 10px;">
                    				<?php echo form_error('new_password') ?>
                    			</div>
                		</div>
            		</div>
            		
            		<div class="row">
                		<div class="col-md-4">
                			<h5 class="font-change_password">Confirm new password</h5>
                		</div>
                		<div class="col-md-8">
                    		<input 
                    			class="input-change_password form-control" 
                    			type="password" 
                    			name="conf_password"
                    			value="">
                    			<div style="margin-left: 10px;">
                    				<?php echo form_error('conf_password') ?>
                    			</div>
                		</div>
            		</div>
            		
            	</div>
            	
            	<div class="row">
            		<div class="col-md-4"></div>
            		<div class="col-md-8">
            			<div class="font-requirement">
                        	<h4>Password requirements:</h4>
                        	<h5>Ensure that these requirements are met:</h5>
                        	<ul>
                        	<li>Minimum 3 characters long - the more, the better</li>
                        	<li>At least one lowercase character</li>
                        	<li>At least one uppercase character</li>
                        	<li>At least one number, symbol, or whitespace character</li>
                        	</ul>
                    	</div>
            		</div>
            	</div>
            	
            	<div class="card-body">
                	<input 
                		class="btn btn-primary buttion-change_password" 
                		type="submit" 
                		value="SAVE CHANGE"
                	>
            	</div>
            </form>
            <hr>
            <!-- start back to homepage -->
            <a class="text-center back-to-homepage" 
               href="<?php echo base_url('')?>">
            	Go back to homepage
            </a><br>
            <!-- end back to homepage -->
    </div>
</div>