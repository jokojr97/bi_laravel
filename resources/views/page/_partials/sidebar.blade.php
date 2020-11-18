    <!-- right sidebar -->
    <div class="col-lg-4"><div class="blog_right_sidebar">
        <!-- sidebar search form -->
        <aside class="single_sidebar_widget search_widget">
            <form action="{{ route('searchdata') }}" method="post">
                @csrf
                <div class="form-group">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder='Search Keyword'onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Keyword'" name='search'>
                        <div class="input-group-append">
                            <button class="btns" type="button" id="btnsearch"><i class="ti-search"></i></button>
                        </div>
                    </div>
                </div>
                <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn" type="submit" id="searchbtn" onclick="myfunction()">Search</button>
            </form>
        </aside>
        <!-- end search form -->

        <!-- category -->
        <aside class="single_sidebar_widget post_category_widget">
            <h4 class="widget_title" style="color: #2d2d2d;">Category</h4>
            <ul class="list cat-list">
                @foreach($category as $result)
                <li>
                    <a href="{{route('category.show', $result->slug)}}" class="d-flex">
                        <p>{{$result->name}}</p>
                        <p>(0)</p>
                    </a>
                </li>
                @endforeach
            </ul>
        </aside>
        <!-- end category -->

        <!-- recent post -->
        <aside class="single_sidebar_widget popular_post_widget">
            <h3 class="widget_title" style="color: #2d2d2d;">Recent Post</h3>
            @foreach($posts as $result)
            <div class="media post_item">
                <img src="/uploads/posts/{{$result->feature_image}}" alt="post" class="recent-post">
                <div class="media-body">
                    <a href="blog_details.html">
                        <h3 style="color: #2d2d2d;">{{$result->title}}</h3>
                    </a>
                    <p>03 Hours ago</p>
                </div>
            </div>
            @endforeach
        </aside>
        <!-- end recent post -->

        <!-- tag post -->
        <aside class="single_sidebar_widget tag_cloud_widget">
            <h4 class="widget_title" style="color: #2d2d2d;">Tag Clouds</h4>
            <ul class="list">
            @if(isset($tags))
                @php
                    $tag = explode(',', $tags);
                @endphp
                @foreach($tag as $hasil)
                <?php 
                    $hasil = trim($hasil);
                ?>
                <li>
                    <a href="{{route('tag.show', $hasil)}}">{{$hasil}}</a>
                </li>
                @endforeach
            @else
                <li>
                    <a href="{{route('tag.show', 'bojonegoro')}}">Bojonegoro</a>
                </li>
                <li>
                    <a href="{{route('tag.show', 'institute')}}">institute</a>
                </li>
                <li>
                    <a href="{{route('tag.show', 'bojonegoro institute')}}">bojonegoro institute</a>
                </li>
            @endif
            </ul>
        </aside>
        <!-- end tag post -->

        <!-- foto instagram -->
        <!-- <aside class="single_sidebar_widget instagram_feeds">
            <h4 class="widget_title" style="color: #2d2d2d;">Instagram Feeds</h4>
            <ul class="instagram_row flex-wrap">
                <li>
                    <a href="#">
                    <img class="img-fluid" src="/assets/home1/img/post/post_5.png" alt="">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img class="img-fluid" src="/assets/home1/img/post/post_6.png" alt="">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img class="img-fluid" src="/assets/home1/img/post/post_7.png" alt="">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img class="img-fluid" src="/assets/home1/img/post/post_8.png" alt="">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img class="img-fluid" src="/assets/home1/img/post/post_9.png" alt="">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img class="img-fluid" src="/assets/home1/img/post/post_10.png" alt="">
                    </a>
                </li>
            </ul>
        </aside> -->
        <!-- end foto instagram -->

        <!-- subcribe newsletter -->
        <aside class="single_sidebar_widget newsletter_widget">
            <h4 class="widget_title" style="color: #2d2d2d;">Newsletter</h4>
            <form action="#">
                <div class="form-group">
                    <input type="email" class="form-control" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email'" placeholder='Enter email' required>
                </div>
                <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn" type="submit">Subscribe</button>
            </form>
        </aside>
        <!-- end subcribe newsletter -->
    </div>
    <!-- end right sidebar -->

    @section('script_tambahan')
    <script>
        // console.log('joko riyadi');
        function myfunction(){
            $('#searchbtn').click(function(){
                $('#btnsearch').click();
            }).
        }
    </script>
    @endsection