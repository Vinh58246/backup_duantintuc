<div class="container mt-3">
    <div class="row px-5 mx-5">
        <div class="col-8">
            <div class="d-flex align-items-center bg-body-secondary p-3 justify-content-between" style="border-left: 5px solid rgb(126, 17, 128);">
                <h3>Bài Viết Khác</h3>
                <div class="d-flex">
                    <p class="m-0">Sắp xếp: </p>
                    <select name="" id="">
                        <option value="">Mới nhất</option>
                        <option value="">Nhiều lượt xem nhất</option>
                    </select>
                </div>
            </div>
            <div class="bg-body-secondary">
                <form action="{{ route('filter')}}" method="GET">
                    <div class="d-flex p-3 row">
                        <div class="col-4">
                            <input name="search" class="w-100" type="text" value="{{ request()->search }}" placeholder="tìm kiếm">
                        </div>
                        <div class="col-4">
                            <select name="category" class="w-100" name="" id="">
                                <option value="">chọn danh mục</option>
                                @foreach ($ctrgsl as $i)
                                <option {{ request()->category == $i->slug ? 'selected' : '' }} value="{{$i->slug}}">{{$i->ten}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-4">
                            <button class="w-100" type="submit">submit</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="mt-3">
                @foreach ($news as $i)
                <div class="card mb-2">
                    <div class="row g-0">
                    <div class="col-md-5">
                        <a href="{{ route('detail',[$i->slug])}}"><img src="{{$i->avatar}}" class="img-fluid rounded" alt="..."></a>
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                        <h5 class="card-title"><a href="{{ route('detail',[$i->slug])}}" class="text-decoration-none">{{$i->title}}</a></h5>
                        <p class="card-text m-0 text-body-secondary">bởi <small style="color: rgb(126, 17, 128);;">admin</small></p>
                        <p class="card-text"><small class="text-body-secondary">{{$i->date}}</small></p>
                        </div>
                    </div>
                    </div>
                </div>
                @endforeach
                {{-- <div class="card mb-2">
                    <div class="row g-0">
                    <div class="col-md-5">
                        <a href=""><img src="../assets/img/tinhot1.jpg" class="img-fluid rounded" alt="..."></a>
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                        <h5 class="card-title"><a href="" class="text-decoration-none">Vừa ra game Disorder, NetEase đã bị gán mác “đạo nhái” Apex Legends Mobile (sản phẩm của tương lai)</a></h5>
                        <p class="card-text m-0 text-body-secondary">bởi <small style="color: rgb(126, 17, 128);;">admin</small></p>
                        <p class="card-text"><small class="text-body-secondary">24/04/2019, 03:38</small></p>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="card mb-2">
                    <div class="row g-0">
                    <div class="col-md-5">
                        <a href=""><img src="../assets/img/tinhot1.jpg" class="img-fluid rounded" alt="..."></a>
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                        <h5 class="card-title"><a href="" class="text-decoration-none">Vừa ra game Disorder, NetEase đã bị gán mác “đạo nhái” Apex Legends Mobile (sản phẩm của tương lai)</a></h5>
                        <p class="card-text m-0 text-body-secondary">bởi <small style="color: rgb(126, 17, 128);;">admin</small></p>
                        <p class="card-text"><small class="text-body-secondary">24/04/2019, 03:38</small></p>
                        </div>
                    </div>
                    </div>
                </div> --}}
            </div>
            <div class="d-flex justify-content-center mt-3">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                      <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                          <span aria-hidden="true">&laquo;</span>
                        </a>
                      </li>
                      <li class="page-item active"><a class="page-link" href="#">1</a></li>
                      {{-- <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li> --}}
                      <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                          <span aria-hidden="true">&raquo;</span>
                        </a>
                      </li>
                    </ul>
                  </nav>
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