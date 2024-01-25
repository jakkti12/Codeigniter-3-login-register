<div class="edit_profile">
<?php
    $arr = $this->session->flashdata();
    if(!empty($arr['success_message'])){
        $html = '<div class="alert alert-dismissible flashdata-edit_profile" role="alert">';
        $html .= '<i class="fa-solid fa-circle-check icon-edit_profile"></i>';
        $html .= '<a class="font-success-edit_profile">';
        $html .= $arr['success_message'];
        $html .= '</a>';
        $html .= '</div>';
        echo $html;
    }
?>
	<div class="card card-edit_profile">
		<div class="head-edit_profile">
			<h1 class="fonthead-edit_profile pt-1">Edit profile</h1>
		</div>
            <form action="/auth/edit_profile" method="post">
            	<div class="card-body body-edit_profile row">
            	   <!-- start firstname -->
            		<div class="col-md-6">
            			<div class="font-edit_profile">
            				Firstname
                		</div>
                		<input 
                			class="input1-edit_profile form-control" 
                			type="text" 
                			name="firstname" 
                			value="<?php echo $user_info['firstname'];?>"
                		>
                		<a class="font-error"><?php echo form_error('firstname');?></a>
            		</div>
            		<!-- end firstname -->
            		<!-- start lastname -->
            		<div class="col-md-6">
            			<div class="font-edit_profile">
            				Surname
                		</div>
                		<input 
                			class="input2-edit_profile form-control" 
                			type="text" 
                			name="lastname" 
                			value="<?php echo $user_info['lastname'];?>"
                		>
                		<a class="font-error"><?php echo form_error('lastname');?></a>
                		<!-- end lastname -->
            		</div>
            	</div>
            	<div class="card-body row">
            		<!-- start email -->
            		<div class="col-md-7">
            			<div class="font-edit_profile">
            				Email address 
                		</div>
                		<input 
                			class="input3-edit_profile form-control" 
                			type="email" 
                			name="email" 
                			value="<?php echo $user_info['email'];?>" 
                			disabled
                		>
                		<a class="font-error"><?php echo form_error('email');?></a>
            		</div>
            		<!-- end email -->
            	</div>
            	<div class="card-body">
                	<input 
                		class="btn btn-primary buttion-edit_profile" 
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