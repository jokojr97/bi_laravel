@extends ('layouts/mainadmin')

@section('title', 'Add Post Type - Bojonegoro Institute')
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
            <h1 class="m-0 text-dark">Add Post Type</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Post Type</li>
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
        <div class="row mt-3">
          <div class="col-md-6">
            <form method="POST" action="{{ route('admin.type.store') }}">
              @csrf
              <div class="form-group mb-3">
                <label for="name">Type</label>
                <input type="text" name="name" class="form-control" placeholder="Your Post Type Name... "  value="{{ old('name') }}" required>
              </div>
              <button type="submit" class="btn btn-primary btn-sm float-sm-right">Add type</button>
              <a href="{{ route('admin.type.index') }}" class="btn btn-secondary btn-sm float-sm-right mr-2">Cancel</a>
            </form>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection()
