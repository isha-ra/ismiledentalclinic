@include('frontend.home.header')
<!-- //breadcrumbs -->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="/">Home</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Our Gallery</li>
    </ol>
</nav>
<div class="gallery  py-5" id="gallery">
    <div class="container py-md-5">
        <div class="title-section text-center pb-5">
            <h4>world of medicine</h4>
            <h3 class="w3ls-title text-center text-capitalize">Gallery</h3>
        </div>
        <div class="row w3ls_gallery_grids">
            @foreach($galleries as $gallery)
            <div class="row w3_agile_gallery_grid pt-lg-5">


                <div class="col-sm-4 agile_gallery_grid">
                    {{--<a title="Start Improving Your Business Today." href='<img src="{{asset('images/galleryImage').'/'.--}}
                    {{--$gallery->image}}">'>--}}
                        <div class="agile_gallery_grid1">
                            <img src="{{asset('images/galleryImage').'/'.$gallery->image}}" style="height: 350px; width:auto">

                            <div class="w3layouts_gallery_grid1_pos" style=" width: 250px">
                                <h3>{{$gallery->title}}</h3>
                                <p>{!!$gallery->description!!}</p>
                            </div>
                        </div>
                    </a>
                </div>











            </div>
            @endforeach
        </div>
    </div>
</div>



@include('frontend.includes.footer')