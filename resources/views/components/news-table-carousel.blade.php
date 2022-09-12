<div>
    <div class="row padding-20">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="row">
 
                @if (isset($date))
                    @foreach ($date as $item)
                        <div class="col-3" align="center">               
                            <div class="card" style="width:300px">
                                <img class="card-img-top" src="{{ $item->url_path_image_news }}" alt="{{ $item->news_name }}">
                                <div class="card-body">
                                  <h4 class="card-title">{{ $item->news_name }}</h4>
                                  <p class="card-text">Some example text.</p>
                                  <a href="#" class="btn btn-primary">See Profile</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</div>
