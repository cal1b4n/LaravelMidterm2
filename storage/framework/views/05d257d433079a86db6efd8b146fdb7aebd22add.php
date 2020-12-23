
<?php $__env->startSection('content'); ?>
<form action="/pcparts/store" method="POST">
    <input type="hidden" name="_token" id="csrf-token" value="<?php echo e(Session::token()); ?>" />
    <input name="name" type="text" placeholder="Name" required>
    <input name="price" type="number" placeholder="Price" required>
	<input name="description" type="text" placeholder="Description" required>
	<input name="category" type="text" placeholder="category" required>
    <button type="submit">add</button>
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH X:\Projects\UNI\LARAVEL\Saba_Sakvarelidze-Midterm2\resources\views/pcParts/create.blade.php ENDPATH**/ ?>