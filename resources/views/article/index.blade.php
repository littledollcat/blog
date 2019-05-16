        
    <!DOCTYPE html>
    <html lang="en">
    @include('layouts._header')
    <body>
    <div class="container">
            <div class="row">
              <div class="col-lg-8 col-md-10 mx-auto">
                @foreach($articles as $article)
                <div class="post-preview"> 
                  <a href="/article/{{$article->id}}">
                    <h2 class="post-title">
                        {{$article->title}}
                    </h2>
                    <h3 class="post-subtitle">
                        {{$article->sub_title}}
                    </h3>
                  </a>
                  <p class="post-meta">Posted by
                    <a href="#">Start Bootstrap</a>
                    on September 24, 2019</p>
                </div>
                @endforeach
              </div>
            </div>
            </div>
    @include('layouts._footer')
    </body>
    </html>