<?php $__env->startSection('content'); ?>

	

	<div class="container">

		<legend style="text-align: center;"> Available Fruits <a href="/addItem" class="btn btn-primary"> Add Item </a> </legend> 

    <div class="row justify-content-center">

        <div class="col-md-12">

            <table class="table table-striped table-bordered">
				 
			 	<thead class="thead-dark" style="text-align: center;">
				
				    <tr>
				
				      	<th scope="col">Fruit Image</th>
				      	<th scope="col">Fruit Name</th>
				      	<th scope="col">Fruit Description</th>
				      	<th scope="col">Fruit Price</th>
				      	<th scope="col"> Manage </th>
				
				    </tr>
				
				</thead>
				
			  	<tbody style="text-align: center;">

			  		
				
						<?php $__currentLoopData = $fruits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fruit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

							<tr>
						
						      	<th scope="row"> <img src=" <?php echo e(asset('images/'.$fruit->image)); ?> " alt="Fruit Image" width="100px" height="100px">  </th>
						      	<td> <?php echo e($fruit->name); ?> </td>
						      	<td> <?php echo e($fruit->description); ?> </td>
						      	<td> <?php echo e($fruit->price); ?> </td>
						      	<td> <a href="/edit/<?php echo e($fruit->id); ?>" class="btn btn-success"> Edit </a> 
						      		 <a href="/delete/<?php echo e($fruit->id); ?>" class="btn btn-danger"> Delete </a> 
						      	</td>
						
						    </tr>

						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

				</tbody>

			</table>

        </div>

    </div>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\my\resources\views//admin.blade.php ENDPATH**/ ?>