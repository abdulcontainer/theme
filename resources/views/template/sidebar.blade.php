<div class="main-sidebar sidebar-style-2">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="{{route('home')}}">
        <img alt="image" src="{{asset('assets/img/logo.png')}}" class="header-logo" />
          <span class="logo-name">ABDUL</span>
      </a>
    </div>
      <ul class="sidebar-menu">
        <li class="dropdown active" style="display: block;  ">
     		 <div class="sidebar-profile">
	          <div class="siderbar-profile-pic">
	            <img src="{{asset('assets/img/users/user-10.jpeg')}}" class="profile-img-circle box-center" alt="User Image">
	          </div>
	          <div class="siderbar-profile-details">
	            <div class="siderbar-profile-name"> Abdul </div>
	          </div>
	          <div class="sidebar-profile-buttons">
	            <a class="tooltips waves-effect waves-block toggled" href="#" data-toggle="tooltip" title="" data-original-title="Profile">
	              <i class="fas fa-user sidebarQuickIcon"></i>
	            </a>
	          </div>
          </div>
        </li>
        <li class="menu-header">Main</li>
          <li><a class="nav-link" href="{{route('home')}}"><i class="fa fa-home" aria-hidden="true"></i><span>Home</span></a></li>
          <li><a class="nav-link" href="{{route('topic-list')}}"><i class="fa fa-book" aria-hidden="true"></i><span>Laravel Topics</span></a></li>
          <li><a class="nav-link" href="{{route('user-list')}}"><i class="fa fa-users" aria-hidden="true"></i><span>Users</span></a></li>
          <li><a class="nav-link" href="{{route('employee')}}"><i class="fa fa-blind" aria-hidden="true"></i><span>Add Employee</span></a></li>
      </ul>
  </aside>
</div>