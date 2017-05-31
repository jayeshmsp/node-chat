@if (!Auth::guest())
<nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
    <ul class="nav sidebar-nav">
        <li class="sidebar-brand">
            <a href="/home"> {{ config('app.name', 'Laravel') }} </a>
        </li>
        <div class="wlcm_usr">
            <h6>WelCome, {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</h6>
            <h6>Last Login : {{  Request::session()->get('last_login') }}</h6>
        </div>
        <hr style="margin: 0">
        <li {{ ((Request::segment(1)=='home') ? 'class=active' : '') }}>
            <a href="/home"> <i class="glyphicon glyphicon-home"></i> Home</a>
        </li>
        @permission('manage-users')
        <li {{ ((Request::segment(1)=='user') ? 'class=active' : '') }} >
            <a href="{{ url('user') }}"><i class="glyphicon glyphicon-user"></i> Users</a>
        </li>
        @endpermission
        @permission('manage-roles')
        <li {{ ((Request::segment(1)=='role') ? 'class=active' : '') }}>
            <a href="{{ url('role') }}"><i class="glyphicon glyphicon-pencil"></i> Roles</a>
        </li>
        @endpermission
        @permission('manage-permission')
        <li {{ ((Request::segment(1)=='permission') ? 'class=active' : '') }}>
            <a href="{{ url('permission') }}"><i class="glyphicon glyphicon-pencil"></i> Permission</a>
        </li>
        @endpermission
        @permission('manage-setting')
        <li {{ ((Request::segment(1)=='setting') ? 'class=active' : '') }}>
            <a href="{{ url('setting') }}"><i class="glyphicon glyphicon-cog"></i> Settings</a>
        </li>
        @endpermission
    </ul>
</nav>
@endif