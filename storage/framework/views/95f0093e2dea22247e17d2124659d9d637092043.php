

<?php $__env->startSection('content'); ?>
<div class="register">
  <?php if($errors->any()): ?>
      <div class="alert alert-danger">
          <ul>
              <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <li><?php echo e($error); ?></li>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </ul>
      </div>
  <?php endif; ?>
  <form action='<?php echo e(url("registerT")); ?>' method='POST'>
    <?php echo csrf_field(); ?>
    <input type='email' name='email' placeholder='e-mail'>
    <input type='text' name='login' placeholder='login'>
    <input type='password' name='mdp' placeholder='Mot de passe'>
    <input type='password' name='mdp_confirmation' placeholder='Confirmation du mot de passe'>

    <input type='submit' name='inscription' value="S'enregistrer">
  </form>
</div>

<div class="login">
  <span>Déjà inscrit ? <a href='<?php echo e(url("login")); ?>'>Connectez-vous</a></span>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.appV1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\lukac\OneDrive\Bureau\mmi\ANNEE2\laragram\resources\views/register.blade.php ENDPATH**/ ?>