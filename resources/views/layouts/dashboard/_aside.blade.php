<!-- Sidebar menu-->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
    <div class="app-sidebar__user">
        <div>
            <p class="app-sidebar__user-name">
                {{Auth::user()->name}}</p>
            <p class="app-sidebar__user-designation">{{implode(', ', Auth::user()->roles->pluck('name')->toArray())}}</p>
        </div>
    </div>
    <ul class="app-menu">
        <li><a class="app-menu__item" href="{{route('dashboard.welcome')}}"><i class="app-menu__icon fa fa-dashboard"></i><span
                    class="app-menu__label">Dashboard</span></a></li>
                    
        @if (auth()->user()->hasPermission('read_categories'))
        <li><a class="app-menu__item" href="{{route('dashboard.categories.index')}}"><i class="app-menu__icon fa fa-list"></i><span
            class="app-menu__label">Categoreis</span></a></li> 
        @endif             
        @if (auth()->user()->hasPermission('read_movies'))
        <li><a class="app-menu__item" href="{{route('dashboard.movies.index')}}"><i class="app-menu__icon fa fa-play"></i><span
            class="app-menu__label">Movies</span></a></li> 
        @endif 
        @if (auth()->user()->hasPermission('read_roles'))
        <li><a class="app-menu__item" href="{{route('dashboard.roles.index')}}"><i class="app-menu__icon fa fa-anchor"></i><span
            class="app-menu__label">Roles</span></a></li>
            
        @endif
        @if (auth()->user()->hasPermission('read_users'))
        <li><a class="app-menu__item" href="{{route('dashboard.users.index')}}"><i class="app-menu__icon fa fa-user"></i><span
            class="app-menu__label">Users</span></a></li>
        @endif
        @if (auth()->user()->hasPermission('read_settings'))

        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i
                    class="app-menu__icon fa fa-gear"></i><span class="app-menu__label">Settings</span><i
                    class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="{{ route('dashboard.setting.social_login') }}"><i class="icon fa fa-circle-o"></i>Social Login</a></li>
                <li><a class="treeview-item" href="{{ route('dashboard.setting.social_links') }}" rel="noopener"><i class="icon fa fa-circle-o"></i>Social Links</a></li>
            </ul>
        </li>
        @endif
        
    </ul>
</aside>