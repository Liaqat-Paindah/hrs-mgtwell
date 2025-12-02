
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('sidebar.menubar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Organization Chart</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active">Organization Chart</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="tree-container">
                            <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="department-tree mb-4">
                                <div class="department-header bg-light p-3 mb-3">
                                    <h4 class="mb-0">
                                        <i class="fa fa-building"></i> 
                                        <?php echo e($department->department); ?>

                                        <?php if($department->department_head_id): ?>
                                            <small class="text-muted">
                                                - Head: <?php echo e($department->head->name ?? 'Not assigned'); ?>

                                            </small>
                                        <?php endif; ?>
                                    </h4>
                                </div>
                                
                                <div class="row">
                                    <?php $__currentLoopData = $department->employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-md-3 mb-3">
                                        <div class="card employee-card">
                                            <div class="card-body text-center">
                                                <?php if($employee->profile): ?>
                                                    <img src="<?php echo e(asset('storage/profiles/'.$employee->profile)); ?>" 
                                                         class="rounded-circle mb-2" width="60" height="60" alt="Profile">
                                                <?php else: ?>
                                                    <img src="<?php echo e(asset('assets/img/default-user.png')); ?>" 
                                                         class="rounded-circle mb-2" width="60" height="60" alt="Profile">
                                                <?php endif; ?>
                                                <h6 class="mb-1"><?php echo e($employee->name); ?></h6>
                                                <p class="text-muted mb-1 small"><?php echo e($employee->position); ?></p>
                                                <span class="badge badge-primary"><?php echo e($employee->employee_id); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.tree-container {
    font-family: Arial, sans-serif;
}
.department-tree {
    border: 1px solid #e0e0e0;
    border-radius: 8px;
    overflow: hidden;
}
.department-header {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
}
.employee-card {
    transition: transform 0.2s;
    border: 1px solid #e0e0e0;
}
.employee-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
}
</style>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\HRS\resources\views/organization/chart.blade.php ENDPATH**/ ?>