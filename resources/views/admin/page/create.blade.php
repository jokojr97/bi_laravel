@extends ('layouts/mainadmin')

@section('title', 'Add Page - Bojonegoro Institute')
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
            <h1 class="m-0 text-dark">Add Page</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Page</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <hr style="margin-top: 0px">

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">                  
          <div class="col-md-7">
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
            <form method="POST" enctype="multipart/form-data" action="/admin/page">
              @csrf
              <input type="hidden" name="author" value="1">
              <input type="hidden" name="status" value="Published">
              <div class="form-group mb-3">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Your page name... "  value="">
              </div>
              <div class="form-group mb-3">

                <label for="content">Content</label>
                <textarea  rows="14" id="my-editor" name="content" class="form-control" placeholder="Masukkan konten halaman"></textarea>
              </div>            
          </div>
          <div class="col-md-5">
              <div class="form-group mb-3">
                <label for="layouts">Layout</label>
                <select name="layouts" id="layouts" class="form-control">
                  <option>Right Sidebar</option>
                  <option>No Sidebar</option>
                </select>
              </div>             
              <div class="form-group mb-3">
                <label for="title">title</label>
                <input type="text" name="title" class="form-control"  value="" placeholder="your title page">
              </div>             
              <div class="form-group mb-3">
                <label for="keywords">Keyword</label>
                <input type="text" name="keywords" class="form-control"  value="" placeholder="page Keyword meta ">
              </div>             
              <div class="form-group mb-3">
                <label for="description">Description</label>
                <textarea name="description" class="form-control" placeholder="Your page description meta"></textarea>
              </div>              
              <!-- <div class="form-group mb-3">
                <label for="sumber">Sumber</label>
                <input type="text" name="sumber" class="form-control" value="" placeholder="masukkan sumber foto">
              </div>              -->

              <button type="submit" class="btn btn-danger float-right ml-3"><i class="fas fa-upload"></i>&nbsp;&nbsp;Publish</button>
              <a href="/admin/page" class="text-bold btn btn-default float-right"><i class="fa fa-close"></i>&nbsp;&nbsp;Cancel</a>
              <!-- </div> -->
            </form>
          </div>
          <!-- /.col -->
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection()


@section('script_tambahan')

<script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
<script type="text/javascript">
  var options = {
    filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
    filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
    filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
    filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
  };
</script>
<script>
CKEDITOR.replace('my-editor', options);
</script>
@endsection()

