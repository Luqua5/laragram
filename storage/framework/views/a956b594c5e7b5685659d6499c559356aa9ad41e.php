<?php if($message = Session::get('error')): ?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <p><?php echo e($message); ?></p>
</div>
<?php endif; ?> <?php /**PATH C:\Users\lukac\OneDrive\Bureau\mmi\ANNEE2\laragram\resources\views/flash-message.blade.php ENDPATH**/ ?>