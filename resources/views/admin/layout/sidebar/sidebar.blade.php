      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="{{ asset('image/avatar').'/'.Auth::guard('staff')->user()->avatar }}">
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
          @if(Auth::guard('staff')->check())
          {{-- @php dd(Auth::guard('lecturer')->lecturer()->email); @endphp --}}
            @if(Auth::guard('staff')->user()->Role_ID == 1)
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
              <li class="active">
                <a href="{{ route('calender.index') }}">
                  <i class="fa fa-calendar"></i> <span>Calendar</span>
                  <span class="pull-right-container">
                    <small class="label pull-right bg-red">3</small>
                    <small class="label pull-right bg-blue">17</small>
                  </span>
                </a>
              </li>
              <li class="treeview">
                <a href="#">
                  
                  <i class="glyphicon glyphicon-education">
                  </i> 
                  <span>Enrollment Management
                  </span>
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right">
                    </i>
                  </span>
                </a>
                <ul class="treeview-menu">
                  <li>
                    <a href="{{ route('register.create') }}">
                      <i class="fa fa-circle-o">
                      </i> Register
                    </a>
                  </li>
                  <li>
                    <a href="{{ route('register.index') }}">
                      <i class="fa fa-circle-o"> 
                      </i> Register List  
                    </a>
                  </li>
                  <li>
                    <a href="{{ route('wait.index') }}">
                      <i class="fa fa-circle-o"> 
                      </i> Wait Class  
                    </a>
                  </li>
                </ul>
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
                    <a href="{{ route('tutor.index') }}">
                      <i class="fa fa-circle-o">
                      </i> Tutors
                    </a>
                  </li>
                  <li>
                    <a href="{{ route('staff.index') }}">
                      <i class="fa fa-circle-o">
                      </i> Staffs
                    </a>
                  </li>
                </ul>
              </li>
              <li class="active">
                <a href="{{ route('children.index') }}">
                  <i class="fa fa-child"></i> <span>Childrens Management</span>
                 
                </a>
              </li>
            
              <li class="treeview">
                <a href="#">
                  <i class="fa fa-drivers-license"></i>
                  <span>News & Events
                  </span>
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right">
                    </i>
                  </span>
                </a>
                <ul class="treeview-menu">
                  <li>
                    <a href="{{ route('news.index') }}">
                      <i class="fa fa-circle-o">
                      </i> News
                    </a>
                  </li>
                  <li>
                    <a href="{{ route('getEvents') }}">
                      <i class="fa fa-circle-o"> 
                      </i> Events 
                    </a>
                  </li>
                </ul>
              </li>

              <li class="active">
                <a href="{{ route('children.index') }}">
                  <i class="fas fa-university"></i> <span>Brands</span>
                 
                </a>
              </li>

              <li class="active">
                <a href="{{ route('e-book.index') }}">
                  <i class="fas fa-book"></i> <span>E-Book</span>
                </a>
              </li>
              
            </ul>
            @else
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
{{--               <li class="active">
                <a href="{{ route('calender.index') }}">
                  <i class="fa fa-calendar"></i> <span>Calendar</span>
                  <span class="pull-right-container">
                    <small class="label pull-right bg-red">3</small>
                    <small class="label pull-right bg-blue">17</small>
                  </span>
                </a>
              </li> --}}
              <li class="treeview">
                <a href="#">
                  
                  <i class="glyphicon glyphicon-education">
                  </i> 
                  <span>Enrollment Management
                  </span>
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right">
                    </i>
                  </span>
                </a>
                <ul class="treeview-menu">
                  <li>
                    <a href="{{ route('register.create') }}">
                      <i class="fa fa-circle-o">
                      </i> Register
                    </a>
                  </li>
                  <li>
                    <a href="{{ route('register.index') }}">
                      <i class="fa fa-circle-o"> 
                      </i> Register List  
                    </a>
                  </li>
                </ul>
              </li>
              <li class="treeview">
                <a href="#">
                  <i class="fa fa-child"></i>
                  <span>Childrens Management
                  </span>
                </a>
              </li>
            </ul>
            @endif
          @endif
  <!-- <script type="text/javascript">
    $(document).ready(function(){
      fectch_data();
    })

    function fectch_data(){
      type : 'GET',
      url : ,
    }
  </script> -->
        </section>
        <!-- /.sidebar -->
      </aside>