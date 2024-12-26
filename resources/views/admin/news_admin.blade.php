

<div class="rounded bg-white">
  <div class="d-flex justify-content-between align-items-center p-3">
    <div><h3>News</h3></div>
    <div><a href="{{ route('admin.formadd_news') }}" class="btn btn-primary rounded-pill "><i class="bi bi-plus text-white"></i> create new</a></div>
</div>
    <div class="p-3 table-responsive">
        <table class="table">
            <thead>
              <tr>
                <th scope="col" class="text-center" style="width: 5%;">#</th>
                <th scope="col" class="text-center" style="width: 20%;">Img</th>
                <th scope="col" class="text-center" style="width: 30%;">Title</th>
                <th scope="col" class="text-center" style="width: 10%;">Category</th>
                <th scope="col" class="text-center">Status</th>
                <th scope="col" class="text-center">Hots</th>
                <th scope="col" class="text-center" style="width: 5%;">Views</th>
                <th scope="col" class="text-center">Handle</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($show_news as $i)
              @php
                  $kiemtraanh = strpos($i->avatar, 'https');
                  $pathimg = $kiemtraanh ? $i->avatar : asset($i->avatar);
              @endphp
              <tr>
                <th scope="row">{{ $i->id }}</th>
                <td><img width="150px" src="{{ $pathimg }}" alt=""></td>
                <td>{{ $i->title }}</td>
                <td>{{ $i->category_foreign->ten }}</td>
                <td class="text-center">{{ $i->status == 0 ? "Hiển thị" : "Ẩn" }}</td>
                <td class="text-center">{{ $i->hots == 1 ? "Nổi bật" : "Bình thường" }}</td>
                <td class="text-center">{{ $i->views }}</td>
                <td>
                  <div class="d-flex justify-content-between">
                    <a href="{{ route('admin.formedit_news', $i->id) }}" class="btn btn-primary"><i class="bi bi-pencil-square text-white"></i></a>
                    <a href="#" onclick="event.preventDefault();" data-bs-toggle="modal" data-bs-target="#del_news{{$i->id}}" class="btn btn-danger"><i class="bi bi-trash3 text-white"></i></a>
                        <div class="modal fade " id="del_news{{$i->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog h-75 d-flex align-items-center">
                              <div class="modal-content">
                                <div class="modal-body">
                                    <div class="p-5 text-center">
                                        <h3>Bạn chắc chứ ?</h3>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Không</button>
                                    <form action="{{ route('admin.del_news', $i->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-primary">Chắc !</button>
                                    </form>
                                </div>
                              </div>
                            </div>
                          </div>
                  </div>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
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
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                </a>
              </li>
            </ul>
          </nav>
    </div>
</div>