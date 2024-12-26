
    <div class="p-3">
        <div class="d-flex justify-content-center"><a class="text-body" href="{{ route('home_client') }}"><h3>admin</h3></a></div>
        <div class="d-flex align-items-center bg-body-secondary p-2 mb-3" style="border-left: 5px solid rgb(126, 17, 128);">
            <a class="text-decoration-none" href="#"><p class="m-0">Dashboard</p></a>
        </div>
        <div class="d-flex align-items-center bg-body-secondary p-2 mb-3" style="border-left: 5px solid rgb(126, 17, 128);">
            <a class="text-decoration-none" href="{{ route('admin.list_category') }}"><p class="m-0">Categories</p></a>
        </div>
        <div class="d-flex align-items-center bg-body-secondary p-2 mb-3" style="border-left: 5px solid rgb(126, 17, 128);">
            <a class="text-decoration-none" href="{{ route('admin.list_news') }}"><p class="m-0">News</p></a>
        </div>
    </div>