<!-- index.blade.php 

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Approved Payments</title>
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
        <th>Card Type</th>
        <th>Card Number</th>
        <th>Expiry Date</th>
        <th>Carholder Name</th>
        <th>Amount Charged</th>
        <th>Date Created</th>
        <?php if(Auth::user()->isAdmin()): ?>
          <th colspan="2">Action</th>
        <?php endif; ?>
      </tr>
    </thead>
    <tbody>
      
      <?php $__currentLoopData = $payments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $payment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <?php if(Auth::user()->isAdmin() || Auth::user()->id == $payment->user_id): ?>
      <tr>
        <td><?php echo e($payment['id']); ?></td>
        <td><?php echo e($payment['type']); ?></td>
        <td><?php echo e($payment['number']); ?></td>
        <td><?php echo e($payment['expiry']); ?></td>
        <td><?php echo e($payment['name']); ?></td>
        <td><?php echo e($payment['charge']); ?></td>
        
        <td><a href="<?php echo e(action('PaymentController@edit', $payment['id'])); ?>" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="<?php echo e(action('PaymentController@destroy', $payment['id'])); ?>" method="post">
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