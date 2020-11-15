@extends ('layouts/mainadmin')

@section('title', 'Site Setting - Bojonegoro Institute')
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
            <h1 class="m-0 text-dark">Site Setting</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Site Setting</li>
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
          <div class="col-md-6">
            <form method="POST" action="/admin/site/1" enctype="multipart/form-data" >
              @csrf
              @method('patch')
              <div class="form-group mb-3 row">
                <label for="title" class="col-sm-2 text-capitalize">site title</label>
                <div class="col-sm-10">                  
                  <input type="text" name="title" class="form-control" placeholder="Your site name "  value="{{ $site->title }}">
                </div>
              </div>
              <div class="form-group mb-3 row">
                <label for="slogan" class="col-sm-2 text-capitalize">slogan</label>
                <div class="col-sm-10">                  
                  <input type="text" name="slogan" class="form-control" placeholder="Your site slogan "  value="{{ $site->slogan }}">
                </div>
              </div>
              <div class="form-group mb-3 row">
                <label for="logo" class="col-sm-2 text-capitalize">logo</label>
                <div class="col-sm-10">                  
                  <input type="file" name="logo" class="form-control" placeholder="Your site logo ">
                  <img src="/img/home/{{$site->logo}}" width="150" class="p-2 border mt-1 mb-1">
                </div>
              </div>
              <div class="form-group mb-3 row">
                <label for="icon" class="col-sm-2 text-capitalize">icon</label>
                <div class="col-sm-10">                  
                  <input type="file" name="icon" class="form-control" placeholder="Your site icon ">
                  <img src="/img/home/{{$site->icon}}" width="150" class="p-2 border mt-1 mb-1">
                </div>
              </div>
              <div class="form-group mb-3 row">
                <label for="address" class="col-sm-2 text-capitalize">address</label>
                <div class="col-sm-10">                  
                  <input type="text" name="address" class="form-control" placeholder="Your site address "  value="{{ $site->address }}">
                </div>
              </div>
              <div class="form-group mb-3 row">
                <label for="description" class="col-sm-2 text-capitalize">description</label>
                <div class="col-sm-10">                  
                  <textarea name="description" class="form-control" placeholder="Your site description">{{ $site->description }}</textarea>
                </div>
              </div>
              <div class="form-group mb-3 row">
                <label for="email" class="col-sm-2 text-capitalize">email</label>
                <div class="col-sm-10">                  
                  <input type="text" name="email" class="form-control" placeholder="Your site email "  value="{{ $site->email }}">
                </div>
              </div>
              <div class="form-group mb-3 row">
                <label for="phone" class="col-sm-2 text-capitalize">phone</label>
                <div class="col-sm-10">                  
                  <input type="text" name="phone" class="form-control" placeholder="Your site phone "  value="{{ $site->phone }}">
                </div>
              </div>
              <div class="form-group mb-3 row">
                <label for="facebook" class="col-sm-2 text-capitalize">facebook</label>
                <div class="col-sm-10">                  
                  <input type="text" name="facebook" class="form-control" placeholder="Your site facebook "  value="{{ $site->facebook }}">
                </div>
              </div>
              <div class="form-group mb-3 row">
                <label for="twitter" class="col-sm-2 text-capitalize">twitter</label>
                <div class="col-sm-10">                  
                  <input type="text" name="twitter" class="form-control" placeholder="Your site twitter "  value="{{ $site->twitter }}">
                </div>
              </div>
              <div class="form-group mb-3 row">
                <label for="instagram" class="col-sm-2 text-capitalize">instagram</label>
                <div class="col-sm-10">                  
                  <input type="text" name="instagram" class="form-control" placeholder="Your site instagram "  value="{{ $site->instagram }}">
                </div>
              </div>
              <div class="form-group mb-3 row">
                <label for="whatsapps" class="col-sm-2 text-capitalize">whatsapps</label>
                <div class="col-sm-10">                  
                  <input type="text" name="whatsapps" class="form-control" placeholder="Your site whatsapps "  value="{{ $site->whatsapps }}">
                </div>
              </div>
              <button type="submit" class="btn btn-primary btn-sm float-sm-right">Save</button>
              <a href="{{ route('admin.post.index') }}" class="btn btn-secondary btn-sm float-sm-right mr-2">Cancel</a>
            </form>
          </div><!-- /.col-6 -->
          <div class="col-md-6">
            <div class="p-3 border">
              <p><b>Site Setting :</b> custom your site with your style, you can edit site title, slogan, logo, icon, and your social media link in your website</p>
              <p>Cras fermentum odio eu feugiat. Justo eget magna fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet proin fermentum leo. Amet volutpat consequat mauris nunc congue. Cras fermentum odio eu feugiat. Justo eget magna fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet proin fermentum leo. Amet volutpat consequat mauris nunc congue.</p>
              <p>Cras fermentum odio eu feugiat. Justo eget magna fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet proin fermentum leo. Amet volutpat consequat mauris nunc congue. Cras fermentum odio eu feugiat. Justo eget magna fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet proin fermentum leo. Amet volutpat consequat mauris nunc congue.</p>
            </div>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection()
