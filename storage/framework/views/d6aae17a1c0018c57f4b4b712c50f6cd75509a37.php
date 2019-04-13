<!DOCTYPE html>

<html>

<head>

	<title> Billing </title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</head>

<body>

	<div class="container">
		
		<div class="jumbotron">

			<legend style="text-align: center;"> Billing Address </legend>
			
			<form method="post" action="/placeorder" enctype="multipart/form-data">

				<?php echo e(csrf_field()); ?>

		 
			<div class="form-group">
		   
		    	<label> Enter Address: </label>
		    	<input type="text" class="form-control" name="address" placeholder="H. No, Street, District, State, Pin Code" value="<?php echo e(old('address')); ?>">
		  
		  	</div>

		  	<div class="form-group">
		   
		  		<label> Enter Mobile Number: </label>
		    	<input type="text" class="form-control" name="mobile" placeholder="Enter Mobile Number" value="<?php echo e(old('mobile')); ?>">
		  
		  	</div>

		  	<br>

		  	<p style="text-align: center;">

		  		<button type="submit" name="submit" class="btn btn-primary"> Place Order </button>

		  		<a href="/cartitems" class="btn btn-primary" > Back to Cart </a>

		  	</p>

		  	<?php if($errors->any()): ?>

		  		<div class="alert alert-danger">
		  			
		  			<ul>
		  				
		  				<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

		  					<li> <?php echo e($error); ?> </li>

		  				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

		  			</ul>

		  		</div>

		  	<?php endif; ?>

		</form>

		</div>

	</div>

</body>

</html><?php /**PATH C:\xampp\htdocs\laravel\my\resources\views/placeorder.blade.php ENDPATH**/ ?>