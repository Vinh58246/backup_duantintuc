@php
    $ctgr = \App\Models\category::where(['trang_thai' => 1])->get();
@endphp
<!-- header -->
<div class="header">
    <div class="shadow-sm mb-5" style="--bs-box-shadow-sm: 0px 5px 15px rgba(0, 0, 0, 0.075);">
        <div class="my-3 text-center">
            <a href=""><img style="width: 120px;" src="{{ asset('assets/img/logoPV_white_catnen.png') }}" alt=""></a>
        </div>
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('home_client') }}">Home</a>
                      </li>
                      @foreach ($ctgr as $i)
                        <li class="nav-item">
                          <a class="nav-link active" aria-current="page" href="{{ route('filter', ['category' => $i->slug])}}">{{$i->ten}}</a>
                        </li>
                      @endforeach
                      {{-- <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Tin tức</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Video</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Đánh Giá</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Tin tức</a>
                      </li> --}}
                    </ul>
                    <form action="{{ route('filter') }}" method="GET" class="d-flex" role="search">
                        <svg data-bs-toggle="modal" data-bs-target="#exampleModal" class="mx-2 cursor_pioter" width="30" height="30" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.33333 2.5C5.11167 2.5 2.5 5.11167 2.5 8.33333C2.5 11.555 5.11167 14.1667 8.33333 14.1667C9.70083 14.1688 11.0252 13.6884 12.0733 12.81L16.6108 17.3475C16.6592 17.3959 16.7166 17.4342 16.7798 17.4604C16.843 17.4866 16.9108 17.5001 16.9792 17.5001C17.0476 17.5001 17.1153 17.4866 17.1785 17.4604C17.2417 17.4342 17.2991 17.3959 17.3475 17.3475C17.3959 17.2991 17.4342 17.2417 17.4604 17.1785C17.4866 17.1153 17.5001 17.0476 17.5001 16.9792C17.5001 16.9108 17.4866 16.843 17.4604 16.7798C17.4342 16.7166 17.3959 16.6592 17.3475 16.6108L12.81 12.0733C13.6884 11.0252 14.1688 9.70083 14.1667 8.33333C14.1667 5.11167 11.555 2.5 8.33333 2.5ZM3.54167 8.33333C3.54167 5.68708 5.68708 3.54167 8.33333 3.54167C10.9796 3.54167 13.125 5.68708 13.125 8.33333C13.125 10.9796 10.9796 13.125 8.33333 13.125C5.68708 13.125 3.54167 10.9796 3.54167 8.33333Z" fill="black"/>
                        </svg>
                        <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog h-75 d-flex align-items-center">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h1 class="modal-title fs-5" id="exampleModalLabel">Tìm kiếm</h1>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" name="search" placeholder="Nhập gì đó"aria-describedby="button-addon2">
                                        <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Tìm</button>
                                      </div>
                                    </div>
                              </div>
                            </div>
                          </div>
                        <svg class="mx-2 cursor_pioter" width="30" height="30" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3 17.997V16.997C3 13.131 6.13401 9.99699 10 9.99699C13.866 9.99699 17 13.131 17 16.997V17.997" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M10.0002 10C12.2093 10 14.0002 8.2091 14.0002 6C14.0002 3.79086 12.2093 2 10.0002 2C7.79104 2 6.00018 3.79086 6.00018 6C6.00018 8.2091 7.79104 10 10.0002 10Z" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </form>
                  </div>
                </div>
              </nav>
        </div>
    </div>
</div>