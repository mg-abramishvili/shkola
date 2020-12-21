<div id="sidebar" class="c-sidebar c-sidebar-fixed c-sidebar-lg-show">

    <div class="c-sidebar-brand d-md-down-none">
        <a class="c-sidebar-brand-full h4" href="#">
            {{ trans('panel.site_title') }}
        </a>
    </div>

    <ul class="c-sidebar-nav">
        <li class="c-sidebar-nav-item">
            <a href="{{ route("admin.home") }}" class="c-sidebar-nav-link">
                <i class="c-sidebar-nav-icon fas fa-fw fa-tachometer-alt">

                </i>
                {{ trans('global.dashboard') }}
            </a>
        </li>
        @can('schedulesimple_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.schedulesimples.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/schedulesimples") || request()->is("admin/schedulesimples/*") ? "active" : "" }}">
                    <i class="fa-fw fas fa-angle-double-up c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.schedulesimple.title') }}
                </a>
            </li>
        @endcan
        @can('photoalbum_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.photoalbums.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/photoalbums") || request()->is("admin/photoalbums/*") ? "active" : "" }}">
                    <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.photoalbum.title') }}
                </a>
            </li>
        @endcan
        @can('event_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.events.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/events") || request()->is("admin/events/*") ? "active" : "" }}">
                    <i class="fa-fw fas fa-bullhorn c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.event.title') }}
                </a>
            </li>
        @endcan
        @can('news_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.news.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/news") || request()->is("admin/news/*") ? "active" : "" }}">
                    <i class="fa-fw far fa-newspaper c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.news.title') }}
                </a>
            </li>
        @endcan
        @can('teacher_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.teachers.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/teachers") || request()->is("admin/teachers/*") ? "active" : "" }}">
                    <i class="fa-fw fas fa-users c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.teacher.title') }}
                </a>
            </li>
        @endcan
        @can('marshrutes_menu_access')
            <li class="c-sidebar-nav-dropdown">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-location-arrow c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.marshrutesMenu.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('marshrutes_floor_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.marshrutes-floors.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/marshrutes-floors") || request()->is("admin/marshrutes-floors/*") ? "active" : "" }}">
                                <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.marshrutesFloor.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('marshrutes_route_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.marshrutes-routes.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/marshrutes-routes") || request()->is("admin/marshrutes-routes/*") ? "active" : "" }}">
                                <i class="fa-fw fas fa-map-marker c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.marshrutesRoute.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('marshrutes_routes_two_access')
                        <!--<li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.marshrutes-routes-twos.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/marshrutes-routes-twos") || request()->is("admin/marshrutes-routes-twos/*") ? "active" : "" }}">
                                <i class="fa-fw fas fa-map-marker c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.marshrutesRoutesTwo.title') }}
                            </a>
                        </li>-->
                    @endcan
                </ul>
            </li>
        @endcan
        <li class="c-sidebar-nav-item">
            <a href="#" class="c-sidebar-nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                <i class="c-sidebar-nav-icon fas fa-fw fa-sign-out-alt">

                </i>
                {{ trans('global.logout') }}
            </a>
        </li>
    </ul>

</div>