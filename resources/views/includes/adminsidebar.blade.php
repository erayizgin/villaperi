<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('public/assets/images/admin_logo.png') }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Villaperi Admin</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        @foreach ($menus as $menu)
        	{{ $test = "" }}
        	@if ($actionName == $menu->action)
        		{{ $test = "active" }}
        	@endif
        	<li class="{{ $test }} treeview">
              <a href="#">
                <i class="{{ $menu->m_icon }}"></i>
                <span>{{ $menu->m_name }}</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ url('/villa/'.$menu->action) }}"><i class="{{ $menu->s_icon }}"></i> {{ $menu->s_name }}</a></li>
              </ul>
            </li>
        @endforeach
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
  
