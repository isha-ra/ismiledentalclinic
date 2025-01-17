@include('frontend.home.header')
<!-- //breadcrumbs -->
<!-- //banner -->
<!-- about -->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="/">Home</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Patient's words</li>
    </ol>
</nav>

@yield('content')

<div class="agileits-about py-md-5 py-5" id="feed">
    <div class="container py-lg-5">
        <div class="title-section text-center pb-md-5">
            <h4>I Smile Dental Clinic</h4>
            <h3 class="w3ls-title text-center text-capitalize">Clinic that you can trust</h3>
        </div>

        <div class="agileits-about-row row  text-center pt-md-0 pt-5">
            @foreach($feedback as $feed)
            <div class="col-lg-4 col-sm-6 agileits-about-grids">

                <div class="p-md-5 p-sm-3">

                        <i class="fas fa-user">name:<h2>{{$feed->name}}</h2></i>

                        <h4 style="color:black;">Patient's words{!! $feed->msg !!}.</h4>
                   Date: {!! substr($feed->created_at,0,10) !!}

                </div>


            </div>
            @endforeach

        </div>
    </div>
</div>

</div>


@include('frontend.includes.footer')