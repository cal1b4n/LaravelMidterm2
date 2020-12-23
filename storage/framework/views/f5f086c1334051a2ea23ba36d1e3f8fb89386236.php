
<?php $__env->startSection('content'); ?>
	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>PC PARTS</title>
	</head>
	<body>
		<div>
			<a class="btn btn-info" href="/pcparts/create">add</a>
		</div>
		<table class="table table-striped table-dark">
			<thead>
				<tr>
					<th scope="col">ID</th>
					<th scope="col">Name</th>
					<th scope="col">Description</th>
					<th scope="col">Price</th>
					<th scope="col">Category</th>
				</tr>
			</thead>
			<tbody id="tableBody">
				
			</tbody>
		</table>
	</body>
	</html>
	<script type="application/javascript" defer>
        var loading = false;
        function del(url) {
            fetch(url).then(x => {reload()});
        }
        function reload() {
            if(loading) return;
            loading = true;
            const _  = document.getElementById('tableBody');
            _.innerHTML = "";
            fetch('/pcparts/ajax')
                .then(res => res.json())
                .then(data => {
                    data.forEach((e) => {
                        _.innerHTML +=`
							<tr>
							<th>${ e.id }</th>
							<th>${ e.name }</th>
							<td>${ e.description }</td>
							<td>${ e.price }</td>
							<td>${ e.category }</td>
							<td>
								<a class="btn btn-info" href="/pcparts/edit/${ e.id }"> Edit </a>
								<a class="btn btn-danger" href="/pcparts/destroy/${ e.id }"> Delete </a>
							</td>
						</tr>
						`
                    });
                    loading = false;
                });
        }
        reload();
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH X:\Projects\UNI\LARAVEL\Saba_Sakvarelidze-Midterm2\resources\views/pcParts/index.blade.php ENDPATH**/ ?>