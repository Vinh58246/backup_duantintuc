@php
    $handelAction = request()->path() == 'admin/formadd_category' ? 'admin.add_category' : 'admin.edit_category';

@endphp
<div class="rounded bg-white">
    <div class="d-flex justify-content-between align-items-center p-3">
        <div><h3>{{ request()->path() == 'admin/formadd_category' ? 'add category' : 'edit category'}}</h3></div>
        <div><a href="{{ route('admin.list_category') }}" class="btn btn-primary rounded-pill ">Trở về</a></div>
    </div>
    <div class="p-3">
        <form action="{{ route($handelAction) }}" method="POST">
            @csrf
            @isset($category->id)
                <input type="hidden" name="id" value="{{$category->id}}">
            @endisset
            <div class="mb-3">
              <label for="ten" class="form-label">Tên</label>
              <input name="ten" type="text" class="form-control" value="@isset($category->ten) {{ $category->ten }} @endisset" id="tencategory" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="trangthai" class="form-label">Trạng thái</label>
              <select name="trangthai" class="form-select" aria-label="Default select example">
                <option @isset($category->trang_thai) {{ $category->trang_thai == 1 ? 'selected' : '' }} @endisset value="1">Hiển thị</option>
                <option @isset($category->trang_thai) {{ $category->trang_thai == 0 ? 'selected' : '' }} @endisset value="0">Ẩn</option>
              </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>