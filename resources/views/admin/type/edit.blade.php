@extends ('layouts/mainadmin')

@section('title', 'Edit Post Type - Bojonegoro Institute')
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
            <h1 class="m-0 text-dark">Edit Post Type</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Post Type</li>
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
        <!-- Small boxes (Stat box) -->
        <div class="row mt-3">
          <div class="col-md-6">
            <form method="POST" action="/admin/type/{{ $type->id }}">
              @csrf
              @method('patch')
              <div class="form-group mb-3">
                <label for="name">Post Type</label>
                <input type="text" name="name" class="form-control" placeholder="Your type Name... "  value="{{ $type->name }}" required>
              </div>
              <button type="submit" class="btn btn-primary btn-sm float-sm-right">Edit Type</button>
              <a href="{{ route('admin.type.index') }}" class="btn btn-secondary btn-sm float-sm-right mr-2">Cancel</a>
            </form>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection()
