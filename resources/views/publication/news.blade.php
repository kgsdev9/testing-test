@extends('layout.apps')
@section('content')


<div class="popular-courses default-padding bottom-less without-carousel">
    <div class="container">
        <div class="row">
            <div class="popular-courses-items">


                            @foreach ($article as $c )
                                   <!-- Single Item -->

                                   <div class="col-md-4 col-sm-6 equal-height" style="height: 678px;">
                                    <div class="item">
                                        <div class="thumb">
                                            <a href="{{route('content_article_index', $c->id)}}">
                                                <img src="{{asset('uploads/articles/'.$c->image)}}" alt="Thumb">
                                            </a>
                                            <div class="overlay">
                                                <a class="btn btn-theme effect btn-sm" href="#">
                                                    <i class="fas fa-chart-bar"></i> Consulter
                                                </a>
                                            </div>
                                        </div>
                                        <div class="info">

                                            <h4><a href="#">{{$c->name_article}}</a></h4>
                                            <div class="cats">
                                                <a href="#">Education</a>
                                                <a href="#">Science</a>
                                            </div>
                                            <p>
                                                    {{Str::limit($c->description, 80)}}
                                            </p>

                                        </div>
                                    </div>
                                </div>




                <!-- End Single Item -->
                            @endforeach




            </div>
        </div>
    </div>
</div>

@endsection
