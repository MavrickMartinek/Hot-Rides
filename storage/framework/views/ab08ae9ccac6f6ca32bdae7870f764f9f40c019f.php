<script type="text/javascript" src="http://services.iperfect.net/js/IP_generalLib.js">




<?php $__env->startSection('content'); ?>

    <div class="col-sm-8 blog-main">
		<h1>Create Event</h1>
		<form method="POST" action="/events">

        	<?php echo e(csrf_field()); ?> 

		  <div class="form-group">
				<div class="form-label-group">
						<input id="name" type="text" class="form-control" name="name" placeholder="Name:">
						<label for="name">Name:</label>
				</div>
		  </div>
		  <div class="form-group">
		    <label for="body">Date:</label>
            <input class="IP_calendar"  type="text" id="date" name="date" title="Y-m-d">   
		  </div>
		  <div class="form-group">
				<div class="form-label-group">
						<input id="early_cost" type="text" class="form-control" name="early_cost" placeholder="Early Price">
						<label for="early_cost">Early Price</label>
				</div>
		  </div>
		  <div class="form-group">
				<div class="form-label-group">
						<input id="reg_cost" type="text" class="form-control" name="reg_cost" placeholder="Regular Price">
						<label for="reg_cost">Regular Price</label>
				</div>
		  </div>
		  <div class="form-group">
		  	<button type="submit" class="btn btn-primary">Create</button>
		  </div>
		</form>
	</div>
   
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>