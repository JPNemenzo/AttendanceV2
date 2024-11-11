<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" key="t-menu">Menu</li>

                <li class="{{ Route::currentRouteName() == 'hr.dashboard' ? 'mm-active' : 'text-light fw-bold' }}">
                    <a wire:navigate href="{{ route('hr.dashboard') }}">
                        <i class="bx bx-home-circle"></i>
                        <span key="t-dashboards">Dashboards</span>
                    </a>
                 
                </li>

                

                <li class="menu-title" key="t-apps">Records</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-group"></i>
                        <span key="t-employee-records">Employee</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a wire:navigate href="{{ route('employee-record') }}" key="t-employee-record">Employee Records</a></li>
                        <li><a wire:navigate href="{{ route('add-employee') }}" key="t-add-employee">Add Employee</a></li>
                   
                    </ul>
                </li>
                

                <li>
                    <a wire:navigate href="{{ route('attendance-records') }}">
                        <i class="bx bx-calendar"></i>
                        <span key="t-calendar">Work Schedule</span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-time"></i>
                        <span key="t-time">Work Schedule</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="calendar.html" key="t-tui-calendar">Schedule Record</a></li>
                        <li><a href="calendar-full.html" key="t-full-calendar">Add Schedule</a></li>
                    </ul>
                </li>
                <li class="{{ Route::currentRouteName() == 'off-duty' ? 'mm-active' : 'text-light fw-bold' }}">
                    <a wire:navigate href="{{ route('off-duty') }}" class="waves-effect ">
                    <i class="bx bx-receipt"></i>
                         <span key="t-starter-page"> Off Duty</span>
                     </a>
                  </li>
                <li class="{{ Route::currentRouteName() == 'seniority-level' ? 'mm-active' : 'text-light fw-bold' }}">
                      <a wire:navigate href="{{ route('seniority-level') }}" class="waves-effect ">
                          <i class="bx bx-badge"></i>
                         <span key="t-starter-page"> Seniority Level</span>
                      </a>
                  </li>

                <li class="{{ Route::currentRouteName() == 'department' ? 'mm-active' : 'text-light fw-bold' }}">
                     <a wire:navigate href="{{ route('department') }}" class="waves-effect ">
                      <i class="bx bx-buildings"></i>
                                    <span key="t-starter-page"> Department</span>
                       </a>
                   </li>
                            
                <li class="{{ Route::currentRouteName() == 'jobtitle' ? 'mm-active' : 'text-light fw-bold' }}">
                    <a wire:navigate href="{{ route('jobtitle') }}" class="waves-effect ">
                    <i class="bx bx-briefcase"></i>
                         <span key="t-starter-page"> Job Title</span>
                     </a>
                  </li>

                  <li class="{{ Route::currentRouteName() == 'employee-status' ? 'mm-active' : 'text-light fw-bold' }}">
                    <a wire:navigate href="{{ route('employee-status') }}" class="waves-effect ">
                    <i class="bx bx-badge-check"></i>
                         <span key="t-starter-page"> Employee Status</span>
                     </a>
                  </li>

                  <li class="{{ Route::currentRouteName() == 'shifts' ? 'mm-active' : 'text-light fw-bold' }}">
                    <a wire:navigate href="{{ route('shifts') }}" class="waves-effect ">
                    <i class="bx bx-calendar"></i>
                         <span key="t-starter-page"> Shifts</span>
                     </a>
                  </li>
                  <li class="{{ Route::currentRouteName() == 'hand-book' ? 'mm-active' : 'text-light fw-bold' }}">
                    <a wire:navigate href="{{ route('hand-book') }}" class="waves-effect ">
                    <i class="bx bx-book"></i>
                         <span key="t-starter-page"> Handbook</span>
                     </a>
                  </li>

                  <li class="{{ Route::currentRouteName() == 'deduction' ? 'mm-active' : 'text-light fw-bold' }}">
                    <a wire:navigate href="{{ route('deduction') }}" class="waves-effect ">
                    <i class="bx bx-receipt"></i>
                         <span key="t-starter-page"> Deduction</span>
                     </a>
                  </li>
                  <li class="{{ Route::currentRouteName() == 'anouncements' ? 'mm-active' : 'text-light fw-bold' }}">
                    <a wire:navigate href="{{ route('anouncements') }}" class="waves-effect ">
                    <i class="bx bx-receipt"></i>
                         <span key="t-starter-page"> Announcement</span>
                     </a>
                  </li>
                  
               

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->