      <header class="main-header">
        <!-- Logo -->
        <a href="index2.html" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini">
            <b>A
            </b>LT
          </span>
          <!-- logo for regular state and mobile devices -->
          @if(Auth::guard('staff')->check())
            <span class="logo-lg">
              @if(Auth::guard('staff')->user()->Role_ID == 1)
                <b>Admin
                </b>LEOGO
              @elseif(Auth::guard('staff')->user()->Role_ID == 2)
                <b>Staff
                </b>LEOGO
              @elseif(Auth::guard('staff')->user()->Role_ID == 3)
                <b>Lecturer
                </b>LEOGO
              @elseif(Auth::guard('staff')->user()->Role_ID == 4)
                <b>Tutor
                </b>LEOGO
              @else
                <b>Tutor
                </b>LEOGO
              @endif
            </span>
          @else
            <span class="logo-lg">
              <b>Children
              </b>LEOGO
            </span>
          @endif
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation
            </span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              @if(Auth::guard('staff')->check())
                <li class="dropdown user user-menu">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <img src="{{ asset('image/avatar').'/'.Auth::guard('staff')->user()->avatar }}" class="user-image" alt="User Image">
                    <span class="hidden-xs">
                    </span>
                  </a>
                  <ul class="dropdown-menu">
                    <!-- User image -->
                    <li class="user-header">
                      <img src="{{ asset('image/avatar').'/'.Auth::guard('staff')->user()->avatar }}" class="img-circle" alt="User Image">
                      <p>
                        {{Auth::guard('staff')->user()->Full_Name }}
                      </p>
                    </li>
                    <!-- Menu Body -->
                    <!-- Menu Footer-->
                    <li class="user-footer">
                      <div class="pull-left">
                        <a href="{{ route('getProfile') }}" class="btn btn-default btn-flat">Profile
                        </a>
                      </div>
                      <div class="pull-right">
                        <a href="{{ route('getLogout') }}" class="btn btn-default btn-flat">Sign out
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              @else
                <li class="dropdown user user-menu">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <img src="{{ asset('image/avatar').'/'.Auth::guard('children')->user()->avatar }}" class="user-image" alt="User Image">
                    <span class="hidden-xs">
                    </span>
                  </a>
                  <ul class="dropdown-menu">
                    <!-- User image -->
                    <li class="user-header">
                      <img src="{{ asset('image/avatar').'/'.Auth::guard('children')->user()->avatar }}" class="img-circle" alt="User Image">
                      <p>
                        {{Auth::guard('children')->user()->Full_Name }}
                      </p>
                    </li>
                    <!-- Menu Body -->
                    <!-- Menu Footer-->
                    <li class="user-footer">
                      <div class="pull-left">
                        <a href="{{ route('getProfile') }}" class="btn btn-default btn-flat">Profile
                        </a>
                      </div>
                      <div class="pull-right">
                        <a href="{{ route('getLogout') }}" class="btn btn-default btn-flat">Sign out
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              @endif
              <!-- Control Sidebar Toggle Button -->
              <li>
                <a href="#" data-toggle="control-sidebar">
                  <i class="fa fa-gears">
                  </i>
                </a>
              </li>
            </ul>
          </div>
        </nav>
      </header>