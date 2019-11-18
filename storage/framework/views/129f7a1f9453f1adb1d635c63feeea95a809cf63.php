<script type="text/javascript" src="http://services.iperfect.net/js/IP_generalLib.js">




<?php $__env->startSection('content'); ?>

    <div class="col-sm-8 blog-main">
		<h1>Pay Us</h1>
		<form method="POST" action="/donations/<?php echo e($id); ?>">

        	<?php echo e(csrf_field()); ?> 

		  <div class="form-group">
		    <label for="title">Credit Card Type:</label>
		    <input type="text" class="form-control" id='type' name="type">
		  </div>
          <div class="form-group">
		  	<label>Card Number</label>
		  	<input type="text" class="form-control" id='number' name="number">
		  </div>

		  <div class="form-group">
		    <label for="body">Expiry Date:</label>
            <input class="IP_calendar"  type="text" id="expiry" name="expiry" title="Y-m-d">   
		  </div>
		  <div class="form-group">
		  	<label>Cardholder Name:</label>
		  	<input type="text" class="form-control" id='name'  name="name">
		  </div>
		  <div class="form-group">
		  	<label>Registration Fee:</label>
		  	<input type="text" class="form-control" id='charge' name="charge">
		  </div>
		  <div class="form-group">
		  	<button type="submit" class="btn btn-primary">Pay</button>
		  </div>
		</form>
	</div>
   
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>