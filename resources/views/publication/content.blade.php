@extends('layout.app')
@section('content')

    <!-- Start Blog
    ============================================= -->
    <div class="blog-area full-blog left-sidebar single-blog full-blog default-padding">
        <div class="container">
            <div class="row">
                <div class="blog-items">
                    <div class="blog-content col-md-12">
                        <div class="item-box">
                            <div class="item">

                                <div class="info">
                                    <h3>
                                        {{$article->name_article}}
                                    </h3>
                                    <div class="meta">


                                        <div class="share">
                                            <i class="fas fa-share-alt"></i>
                                            <ul>
                                                <li class="facebook">
                                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                </li>
                                                <li class="twitter">
                                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                                </li>
                                                <li class="pinterest">
                                                    <a href="#"><i class="fab fa-pinterest"></i></a>
                                                </li>
                                                <li class="dribbble">
                                                    <a href="#"><i class="fab fa-dribbble"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p>
                                        {{$article->description}}
                                    </p>



                                </div>



                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- End Blog -->

    <!-- Start Footer


@endsection
