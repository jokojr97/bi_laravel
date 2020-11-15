@extends ('layouts/mainadmin')

@section('title', 'Edit Menu - Bojonegoro Institute')
@section('metadeskription', '')
@section('metakeywords', '')

@section('container')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Menu</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/home">Home</a></li>
              <li class="breadcrumb-item active">Edit Menu</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <hr>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- <a href="/admin/menu/create" class="btn btn-primary"><i class="fas fa-plus"></i> Add New menu</a> -->
        <!-- Small boxes (Stat box) -->
        <div class="row mt-3">
          <div class="col-md-6">
            <form method="POST" action="/admin/menu/{{ $menu->id }}">
              @csrf
              @method('patch')
              <div class="form-group mb-3">
                <label for="name">Menu</label>
                <input type="text" name="name" class="form-control" placeholder="Your Menu Name... "  value="{{ $menu->name }}" required>
              </div>
              <div class="form-group mb-3">
                <label for="name">URL</label>
                <input type="text" name="url" class="form-control" placeholder="Your Menu URL... "  value="{{ $menu->url }}" required>
              </div>
              <button type="submit" class="btn btn-primary btn-sm float-sm-right">Edit Menu</button>
              <a href="{{ route('admin.menu.index') }}" class="btn btn-secondary btn-sm float-sm-right mr-2">Cancel</a>
            </form>
          </div><!-- ./col-6 -->
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection()
