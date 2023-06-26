<aside class="main-sidebar sidebar-light-primary elevation-4" style="min-height: 917px;">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <span class="brand-text font-weight-light">{{ trans('panel.site_title') }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                {{-- <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs("admin.home") ? "active" : "" }}" href="{{ route("admin.home") }}">
                        <i class="fas fa-fw fa-tachometer-alt nav-icon">
                        </i>
                        <p>
                            {{ trans('global.dashboard') }}
                        </p>
                    </a>
                </li> --}}
                {{-- @can('user_management_access')
                    <li class="nav-item has-treeview {{ request()->is("admin/permissions*") ? "menu-open" : "" }} {{ request()->is("admin/roles*") ? "menu-open" : "" }} {{ request()->is("admin/users*") ? "menu-open" : "" }}">
                        <a class="nav-link nav-dropdown-toggle {{ request()->is("admin/permissions*") ? "active" : "" }} {{ request()->is("admin/roles*") ? "active" : "" }} {{ request()->is("admin/users*") ? "active" : "" }}" href="#">
                            <i class="fa-fw nav-icon fas fa-users">

                            </i>
                            <p>
                                {{ trans('cruds.userManagement.title') }}
                                <i class="right fa fa-fw fa-angle-left nav-icon"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('permission_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.permissions.index") }}" class="nav-link {{ request()->is("admin/permissions") || request()->is("admin/permissions/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-unlock-alt">

                                        </i>
                                        <p>
                                            {{ trans('cruds.permission.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('role_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.roles.index") }}" class="nav-link {{ request()->is("admin/roles") || request()->is("admin/roles/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-briefcase">

                                        </i>
                                        <p>
                                            {{ trans('cruds.role.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('user_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.users.index") }}" class="nav-link {{ request()->is("admin/users") || request()->is("admin/users/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-user">

                                        </i>
                                        <p>
                                            {{ trans('cruds.user.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan --}}
                @can('pig_access')
                    <li class="nav-item">
                        <a href="{{ route("admin.pigs.index") }}" class="nav-link {{ request()->is("admin/pigs") || request()->is("admin/pigs/*") ? "active" : "" }}">
                            <i class="fa-fw nav-icon fas fa-piggy-bank">

                            </i>
                            <p>
                                {{ trans('cruds.pig.title') }}
                            </p>
                        </a>
                    </li>
                @endcan
                @can('management_access')
                    <li class="nav-item">
                        <a href="{{ route("admin.managements.index") }}" class="nav-link {{ request()->is("admin/managements") || request()->is("admin/managements/*") ? "active" : "" }}">
                            <i class="fa-fw nav-icon fas fa-backspace">

                            </i>
                            <p>
                                {{ trans('cruds.management.title') }}
                            </p>
                        </a>
                    </li>
                @endcan
                @can('report_an_abnormal_event_access')
                    <li class="nav-item">
                        <a href="{{ route("admin.report-an-abnormal-events.index") }}" class="nav-link {{ request()->is("admin/report-an-abnormal-events") || request()->is("admin/report-an-abnormal-events/*") ? "active" : "" }}">
                            <i class="fa-fw nav-icon fas fa-exclamation">

                            </i>
                            <p>
                                {{ trans('cruds.reportAnAbnormalEvent.title') }}
                            </p>
                        </a>
                    </li>
                @endcan
                @can('information_per_coop_access')
                    <li class="nav-item">
                        <a href="{{ route("admin.information-per-coops.index") }}" class="nav-link {{ request()->is("admin/information-per-coops") || request()->is("admin/information-per-coops/*") ? "active" : "" }}">
                            <i class="fa-fw nav-icon fas fa-home">

                            </i>
                            <p>
                                {{ trans('cruds.informationPerCoop.title') }}
                            </p>
                        </a>
                    </li>
                @endcan
                @can('type_of_food_access')
                    <li class="nav-item">
                        <a href="{{ route("admin.type-of-foods.index") }}" class="nav-link {{ request()->is("admin/type-of-foods") || request()->is("admin/type-of-foods/*") ? "active" : "" }}">
                            <i class="fa-fw nav-icon fas fa-utensils">

                            </i>
                            <p>
                                {{ trans('cruds.typeOfFood.title') }}
                            </p>
                        </a>
                    </li>
                @endcan
                @can('report_access')
                    <li class="nav-item">
                        <a href="{{ route("admin.reports.index") }}" class="nav-link {{ request()->is("admin/reports") || request()->is("admin/reports/*") ? "active" : "" }}">
                            <i class="fa-fw nav-icon fas fa-file-alt">

                            </i>
                            <p>
                                {{ trans('cruds.report.title') }}
                            </p>
                        </a>
                    </li>
                @endcan
                @can('car_access')
                    <li class="nav-item">
                        <a href="{{ route("admin.cars.index") }}" class="nav-link {{ request()->is("admin/cars") || request()->is("admin/cars/*") ? "active" : "" }}">
                            <i class="fa-fw nav-icon fas fa-car">

                            </i>
                            <p>
                                {{ trans('cruds.car.title') }}
                            </p>
                        </a>
                    </li>
                @endcan
            {{--     @if(file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php')))
                    @can('profile_password_edit')
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('profile/password') || request()->is('profile/password/*') ? 'active' : '' }}" href="{{ route('profile.password.edit') }}">
                                <i class="fa-fw fas fa-key nav-icon">
                                </i>
                                <p>
                                    {{ trans('global.change_password') }}
                                </p>
                            </a>
                        </li>
                    @endcan
                @endif --}}
                <li class="nav-item">
                    <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                        <p>
                            <i class="fas fa-fw fa-sign-out-alt nav-icon">

                            </i>
                            <p>{{ trans('global.logout') }}</p>
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
