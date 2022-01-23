<div>
<div class="container">
      <div class="col-sm-3"></div>

      <div class="col-sm-3 create" id="show1">
        <div class="q1">
          <img src="img/Orion_add-woman-user.png" alt="" />
        </div>
      </div>

      <div class="col-sm-3" id="show2">
        <div class="q1">
          <img src="img\Orion_edit-woman-account.png" alt="" />
        </div>
      </div>

      <div class="col-sm-3"></div>
      
    </div>

<div class="col-sm-2"></div>
<div class="col-sm-8" style="margin: 15px; padding: 20px; padding-bottom: 90px; border-radius: 15px; background-color: darkolivegreen !important;" id="panel1">
    <form >
        <h1>Login</h1>
        <div class="row mb-3 create" >
          <label for="inputEmail3" class="col-sm-2 col-form-label" style="font-size: 20px; text-align: center;" >Email</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" id="inputEmail3" placeholder="Email" style="font-size: 20px; border-radius: 7px;">
          </div>
        </div>
        <div class="row mb-3">
          <label for="inputPassword3" class="col-sm-2 col-form-label" style="font-size: 20px; text-align: center;" > PassWord</label>
          <div class="col-sm-10">
            <input type="password" class="form-control" id="inputPassword3" placeholder="PassWord" style="font-size: 20px; border-radius: 7px;">
          </div>
        </div>
        <a href="#" style="color: rgb(26, 25, 25); font-size: 15px;">Forget Password?</a>

        <button type="submit" class="btn btn-primary" style="padding: 7px 25px; font-size: 20px; border-radius: 7px;" >Sign in</button>
      </form>
      </div>


      <!--panel 2-->
      <div class="col-sm-8" style="margin: 15px; padding: 20px; padding-bottom: 90px; border-radius: 15px; background-color: darkolivegreen !important;" id="panel2">
        
        <form  method="POST" action="<?php echo e(url('/login/store')); ?>" >
            <h1>Create Account</h1>
            
            <div class="row mb-3 create" >
              <label for="inputEmail3" class="col-sm-2 col-form-label" style="font-size: 20px; text-align: center;" >FullName : </label>
              <div class="col-sm-10">
              <?php echo csrf_field(); ?>
                <input type="text" class="form-control" value="<?php echo e($logins->fullname ?? null); ?>" name="fullname" id="inputEmail3" placeholder="First Name" style="font-size: 20px; border-radius: 7px;">
                <?php $__errorArgs = ['fullname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputPassword3" class="col-sm-2 col-form-label" style="font-size: 20px; text-align: center;" >UserName : </label>
              <div class="col-sm-10">
                <input type="text" class="form-control" value="<?php echo e($logins->username ?? null); ?>" name="username" id="inputPassword3" placeholder="UserName" style="font-size: 20px; border-radius: 7px;">
              <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              </div>
            </div>
            <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-2 col-form-label" style="font-size: 20px; text-align: center;" >Email : </label>
                <div class="col-sm-10">
                  <input type="email" class="form-control" value="<?php echo e($logins->email ?? null); ?>" name="email" id="inputPassword3" placeholder="Email address" style="font-size: 20px; border-radius: 7px;">
                  <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
              </div>

              <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-2 col-form-label" style="font-size: 20px; text-align: center;" >PassWord : </label>
                <div class="col-sm-10">
                  <input type="password" class="form-control" value="<?php echo e($logins->password ?? null); ?>" name="password" id="inputPassword3" placeholder="PassWord" style="font-size: 20px; border-radius: 7px;">
                  <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
              </div>
    
            <button type="submit" class="btn btn-primary" style="padding: 7px 25px; font-size: 20px; border-radius: 7px;" id="button" >Continue</button>
          </form>
          </div>


<div class="col-sm-2"></div>

</div><?php /**PATH C:\Users\ayach\Avnord\resources\views/components/login-table.blade.php ENDPATH**/ ?>