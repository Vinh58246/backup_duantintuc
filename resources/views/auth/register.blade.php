{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
<body class="authentication-bg authentication-bg-pattern">    
    <div class="account-pages mt-5 mb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-4">
                    <div class="card bg-pattern">

                        <div class="card-body p-4">
                            
                            <div class="text-center w-75 m-auto">
                                <div class="auth-logo">
                                    <a href="index.html" class="logo logo-dark text-center">
                                        <span class="logo-lg">
                                            <img src="{{ asset('assets/images/logo_genji_black.png') }}" alt="" height="22">
                                        </span>
                                    </a>
                
                                    <a href="index.html" class="logo logo-light text-center">
                                        <span class="logo-lg">
                                            <img src="{{ asset('assets/images/logo_genji_white.png') }}" alt="" height="22">
                                        </span>
                                    </a>
                                </div>
                                <p class="text-muted mb-4 mt-3">Bạn chưa có tài khoản? Hãy tạo tài khoản của bạn, chỉ mất chưa đầy một phút</p>
                            </div>

                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <?php

                                    if(isset($_SESSION['notification']['auth'])){
                                        if($_SESSION['notification']['auth'] == 1){
                                            echo '
                                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                    <i class="mdi mdi-block-helper me-2"></i> Gửi email thất bại!
                                                </div>
                                                ';
                                            unset($_SESSION['notification']['auth']);
                                        }elseif($_SESSION['notification']['auth'] == 2){
                                            echo '
                                            <div class="col-12 alert alert-danger alert-dismissible fade show" role="alert">
                                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                <i class="mdi mdi-block-helper me-2"></i> Đăng ký thất bại!
                                            </div>
                                            ';
                                            unset($_SESSION['notification']['auth']);
                                        }
                                        else{
                                            echo '
                                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                    <i class="mdi mdi-block-helper me-2"></i> Tài khoản đã tồn tại, vui lòng đăng nhập hoặc bạn có thể chọn quên mật khẩu!
                                                </div>
                                                ';
                                            unset($_SESSION['notification']['auth']);
                                        }
                                    };
                                ?>
                                <div class="mb-3">
                                    <label for="fullname" class="form-label">Họ và tên đầy đủ</label>
                                    <input class="form-control" placeholder="Nhập họ tên của bạn" id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" >
                                </div>
                                <div class="mb-3">
                                    <label for="emailaddress" class="form-label">Địa chỉ email</label>
                                    <input class="form-control" id="email" name="email" :value="old('email')" required autocomplete="username" placeholder="Nhập email của bạn">
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Mật khẩu</label>
                                    <div class="input-group input-group-merge">
                                        <input type="password" class="form-control" id="password" name="password" required autocomplete="new-password" placeholder="Nhập mật khẩu của bạn">
                                        <div class="input-group-text" data-password="false">
                                            <span class="password-eye"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="confirm_password" class="form-label">Xác nhận mật khẩu</label>
                                    <div class="input-group input-group-merge">
                                        <input type="password" id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" class="form-control" placeholder="Nhập mật khẩu của bạn">
                                        <div class="input-group-text" data-password="false">
                                            <span class="password-eye"></span>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="mb-3">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="checkbox-signup">
                                        <label class="form-check-label" for="checkbox-signup">I accept <a href="javascript: void(0);" class="text-dark">Terms and Conditions</a></label>
                                    </div>
                                </div> -->
                                <div class="text-center d-grid">
                                    {{-- <div class="flex items-center justify-end mt-4"> --}}
                                        {{-- <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href=""> {{ __('Already registered?') }}</a> --}}
                            
                                        <button class="btn btn-success"> Đăng Ký </button>
                                    {{-- </div> --}}
                                    {{-- <button class="btn btn-success" type="submit" onclick="loademail(this)"><span id="loadmail" style="display: none;" class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Đăng Ký </button> --}}
                                </div>
                            </form>

                            <div class="text-center">
                                <h5 class="mt-3 text-muted">Đăng ký sử dụng</h5>
                                <ul class="social-list list-inline mt-3 mb-0">
                                    <li class="list-inline-item">
                                        <a href="javascript: void(0);" class="social-list-item border-danger text-danger"><i class="mdi mdi-google"></i></a>
                                    </li>
                                </ul>
                            </div>

                        </div> <!-- end card-body -->
                    </div>
                    <!-- end card -->

                    <div class="row mt-3">
                        <div class="col-12 text-center">
                            <p class="text-white-50">Đã có tài khoản?  <a href="{{ route('login') }}" class="text-white ms-1"><b>Đăng nhập</b></a></p>
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->

                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->
     <script>
        function loademail(e){
            var loadmail = document.getElementById('loadmail');
            loadmail.style.display = 'inline-block';
            setTimeout(function() {
                loadmail.style.display = 'none';
            }, 2000);
        }
     </script>