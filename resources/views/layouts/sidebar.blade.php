      <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <div class="slimscroll-menu" id="remove-scroll">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        
                        <!-- Left Menu Start -->
                        <ul class="metismenu" id="side-menu">
                            <li class="menu-title">Index</li>
                            <li class="">
                                <a href="{{route('admin')}}" class="waves-effect {{ request()->is("admin") || request()->is("admin/*") ? "mm active" : "" }}">
                                    <i class="ti-home"></i><!--span class="badge badge-primary badge-pill float-right"></-span--> <span> Dashboard </span>
                                </a>
                            </li>
                            

                            <li>
                                <a href="/employees" class="waves-effect"><i class="ti-user"></i><span> Employés <span class="float-right menu-arrow"></span> </span></a>
                                <!-- <ul class="submenu">
                                    <li>
                                        <a href="/employees" class="waves-effect {{ request()->is("employees") || request()->is("/employees/*") ? "mm active" : "" }}"><i class="dripicons-view-apps"></i><span>Employees List</span></a>
                                    </li>
                                   
                                </ul> -->
                            </li>
                            <li>
                                <a href="/demande_congeé" class="waves-effect"><i class="far fa-edit	"></i><span> Demande de congé<span class="float-right menu-arrow"></span> </span></a>
                                <!-- <ul class="submenu">
                                    <li>
                                        <a href="/employees" class="waves-effect {{ request()->is("employees") || request()->is("/employees/*") ? "mm active" : "" }}"><i class="dripicons-view-apps"></i><span>Employees List</span></a>
                                    </li>
                                   
                                </ul> -->
                            </li>
                           

                            <li class="menu-title">Management</li>
                            <li>
                                        <a href="/schedule" class="waves-effect {{ request()->is("employees") || request()->is("/employees/*") ? "mm active" : "" }}"><i class="ti-time"></i><span>Système de Travail</span></a>
                                    </li>
                                    <li>
                                        <a href="/type_employes" class="waves-effect {{ request()->is("employees") || request()->is("/employees/*") ? "mm active" : "" }}"><i class="fas fa-sitemap	"></i><span>Type des employés</span></a>
                                    </li>
                            


                            {{-- <li class="">
                                <a href="/schedule" class="waves-effect {{ request()->is("schedule") || request()->is("schedule/*") ? "mm active" : "" }}">
                                    <i class="ti-time"></i> <span> Schedule </span>
                                </a>
                            </li> --}}
                            <li class="">
                                <a href="/check" class="waves-effect {{ request()->is("check") || request()->is("check/*") ? "mm active" : "" }}">
                                    <i class="dripicons-to-do"></i> <span>Attendance sheet</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="/sheet-report" class="waves-effect {{ request()->is("sheet-report") || request()->is("sheet-report/*") ? "mm active" : "" }}">
                                    <i class="dripicons-to-do"></i> <span> Sheet Report</span>
                                </a>
                            </li>

                            <li class="">
                                <a href="/attendance" class="waves-effect {{ request()->is("attendance") || request()->is("attendance/*") ? "mm active" : "" }}">
                                    <i class="ti-calendar"></i> <span> Attendance Logs </span>
                                </a>
                            </li>
                            <!--
                            <li class="">
                                <a href="/latetime" class="waves-effect {{ request()->is("latetime") || request()->is("latetime/*") ? "mm active" : "" }}">
                                    <i class="dripicons-warning"></i><span> Late Time </span>
                                </a>
                            </li>
                        -->
                        <li class="">
                                <a href="/historique_congé" class="waves-effect {{ request()->is("leave") || request()->is("leave/*") ? "mm active" : "" }}">
                                    <i class="far fa-folder			"></i> <span> Historique Congé </span>
                                </a>
                            </li>
                            <li class="">
                                <a href="/leave" class="waves-effect {{ request()->is("leave") || request()->is("leave/*") ? "mm active" : "" }}">
                                    <i class="dripicons-backspace"></i> <span> Leave </span>
                                </a>
                            </li>
                            <!--
                            <li class="">
                                <a href="/overtime" class="waves-effect {{ request()->is("overtime") || request()->is("overtime/*") ? "mm active" : "" }}">
                                    <i class="dripicons-alarm"></i> <span> Over Time </span>
                                </a>
                            </li> 
                            -->
                            {{--  
                            <li class="menu-title">Tools</li>
                            <li class="">
                                <a href="{{ route("finger_device.index") }}" class="waves-effect {{ request()->is("finger_device") || request()->is("finger_device/*") ? "mm active" : "" }}">
                                    <i class="fas fa-fingerprint"></i> <span> Biometric Device </span>
                                </a>
                            </li>
                            --}}

                        </ul>

                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->
