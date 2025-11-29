<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
             <?php if(Auth::user()->role_name=='Finance'): ?>
             <li>
                    <a href="<?php echo e(url('/home')); ?>"><i class="la la-dashboard"></i> <span>Dashboard</span></a>
            </li>
               <li class="submenu">
                    <a href="<?php echo e(url('/form/leavesemployee')); ?>" ><i class="la la-edit"></i> <span> Leaves</span> <span
                            class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="<?php echo e(url('/form/leavesemployee')); ?>">Request Leave</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="<?php echo e(url('form/salary/page')); ?>" ><i class="la la-money"></i> <span> Projects</span> <span
                            class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="<?php echo e(url('form/salary/page')); ?>">Employee Salary</a></li>
                        <li><a href="<?php echo e(url('form/salary/payments')); ?>">Paid Salaries</a></li>
                        <li><a href="<?php echo e(url('form/salary/budgets')); ?>">Budgets</a></li>

                    </ul>
                </li>

             <?php elseif(Auth::user()->role_name=='Manager'): ?>
             <li>
                    <a href="<?php echo e(url('/home')); ?>"><i class="la la-dashboard"></i> <span>Dashboard</span></a>
            </li>
                <li class="submenu">
                    <a href="#" ><i class="la la-user"></i> <span> Employees</span> <span
                            class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="<?php echo e(url('/all/employee/list')); ?>">All Employees</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="<?php echo e(url('form/leavesemployee/new')); ?>" ><i class="la la-edit"></i> <span> Leaves</span> <span
                            class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="<?php echo e(url('form/leaves/new')); ?>">Manages </a></li>
                        <li><a href="<?php echo e(url('/form/leavesemployee')); ?>">New </a></li>
                        <li><a href="<?php echo e(url('/form/leaves/report')); ?>"> Report and Analytics</a></li>

                    </ul>
                </li>

                <?php elseif(Auth::user()->role_name=='Line-Manager'): ?>
             <li>
                    <a href="<?php echo e(url('/home')); ?>"><i class="la la-dashboard"></i> <span>Dashboard</span></a>
            </li>
                <li class="submenu">
                    <a href="<?php echo e(url('form/leavesemployee/new')); ?>" ><i class="la la-edit"></i> <span> Leaves</span> <span
                            class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="<?php echo e(url('form/leaves/new_line')); ?>">Manages </a></li>
                        <li><a href="<?php echo e(url('/form/leavesemployee')); ?>">New </a></li>

                    </ul>
                </li>
                <li>
                    <a href="<?php echo e(url('/all/employee/setting/edit/'.auth::user()->rec_id)); ?>"><i class="la la-cog"></i> <span>Settings</span></a>
                </li>

             <?php elseif(Auth::user()->role_name=='Employee'): ?>
             <li>
                    <a href="<?php echo e(url('/home')); ?>"><i class="la la-dashboard"></i> <span>Dashboard</span></a>
            </li>
               <li class="submenu">
                    <a href="<?php echo e(url('/form/leavesemployee')); ?>" ><i class="la la-edit"></i> <span> Leaves</span> <span
                            class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="<?php echo e(url('/form/leavesemployee')); ?>">Request </a></li>
                    </ul>
                </li>
                <li>
                    <a href="<?php echo e(url('/all/employee/setting/edit/'.auth::user()->rec_id)); ?>"><i class="la la-cog"></i> <span>Settings</span></a>
                </li>

                <?php elseif(Auth::user()->role_name=='Admin'): ?>
                <li>
                    <a href="<?php echo e(url('/home')); ?>"><i class="la la-dashboard"></i> <span>Dashboard</span></a>
                </li>
                <li>
                    <a href="<?php echo e(url('/departmentlist')); ?>"><i class="las la-building"></i> <span>Departments</span></a>
                </li>
                <li class="submenu">
                    <a href="#" ><i class="la la-user"></i> <span> Employees</span> <span
                            class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="<?php echo e(url('/all/employee/list')); ?>">All Employees</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="<?php echo e(url('form/leavesemployee/new')); ?>" ><i class="la la-edit"></i> <span> Leaves</span> <span
                            class="menu-arrow"></span></a>
                    <ul style="display: none;">
                                                <li><a href="<?php echo e(url('/form/leaves/report')); ?>"> Leave Analytics</a></li>
                        <li><a href="<?php echo e(url('form/leaves/new_admin')); ?>">Manage </a></li>
                        <li><a href="<?php echo e(url('/form/leavesemployee')); ?>">  New </a></li>


                    </ul>
                </li>
                <li class="submenu">
                    <a href="<?php echo e(url('form/salary/page')); ?>" ><i class="la la-tasks"></i> <span> Projects</span> <span
                            class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="<?php echo e(url('form/salary/budgets')); ?>">New </a></li>

                    </ul>
                </li>

                <li class="submenu">
                    <a href="#" ><i class="la la-pie-chart"></i> <span> Reports</span> <span
                            class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="<?php echo e(url('form/salary/page')); ?>"> Salaries</a></li>

                        <li><a href="<?php echo e(url('/attendance/list')); ?>">Attendance List</a></li>
                        <li><a href="<?php echo e(url('form/salary/payments')); ?>">Paid Salaries</a></li>

                    </ul>
                </li>

                <li>
                      <a href="<?php echo e(url('userManagement')); ?>"><i class="la la-user-plus"></i> <span>User Accounts</span></a>
                </li>

                <li>
                      <a href="<?php echo e(url('activity/log')); ?>"><i class="la la-user"></i> <span>Logs</span></a>
                </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</div>
<!-- /Sidebar -->
<?php /**PATH C:\xampp\htdocs\HRS\resources\views/sidebar/menubar.blade.php ENDPATH**/ ?>