<!-- index.blade.php 

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registrations</title>
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
        <th>Event</th>
        <th>Payment Recieved</th>
        <th>Represented Club</th>
        <th>Registered Vehicle</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      
      <?php $__currentLoopData = $registrations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $registration): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
      <tr>
        <td><?php echo e($registration['id']); ?></td>
        <td><?php echo e($registration['user_id']); ?></td>
        <td><?php echo e($registration['payment_id']); ?></td>
        <td><?php echo e($registration['club_id']); ?></td>
        <td><?php echo e($registration['vehicle_id']); ?></td>
        <?php if(Auth::user()->isAdmin() || Auth::user()->id == $registration['user_id']): ?>
        <td><a href="<?php echo e(action('RegistrationController@edit', $registration['id'])); ?>" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="<?php echo e(action('RegistrationController@destroy', $registration['id'])); ?>" method="post">
            <?php echo csrf_field(); ?>
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      <?php endif; ?>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>