

<?php $__env->startSection('css'); ?>
  <link href="/css/subscription.css" rel="stylesheet">
<?php $__env->stopSection(); ?>



<?php $__env->startSection('topMenu'); ?>
<nav class="top">
<form class=search action='<?php echo e(url("/subscription")); ?>' method='GET'>
  <?php echo csrf_field(); ?>
  <input type='hidden' name='action' value="subscription">
  <input type='text' name='v' placeholder='Rechercher un compte' value="<?php echo e($v); ?>">
  <button type='submit' name='search' value='rechercher'><i class='bx bx-search'></i></button>
</form>
</nav>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <section class="search">
    <?php if(!empty($searchUsers)): ?>
      <h2>Ma recherche</h2>
    <?php endif; ?>
    <?php $__currentLoopData = $searchUsers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class=user>
          <span>
          <a href="#"><?php echo e($user->login); ?></a>
          <?php if(isset($user->dateAbonnement)): ?>
            depuis le <?php echo e(date('j F, Y', strtotime($user->dateAbonnement))); ?>

          <?php endif; ?>
          </span>
          <?php if(isset($user->idAmi)): ?>
            <a class="subscribe" href="<?php echo e(route('delete', ['id' => $user->id])); ?>">se désabonner</a>
          <?php else: ?>
            <a class="subscribe" href="<?php echo e(route('add', ['id' => $user->id])); ?>">s'abonner</a>
          <?php endif; ?>

      </div>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </section>
    <section class="friends">
    <h2>Mes abonnements</h2>
    <?php $__currentLoopData = $friendUsers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class=user>
        <span>
        <a href="index.php?action=articles&id=<?php echo e($user->id); ?>"><?php echo e($user->login); ?></a>
        <?php if(isset($user->dateAbonnement)): ?>
          depuis le <?php echo e(date('j F, Y', strtotime($user->dateAbonnement))); ?>

        <?php endif; ?>
        </span>
          <a class="subscribe" href="<?php echo e(route('delete', ['id' => $user->id])); ?>">se désabonner</a>
      </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\lukac\OneDrive\Bureau\mmi\ANNEE2\laragram\resources\views/subscription.blade.php ENDPATH**/ ?>