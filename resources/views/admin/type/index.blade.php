@extends ('layouts/mainadmin')

@section('title', 'Post Type - Bojonegoro Institute')
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
            <h1 class="m-0 text-dark">All Post Type</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Post Type</li>
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
        <a href="/admin/type/create" class="btn btn-primary"><i class="fas fa-plus"></i> Add New Type</a>
        <!-- Small boxes (Stat box) -->
        <div class="row mt-3">
          <div class="col-md-8">
            @if(session('success'))
            <div class="alert alert-success" role="alert">
              {{ session('success') }}
            </div>
            @endif
            @if(session('failed'))
            <div class="alert alert-danger" role="alert">
              {{ session('failed') }}
            </div>
            @endif
            <table class="table table-striped"> 
              <thead>
                <tr class="text-center">
                  <th>No</th>
                  <th>Type</th>
                  <th>Slug</th>
                  <th>Action</th>
                </tr> 
              </thead>
              <tbody>
                @foreach ($type as $result => $hasil)              
                <tr>
                  <td class="text-center">{{ $loop->iteration }}</td>
                  <td>{{ $hasil->name }}</td>
                  <td>{{ $hasil->slug }}</td>
                  <td class="text-center">
                    <form method="POST" action="{{ route('admin.type.destroy', $hasil->id) }}">
                      @csrf
                      @method('delete')
                      <a href="{{ route('admin.type.edit', $hasil->id) }}" class="btn btn-primary btn-sm">Edit</a>
                      <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
            {{ $type->links() }}
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection()
