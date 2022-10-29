<nav class="bottom">
  <a class="<?php echo e(isset($activeMenu) && $activeMenu =='actu' ? 'active' : ''); ?>" href="<?php echo e(url('actualites')); ?>"><i class='bx bx-home'></i></a>
  <a class="<?php echo e(isset($activeMenu) && $activeMenu =='search' ? 'active' : ''); ?>" href="<?php echo e(url('search')); ?>"><i class='bx bx-search'></i></a>
  <a class="<?php echo e(isset($activeMenu) && $activeMenu =='article' ? 'active' : ''); ?>" href="<?php echo e(url('articles')); ?>"><i class='bx bx-user'></i></a>
  <a href="<?php echo e(url('logout')); ?>"><i class='bx bx-log-out-circle'></i></a>
</nav>
<?php /**PATH C:\Users\lukac\OneDrive\Bureau\mmi\ANNEE2\laragram\resources\views/layouts/bottomMenu.blade.php ENDPATH**/ ?>