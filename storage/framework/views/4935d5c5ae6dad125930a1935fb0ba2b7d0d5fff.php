

<?php $__env->startSection('css'); ?>
  <link href="/css/publish.css" rel="stylesheet">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
  <div class="publish">
  <h3>Une inspiration, une humeur ? </h3>
  <span class="callToAction">Partagez...</span>
  <form action='<?php echo e(url("publishT")); ?>' method='POST' enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <input type='text' name='titre' placeholder='Titre de la publication'>
    <label class="file"><i class='bx bx-upload'></i>Charger une image<input type="file" id="file" name="img" accept="image/*"></label>
    <input type='text' pattern="^#[a-z0-9_]+(( )+#[a-z0-9_]+)*( )*$" name='tags' placeholder='Tags'>
    <input type='submit' name='publish' value='Publier'>
  </form>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\lukac\OneDrive\Bureau\mmi\ANNEE2\laragram\resources\views/publish.blade.php ENDPATH**/ ?>