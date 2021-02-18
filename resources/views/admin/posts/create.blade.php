@extends ('layouts/mainadmin')

@section('title', 'Add Post - Bojonegoro Institute')
@section('metadeskription', '')
@section('metakeywords', '')

@section('container')
  
  <!-- <script type="text/javascript" src="/admin/plugins/tinymce/tinymce.min.js"></script> -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Add Post</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Post</li>
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
            <form method="POST" enctype="multipart/form-data" action="/admin/post">
              @csrf
              <input type="hidden" name="author" value="1">
              <input type="hidden" name="status" value="published">
              <div class="form-group mb-3">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" placeholder="Your post title... "  value="">
              </div>
              <div class="form-group mb-3">
                <label for="content">Content</label>
                <textarea  rows="19" id="my-editor" name="content" class="form-control ckeditor" placeholder="Your post content ...">
                </textarea>
              </div>            
          </div>
          <div class="col-md-5">
              <div class="form-group mb-3">
                <label for="feature_image">Featured Image</label>
                <input type="file" name="feature_image" class="form-control" value="">
              </div>             
              <div class="form-group mb-3">
                <label for="category_id">Category</label>
                <a href="/admin/category/create" class="float-right"><i class="fas fa-plus"></i> Add Category</a>
                <select name="category_id" class="form-control">
                  @foreach($category as $result)
                  <option value="{{ $result->id }}">{{ $result->name }}</option>
                  @endforeach
                </select>
              </div>             
              <div class="form-group mb-3">
                <label for="type_id">Type</label>
                <a href="/admin/type/create" class="float-right"><i class="fas fa-plus"></i> Add Type</a>
                <select name="type_id" class="form-control">
                  @foreach($type as $result)
                  <option value="{{ $result->id }}">{{ $result->name }}</option>
                  @endforeach
                </select>
              </div>             
              <div class="form-group mb-3">
                <label for="language">Language</label>
                <select name="language" class="form-control">
                  <option value="id">Indonesia</option>
                  <option value="ed">English</option>
                </select>
              </div>             
              <div class="form-group mb-3">
                <label for="published_at">Published at</label>
                <input type="datetime-local" name="published_at" class="form-control"  value="<?= date("Y-m-d") ?>T<?= date("G:i:s") ?>">
              </div>             
              <div class="form-group mb-3">
                <label for="keyword">Keyword</label>
                <input type="text" name="keyword" class="form-control"  value="" placeholder="Post Keyword... ">
              </div>             
              <div class="form-group mb-3">
                <label for="exercipt">Exercipt</label>
                <textarea name="exercipt" class="form-control" placeholder="Your post exercipt ..."></textarea>
              </div>              
              <!-- <div class="form-group mb-3">
                <label for="sumber">Sumber</label>
                <input type="text" name="sumber" class="form-control" value="" placeholder="masukkan sumber foto">
              </div>              -->

              <button type="submit" class="btn btn-danger float-right ml-3"><i class="fas fa-upload"></i>&nbsp;&nbsp;Publish</button>
              <a href="/admin/post" class="text-bold btn btn-default float-right"><i class="fa fa-close"></i>&nbsp;&nbsp;Cancel</a>
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
    filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token=',
    
    height: '600px',
      allowedContent: {
        script: true,
        div: true,
        $1: {
          // This will set the default set of elements
          elements: CKEDITOR.dtd,
          attributes: true,
          styles: true,
          classes: true
        }
      }
  };
</script>
<script>
CKEDITOR.replace('my-editor', options);
</script>
@endsection()

