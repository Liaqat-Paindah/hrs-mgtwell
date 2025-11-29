<?php $__env->startSection('content'); ?>
    
    <?php echo Toastr::message(); ?>

    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <div class="sidebar-inner slimscroll">
            <div id="sidebar-menu" class="sidebar-menu">
                <ul>
                    <li class="menu-title">
                        <span>Main</span>
                    </li>
                    <li class="submenu">
                        <a href="#">
                            <i class="la la-dashboard"></i>
                            <span> Dashboard</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul style="display: none;">
                            <li><a href="<?php echo e(url('home')); ?>">Admin Dashboard</a></li>
                            <li><a href="<?php echo e(url('em/dashboard')); ?>">Employee Dashboard</a></li>
                        </ul>
                    </li>
                    <?php if(Auth::user()->role_name=='Admin'): ?>
                        <li class="menu-title"> <span>Authentication</span> </li>
                        <li class="submenu">
                            <a href="#">
                                <i class="la la-user-secret"></i> <span> User Controller</span> <span class="menu-arrow"></span>
                            </a>
                            <ul style="display: none;">
                                <li><a href="<?php echo e(url('userManagement')); ?>">All User</a></li>
                                <li><a href="<?php echo e(url('activity/log')); ?>">Activity Log</a></li>
                                <li><a href="<?php echo e(url('activity/login/logout')); ?>">Activity User</a></li>
                            </ul>
                        </li>
                    <?php endif; ?>
                    <li class="menu-title">
                        <span>Employees</span>
                    </li>
                    <li class="submenu">
                        <a href="#">
                            <i class="la la-user"></i>
                            <span> Employees</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul style="display: none;">
                            <li><a href="<?php echo e(url('all/employee/card')); ?>">All Employees</a></li>
                            <li><a href="<?php echo e(url('form/holidays/new')); ?>">Holidays</a></li>
                            <li><a href="<?php echo e(url('form/leaves/new')); ?>">Leaves (Admin) 
                                <span class="badge badge-pill bg-primary float-right">1</span></a>
                            </li>
                            <li><a href="<?php echo e(url('form/leavesemployee/new')); ?>">Leaves (Employee)</a></li>
                            <li><a href="<?php echo e(url('form/leavesettings/page')); ?>">Leave Settings</a></li>
                            <li><a href="<?php echo e(url('attendance/page')); ?>">Attendance (Admin)</a></li>
                            <li><a href="<?php echo e(url('attendance/employee/page')); ?>">Attendance (Employee)</a></li>
                            <li><a href="departments.html">Departments</a></li>
                            <li><a href="designations.html">Designations</a></li>
                            <li><a href="timesheet.html">Timesheet</a></li>
                            <li><a href="shift-scheduling.html">Shift & Schedule</a></li>
                            <li><a href="overtime.html">Overtime</a></li>
                        </ul>
                    </li>
                    <li class="menu-title"> <span>HR</span> </li>
                    <li class="submenu">
                        <a href="#">
                            <i class="la la-files-o"></i>
                            <span> Sales </span> 
                            <span class="menu-arrow"></span>
                        </a>
                        <ul style="display: none;">
                            <li><a href="estimates.html">Estimates</a></li>
                            <li><a class="active" href="<?php echo e(url('form/invoice/view/page')); ?>">Invoices</a></li>
                            <li><a href="payments.html">Payments</a></li>
                            <li><a href="expenses.html">Expenses</a></li>
                            <li><a href="provident-fund.html">Provident Fund</a></li>
                            <li><a href="taxes.html">Taxes</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="#">
                            <i class="la la-user"></i>
                            <span> Payroll</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul style="display: none;">
                            <li><a href="<?php echo e(url('form/salary/page')); ?>"> Employee Salary </a></li>
                            <li><a href="<?php echo e(url('form/salary/view')); ?>"> Payslip </a></li>
                            <li><a href="<?php echo e(url('form/payroll/items')); ?>"> Payroll Items </a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="#">
                            <i class="la la-pie-chart"></i>
                            <span> Reports </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul style="display: none;">
                            <li><a href="<?php echo e(url('form/expense/reports/page')); ?>"> Expense Report </a></li>
                            <li><a href="<?php echo e(url('form/invoice/reports/page')); ?>"> Invoice Report </a></li>
                            <li><a href="payments-reports.html"> Payments Report </a></li>
                            <li><a href="employee-reports.html"> Employee Report </a></li>
                            <li><a href="payslip-reports.html"> Payslip Report </a></li>
                            <li><a href="attendance-reports.html"> Attendance Report </a></li>
                            <li><a href="<?php echo e(url('form/leave/reports/page')); ?>"> Leave Report </a></li>
                            <li><a href="<?php echo e(url('form/daily/reports/page')); ?>"> Daily Report </a></li>
                        </ul>
                    </li>
                    <li class="menu-title"> 
                        <span>Performance</span> 
                    </li>
                    <li class="submenu"> 
                        <a href="#" class="noti-dot">
                            <i class="la la-graduation-cap"></i>
                            <span> Performance </span> 
                            <span class="menu-arrow"></span>
                        </a>
                        <ul style="display: none;">
                            <li><a class="active" href="<?php echo e(url('form/performance/indicator/page')); ?>"> Performance Indicator </a></li>
                            <li><a href="<?php echo e(url('form/performance/page')); ?>"> Performance Review </a></li>
                            <li><a href="<?php echo e(url('form/performance/appraisal/page')); ?>"> Performance Appraisal </a></li>
                        </ul>
                    </li>
                    <li class="submenu"> <a href="#"><i class="la la-edit"></i>
                        <span> Training </span> <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li><a href="<?php echo e(url('form/training/list/page')); ?>"> Training List </a></li>
                            <li><a href="<?php echo e(url('form/trainers/list/page')); ?>"> Trainers</a></li>
                            <li><a href="<?php echo e(url('form/training/type/list/page')); ?>"> Training Type </a></li>
                        </ul>
                    </li>
                    <li class="menu-title"> <span>Administration</span> </li>
                    <li> <a href="assets.html"><i class="la la-object-ungroup">
                        </i> <span>Assets</span></a>
                    </li>
                    <li class="submenu"> <a href="#"><i class="la la-briefcase"></i>
                        <span> Jobs </span> <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li><a href="user-dashboard.html"> User Dasboard </a></li>
                            <li><a href="jobs-dashboard.html"> Jobs Dasboard </a></li>
                            <li><a href="jobs.html"> Manage Jobs </a></li>
                            <li><a href="manage-resumes.html"> Manage Resumes </a></li>
                            <li><a href="shortlist-candidates.html"> Shortlist Candidates </a></li>
                            <li><a href="interview-questions.html"> Interview Questions </a></li>
                            <li><a href="offer_approvals.html"> Offer Approvals </a></li>
                            <li><a href="experiance-level.html"> Experience Level </a></li>
                            <li><a href="candidates.html"> Candidates List </a></li>
                            <li><a href="schedule-timing.html"> Schedule timing </a></li>
                            <li><a href="apptitude-result.html"> Aptitude Results </a></li>
                        </ul>
                    </li>
                    <li class="menu-title"> <span>Pages</span> </li>
                    <li class="submenu"> <a href="#"><i class="la la-user"></i>
                        <span> Profile </span> <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li><a href="profile.html"> Employee Profile </a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /Sidebar -->

    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <!-- Page Content -->
        <div class="content container-fluid">
            <!-- Page Header -->
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">Performance Indicator</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo e(url('home')); ?>">Dashboard</a></li>
                            <li class="breadcrumb-item active">Performance</li>
                        </ul>
                    </div>
                    <div class="col-auto float-right ml-auto">
                        <a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_indicator"><i class="fa fa-plus"></i> Add New</a>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->
            
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-striped custom-table mb-0 datatable">
                            <thead>
                                <tr>
                                    <th style="width: 30px;">#</th>
                                    <th>Designation</th>
                                    <th>Department</th>
                                    <th>Added By</th>
                                    <th>Create At</th>
                                    <th>Status</th>
                                    <th class="text-right">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $performance_indicators; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$performance): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e(++$key); ?></td>
                                    <td hidden class="id"><?php echo e($performance->id); ?></td>
                                    <td hidden class="designation"><?php echo e($performance->designation); ?></td>
                                    <td hidden class="customer_eperience"><?php echo e($performance->customer_eperience); ?></td>
                                    <td hidden class="marketing"><?php echo e($performance->marketing); ?></td>
                                    <td hidden class="management"><?php echo e($performance->management); ?></td>
                                    <td hidden class="administration"><?php echo e($performance->administration); ?></td>
                                    <td hidden class="presentation_skill"><?php echo e($performance->presentation_skill); ?></td>
                                    <td hidden class="quality_of_Work"><?php echo e($performance->quality_of_Work); ?></td>
                                    <td hidden class="efficiency"><?php echo e($performance->efficiency); ?></td>
                                    <td hidden class="integrity"><?php echo e($performance->integrity); ?></td>
                                    <td hidden class="professionalism"><?php echo e($performance->professionalism); ?></td>
                                    <td hidden class="team_work"><?php echo e($performance->team_work); ?></td>
                                    <td hidden class="critical_thinking"><?php echo e($performance->critical_thinking); ?></td>
                                    <td hidden class="conflict_management"><?php echo e($performance->conflict_management); ?></td>
                                    <td hidden class="attendance"><?php echo e($performance->attendance); ?></td>
                                    <td hidden class="ability_to_meet_deadline"><?php echo e($performance->ability_to_meet_deadline); ?></td>
                                    <td hidden class="status"><?php echo e($performance->status); ?></td>

                                    <td><?php echo e($performance->designation); ?></td>
                                    <td><?php echo e($performance->department); ?></td>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="profile.html" class="avatar"><img alt="" src="<?php echo e(URL::to('/assets/images/'. $performance->avatar)); ?>" alt="<?php echo e($performance->avatar); ?>"></a>
                                            <a href="profile.html"><?php echo e($performance->name); ?> </a>
                                        </h2>
                                    </td>
                                    <td><?php echo e(date('d F, Y',strtotime($performance->created_at))); ?></td>
                                    <td>
                                        <div class="dropdown action-label">
                                            <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                <i class="fa fa-dot-circle-o text-success"></i> Active
                                            </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a>
                                                <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-right">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item edit_indicator" href="#" data-toggle="modal" data-target="#edit_indicator"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                <a class="dropdown-item delete_indicator" href="#" data-toggle="modal" data-target="#delete_indicator"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Page Content -->

        <!-- Add Performance Indicator Modal -->
        <div id="add_indicator" class="modal custom-modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Set New Indicator</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="<?php echo e(url('form/performance/indicator/save')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" name="rec_id" value="<?php echo e(Session::get('rec_id')); ?>">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="col-form-label">Designation</label>
                                        <select class="select" id="designation" name="designation">
                                            <option selected disabled>--Select Designation--</option>
                                            <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($department->department); ?>"><?php echo e($department->department); ?></option> 
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <h4 class="modal-sub-title">Technical</h4>
                                    <div class="form-group">
                                        <label class="col-form-label">Customer Experience</label>
                                        <select class="select" id="customer_eperience" name="customer_eperience">
                                            <?php $__currentLoopData = $indicator; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $indicators): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($indicators->per_name_list); ?>"><?php echo e($indicators->per_name_list); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label">Marketing</label>
                                        <select class="select" id="marketing" name="marketing">
                                            <?php $__currentLoopData = $indicator; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $indicators): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($indicators->per_name_list); ?>"><?php echo e($indicators->per_name_list); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label">Management</label>
                                        <select class="select" id="management" name="management">
                                            <?php $__currentLoopData = $indicator; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $indicators): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($indicators->per_name_list); ?>"><?php echo e($indicators->per_name_list); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label">Administration</label>
                                        <select class="select" id="administration" name="administration">
                                            <?php $__currentLoopData = $indicator; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $indicators): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($indicators->per_name_list); ?>"><?php echo e($indicators->per_name_list); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label">Presentation Skill</label>
                                        <select class="select" id="presentation_skill" name="presentation_skill">
                                            <?php $__currentLoopData = $indicator; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $indicators): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($indicators->per_name_list); ?>"><?php echo e($indicators->per_name_list); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label">Quality Of Work</label>
                                        <select class="select" id="quality_of_Work" name="quality_of_Work">
                                            <?php $__currentLoopData = $indicator; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $indicators): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($indicators->per_name_list); ?>"><?php echo e($indicators->per_name_list); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label">Efficiency</label>
                                        <select class="select" id="efficiency" name="efficiency">
                                            <?php $__currentLoopData = $indicator; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $indicators): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($indicators->per_name_list); ?>"><?php echo e($indicators->per_name_list); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <h4 class="modal-sub-title">Organizational</h4>
                                    <div class="form-group">
                                        <label class="col-form-label">Integrity</label>
                                        <select class="select" id="integrity" name="integrity">
                                            <?php $__currentLoopData = $indicator; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $indicators): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($indicators->per_name_list); ?>"><?php echo e($indicators->per_name_list); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label">Professionalism</label>
                                        <select class="select" id="professionalism" name="professionalism">
                                            <?php $__currentLoopData = $indicator; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $indicators): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($indicators->per_name_list); ?>"><?php echo e($indicators->per_name_list); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label">Team Work</label>
                                        <select class="select" id="team_work" name="team_work">
                                            <?php $__currentLoopData = $indicator; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $indicators): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($indicators->per_name_list); ?>"><?php echo e($indicators->per_name_list); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label">Critical Thinking</label>
                                        <select class="select" id="critical_thinking" name="critical_thinking">
                                            <?php $__currentLoopData = $indicator; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $indicators): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($indicators->per_name_list); ?>"><?php echo e($indicators->per_name_list); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label">Conflict Management</label>
                                        <select class="select" id="conflict_management" name="conflict_management">
                                            <?php $__currentLoopData = $indicator; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $indicators): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($indicators->per_name_list); ?>"><?php echo e($indicators->per_name_list); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label">Attendance</label>
                                        <select class="select" id="attendance" name="attendance">
                                            <?php $__currentLoopData = $indicator; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $indicators): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($indicators->per_name_list); ?>"><?php echo e($indicators->per_name_list); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label">Ability To Meet Deadline</label>
                                        <select class="select" id="ability_to_meet_deadline" name="ability_to_meet_deadline">
                                            <?php $__currentLoopData = $indicator; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $indicators): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($indicators->per_name_list); ?>"><?php echo e($indicators->per_name_list); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="col-form-label">Status</label>
                                        <select class="select" id="status" name="status">
                                            <option value="Active">Active</option>
                                            <option value="Inactive">Inactive</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="submit-section">
                                <button type="submit" class="btn btn-primary submit-btn">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Add Performance Indicator Modal -->
        
        <!-- Edit Performance Indicator Modal -->
        <div id="edit_indicator" class="modal custom-modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Performance Indicator</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="<?php echo e(url('form/performance/indicator/update')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" id="e_id" name="id" value="">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="col-form-label">Designation</label>
                                        <select class="select" id="e_designation" name="designation">
                                            <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($department->department); ?>"><?php echo e($department->department); ?></option> 
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <h4 class="modal-sub-title">Technical</h4>
                                    <div class="form-group">
                                        <label class="col-form-label">Customer Experience</label>
                                        <select class="select" id="e_customer_eperience" name="customer_eperience">
                                            <?php $__currentLoopData = $indicator; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $indicators): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($indicators->per_name_list); ?>"><?php echo e($indicators->per_name_list); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label">Marketing</label>
                                        <select class="select" id="e_marketing" name="marketing">
                                            <?php $__currentLoopData = $indicator; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $indicators): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($indicators->per_name_list); ?>"><?php echo e($indicators->per_name_list); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label">Management</label>
                                        <select class="select" id="e_management" name="management">
                                            <?php $__currentLoopData = $indicator; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $indicators): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($indicators->per_name_list); ?>"><?php echo e($indicators->per_name_list); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label">Administration</label>
                                        <select class="select" id="e_administration" name="administration">
                                            <?php $__currentLoopData = $indicator; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $indicators): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($indicators->per_name_list); ?>"><?php echo e($indicators->per_name_list); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label">Presentation Skill</label>
                                        <select class="select" id="e_presentation_skill" name="presentation_skill">
                                            <?php $__currentLoopData = $indicator; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $indicators): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($indicators->per_name_list); ?>"><?php echo e($indicators->per_name_list); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label">Quality Of Work</label>
                                        <select class="select" id="e_quality_of_Work" name="quality_of_Work">
                                            <?php $__currentLoopData = $indicator; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $indicators): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($indicators->per_name_list); ?>"><?php echo e($indicators->per_name_list); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label">Efficiency</label>
                                        <select class="select" id="e_efficiency" name="efficiency">
                                            <?php $__currentLoopData = $indicator; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $indicators): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($indicators->per_name_list); ?>"><?php echo e($indicators->per_name_list); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>
                                        <div class="col-sm-6">
                                    <h4 class="modal-sub-title">Organizational</h4>
                                    <div class="form-group">
                                        <label class="col-form-label">Integrity</label>
                                        <select class="select" id="e_integrity" name="integrity">
                                            <?php $__currentLoopData = $indicator; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $indicators): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($indicators->per_name_list); ?>"><?php echo e($indicators->per_name_list); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label">Professionalism</label>
                                        <select class="select" id="e_professionalism" name="professionalism">
                                            <?php $__currentLoopData = $indicator; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $indicators): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($indicators->per_name_list); ?>"><?php echo e($indicators->per_name_list); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label">Team Work</label>
                                        <select class="select" id="e_team_work" name="team_work">
                                            <?php $__currentLoopData = $indicator; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $indicators): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($indicators->per_name_list); ?>"><?php echo e($indicators->per_name_list); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label">Critical Thinking</label>
                                        <select class="select" id="e_critical_thinking" name="critical_thinking">
                                            <?php $__currentLoopData = $indicator; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $indicators): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($indicators->per_name_list); ?>"><?php echo e($indicators->per_name_list); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label">Conflict Management</label>
                                        <select class="select" id="e_conflict_management" name="conflict_management">
                                            <?php $__currentLoopData = $indicator; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $indicators): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($indicators->per_name_list); ?>"><?php echo e($indicators->per_name_list); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label">Attendance</label>
                                        <select class="select" id="e_attendance" name="attendance">
                                            <?php $__currentLoopData = $indicator; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $indicators): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($indicators->per_name_list); ?>"><?php echo e($indicators->per_name_list); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label">Ability To Meet Deadline</label>
                                        <select class="select" id="e_ability_to_meet_deadline" name="ability_to_meet_deadline">
                                            <?php $__currentLoopData = $indicator; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $indicators): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($indicators->per_name_list); ?>"><?php echo e($indicators->per_name_list); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="col-form-label">Status</label>
                                        <select class="select" id="e_status" name="status">
                                            <option value="Active">Active</option>
                                            <option value="Inactive">Inactive</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="submit-section">
                                <button type="submit" class="btn btn-primary submit-btn">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Edit Performance Indicator Modal -->
        
        <!-- Delete Performance Indicator Modal -->
        <div class="modal custom-modal fade" id="delete_indicator" role="dialog">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="form-header">
                            <h3>Delete Performance Indicator List</h3>
                            <p>Are you sure want to delete?</p>
                        </div>
                        <div class="modal-btn delete-action">
                            <form action="<?php echo e(url('form/performance/indicator/delete')); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="id" class="e_id" value="">
                                <div class="row">
                                    <div class="col-6">
                                        <button type="submit" class="btn btn-primary continue-btn submit-btn">Delete</button>
                                    </div>
                                    <div class="col-6">
                                        <a href="javascript:void(0);" data-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Delete Performance Indicator Modal -->
    </div>
    <!-- /Page Wrapper -->

    
    <script>
        $(document).on('click','.edit_indicator',function()
        {
            var _this = $(this).parents('tr');
            $('#e_id').val(_this.find('.id').text());
        
            var designation = (_this.find(".designation").text());
            var _option = '<option selected value="' + designation + '">' + _this.find('.designation').text() + '</option>'
            $( _option).appendTo("#e_designation");

            var customer_eperience = (_this.find(".customer_eperience").text());
            var _option = '<option selected value="' + customer_eperience + '">' + _this.find('.customer_eperience').text() + '</option>'
            $( _option).appendTo("#e_customer_eperience");

            var marketing = (_this.find(".marketing").text());
            var _option = '<option selected value="' + marketing + '">' + _this.find('.marketing').text() + '</option>'
            $( _option).appendTo("#e_marketing");

            var management = (_this.find(".management").text());
            var _option = '<option selected value="' + management + '">' + _this.find('.management').text() + '</option>'
            $( _option).appendTo("#e_management");

            var administration = (_this.find(".administration").text());
            var _option = '<option selected value="' + administration + '">' + _this.find('.administration').text() + '</option>'
            $( _option).appendTo("#e_administration");

            var presentation_skill = (_this.find(".presentation_skill").text());
            var _option = '<option selected value="' + presentation_skill + '">' + _this.find('.presentation_skill').text() + '</option>'
            $( _option).appendTo("#e_presentation_skill");

            var quality_of_Work = (_this.find(".quality_of_Work").text());
            var _option = '<option selected value="' + quality_of_Work + '">' + _this.find('.quality_of_Work').text() + '</option>'
            $( _option).appendTo("#e_quality_of_Work");

            var efficiency = (_this.find(".efficiency").text());
            var _option = '<option selected value="' + efficiency + '">' + _this.find('.efficiency').text() + '</option>'
            $( _option).appendTo("#e_efficiency");

            var integrity = (_this.find(".integrity").text());
            var _option = '<option selected value="' + integrity + '">' + _this.find('.integrity').text() + '</option>'
            $( _option).appendTo("#e_integrity");

            var professionalism = (_this.find(".professionalism").text());
            var _option = '<option selected value="' + professionalism + '">' + _this.find('.professionalism').text() + '</option>'
            $( _option).appendTo("#e_professionalism");

            var team_work = (_this.find(".team_work").text());
            var _option = '<option selected value="' + team_work + '">' + _this.find('.team_work').text() + '</option>'
            $( _option).appendTo("#e_team_work");

            var critical_thinking = (_this.find(".critical_thinking").text());
            var _option = '<option selected value="' + critical_thinking + '">' + _this.find('.critical_thinking').text() + '</option>'
            $( _option).appendTo("#e_critical_thinking");

            var conflict_management = (_this.find(".conflict_management").text());
            var _option = '<option selected value="' + conflict_management + '">' + _this.find('.conflict_management').text() + '</option>'
            $( _option).appendTo("#e_conflict_management");

            var attendance = (_this.find(".attendance").text());
            var _option = '<option selected value="' + attendance + '">' + _this.find('.attendance').text() + '</option>'
            $( _option).appendTo("#e_attendance");

            var ability_to_meet_deadline = (_this.find(".ability_to_meet_deadline").text());
            var _option = '<option selected value="' + ability_to_meet_deadline + '">' + _this.find('.ability_to_meet_deadline').text() + '</option>'
            $( _option).appendTo("#e_ability_to_meet_deadline");

            var status = (_this.find(".status").text());
            var _option = '<option selected value="' + status + '">' + _this.find('.status').text() + '</option>'
            $( _option).appendTo("#e_status");
        });
    </script>

    
    <script>
        $(document).on('click','.delete_indicator',function()
        {
            var _this = $(this).parents('tr');
            $('.e_id').val(_this.find('.id').text());
        });
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\HRS\resources\views\performance\performanceindicator.blade.php ENDPATH**/ ?>