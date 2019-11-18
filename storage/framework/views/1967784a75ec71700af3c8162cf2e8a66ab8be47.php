<?php $__env->startSection('content'); ?>

    <div class="col-sm-8 blog-main">
		<h1>Edit Your Club</h1>
		<form method="POST" action="/clubs/<?php echo e($id); ?>">

        	<?php echo e(csrf_field()); ?> 

		  <div class="form-group">
		    <label for="title">Club Title:</label>
		    <input type="text" class="form-control" id='name' name="name">
		  </div>
          <div class="form-group">
		  	<label>Region of Representation:</label>
		  	<input type="text" class="form-control" id='region'  name="region">
		  </div>		 
		  <div class="form-group">
		  	<label>Description</label>
		  	<input type="text" class="form-control" id='description'  name="description">
		  </div>
		  <div class="form-group">
		  	<button type="submit" class="btn btn-primary">Register</button>
		  </div>
		</form>
	</div>
   
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>