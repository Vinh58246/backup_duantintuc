<!-- main -->
<div>
    <div class="container mb-5">
        <div class="d-flex justify-content-center mb-3">
            <div class="overflow-hidden w-75">
                <img class="img-fluid zoom-img" src="../assets/img/anhbiahome.jpg" alt="">
            </div>
        </div>
        <div class="text-center">
            <h2>
                Overwatch sắp phát hành phiên bản CẢI TIẾN chất lượng 4K trên nền tảng PS5?
            </h2>
            <p>24/04/2019, 05:01</p>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-8">
                <!-- start tin tức hot -->
                <div class="mb-3">
                    <div class="d-flex align-items-center mb-3">
                        <h2 class="mx-3">TIN HOT</h2>
                        <div style="height: 5px; width: 80%; background-color: rgb(126, 17, 128);"></div>
                    </div>
                    <div>
                        <div class="card mb-5">
                            <div class="row g-0">
                            <div class="col-md-4">
                                <a href="{{ route('detail',[$hot->slug])}}"><img src="{{$hot->avatar}}" class="img-fluid rounded" alt="..."></a>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                <h5 class="card-title"><a href="{{ route('detail',[$hot->slug])}}" class="text-decoration-none">{{$hot->title}}</a></h5>
                                <p class="card-text m-0 text-body-secondary">bởi <small style="color: rgb(126, 17, 128);;">admin</small></p>
                                <p class="card-text"><small class="text-body-secondary">{{$hot->date}}</small></p>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="row">

                            @foreach ($hots as $i)
                            <div class="col-4">
                                <div class="card mb-3">
                                    <a href="{{ route('detail',[$i->slug])}}"><img src="{{$i->avatar}}" class="card-img-top" alt="..."></a>
                                    <div class="card-body">
                                        <h5 class="card-title"><a href="{{ 'detail/'.$i->id }}" class="text-decoration-none">{{$i->title}}</a></h5>
                                        <p class="card-text m-0 text-body-secondary">bởi <small style="color: rgb(126, 17, 128);;">admin</small></p>
                                        <p class="card-text"><small class="text-body-secondary">{{$i->date}}</small></p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            
                        </div>
                    </div>
                </div>
                <!-- end tin tức hot -->
            </div>
            <div style="height: fit-content; position: sticky; top: 60px;" class="col-4">
                <h2>XEM NHIỀU</h2>
                <div>
                    @foreach ($dates as $i)
                    <div class="py-2 border-xem-nhieu"><a href="{{ route('detail',[$i->slug])}}" class="text-decoration-none">{{$i->title}}</a></div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="container mb-5">
        <h2 class="m-3">TIN MỚI NHẤT</h2>
        <div class="row">
            @foreach ($views as $i)
            <div class="col-4">
                <div class="card mb-3">
                    <a href="{{ route('detail',[$i->slug])}}"><img src="{{$i->avatar}}" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                        <h5 class="card-title"><a href="{{ route('detail',[$i->slug])}}" class="text-decoration-none">{{$i->title}}</a></h5>
                        <p class="card-text m-0 text-body-secondary">bởi <small style="color: rgb(126, 17, 128);">admin</small></p>
                        <p class="card-text"><small class="text-body-secondary">{{$i->date}}</small></p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-center">
            <button class="btn btn-danger">Xem Thêm</button>
        </div>
    </div>
</div>