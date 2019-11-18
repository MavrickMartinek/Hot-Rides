<script type="text/javascript" src="http://services.iperfect.net/js/IP_generalLib.js">




<?php $__env->startSection('content'); ?>

  <div class="col-sm-8 blog-main">	
		<h1>Register Vehicle</h1>
		<form method="POST" action="/register/<?php echo e($id); ?>">
		  <div class="form-group">
		  	



		  <div class="form-group">
		  	<button type="submit" class="btn btn-primary">Register</button>
		  </div>
		</form>
	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>