
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item dropdown user-menu">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
          <img src="{{asset('assets/dist/img/user2-160x160.jpg')}}" class="user-image img-circle elevation-2" alt="User Image">
          
          <span class="d-none d-md-inline">{{auth()->user()->full_name}}</span>
        </a>
        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <!-- User image -->
          <li class="user-header bg-primary">
            <img src="{{asset('assets/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">

            <p>
              Alexander Pierce - Web Developer
              <small>Member since Nov. 2012</small>
            </p>
          </li>
          <!-- Menu Body -->
          <li class="user-body">
            <div class="row">
              <div class="col-4 text-center">
                <a href="{{route('backend.profile')}}" class="btn btn-block btn-success">Profile</a>
              </div>
              <div class="col-4 text-center">
                <a href="{{route('backend.lock')}}" class="btn btn-block btn-info">Lock</a>
              </div>
              <div class="col-4 text-center">
                <a href="{{route('backend.logout')}}" class="btn btn-block btn-danger">Logout</a>
              </div>
            </div>
            <!-- /.row -->
          </li>
        </ul>
      </li>
    </ul>
  </nav>
