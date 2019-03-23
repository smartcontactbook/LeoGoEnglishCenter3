      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="{{asset('dist/')}}/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>Alexander Pierce
              </p>
              <a href="#">
                <i class="fa fa-circle text-success">
                </i> Online
              </a>
            </div>
          </div>
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                  <i class="fa fa-search">
                  </i>
                </button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION
            </li>
            <li class="active treeview">
              <a href="#">
                <i class="fa fa-dashboard">
                </i> 
                <span>Dashboard
                </span>
              </a>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-laptop">
                </i>
                <span>Course Management
                </span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right">
                  </i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li>
                  <a href="{{ route('course.index') }}">
                    <i class="fa fa-circle-o">
                    </i> Courses
                  </a>
                </li>
                <li>
                  <a href="{{ route('classRoom.index') }}">
                    <i class="fa fa-circle-o">
                    </i> Class
                  </a>
                </li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="glyphicon glyphicon-user">
                </i>
                <span>User Management
                </span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right">
                  </i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li>
                  <a href="{{route('lecturer.index')}}">
                    <i class="fa fa-circle-o">
                    </i> Lecturers
                  </a>
                </li>
                <li>
                  <a href="pages/UI/icons.html">
                    <i class="fa fa-circle-o">
                    </i> Tutors
                  </a>
                </li>
                <li>
                  <a href="pages/UI/buttons.html">
                    <i class="fa fa-circle-o">
                    </i> Staffs
                  </a>
                </li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="glyphicon glyphicon-education">
                </i> 
                <span>Childrens Management
                </span>
              </a>
            </li>
            
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>