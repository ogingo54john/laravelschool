@extends("layouts.app")

@section("content")
 <!-- News With Sidebar Start -->
    <div class="container-fluid py-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-12">
                            <div class="d-flex align-items-center justify-content-between bg-light py-2 px-4 mb-3">
                                <h3 class="m-0">{{ $category->name }}</h3>
                            </div>
                        </div>

                        {{-- <div class="col-lg-6">
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="img/news-500x280-1.jpg" style="object-fit: cover;">
                                <div class="overlay position-relative bg-light">
                                    <div class="mb-2" style="font-size: 14px;">
                                        <a href="">Technology</a>
                                        <span class="px-1">/</span>
                                        <span>January 01, 2045</span>
                                    </div>
                                    <a class="h4" href="">Est stet amet ipsum stet clita rebum duo</a>
                                    <p class="m-0">Rebum dolore duo et vero ipsum clita, est ea sed duo diam ipsum, clita at justo, lorem amet vero eos sed sit...</p>
                                </div>
                            </div>
                        </div>
                         --}}
                    </div>

                    {{-- <div class="mb-3">
                        <a href=""><img class="img-fluid w-100" src="img/ads-700x70.jpg" alt=""></a>
                    </div> --}}

                    <div class="row">
                    {{--  --}}
                    @forelse ($posts as $post)
                    <div class="col-lg-6">
                            <div class="d-flex mb-3">
                            
                                <img src="/posts/{{ $post->image }}" style="width: 100px; height: 100px; object-fit: cover;cursor:pointer;" onclick="location.href='/blog/{{ $post->slug }}'">
                                <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                    <div class="mb-1" style="font-size: 13px;">
                                        <span>{{ $post->created_at }}</span>
                                    </div>
                                    <a class="h6 m-0" href="/blog/{{ $post->slug }}">{{ $post->title }}</a>
                                </div>
                            </div>
                        </div>
                    @empty
            <div class="col-lg-6">
            <div class="p-2">
            <p>No posts available for {{ $category->name }} </p>
            </div>
            </div>
                    @endforelse

                    {{--  --}}

                    </div>
                    {{-- <div class="row">
                        <div class="col-12">
                            <nav aria-label="Page navigation">
                              <ul class="pagination justify-content-center">
                                <li class="page-item disabled">
                                  <a class="page-link" href="#" aria-label="Previous">
                                    <span class="fa fa-angle-double-left" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                  </a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                  <a class="page-link" href="#" aria-label="Next">
                                    <span class="fa fa-angle-double-right" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                  </a>
                                </li>
                              </ul>
                            </nav>
                        </div>
                    </div> --}}
                </div>

                <div class="col-lg-4 pt-3 pt-lg-0">
                    <!-- Social Follow Start -->
                    <div class="pb-3">
                        <div class="bg-light py-2 px-4 mb-3">
                            <h3 class="m-0">Follow Us</h3>
                        </div>
                        <div class="d-flex mb-3">
                            <a href="" class="d-block w-50 py-2 px-3 text-white text-decoration-none mr-2" style="background: #39569E;">
                                <small class="fab fa-facebook-f mr-2"></small><small>12,345 Fans</small>
                            </a>
                            <a href="" class="d-block w-50 py-2 px-3 text-white text-decoration-none ml-2" style="background: #52AAF4;">
                                <small class="fab fa-twitter mr-2"></small><small>12,345 Followers</small>
                            </a>
                        </div>
                        <div class="d-flex mb-3">
                            <a href="" class="d-block w-50 py-2 px-3 text-white text-decoration-none mr-2" style="background: #0185AE;">
                                <small class="fab fa-linkedin-in mr-2"></small><small>12,345 Connects</small>
                            </a>
                            <a href="" class="d-block w-50 py-2 px-3 text-white text-decoration-none ml-2" style="background: #C8359D;">
                                <small class="fab fa-instagram mr-2"></small><small>12,345 Followers</small>
                            </a>
                        </div>
                        <div class="d-flex mb-3">
                            <a href="" class="d-block w-50 py-2 px-3 text-white text-decoration-none mr-2" style="background: #DC472E;">
                                <small class="fab fa-youtube mr-2"></small><small>12,345 Subscribers</small>
                            </a>
                            <a href="" class="d-block w-50 py-2 px-3 text-white text-decoration-none ml-2" style="background: #1AB7EA;">
                                <small class="fab fa-vimeo-v mr-2"></small><small>12,345 Followers</small>
                            </a>
                        </div>
                    </div>
                    <!-- Social Follow End -->




                    <!-- Popular News Start -->
                    {{-- <div class="pb-3">
                        <div class="bg-light py-2 px-4 mb-3">
                            <h3 class="m-0">Tranding</h3>
                        </div> --}}
                        {{--  --}}
                        {{-- <div class="d-flex mb-3">
                            <img src="img/news-100x100-1.jpg" style="width: 100px; height: 100px; object-fit: cover;">
                            <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                <div class="mb-1" style="font-size: 13px;">
                                    <a href="">Technologies</a>
                                    <span class="px-1">/</span>
                                    <span>January 01, 2045</span>
                                </div>
                                <a class="h6 m-0" href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                            </div>
                        </div> --}}
                        {{--  --}}
                    {{-- </div> --}}
                    <!-- Popular News End -->

                    <!-- Tags Start -->
                    <div class="pb-3">
                        <div class="bg-light py-2 px-4 mb-3">
                            <h3 class="m-0">Tags</h3>
                        </div>
                        <div class="d-flex flex-wrap m-n1">
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Politics</a>
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Business</a>
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Corporate</a>
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Sports</a>
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Health</a>
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Education</a>
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Science</a>
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Technology</a>
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Foods</a>
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Entertainment</a>
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Travel</a>
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Lifestyle</a>
                        </div>
                    </div>
                    <!-- Tags End -->
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- News With Sidebar End -->
@endsection
