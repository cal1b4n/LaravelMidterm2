
<?php $__env->startSection('content'); ?>
	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Prebuilt Computers</title>
	</head>
	<body>
		<div>
			<a class="btn btn-info" href="/prebuilt/create">add</a>
		</div>
		<table class="table table-striped table-dark">
			<thead>
				<tr>
					<th scope="col">ID</th>
					<th scope="col">Name</th>
					<th scope="col">Price</th>
					<th scope="col">Actions</th>
				</tr>
			</thead>
			<tbody>
				<?php $__currentLoopData = $prebuiltComputer; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prebuiltComputer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<tr>
						<th><?php echo e($prebuiltComputer->id); ?></th>
						<th><?php echo e($prebuiltComputer->name); ?></th>
						<td><?php echo e($prebuiltComputer->price); ?></td>
						<td>
							<a class="btn btn-info" href="/prebuilt/edit/<?php echo e($prebuiltComputer->id); ?>"> Edit </a>
							<a class="btn btn-danger" href="/prebuilt/destroy/<?php echo e($prebuiltComputer->id); ?>"> Delete </a>
						</td>
					</tr>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</tbody>
		</table>
	</body>
	</html>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH X:\Projects\UNI\LARAVEL\Saba_Sakvarelidze-Midterm2\resources\views/prebuilt/index.blade.php ENDPATH**/ ?>