<div class="rounded bg-white">
    <div class="d-flex justify-content-between align-items-center p-3">
        <div><h3>add News</h3></div>
        <div><a href="{{ route('admin.list_news') }}" class="btn btn-primary rounded-pill ">Trở về</a></div>
    </div>
    <div class="p-3">
        <form action="{{ route('admin.add_news') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label class="form-label">Chọn danh mục</label>
                <select name="chondanhmuc" class="form-select" aria-label="Default select example">
                    <option selected>Danh mục</option>
                    @foreach ($show_category as $i)
                        <option value="{{ $i->id }}">{{ $i->ten }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="tieude" class="form-label">Tiêu Đề</label>
                <input name="tieude_baiviet" type="text" class="form-control" id="tieude" placeholder="Nhập tiêu đề bài viết">
            </div>

            <div class="mb-3">
                <div class="drop-zone">
                    <span class="drop-zone__prompt">Drop file here or click to upload</span>
                    <input type="file" name="myFile" class="drop-zone__input">
                </div>
            </div>

            {{-- start rich text editor --}}
            <div class="mb-3">
                <div class="container-richtext">

                    <div class="options">
                      <!-- Text Format -->
                      <button type="button" id="bold" class="option-button format cursor-pointer">
                        <i class="fa-solid fa-bold"></i>
                      </button>
                      <button type="button" id="italic" class="option-button format cursor-pointer">
                        <i class="fa-solid fa-italic"></i>
                      </button>
                      <button type="button" id="underline" class="option-button format cursor-pointer">
                        <i class="fa-solid fa-underline"></i>
                      </button>
                      <button type="button" id="strikethrough" class="option-button format cursor-pointer">
                        <i class="fa-solid fa-strikethrough"></i>
                      </button>
                      <button type="button" id="superscript" class="option-button script cursor-pointer">
                        <i class="fa-solid fa-superscript"></i>
                      </button>
                      <button type="button" id="subscript" class="option-button script cursor-pointer">
                        <i class="fa-solid fa-subscript"></i>
                      </button>
              
                      <!-- List -->
                      <button type="button" id="insertOrderedList" class="option-button cursor-pointer">
                        <div class="fa-solid fa-list-ol"></div>
                      </button>
                      <button type="button" id="insertUnorderedList" class="option-button cursor-pointer">
                        <i class="fa-solid fa-list"></i>
                      </button>
              
                      <!-- image -->
                      <button type="button" id="imageadd" class="option-button cursor-pointer">
                        <i class="fa-regular fa-image fa-flip" style="--fa-animation-duration: 5s;"></i>
                      </button>
              
                      <!-- video -->
                      <button type="button" id="videoadd" class="option-button cursor-pointer">
                        <i class="fa-solid fa-video fa-beat-fade" style="--fa-beat-fade-opacity: 0.67; --fa-beat-fade-scale: 1.075;"></i>
                      </button>
              
                      <!-- Undo/Redo -->
                      <button type="button" id="undo" class="option-button cursor-pointer">
                        <i class="fa-solid fa-rotate-left fa-spin fa-spin-reverse"></i>
                      </button>
                      <button type="button" id="redo" class="option-button cursor-pointer">
                        <i class="fa-solid fa-rotate-right fa-spin"></i>
                      </button>
              
                      <!-- Link -->
                      <button type="button" id="createLink" class="option-button adv-option-button cursor-pointer">
                        <i class="fa fa-link"></i>
                      </button>
                      <button type="button" id="unlink" class="option-button cursor-pointer">
                        <i class="fa fa-unlink"></i>
                      </button>
              
                      <!-- Alignment -->
                      <button type="button" id="justifyLeft" class="option-button align cursor-pointer">
                        <i class="fa-solid fa-align-left"></i>
                      </button>
                      <button type="button" id="justifyCenter" class="option-button align cursor-pointer">
                        <i class="fa-solid fa-align-center"></i>
                      </button>
                      <button type="button" id="justifyRight" class="option-button align cursor-pointer">
                        <i class="fa-solid fa-align-right"></i>
                      </button>
                      <button type="button" id="justifyFull" class="option-button align cursor-pointer">
                        <i class="fa-solid fa-align-justify"></i>
                      </button>
                      <button type="button" id="indent" class="option-button spacing cursor-pointer">
                        <i class="fa-solid fa-indent"></i>
                      </button>
                      <button type="button" id="outdent" class="option-button spacing cursor-pointer">
                        <i class="fa-solid fa-outdent"></i>
                      </button>
                      
                      <!-- Headings -->
                      <select id="formatBlock" class="adv-option-button cursor-pointer">
                        <option value="H1">H1</option>
                        <option value="H2">H2</option>
                        <option value="H3">H3</option>
                        <option value="H4">H4</option>
                        <option value="H5">H5</option>
                        <option value="H6">H6</option>
                      </select>
              
                      <!-- Font -->
                      <select id="fontName" class="adv-option-button cursor-pointer"></select>
                      <select id="fontSize" class="adv-option-button cursor-pointer"></select>
              
                      <!-- Color -->
                      <div class="input-wrapper">
                        <input type="color" id="foreColor" class="adv-option-button" />
                        <label for="foreColor">Font Color</label>
                      </div>
                      <div class="input-wrapper">
                        <input type="color" id="backColor" class="adv-option-button" />
                        <label for="backColor">Highlight Color</label>
                      </div>
                    </div>

                    <div id="text-input" class="d-flex flex-column" contenteditable="true"></div>
              
                    
              
                    {{-- <div style="border: 1px solid gray; border-radius: 10px; width: 100%; padding: 10px; margin-top: 20px; height: 200px; overflow-y: auto; overflow-x: hidden;" id="outdiv">
                    </div> --}}
                    
                    <input name="content_news" style="border: 1px solid gray; border-radius: 10px; width: 100%; padding: 10px; margin-top: 20px; overflow-y: auto; overflow-x: hidden;" type="hidden" id="input_out">
                  </div>
            </div>
            {{-- end rich text editor --}}
            <div class="mb-3">
                <label class="form-label">Trạng thái</label>
                <select name="trangthai_baiviet" class="form-select" aria-label="Default select example">
                    <option selected value="0">Hiển thị</option>
                    <option value="1">Ẩn</option>
                </select>
            </div>
            
            <div class="mb-3">
                <label class="form-label">Nổi bật</label>
                <select name="noibat_baiviet" class="form-select" aria-label="Default select example">
                    <option selected value="0">Bình thường</option>
                    <option value="1">Nổi bật</option>
                </select>
            </div>
            <div style="display: flex; justify-content: center; margin-top: 10px;">
                <button type="submit" id="getall" class="btn-upload" style="padding: 15px 100px; font-size: 20px;">Lưu bài viết</button>
            </div>
        </form>
    </div>
</div>