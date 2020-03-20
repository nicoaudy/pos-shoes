<aside class="aside aside-fixed">
     <div class="aside-header">
          <a href="{{ route('home') }}" class="aside-logo">Lara<span>Boi</span></a>
          <a href="" class="aside-menu-link">
               <i data-feather="menu"></i>
               <i data-feather="x"></i>
          </a>
     </div>
     <div class="aside-body">
          <ul class="nav nav-aside">
               <li class="nav-label">Dashboard</li>
               <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link">
                         <i data-feather="home"></i> <span>Home</span>
                    </a>
               </li>
               <li class="nav-label mg-t-25">Administration</li>
               <li class="nav-item with-sub">
                    <a href="" class="nav-link"><i data-feather="user"></i> <span>User Privileges</span></a>
                    <ul>
                         <li><a href="{{ route('admin.roles.index') }}">Role</a></li>
                         <li><a href="{{ route('admin.permissions.index') }}">Permission</a></li>
                         <li><a href="{{ route('admin.users.index') }}">User</a></li>
                         <li><a href="{{ route('impersonate.index') }}">Impersonate</a></li>
                    </ul>
               </li>
               <li class="nav-label mg-t-25">Developers</li>
               <li class="nav-item">
                    <a href="{{ url('manthra') }}" class="nav-link">
                         <i data-feather="alert-triangle"></i> <span>Manthra</span>
                    </a>
               </li>
          </ul>
     </div>
</aside>