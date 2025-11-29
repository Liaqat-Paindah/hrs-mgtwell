<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <!-- Admin Role -->
                @if (Auth::user()->role_name == 'Admin')
                <li>
                    <a href="{{ url('/home') }}"><i class="la la-dashboard"></i> <span>Dashboard</span></a>
                </li>
                <li class="submenu">
                    <a href="#"><i class="las la-building"></i> <span>Organization</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ url('/departmentlist') }}">Departments</a></li>
                        <li><a href="{{ url('/all/employee/list') }}">Employee Directory</a></li>
                        <li><a href="{{ url('/organization/chart') }}">Organization Chart</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="la la-user-cog"></i> <span>Staff Management</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ url('/all/employee/list') }}">All Employees</a></li>
                        <li><a href="{{ url('/recruitment') }}">Recruitment</a></li>
                        <li><a href="{{ url('/contracts') }}">Contracts</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="la la-calendar-check"></i> <span>Time & Attendance</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ url('/attendance/list') }}">Attendance Records</a></li>
                        <li><a href="{{ url('/attendance/reports') }}">Attendance Reports</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="la la-plane-departure"></i> <span>Leave Management</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ url('form/leaves/new_admin') }}"> Requests</a></li>
                        <li><a href="{{ url('/form/leaves/report') }}"> Analytics</a></li>
                        <li><a href="{{ url('/leave/balances') }}"> Balances</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="la la-project-diagram"></i> <span>Project Management</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ url('/project/allocations') }}">Projects</a></li>
                        <li><a href="{{ url('/project/allocations') }}">Staff Allocations</a></li>
                        <li><a href="{{ url('/donor/reports') }}">Donor Reports</a></li>
                        <li><a href="{{ url('/project/tracking') }}">Project Tracking</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="la la-chart-pie"></i> <span>Payroll</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ url('form/salary/page') }}">Salary Structure</a></li>
                        <li><a href="{{ url('form/salary/payments') }}">Salary Payments</a></li>
                        <li><a href="{{ url('/payroll/reports') }}">Payroll Reports</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="la la-shield-alt"></i> <span>System Admin</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ url('userManagement') }}">User Accounts</a></li>
                        <li><a href="{{ url('role/permissions') }}">Role Permissions</a></li>
                        <li><a href="{{ url('activity/log') }}">Audit Logs</a></li>
                        <li><a href="{{ url('/system/settings') }}">System Settings</a></li>
                    </ul>
                </li>

                <!-- Manager Role -->
                @elseif (Auth::user()->role_name == 'Manager')
                <li>
                    <a href="{{ url('/home') }}"><i class="la la-dashboard"></i> <span>Dashboard</span></a>
                </li>
                <li class="submenu">
                    <a href="#"><i class="la la-users"></i> <span>My Team</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ url('/all/employee/list') }}">Team Directory</a></li>
                        <li><a href="{{ url('/team/availability') }}">Team Availability</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="la la-project-diagram"></i> <span>Projects</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ url('/my/projects') }}">My Projects</a></li>
                        <li><a href="{{ url('/project/timesheets') }}">Project Timesheets</a></li>
                        <li><a href="{{ url('/project/allocations') }}">Staff Allocations</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="la la-calendar-check"></i> <span>Time Management</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ url('/timesheets/approval') }}"> Timesheets</a></li>
                        <li><a href="{{ url('/time/reports') }}">Time Reports</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="la la-plane-departure"></i> <span>Leave Management</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ url('form/leaves/new') }}"> Requests</a></li>
                        <li><a href="{{ url('/team/leave/calendar') }}">Team Calendar</a></li>
                        <li><a href="{{ url('/form/leaves/report') }}"> Reports</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="la la-user-plus"></i> <span>Recruitment</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ url('/candidates') }}">Candidates</a></li>
                    </ul>
                </li>

                <!-- Finance Role -->
                @elseif (Auth::user()->role_name == 'Finance')
                <li>
                    <a href="{{ url('/home') }}"><i class="la la-dashboard"></i> <span>Dashboard</span></a>
                </li>
                <li class="submenu">
                    <a href="#"><i class="la la-project-diagram"></i> <span>Project Management</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ url('/donor/funding') }}">Donor Funding</a></li>
                        <li><a href="{{ url('/project/finances') }}">Project Finances</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="la la-money-bill-wave"></i> <span>Payroll</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ url('form/salary/page') }}">Salary Administration</a></li>
                        <li><a href="{{ url('form/salary/payments') }}">Salary Payments</a></li>
                        <li><a href="{{ url('/financial/reports') }}">Financial Reports</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="la la-file-invoice-dollar"></i> <span>Expenses</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ url('/expense/claims') }}"> Expenses</a></li>
                        <li><a href="{{ url('/expense/reports') }}"> Reports</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="la la-chart-bar"></i> <span>Reporting</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ url('/donor/reports') }}">Donor Reports</a></li>
                        <li><a href="{{ url('/audit/reports') }}">Audit Reports</a></li>
                        <li><a href="{{ url('/financial/analytics') }}">Financial Analytics</a></li>
                    </ul>
                </li>

                <!-- Employee Role -->
                @elseif (Auth::user()->role_name == 'Employee')
                <li>
                    <a href="{{ url('/home') }}"><i class="la la-dashboard"></i> <span>Dashboard</span></a>
                </li>
                <li class="submenu">
                    <a href="#"><i class="la la-project-diagram"></i> <span>My Work</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ url('/my/projects') }}">My Projects</a></li>
                        <li><a href="{{ url('/my/tasks') }}">My Tasks</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="la la-calendar-check"></i> <span>Time & Attendance</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ url('/my/timesheets') }}">My Timesheets</a></li>
                        <li><a href="{{ url('/timesheet/history') }}">Timesheet History</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="la la-plane-departure"></i> <span>Leave</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ url('/form/leavesemployee') }}">Request </a></li>
                        <li><a href="{{ url('/my/leave/balances') }}">Balances</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="la la-user"></i> <span>My Profile</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ url('/all/employee/setting/edit/'.auth::user()->rec_id) }}">Personal Settings</a></li>
                        <li><a href="{{ url('/my/documents') }}">My Documents</a></li>
                    </ul>
                </li>
                @endif
            </ul>
        </div>
    </div>
</div>
<!-- /Sidebar -->