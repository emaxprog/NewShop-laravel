<div id="jssor_1"
     style="position: relative; margin: 0; top: 0px; left: 0px; width: 600px; height: 300px; overflow: hidden; visibility: hidden;">
    <!-- Loading Screen -->
    <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
        <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
        <div style="position:absolute;display:block;background:url('../../../public/template/js/image-gallery-slider/img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
    </div>
    <div data-u="slides"
         style="cursor: default; position: relative; top: 0px; left: 0px; width: 600px; height: 300px; overflow: hidden;">
        @if($images)
            @foreach($images as $image)
                <div data-p="112.50" style="display: none;">
                    <img data-u="image" src="{{$image}}"/>
                    <img data-u="thumb" src="{{$image}}"/>
                </div>
            @endforeach
        @else
            <div data-p="112.50" style="display: none;">
                <img data-u="image" src="{{\App\Product::getImage(null)}}"/>
                <img data-u="thumb" src="{{\App\Product::getImage(null)}}"/>
            </div>
        @endif
        <a data-u="add" href="http://www.jssor.com/demos/image-slider-2.slider" style="display:none">Image Slider
            2</a>

    </div>
    <!-- Thumbnail Navigator -->
    <div u="thumbnavigator" class="jssort03" style="position:absolute;left:0px;bottom:0px;width:600px;height:60px;"
         data-autocenter="1">
        <div style="position: absolute; top: 0; left: 0; width: 100%; height:100%; background-color: #000; filter:alpha(opacity=30.0); opacity:0.3;"></div>
        <!-- Thumbnail Item Skin Begin -->
        <div u="slides" style="cursor: default;">
            <div u="prototype" class="p">
                <div class="w">
                    <div u="thumbnailtemplate" class="t"></div>
                </div>
                <div class="c"></div>
            </div>
        </div>
        <!-- Thumbnail Item Skin End -->
    </div>
    <!-- Arrow Navigator -->
    <span data-u="arrowleft" class="jssora02l" style="top:0px;left:8px;width:55px;height:55px;"
          data-autocenter="2"></span>
    <span data-u="arrowright" class="jssora02r" style="top:0px;right:8px;width:55px;height:55px;"
          data-autocenter="2"></span>
</div>