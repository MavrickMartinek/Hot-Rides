<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    You are logged in!
                    <?php if(Auth::user()->isAdmin()): ?>
                        <?php echo $__env->make('admin', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    <?php endif; ?>
                    <br/>
                    <center><h1>User View</h1></center>
                    <table>
                    <tr>
                        <td>
                        <a class="btn btn-primary btn-lg" style="width:175px" href="<?php echo e(url('vehicles')); ?>">
                            View Vehicles
                        </a>
                        </td>
                    </tr>
                    <tr>
                    <td>
                        <a class="btn btn-primary btn-lg" style="width:175px" href="<?php echo e(url('registrations/create')); ?>">
                            Register For Event
                        </a>
                        </td>
                    <td>
                    <a class="btn btn-primary btn-lg" style="width:175px" href="<?php echo e(url('events')); ?>">
			            View Events
		            </a>
                    <td>
                        <a class="btn btn-primary btn-lg" style="width:175px" href="<?php echo e(url('registrations')); ?>">
                            View Registrations
                        </a>
                        </td>
                    </td>
                    </tr>
                    <tr>
                        <td>
                        <a class="btn btn-primary btn-lg" style="width:175px" href="<?php echo e(url('sponsors')); ?>">
                            View Sponsors
                        </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <a class="btn btn-primary btn-lg" style="width:175px" href="<?php echo e(url('clubs')); ?>">
                            View Clubs
                        </a>
                        </td>
                        <td>
                        <a class="btn btn-primary btn-lg" style="width:175px" href="<?php echo e(url('clubs/create')); ?>">
                            Create New Club
                        </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <a class="btn btn-primary btn-lg" style="width:175px" href="<?php echo e(url('payments/create')); ?>">
                                Make Payment
                            </a>
                        </td>
                        <td>
                        <a class="btn btn-primary btn-lg" style="width:175px" href="<?php echo e(url('payments')); ?>">
                            View Payments
                        </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <a class="btn btn-primary btn-lg" style="width:175px" href="<?php echo e(url('donations/create')); ?>">
                            Donate
                        </a>
                        </td>
                        <td>
                        <a class="btn btn-primary btn-lg" style="width:175px" href="<?php echo e(url('donations')); ?>">
                            View Donations
                        </a>
                        </td>
                    </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>