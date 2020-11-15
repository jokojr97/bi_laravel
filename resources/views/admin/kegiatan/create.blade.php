@extends ('layouts/mainadmin')

@section('title', 'Add Kegiatan - Bojonegoro Institute')
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
            <h1 class="m-0 text-dark">Add Kegiatan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Kegiatan</li>
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

        <p id="demoss"></p>
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
            <form method="POST" action="{{ route('admin.kegiatan.store') }}"  enctype="multipart/form-data">
              @csrf
              <input type="hidden" name="author" value="1">
              <input type="hidden" name="status" value="published">
              <div class="form-group mb-3">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" placeholder="Your Kegiatan title... "  value="">
              </div>
              <div class="form-group mb-3">
                <label for="content">Content</label>
                <textarea id="my-editor" name="content" class="form-control ckeditor" placeholder="Your Kegiatan content ...">
                </textarea>
              </div>            
              <div class="form-group mb-3">
                <label for="attachments">Attachment</label>
                <input type="file" name="attachments[]" class="form-control" multiple>
              </div>             
          </div>
          <div class="col-md-5">
              <div class="form-group mb-3">
                <label for="feature_image">Featured Image</label>
                <input type="file" name="feature_image" class="form-control" value="">
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
                <label for="lokasi">Lokasi</label>
                <div class="form-row">
                  <div class="col-8">                
                    <input type="text" name="lokasi" class="form-control"  value="" placeholder="Lokasi Kegiatan... " id="lokasi">
                  </div>
                  <div class="col-4">
                    <a href="#" class="btn btn-success btn-lg" onclick="getLocation()"><i class="fas fa-search"></i> Cari lokasi</a>
                  </div>
                </div>
                <div class="col">
                  <p><a id="kosong1" href="#" onclick="getlatlang1()"></a></p>
                  <p style="margin-top: -15px"><a id="kosong2" href="#" onclick="getlatlang2()"></a></p>
                  <p style="margin-top: -15px"><a id="kosong3" href="#" onclick="getlatlang3()"></a></p>
                  <p style="margin-top: -15px"><a id="kosong4" href="#" onclick="getlatlang4()"></a></p>
                </div>
              </div>             
              <div class="row">
                <div class="col-6">                  
                  <label for="lat">Latitude</label>
                  <input type="text" name="lat" class="form-control"  value="" placeholder="Longtitude ... " id="ikilat">
                </div>
                <div class="col-6">                  
                  <label for="long">Longtitude</label>
                  <input type="text" name="long" class="form-control"  value="" placeholder="Latitude ... " id="ikilong">
                </div>
              </div>
              <div class="form-group mb-3">
                <label for="keyword">Keyword</label>
                <input type="text" name="keyword" class="form-control"  value="" placeholder="Kegiatan Keyword... ">
              </div>             
              <div class="form-group mb-3">
                <label for="exercipt">Exercipt</label>
                <textarea name="exercipt" class="form-control" placeholder="Your Kegiatan exercipt ..."></textarea>
              </div>              
              <!-- <div class="form-group mb-3">
                <label for="sumber">Sumber</label>
                <input type="text" name="sumber" class="form-control" value="" placeholder="masukkan sumber foto">
              </div>              -->

              <button type="submit" class="btn btn-danger float-right ml-3"><i class="fas fa-upload"></i>&nbsp;&nbsp;Publish</button>
              <a href="/admin/Kegiatan" class="text-bold btn btn-default float-right"><i class="fa fa-close"></i>&nbsp;&nbsp;Cancel</a>
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

<script type="text/javascript">
  
  function getLocation() {
    var lok = document.getElementById("lokasi").value;
    lok = encodeURI(lok);
    var urlapi = "https://api.mapbox.com/geocoding/v5/mapbox.places/"+lok+".json?access_token=pk.eyJ1Ijoiam9rb3JleSIsImEiOiJja2JhbW5maWIwcGxuMzVtZGVxMWJkcWRuIn0.Ct-tMJp9Fx0sVIiwkv8qvQ&limit=4";
    console.log(urlapi);
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
           // Typical action to be performed when the document is ready:
           var data=JSON.parse(xhttp.responseText);
           console.log(data);
           console.log(data.features[0].place_name);
           document.getElementById("kosong1").innerHTML = "+ "+data.features[0].place_name;
           if (data.features[1].place_name != "") {
            document.getElementById("kosong2").innerHTML = "+ "+data.features[1].place_name;
           }

           if (data.features[2].place_name != "") {
            document.getElementById("kosong3").innerHTML = "+ "+data.features[2].place_name;
           }
           if (data.features[3].place_name != "") {
            document.getElementById("kosong4").innerHTML = "+ "+data.features[3].place_name;
           }
        }
    };
    xhttp.open("GET", urlapi, true);
    xhttp.send();
  }

  function getlatlang1(){
    var lok = document.getElementById("kosong1").text;
    loka = encodeURI(lok);
    var urlapi = "https://api.mapbox.com/geocoding/v5/mapbox.places/"+loka+".json?access_token=pk.eyJ1Ijoiam9rb3JleSIsImEiOiJja2JhbW5maWIwcGxuMzVtZGVxMWJkcWRuIn0.Ct-tMJp9Fx0sVIiwkv8qvQ&limit=1";
    console.log(lok);
    console.log(urlapi);
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
           // Typical action to be performed when the document is ready:
           var data=JSON.parse(xhttp.responseText);
           console.log(data);
           console.log(data.features[0].place_name);
           document.getElementById("lokasi").value = data.features[0].place_name;
           document.getElementById("kosong1").innerHTML = "";
           document.getElementById("kosong2").innerHTML = "";
           document.getElementById("kosong3").innerHTML = "";
           document.getElementById("kosong4").innerHTML = "";
           document.getElementById("ikilat").value = data.features[0].center[1];
           document.getElementById("ikilong").value = data.features[0].center[0];
        }
    };
    xhttp.open("GET", urlapi, true);
    xhttp.send();
  }

  function getlatlang2(){
    var lok = document.getElementById("kosong2").text;
    loka = encodeURI(lok);
    var urlapi = "https://api.mapbox.com/geocoding/v5/mapbox.places/"+loka+".json?access_token=pk.eyJ1Ijoiam9rb3JleSIsImEiOiJja2JhbW5maWIwcGxuMzVtZGVxMWJkcWRuIn0.Ct-tMJp9Fx0sVIiwkv8qvQ&limit=1";
    console.log(lok);
    console.log(urlapi);
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
           // Typical action to be performed when the document is ready:
           var data=JSON.parse(xhttp.responseText);
           console.log(data);
           console.log(data.features[0].place_name);
           document.getElementById("lokasi").value = data.features[0].place_name;
           document.getElementById("kosong1").innerHTML = "";
           document.getElementById("kosong2").innerHTML = "";
           document.getElementById("kosong3").innerHTML = "";
           document.getElementById("kosong4").innerHTML = "";
           document.getElementById("ikilat").value = data.features[0].center[1];
           document.getElementById("ikilong").value = data.features[0].center[0];
        }
    };
    xhttp.open("GET", urlapi, true);
    xhttp.send();
  }

  function getlatlang3(){
    var lok = document.getElementById("kosong3").text;
    loka = encodeURI(lok);
    var urlapi = "https://api.mapbox.com/geocoding/v5/mapbox.places/"+loka+".json?access_token=pk.eyJ1Ijoiam9rb3JleSIsImEiOiJja2JhbW5maWIwcGxuMzVtZGVxMWJkcWRuIn0.Ct-tMJp9Fx0sVIiwkv8qvQ&limit=1";
    console.log(lok);
    console.log(urlapi);
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
           // Typical action to be performed when the document is ready:
           var data=JSON.parse(xhttp.responseText);
           console.log(data);
           console.log(data.features[0].place_name);
           document.getElementById("lokasi").value = data.features[0].place_name;
           document.getElementById("kosong1").innerHTML = "";
           document.getElementById("kosong2").innerHTML = "";
           document.getElementById("kosong3").innerHTML = "";
           document.getElementById("kosong4").innerHTML = "";
           document.getElementById("ikilat").value = data.features[0].center[1];
           document.getElementById("ikilong").value = data.features[0].center[0];
        }
    };
    xhttp.open("GET", urlapi, true);
    xhttp.send();
  }

  function getlatlang4(){
    var lok = document.getElementById("kosong4").text;
    loka = encodeURI(lok);
    var urlapi = "https://api.mapbox.com/geocoding/v5/mapbox.places/"+loka+".json?access_token=pk.eyJ1Ijoiam9rb3JleSIsImEiOiJja2JhbW5maWIwcGxuMzVtZGVxMWJkcWRuIn0.Ct-tMJp9Fx0sVIiwkv8qvQ&limit=1";
    console.log(lok);
    console.log(urlapi);
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
           // Typical action to be performed when the document is ready:
           var data=JSON.parse(xhttp.responseText);
           console.log(data);
           console.log(data.features[0].place_name);
           document.getElementById("lokasi").value = data.features[0].place_name;
           document.getElementById("kosong1").innerHTML = "";
           document.getElementById("kosong2").innerHTML = "";
           document.getElementById("kosong3").innerHTML = "";
           document.getElementById("kosong4").innerHTML = "";
           document.getElementById("ikilat").value = data.features[0].center[1];
           document.getElementById("ikilong").value = data.features[0].center[0];
        }
    };
    xhttp.open("GET", urlapi, true);
    xhttp.send();
  }

</script>
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

