
<?php $__env->startSection('content'); ?>
<form action="/pcparts/update/<?php echo e($pcPart->id); ?>" method="POST">
	<input type="hidden" name="_token" id="csrf-token" value="<?php echo e(Session::token()); ?>" />
	<input value="<?php echo e($pcParts->name); ?>" name="name" type="text" placeholder="Name" required>
	<input value="<?php echo e($pcParts->price); ?>" name="price" type="number" placeholder="Price" required>
	<input value="<?php echo e($pcParts->description); ?>" name="description" type="text" placeholder="Description" required>
	<input value="<?php echo e($pcParts->category); ?>" name="category" type="text" placeholder="category" required>
	<button type="submit">edit</button>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH X:\Projects\UNI\LARAVEL\Saba_Sakvarelidze-Midterm2\resources\views/pcparts/edit.blade.php ENDPATH**/ ?>