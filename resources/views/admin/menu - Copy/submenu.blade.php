@extends ('layouts/mainadmin')

@section('title', 'Add Sub Menu - Bojonegoro Institute')
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
            <h1 class="m-0 text-dark">Add Sub Menu</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/home">Home</a></li>
              <li class="breadcrumb-item active">Add Sub Menu</li>
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
        <div class="row mt-3">
          <div class="col-md-4">
            <form method="POST" action="/admin/submenu/">
              @csrf
              <input type="hidden" name="menu" value="{{ $menu->id }}">
              <div class="form-group mb-3">
                <label for="name">Menu</label>
                <input type="text" name="name" class="form-control" placeholder="Your Menu Name... "  value="" required>
              </div>
              <div class="form-group mb-3">
                <label for="name">URL</label>
                <input type="text" name="url" class="form-control" placeholder="Your Menu URL... "  value="" required>
              </div>
              <button type="submit" class="btn btn-primary btn-sm float-sm-right">Edit Menu</button>
              <a href="{{ route('admin.menu.index') }}" class="btn btn-secondary btn-sm float-sm-right mr-2">Cancel</a>
            </form>
          </div><!-- ./col-6 -->
          <div class="col-2">
            <table class="table">
              <thead>
                <tr>
                  <th>Menu</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th><a href="#" class="btn btn-outline-primary mt-1 ml-1">{{ $menu->name }}</a></th>
                </tr>
              </tbody>
            </table>
          </div><!-- ./col-1 -->
          <div class="col-md-6 col-10">
            
            <table class="table">
              <thead>
                <tr>
                  <th>Submenu</th>
                  <th style="width: 50%">Url</th>
                  <th style="width: 20%">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach( $submenu as $result)
                <tr>
                  <td><a href="#" class="btn btn-outline-success">{{ $result->name }}</a></td>
                  <td>{{ $result->url }}</td>
                  <td>

                    <form method="POST" action="{{ route('admin.submenu.destroy', $result->id) }}">
                      @csrf
                      @method('delete')
                      <a href="{{ route('admin.submenu.edit', $result->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                      <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                    </form>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>

        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection()
