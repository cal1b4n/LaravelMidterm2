
<?php $__env->startSection('content'); ?>
	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Edit Computers</title>
	</head>
	<body>
		<form action="/prebuilt/update/<?php echo e($prebuiltComputer->id); ?>" method="POST">
			<input type="hidden" name="_token" id="csrf-token" value="<?php echo e(Session::token()); ?>" />
			<input value="<?php echo e($prebuiltComputer->name); ?>" name="name" type="text" placeholder="Name" required>
			<input value="<?php echo e($prebuiltComputer->price); ?>" name="price" type="number" placeholder="Price" required>
			<input value="<?php echo e($prebuiltComputer->description); ?>" name="description" type="text" placeholder="Description" required>
			<button type="submit">edit</button>
		</form>
	</body>
	</html>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH X:\Projects\UNI\LARAVEL\Saba_Sakvarelidze-Midterm2\resources\views/prebuilt/edit.blade.php ENDPATH**/ ?>