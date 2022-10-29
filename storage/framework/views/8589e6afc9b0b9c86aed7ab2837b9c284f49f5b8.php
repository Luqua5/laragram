


<?php $__env->startSection('content'); ?>
  <?php if($errors->any()): ?>
      <div class="alert alert-danger">
          <ul>
              <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <li><?php echo e($error); ?></li>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </ul>
      </div>
  <?php endif; ?>
  <?php echo $__env->make('flash-message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <div class="login">
    <form action='<?php echo e(url("/loginT")); ?>' method='POST'>
      <?php echo csrf_field(); ?>
      <input type='email' name='email' placeholder='e-mail'>
      
      <input type='password' name='mdp' placeholder='Mot de passe'>

      <label class="rememberme" for="rememberme"><input type="checkbox" id="rememberme" name="rememberme" value="rememberme"> Se souvenir de moi</label>
      <input type='submit' name='connecter' value='Connexion'>
    </form>
  </div>

  <div class="register">
    <span>Vous n'avez pas de compte ? <a href='<?php echo e(url("register")); ?>'>Inscrivez-vous</a></span>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.appV1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\lukac\OneDrive\Bureau\mmi\ANNEE2\laragram\resources\views/login.blade.php ENDPATH**/ ?>