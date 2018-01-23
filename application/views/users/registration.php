<!DOCTYPE html>
<html lang="en">  
<head>

</head>
<body>
<div class="container">
    <h2>Registratie</h2>
    <form action="" method="post">
        <div class="form-group">
            <input type="text" class="form-control" name="name" placeholder="Naam" required="" value="<?php echo !empty($user['name'])?$user['name']:''; ?>">
          <?php echo form_error('name','<span class="help-block">','</span>'); ?>
        </div>
        <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Email" required="" value="<?php echo !empty($user['email'])?$user['email']:''; ?>">
          <?php echo form_error('email','<span class="help-block">','</span>'); ?>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="phone" placeholder="Telefoon" value="<?php echo !empty($user['phone'])?$user['phone']:''; ?>">
        </div>
        <div class="form-group">
          <input type="password" class="form-control" name="password" placeholder="Wachtwoord" required="">
          <?php echo form_error('password','<span class="help-block">','</span>'); ?>
        </div>
        <div class="form-group">
          <input type="password" class="form-control" name="conf_password" placeholder="Wachtwoord herhalen" required="">
          <?php echo form_error('conf_password','<span class="help-block">','</span>'); ?>
        </div>
        <div class="form-group">
            <?php
            if(!empty($user['gender']) && $user['gender'] == 'Female'){
                $fcheck = 'checked="checked"';
                $mcheck = '';
            }else{
                $mcheck = 'checked="checked"';
                $fcheck = '';
            }
            ?>
            <div class="radio">
                <label>
                <input type="radio" name="gender" value="Male" <?php echo $mcheck; ?>>
                Man
                </label>
            </div>
            <div class="radio">
                <label>
                  <input type="radio" name="gender" value="Female" <?php echo $fcheck; ?>>
                  Vrouw
                </label>
            </div>
        </div>
        <div class="form-group">
            <input type="submit" name="regisSubmit" class="btn-primary" value="Registreer"/>
        </div>
    </form>
    <p class="footInfo">Heb je al een account? <a href="<?php echo base_url(); ?>users/login">Inloggen</a></p>              
</div>
</body>
</html>