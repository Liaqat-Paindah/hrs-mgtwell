
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('sidebar.menubar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- Page Wrapper -->
<div class="page-wrapper">
    <!-- Page Content -->
    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Employee View</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active">Employee Edit</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        
        <?php echo Toastr::message(); ?>


        <div class="row">
            <div class="col-lg-12">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h4 class=" color:white mb-0">Edit Employee Details</h4>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo e(url('all/employee/update')); ?>" method="POST" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" name="id" value="<?php echo e($employees2[0]->id); ?>">
                            <input class="form-control" name="employee_id" type="hidden" name="employee_id" value="<?php echo e($employees2[0]->employee_id); ?>">

                            
                            <div class="form-group mb-4">
                                <label class="fw-bold">Profile Image:</label>
                                <div class="mb-2">
                                    <?php if(!empty($employees2[0]->profile)): ?>
                                    <div class="d-inline-block me-3 text-center">
                                        <img src="<?php echo e(URL::to('/assets/images/' . $employees2[0]->profile)); ?>" alt="Profile" class="img-thumbnail" width="100">

                                    </div>
                                    <?php endif; ?>
                                </div>
                                <label class="btn btn-outline-primary">
                                    Upload New Profile
                                    <input type="file" name="profile" accept="image/*" hidden>
                                </label>
                            </div>

                            
                            <div class="form-group row mb-3">
                                <label class="col-form-label col-md-2">Name:</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="name" value="<?php echo e($employees2[0]->name); ?>">
                                </div>
                                <label class="col-form-label col-md-2">Family Name:</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="fname" value="<?php echo e($employees2[0]->fname); ?>">
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label class="col-form-label col-md-2">Email:</label>
                                <div class="col-md-4">
                                    <input type="email" class="form-control" name="email" value="<?php echo e($employees2[0]->email); ?>">
                                </div>
                                <label class="col-form-label col-md-2">Birth Date:</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control datetimepicker" name="birth_date" value="<?php echo e($employees2[0]->birth_date); ?>">
                                </div>
                            </div>

                            
                            <div class="form-group row mb-3">
                                <label class="col-form-label col-md-2">NID Number:</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="nid" value="<?php echo e($employees2[0]->nid); ?>">
                                </div>
                                <label class="col-form-label col-md-2">Blood Group:</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="blood_group" value="<?php echo e($employees2[0]->blood_group); ?>">
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label class="col-form-label col-md-2">Phone Number:</label>
                                <div class="col-md-4">
                                    <input type="number" class="form-control" name="phone" value="<?php echo e($employees2[0]->phone); ?>">
                                </div>
                                <label class="col-form-label col-md-2">Emergency Number:</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="second_phone" value="<?php echo e($employees2[0]->second_phone); ?>">
                                </div>
                            </div>

                            
                            <div class="form-group row mb-3">
                                <label class="col-form-label col-md-2">Account Number:</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="account_number" value="<?php echo e($employees2[0]->account_number); ?>">
                                </div>
                                <label class="col-form-label col-md-2">Position:</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="position" value="<?php echo e($employees2[0]->position); ?>">
                                </div>
                            </div>



                            <div class="form-group row mb-3">
                                <label class="col-form-label col-md-2">Work Station:</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" id="work_station:" name="work_station" value="<?php echo e($employees2[0]->work_station); ?>">
                                </div>
                                <label class="col-form-label col-md-2">Project:</label>
                                <div class="col-md-4">
                                    <input input type="text" class="form-control" id="project:" name="project" value="<?php echo e($employees2[0]->project); ?>"">
                                </div>
                            </div>








                            
                            <div class="form-group row mb-3">
                                <label class="col-form-label col-md-2">Gender:</label>
                                <div class="col-md-4">
                                    <select class="form-control" name="gender">
                                        <option value="Male" <?php echo e($employees2[0]->gender == 'Male' ? 'selected' : ''); ?>>Male</option>
                                        <option value="Female" <?php echo e($employees2[0]->gender == 'Female' ? 'selected' : ''); ?>>Female</option>
                                    </select>
                                </div>

                                <label class="col-form-label col-md-2">Department:</label>
                                <div class="col-md-4">
                                    <select class="form-control" name="department_id">
                                        <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($department->id); ?>" <?php echo e($employees2[0]->department_id == $department->id ? 'selected' : ''); ?>><?php echo e($department->department); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>

                            
                            <div class="form-group row mb-3">
                                <label class="col-form-label col-md-2">Permanent Address:</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="permanent_address" value="<?php echo e($employees2[0]->permanent_address); ?>">
                                </div>
                                <label class="col-form-label col-md-2">Current Address:</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="current_address" value="<?php echo e($employees2[0]->current_address); ?>">
                                </div>
                            </div>

                            
                            <div class="form-group row mb-3">
                                <label class="col-form-label col-md-2">Gross Salary:</label>
                                <div class="col-md-4">
                                    <input type="number" class="form-control" name="gross_salary" value="<?php echo e($employees2[0]->gross_salary); ?>">
                                </div>
                                <label class="col-form-label col-md-2">Tax:</label>
                                <div class="col-md-4">
                                    <input type="number" class="form-control" name="tax" value="<?php echo e($employees2[0]->tax); ?>">
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label class="col-form-label col-md-2">Net Salary:</label>
                                <div class="col-md-4">
                                    <input type="number" class="form-control" name="net_salary" value="<?php echo e($employees2[0]->net_salary); ?>">
                                </div>
                                <label class="col-form-label col-md-2">Account Status:</label>
                                <div class="col-md-4">
                                    <select class="form-control select" name="account_status">
                                        <option value="Active" <?php echo e($employees2[0]->account_status == 'Active' ? 'selected' : ''); ?>>Active</option>
                                        <option value="Inactive" <?php echo e($employees2[0]->account_status == 'Inactive' ? 'selected' : ''); ?>>Inactive</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="form-group mb-4">
                                <label class="fw-bold">NID Attachment:</label>
                                <div class="mb-2">
                                    <?php if(!empty($employees2[0]->nid_attachment)): ?>
                                    <a href="<?php echo e(URL::to('/assets/nid/' . $employees2[0]->nid_attachment)); ?>" target="_blank" class="btn btn-outline-info btn-sm me-2">View Current NID</a>
                                    <?php endif; ?>
                                </div>
                                <label class="btn btn-outline-info">
                                    Upload New NID
                                    <input type="file" name="nid_attachment" accept=".pdf,.jpg,.png" hidden>
                                </label>
                            </div>

                            
                            <div class="form-group mb-4">
                                <label class="fw-bold">Document Attachment:</label>
                                <div class="mb-2">
                                    <?php if(!empty($employees2[0]->documents_attachments)): ?>
                                    <a href="<?php echo e(URL::to('/assets/document/' . $employees2[0]->documents_attachments)); ?>" target="_blank" class="btn btn-outline-info btn-sm">View Current Document</a>
                                    <?php endif; ?>
                                </div>
                                <label class="btn btn-outline-info">
                                    Upload New Document
                                    <input type="file" name="documents_attachments" accept=".pdf,.doc,.docx" hidden>
                                </label>
                            </div>


                            
                            <div class="form-group mb-4">
                                <label class="fw-bold">CV Attachment:</label>
                                <div class="mb-2">
                                    <?php if(!empty($employees2[0]->cv_attachment)): ?>
                                    <a href="<?php echo e(URL::to('/assets/cv/' . $employees2[0]->cv_attachment)); ?>" target="_blank" class="btn btn-outline-info btn-sm">View Current CV</a>
                                    <?php endif; ?>
                                </div>
                                <label class="btn btn-outline-info">
                                    Upload New CV
                                    <input type="file" name="cv_attachment" accept=".pdf,.doc,.docx" hidden>
                                </label>
                            </div>

                            
                            <div class="form-group row">
                                <div class="col-md-12 text-end">
                                    <button type="submit" class="btn btn-success">Update Employee</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Page Content -->
</div>
<!-- /Page Wrapper -->

<?php $__env->startSection('script'); ?>
<script>
    // Checkbox single select
    $("input:checkbox").on('click', function() {
        var $box = $(this);
        if ($box.is(":checked")) {
            var group = "input:checkbox[class='" + $box.attr("class") + "']";
            $(group).prop("checked", false);
            $box.prop("checked", true);
        } else {
            $box.prop("checked", false);
        }
    });
</script>
<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\HRS\resources\views\form\edit\editemployee.blade.php ENDPATH**/ ?>