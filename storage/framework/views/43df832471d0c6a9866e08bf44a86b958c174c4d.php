

<?php $__env->startSection('css'); ?>
  <link href="/css/articles.css" rel="stylesheet">
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
  <h1><?php echo e($articles[0]['login']); ?></h1>
  <?php $__empty_1 = true; $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
    <article class="post">
      <div>
        <span class="auteur"><?php echo e($a['login']); ?></span>
      </div>
      <a href="<?php echo e(route('articles', ['id' => $a['id']])); ?>"><img src="/storage<?php echo e($a['img_url']); ?>" /></a>
      <h3><?php echo e($a['titre']); ?></h3>
      <div class="desc">
        <span class="tags"><?php echo e($a['tags']); ?></span>
        <a href=""><i class='bx bx-message-rounded-dots'></i></a>
        <a href=""><i class='bx bx-heart'></i></a>
      </div>
    </article>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
    <span>Aucun article</span>
  <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\lukac\OneDrive\Bureau\mmi\ANNEE2\laragram\resources\views/articles.blade.php ENDPATH**/ ?>