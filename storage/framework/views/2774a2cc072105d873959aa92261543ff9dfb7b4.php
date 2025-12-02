
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('sidebar.menubar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- Page Wrapper -->
<div class="page-wrapper">
    <!-- Page Content -->
    <div class="content container-fluid">

        <!-- Page Header -->
        <div class="page-header mt-3 mb-4">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title font-weight-bold">

                        Project Employees – <span class="text-primary"><?php echo e($project->project_name); ?></span>
                    </h3>

                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo e(url('/')); ?>">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo e(url('/projects')); ?>">Projects</a></li>
                        <li class="breadcrumb-item active">Project Employees</li>
                    </ul>
                </div>

                <div class="col-auto ml-auto d-flex">
                    <a href="#" class="btn btn-primary btn-sm  mr-2" data-toggle="modal" data-target="#assign_employee">
                        <i class="fa fa-plus mr-1"></i> Assign Employee
                    </a>
                    <a href="#" class="btn btn-outline-success btn-sm ">
                        <i class="fa fa-file-excel-o mr-1"></i> Export
                    </a>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        <!-- Notification Messages -->
        <?php echo Toastr::message(); ?>


        <!-- Employee Table Section -->
        <div class="card shadow-sm">


            <div class="card-body p-3">
                <div class="table-responsive">
                    <table class="table table-hover custom-table datatable">
                        <thead class="thead-light">
                            <tr>
                                <th>Employee</th>
                                <th>ID</th>
                                <th>Email</th>
                                <th>Department</th>
                                <th>Position</th>
                                <th>Phone</th>
                                <th>Status</th>
                                <th>Assigned On</th>
                                <th class="text-right">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $__currentLoopData = $assignments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $assignment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php $employee = $assignment->employee; ?>

                                <?php if($employee): ?>
                                <tr>
                                    <!-- Employee Column -->
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <?php if($employee->profile): ?>
                                                <img src="<?php echo e(URL::to('/assets/images/'. $employee->profile)); ?>"
                                                     class="rounded-circle mr-2"
                                                     width="40" height="40" alt="Profile">
                                            <?php else: ?>
                                                <div class="avatar avatar-sm bg-primary text-white rounded-circle mr-2">
                                                    <?php echo e(strtoupper(substr($employee->name, 0, 1))); ?>

                                                </div>
                                            <?php endif; ?>

                                            <div>
                                                <a href="<?php echo e(url('employee/profile/'.$employee->employee_id)); ?>"
                                                   class="font-weight-semibold text-dark">
                                                    <?php echo e($employee->name); ?>

                                                </a>
                                                <div class="text-muted small"><?php echo e($employee->position); ?></div>
                                            </div>
                                        </div>
                                    </td>

                                    <td><?php echo e($employee->employee_id); ?></td>
                                    <td><?php echo e($employee->email); ?></td>

                                    <!-- Department -->
                                    <td>
                                        <?php if($employee->department): ?>
                                            <span class="badge badge-dark px-4 py-2">
                                                <?php echo e($employee->department->department); ?>

                                            </span>
                                        <?php else: ?>
                                            <span class="text-muted">Not Assigned</span>
                                        <?php endif; ?>
                                    </td>

                                    <td><?php echo e($employee->position); ?></td>
                                    <td><?php echo e($employee->phone); ?></td>

                                    <!-- Status -->
                                    <td>
                                        <span class="badge  px-4 py-2 badge-<?php echo e($employee->account_status == 'Active' ? 'success' : 'danger'); ?> px-3 py-1">
                                            <?php echo e(ucfirst($employee->account_status)); ?>

                                        </span>
                                    </td>

                                    <!-- Assignment Date -->
                                    <td>
                                        <?php echo e(\Carbon\Carbon::parse($assignment->start_date)->format('d M, Y')); ?>

                                    </td>

                                    <!-- Actions -->
                                    <td class="text-right">
                                        <div class="dropdown">
                                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown">
                                                <i class="material-icons">more_vert</i>
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-right shadow-sm">
                                                <a class="dropdown-item" href="<?php echo e(url('employee/profile/'.$employee->employee_id)); ?>">
                                                    <i class="fa fa-eye mr-2"></i> View Profile
                                                </a>
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_assignment">
                                                    <i class="fa fa-pencil mr-2"></i> Edit Assignment
                                                </a>
                                                <a class="dropdown-item text-danger" href="#"
                                                   onclick="return confirm('Are you sure you want to remove this employee from the project?')">
                                                    <i class="fa fa-trash-o mr-2"></i> Remove
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <?php endif; ?>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- /Employee Section -->

    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\HRS\resources\views/projects/employee-list.blade.php ENDPATH**/ ?>