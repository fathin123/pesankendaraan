<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
    <title>Pesan Mobil</title>
    @include('template.head')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  @include('template.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('template.left-sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              {{-- <li class="breadcrumb-item"><a href="#"></a></li> --}}
              <li class="breadcrumb-item active">Edit Data Customer</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="card card-info card-outline">
        <div class="card-header">
            <h3>Edit Data Customer</h3>
        </div>
        
        <div class="card-body">
            <form action="{{ url ('update-customer',$cst->id) }}" method="post">
              {{ csrf_field() }}
              <div class="form-group">
                <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama" value="{{ $cst->nama }}">
              </div>
              <div class="form-group">
                <input type="text" id="nama_mobil" name="nama_mobil" class="form-control" placeholder="Nama Mobil" value="{{ $cst->nama_mobil }}">
              </div>
              <div class="form-group">
                <input type="text" id="alamat" name="alamat" class="form-control" placeholder="Alamat" value="{{ $cst->alamat }}">
              </div>
              <div class="form-group">
                <input type="text" id="nohp" name="nohp" class="form-control" placeholder="No Hp" value="{{ $cst->nohp }}">
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-success">Edit Data</button>
              </div>
            </form>
        </div>
      </div>
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  @include('template.footer');
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
@include('template.script');
</body>
</html>
