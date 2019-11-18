<!-- index.blade.php 

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Vehicles</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
  </head>
  <body>-->

<?php $__env->startSection('content'); ?>
    <div class="container">
    <br />
    <?php if(\Session::has('success')): ?>
      <div class="alert alert-success">
        <p><?php echo e(\Session::get('success')); ?></p>
      </div><br />
     <?php endif; ?>
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Make</th>
        <th>Model</th>
        <th>Colour</th>
        <th>Year</th>
        <th>Image</th>
        
          <th colspan="2">Action</th>
       
      </tr>
    </thead>
    <tbody>
      
      <?php $__currentLoopData = $vehicles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
     
      <tr>
        <td><?php echo e($vehicle['id']); ?></td>
        <td><?php echo e($vehicle['make']); ?></td>
        <td><?php echo e($vehicle['model']); ?></td>
        <td><?php echo e($vehicle['colour']); ?></td>
        <td><?php echo e($vehicle['year']); ?></td>
        <td><img src="<?php echo e($vehicle['image']); ?>" alt="Missing Image"/></td>
        <?php $__currentLoopData = $registrations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $registration): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if(Auth::user()->isAdmin() == false & $vehicle['id'] == $registration['vehicle_id'] & $registration['user_id'] == Auth::user()->id): ?>
        <td><a href="<?php echo e(action('VehicleController@edit', $vehicle['id'])); ?>" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="<?php echo e(action('VehicleController@destroy', $vehicle['id'])); ?>" method="post">
            <?php echo csrf_field(); ?>
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
        <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php if(Auth::user()->isAdmin()): ?>
        <td><a href="<?php echo e(action('VehicleController@edit', $vehicle['id'])); ?>" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="<?php echo e(action('VehicleController@destroy', $vehicle['id'])); ?>" method="post">
            <?php echo csrf_field(); ?>
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
        <?php endif; ?>
      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>
  
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>