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
        <th>Event ID</th>
        <th>Sponsor Name</th>
        <th>Agreement Description</th>
        <th>Negotiated Price</th>
        <?php if(Auth::user()->isAdmin()): ?>
          <th colspan="2">Action</th>
        <?php endif; ?>
      </tr>
    </thead>
    <tbody>
      
      <?php $__currentLoopData = $sponsors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sponsor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
     
      <tr>
        <td><?php echo e($sponsor['id']); ?></td>
        <td><?php echo e($sponsor['user_id']); ?></td>
        <td><?php echo e($sponsor['name']); ?></td>
        <td><?php echo e($sponsor['description']); ?></td>
        <td><?php echo e($sponsor['charge']); ?></td>
        <?php if(Auth::user()->isAdmin()): ?>
        <td><a href="<?php echo e(action('SponsorController@edit', $sponsor['id'])); ?>" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="<?php echo e(action('SponsorController@destroy', $sponsor['id'])); ?>" method="post">
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