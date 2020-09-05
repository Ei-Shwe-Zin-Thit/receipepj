<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>  Admin Tables</title>

  <!-- Custom fonts for this template -->
  <link href="{{url('admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet')}}" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{url('admin/css/sb-admin-2.min.css')}}" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="{{url('admin/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
  <script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-danger sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{url('dashboard')}}">
          <div class="sidebar-brand-icon">
            <i class="fas fa-user"></i>
          </div>          
          <div class="sidebar-brand-text mx-3">Admin Dashboard</div>
        </a>
  
        <!-- Divider -->
        <hr class="sidebar-divider my-0">
  
  
        <!-- Divider -->
        <hr class="sidebar-divider">
  
        <!-- Heading -->
        <div class="sidebar-heading">
          Interface
        </div>
  
        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-user"></i>
            <span>Admin</span>
          </a>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Admin:</h6>
              <a class="collapse-item" href="{{url('category')}}">Category</a>
              <a class="collapse-item" href="{{url('catshow')}}">Show Category</a>
              <a class="collapse-item" href="{{url('recipe')}}">Receipe</a>
              <a class="collapse-item" href="{{url('showrecipe')}}">Show receipe</a>
              <a class="collapse-item" href="{{url('usermanagement')}}">User Management</a>
              <a class="collapse-item" href="{{url('view_newsletter')}}">Contact</a>
              <a class="dropdown-item" href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
            </div>
          </div>
        </li>
  
  
        <!-- Nav Item - Utilities Collapse Menu -->
        
        <!-- Divider -->
        <hr class="sidebar-divider">


      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        


          <!-- Topbar Search -->
          

            <!-- Nav Item - Alerts -->
            
            <!-- Nav Item - Messages -->
            
            <div class="topbar-divider d-none d-sm-block"></div>


          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->

          <!-- DataTales Example -->
          @yield('admincontent')
        

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

    

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
  
  
  <!-- Bootstrap core JavaScript-->
  <script src="{{url('admin/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{url('admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  
  <!-- Core plugin JavaScript-->
  <script src="{{url('admin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
  
  <!-- Custom scripts for all pages-->
  <script src="{{url('admin/js/sb-admin-2.min.js')}}"></script>
  
  <!-- Page level plugins -->
  <script src="{{url('admin/vendor/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{url('admin/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
  
  <!-- Page level custom scripts -->
  <script src="{{url('admin/js/demo/datatables-demo.js')}}"></script>
  <script>
                        CKEDITOR.replace( 'editor' );
  </script>
  <script>
                        CKEDITOR.replace( 'howtocook' );
  </script>
  </body>
  
  </html>
  