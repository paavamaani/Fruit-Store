<?php $__env->startSection('content'); ?>

	

	<div class="container">

		<legend style="text-align: center;"> Available Fruits </legend> 

    <div class="row justify-content-center">

        <div class="col-md-12">

            <table class="table table-striped table-bordered">
				 
			 	<thead class="thead-dark" style="text-align: center;">
				
				    <tr>
				
				      	<th scope="col">Fruit Image</th>
				      	<th scope="col">Fruit Name</th>
				      	<th scope="col">Fruit Description</th>
				      	<th scope="col">Fruit Price</th>
				      	<th scope="col"> Add to Cart </th>
				
				    </tr>
				
				</thead>
				
			  	<tbody style="text-align: center;">

			  		
				
						<?php $__currentLoopData = $fruits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fruit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

							<tr>
						
						      	<td scope="row"> 

						      		<img src=" <?php echo e(asset('images/'.$fruit->image)); ?> " alt="Fruit Image" width="100px" height="100px">  

						      	</td>
						      	
						      	<td style="line-height: 100px;"> <?php echo e($fruit->name); ?> </td>
						      	
						      	<td> <?php echo e($fruit->description); ?> </td>
						      	
						      	<td style="line-height: 100px;"> <?php echo e($fruit->price); ?> </td>
						      	
						      	<td style="line-height: 100px;"> 

						      		<a href="/cart/<?php echo e($fruit->id); ?>" class="btn btn-primary"> Add </a> 

						      	</td>

						    </tr>

						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

				</tbody>

			</table>

        </div>

    </div>

</div>

<h1 class="title text-center" id="whyus" style="font-family: Courgette; margin-top: 2%; margin-bottom: 2%;"> <u> Why buy from us? </u>  </h1> 

    <p class="divider" style="margin-top: 3rem;margin-bottom: 3rem; background-color: white;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);border: none;border: 0.5px solid white;width: 86%;margin-left: auto;margin-right: auto;overflow: hidden;"></p>

    <div class="row feature" style="width: 84%; margin-left: auto; margin-right: auto; background-color: white;">
        
        <div class="col-md-7 description1" style="margin-top: auto; margin-bottom: auto;">
            
            <h1 class="title"> Wide Variety </h1>

            <blockquote class="blockquote">
  
                <p class="mb-0">
                
                     We wisely choose wide variety of fruits across the country from trusted people.
                
                </p>
            
            </blockquote>

        </div>

        <div class="col-md-5 float-right">
            
            <img src="images/widevariety.jpg" class="img-responsive img-thumbnail">

        </div>

    </div>

    <p class="divider" style="margin-top: 3rem;margin-bottom: 3rem; background-color: white;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);border: none;border: 0.5px solid white;width: 86%;margin-left: auto;margin-right: auto;overflow: hidden;"></p>

    <div class="row feature" style="width: 84%; margin-left: auto; margin-right: auto; background-color: white;">

         <div class="col-md-5 float-left">
            
            <img src="images/handpicked.jpg" class="img-responsive img-thumbnail">

        </div>
        
        <div class="col-md-7 description1" style="margin-top: auto; margin-bottom: auto;">
            
            <h1 class="title"> Organically Ripened </h1>

            <blockquote class="blockquote">
  
                <p class="mb-0">
                
                   All our fruits are hand picked and naturally ripened without using any chemical substance. 
                
                </p>
            
            </blockquote>

        </div>

    </div>

    <p class="divider" style="margin-top: 3rem;margin-bottom: 3rem; background-color: white;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);border: none;border: 0.5px solid white;width: 86%;margin-left: auto;margin-right: auto;overflow: hidden;"></p>

    <h1 class="title text-center" id="team" style="font-family: Courgette; margin-top: 2%; margin-bottom: 2%;"> <u> About us? </u>  </h1>


    <p class="divider" style="margin-top: 3rem;margin-bottom: 3rem; background-color: white;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);border: none;border: 0.5px solid white;width: 86%;margin-left: auto;margin-right: auto;overflow: hidden;"></p>

    <div class="row text-center about1" style="width: 84%; margin-left: auto; margin-right: auto;">
        
        <div class="col-md-6 person1" style="background-color: white; color: black;"> <br>

            <blockquote class="blockquote">
  
                <p class="mb-0">
                
                    We are passionate and We are concerned about our customers.
                
                </p>
            
            </blockquote>

            <cite title="Source Title"> - P. Trinath Reddy </cite>

            <br> <br>

        </div>

        <div class="col-md-6 person2" style="background-color: black; color: white;"> <br>

            <blockquote class="blockquote">
  
                <p class="mb-0">
                
                    We learnt from our failures and serving our best. 
                
                </p>
            
            </blockquote>

            <cite title="Source Title"> - M. Paavamaani</cite>
            
        </div>

    </div> 

    <br>

    <p class="divider" style="margin-top: 3rem;margin-bottom: 3rem; background-color: white;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);border: none;border: 0.5px solid white;width: 86%;margin-left: auto;margin-right: auto;overflow: hidden;"></p>

    <footer style="margin-top: 0; background-color: black; color: white;">
        
        <div class="row" id="policy">
        
            <div class="col-md-4 text-center"> <br>
                
                <p> &copy; 2019-2020 Company, Inc. </p>

            </div>

            <div class="col-md-4 text-center"> <br>
                
                <a href="#" class="privacy"> Privacy </a>
                <a href="#" class="terms"> Terms and Conditions </a>

            </div>

            <div class="col-md-4 text-center"> <br>
                    
                <a href="#" class="facebook"> <img src="images/facebook.png"> </a>
                <a href="#" class="instagram"> <img src="images/instagram.png"> </a>
                <a href="#" class="twitter"> <img src="images/twitter.png"> </a>

                <br> <br>

            </div>

        </div>

    </footer>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\my\resources\views/display.blade.php ENDPATH**/ ?>