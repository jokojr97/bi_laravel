
                    <ul id="navigation">
                      @foreach($menu as $result)
                        <li><a href="{{$result->url}}">{{ $result->name }}</a>
                          <?php
                            if(isset($result->submenus[0])) {
                          ?>
                          <ul class="submenu">
                          @foreach($result->submenus as $hasil)
                            <li><a href="{{ $hasil->url }}">{{ $hasil->name }}</a></li>
                          @endforeach
                          </ul>
                        <?php } ?>
                      </li>
                      @endforeach
                    </ul>
