<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"/>
    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
      integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
      crossorigin="anonymous"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="\css\login.css" />
    <link rel="stylesheet" href="\css\navbar.css" />
    <title>Document</title>
    <?php echo \Livewire\Livewire::styles(); ?>

</head>
<body>
<?php if (isset($component)) { $__componentOriginalc4f1150d54640704006ef883a9a0bca3ccfb5b4e = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\NavbarTable::class, []); ?>
<?php $component->withName('navbar-table'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginalc4f1150d54640704006ef883a9a0bca3ccfb5b4e)): ?>
<?php $component = $__componentOriginalc4f1150d54640704006ef883a9a0bca3ccfb5b4e; ?>
<?php unset($__componentOriginalc4f1150d54640704006ef883a9a0bca3ccfb5b4e); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if(session()->has('status')): ?>
              <div class="alert alert-success" role="alert">
              <?php echo e(session()->get('status')); ?>

              </div> 
              <?php endif; ?>
<?php if (isset($component)) { $__componentOriginal61a1a0b3dc5303600ed79b10c405bda9962e7657 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\LoginTable::class, []); ?>
<?php $component->withName('login-table'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginal61a1a0b3dc5303600ed79b10c405bda9962e7657)): ?>
<?php $component = $__componentOriginal61a1a0b3dc5303600ed79b10c405bda9962e7657; ?>
<?php unset($__componentOriginal61a1a0b3dc5303600ed79b10c405bda9962e7657); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<input id="email" type="email"
       class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email"
       value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>

       <input id="password" type="password"
       class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password"
       value="<?php echo e(old('password')); ?>" required autocomplete="password" autofocus>
<script>
        $(document).ready(function(){
  $("#show1").click(function(){
      $("#panel1").slideToggle("slow1");
      $("#panel2").hide("slow2");
  });
  $("#show2").click(function(){
      $("#panel2").slideToggle("slow2");
      $("#panel1").hide("slow1");
  });
});
</script>
<?php echo \Livewire\Livewire::scripts(); ?>

</body>
</html><?php /**PATH C:\Users\ayach\Avnord\resources\views/main/login.blade.php ENDPATH**/ ?>