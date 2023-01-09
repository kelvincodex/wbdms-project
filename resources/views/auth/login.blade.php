@extends("layout.auth-layout")
@section("content")
        <div class="d-flex align-items-center justify-content-center my-5 my-lg-0">
            <div class="container">
                <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-2">
                    <div class="col mx-auto">
                        <div class="my-4 text-center">
                            {{-- <img src="{{asset("assets-dash/images/logo-img.png")}}" width="180" alt="" /> --}}
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="border p-4 rounded">
                                    <div class="text-center">
                                        <h3 class="">Sign In</h3>
                                        <p>Dont't have an account? <a href="authentication-signin.html">Sign up here</a>
                                        </p>
                                    </div>
                                    <div class="d-grid">
                                        <a class="btn my-4 shadow-sm btn-light" href="javascript:;">
                                            <span class="d-flex justify-content-center align-items-center">
                                                <img class="me-2" src="{{asset("assets-dash/images/icons/search.svg")}}" width="16" alt="Image Description">
                                                <span>Sign In with Google</span>
											</span>
                                        </a>
                                        <a href="javascript:;" class="btn btn-light"><i class="bx bxl-facebook"></i>Sign In with Facebook</a>
                                    </div>
                                    <div class="login-separater text-center mb-4"> <span>OR SIGN In WITH EMAIL</span>
                                        <hr/>
                                    </div>
                                    <div class="form-body">
                                        <form class="row g-3" method="POST" action="{{ route('login.save') }}">
                                            @csrf
                                            <div class="col-sm-12">
                                                <label for="email" class="form-label">Email</label>
                                                <input type="email" name="email" value="{{ old('mail') }}" class="form-control" id="email" placeholder="examle@email.com">
                                                @error('email')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <label for="password" class="form-label">Password</label>
                                                <div class="input-group" id="show_hide_password">
                                                    <input type="password" name="password" class="form-control border-end-0" id="password" placeholder="Enter Password"> <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
                                                </div>
                                            </div>
                                            </div>
                                            <div class="col-12 mt-4">
                                                <div class="d-grid">
                                                    <button type="submit" class="btn btn-light"><i class='bx bx-user'></i>Sign In</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end row-->
            </div>
        </div>
@endsection
