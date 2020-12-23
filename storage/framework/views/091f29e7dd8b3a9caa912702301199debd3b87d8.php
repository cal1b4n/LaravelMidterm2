
<?php $__env->startSection('content'); ?>
	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Create Computer</title>
	</head>
	<body>
		<form action="/prebuilt/store" method="POST">
			<input type="hidden" name="_token" id="csrf-token" value="<?php echo e(Session::token()); ?>" />
			<input name="name" type="text" placeholder="Name" required>
			<input name="price" type="number" placeholder="Price" required>
			<input name="description" type="text" placeholder="Description" required>
			<button type="submit">add</button>
		</form>
	</body>
	</html>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH X:\Projects\UNI\LARAVEL\Saba_Sakvarelidze-Midterm2\resources\views/prebuilt/create.blade.php ENDPATH**/ ?>