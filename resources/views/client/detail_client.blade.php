
    <div class="container mt-3">
        <div class="border-bottom mb-5">
            <h1>{{ $detail->title }}</h1>
            <div class="d-flex align-items-center my-3">
                <img src="{{ asset('assets/img/daidien.jpg') }}" width="50px" height="50px" class="rounded-circle" alt="">
                <p class="m-0 mx-3">Bởi admin</p><p class="m-0">Ngày đăng: {{ $detail->date }}</p>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-8">
                <div class=" pb-4 mb-5"  style="border-bottom: 4px solid rgb(126, 17, 128);">
                    {{ $detail->content }}
                </div>
                <div>
                    <h3>Bình luận</h3>
                    <div class="mb-5">
                        <div class="mb-3">
                            <div class="mb-3">
                                <div class="form-control p-3 mb-2">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('assets/img/user1.jpg') }}" width="40px" height="40px" class="rounded-circle" alt="">
                                        <p class="m-0 mx-3">nguyễn văn a</p><p class="m-0">24/04/2019, 05:01</p>
                                    </div>
                                    <div class="mt-3">bài viết rất hay cho một tràng vỗ tay</div>
                                </div>
                                <div class="d-flex align-items-center"><p class="m-0">Like</p><span class="rounded-circle mx-2" style="width: 5px; height: 5px; background-color: gray;"></span><p class="m-0">Reply</p></div>
                            </div>
                            <div class="mb-3 ps-5">
                                <div class="form-control p-3 mb-2">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('assets/img/user2.jpg') }}" width="40px" height="40px" class="rounded-circle" alt="">
                                        <p class="m-0 mx-3">trần thị mẹ</p><p class="m-0">24/04/2019, 05:01</p>
                                    </div>
                                    <div class="mt-3">bài viết rất hay cho một tràng vỗ tay</div>
                                </div>
                                <div class="d-flex align-items-center"><p class="m-0">Like</p><span class="rounded-circle mx-2" style="width: 5px; height: 5px; background-color: gray;"></span><p class="m-0">Reply</p></div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="mb-3">
                                <div class="form-control p-3 mb-2">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('assets/img/user3.webp') }}" width="40px" height="40px" class="rounded-circle" alt="">
                                        <p class="m-0 mx-3">lê cẩm cám</p><p class="m-0">24/04/2019, 05:01</p>
                                    </div>
                                    <div class="mt-3">bài viết rất hay cho một tràng vỗ tay</div>
                                </div>
                                <div class="d-flex align-items-center"><p class="m-0">Like</p><span class="rounded-circle mx-2" style="width: 5px; height: 5px; background-color: gray;"></span><p class="m-0">Reply</p></div>
                            </div>
                        </div>
                        <div  class="form-control">
                            <input type="text" placeholder="Viết bình luận" class="w-75" style="border: none; outline: none;"><button class="w-25 btn btn-outline-secondary">Gửi</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4 px-5" style="height: fit-content; position: sticky; top: 40px;">
                <div class="text-center">
                    <h3>Tin tức nổi bật</h3>
                </div>
                <div>
                    
                    @foreach ($hots as $i)
                    <div class="card mb-3">
                        <a href="{{ route('detail',[$i->slug])}}"><img src="{{$i->avatar}}" class="card-img-top" alt="..."></a>
                        <div class="card-body">
                          <p class="card-text"><a href="{{ route('detail',[$i->slug])}}" class="text-decoration-none">{{$i->title}}</a></p>
                        </div>
                    </div> 
                    @endforeach

                </div>
            </div>
        </div>
    </div>