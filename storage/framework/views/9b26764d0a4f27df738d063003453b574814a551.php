<script type="text/javascript" src="http://services.iperfect.net/js/IP_generalLib.js">




<?php $__env->startSection('content'); ?>

    <div class="col-sm-8 blog-main">
		<h1>Update Event</h1>
		<form method="POST"   action="/events/<?php echo e($id); ?>">

        	<?php echo e(csrf_field()); ?> 

		  <div class="form-group">
		    <label for="title">Name:</label>
		    <input type="text" class="form-control" id='name' name="name" value="<?php echo e($event->name); ?>">
		  </div>
		  <div class="form-group">
		    <label for="body">Date:</label>
            <input class="IP_calendar"  type="text" id="date" name="date" title="Y-m-d" value="<?php echo e($event->date); ?>">   
		  </div>
		  <div class="form-group">
		  	<label>Early Price</label>
		  	<input type="text" class="form-control" id='early_cost'  name="early_cost" value="<?php echo e($event->early_cost); ?>">
		  </div>
		  <div class="form-group">
		  	<label>Regular Price</label>
		  	<input type="text" class="form-control" id='reg_cost' name="reg_cost" value="<?php echo e($event->reg_cost); ?>">
		  </div>
		  <div class="form-group">
		  	<button type="submit" class="btn btn-primary">Update</button>
		  </div>
		</form>
	</div>
   
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>