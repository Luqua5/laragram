

<?php $__env->startSection('css'); ?>
  <link href="/css/actualites.css" rel="stylesheet">
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
  <section class="actu">
  <?php $__empty_1 = true; $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
      <a href="<?php echo e(route('articles', ['id' => $a['id']])); ?>">
        <img src="/storage<?php echo e($a['img_url']); ?>" />
        <span><?php echo e($a['login']); ?></span>
      </a>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
    <span>Aucun article</span>
  <?php endif; ?>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\lukac\OneDrive\Bureau\mmi\ANNEE2\laragram\resources\views/actualites.blade.php ENDPATH**/ ?>