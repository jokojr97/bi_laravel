@extends ('layouts/mainadmin')

@section('title', 'Edit Categories - Bojonegoro Institute')
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
            <h1 class="m-0 text-dark">Edit Categories</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Categories</li>
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
        <!-- <a href="/admin/category/create" class="btn btn-primary"><i class="fas fa-plus"></i> Add New Category</a> -->
        <!-- Small boxes (Stat box) -->
        <div class="row mt-3">
          <div class="col-md-6">
            <form method="POST" action="/admin/category/{{ $category->id }}">
              @csrf
              @method('patch')
              <div class="form-group mb-3">
                <label for="name">Category</label>
                <input type="text" name="name" class="form-control" placeholder="Your Category Name... "  value="{{ $category->name }}" required>
              </div>
              <!-- <div class="form-group mb-3">
                <label for="slug">Slug</label>
                <input type="text" name="slug" class="form-control" placeholder="Your Category Slug... " value="{{ $category->slug }}" required>
              </div> -->
              <button type="submit" class="btn btn-primary btn-sm float-sm-right">Edit Category</button>
              <a href="{{ route('admin.category.index') }}" class="btn btn-secondary btn-sm float-sm-right mr-2">Cancel</a>
            </form>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection()
