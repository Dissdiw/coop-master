<x-app-layout>
        <section class="vh-100" style="background-color: #FFA500;">
            <div class="container py-2 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col col-xl-10">
                        <div class="card" style="border-radius: 1rem;">
                            <div class="row g-0">
                                <div class="col-md-6 col-lg-5 d-none d-md-block">
                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img1.webp" alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                                </div>
                                <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                    <div class="card-body p-4 p-lg-5 text-black">

                                        <form action="{{route('forget.password.post')}}" method="POST">
                                            @csrf
                                            <div class="d-flex align-items-center mb-3 pb-1">
                                                <img class="me-2" style="border-radius : 50%; width : 5rem; height : 5rem; border-style: solid; border-color: black;" src="{{asset('/img/IPTM logo2.png')}}" alt="">
                                                <span class="h1 fw-bold mb-0">IPTM</span>
                                            </div>

                                            <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Forgot password?</h5>

                                            @if ($errors->any())
                                                <div class="alert alert-danger">
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif
                                            
                                            @if(session()->has('error'))
                                                <div class="alert alert-danger">{{session('error')}}</div>
                                            @endif

                                            @if(session()->has('success'))
                                                <div class="alert alert-success">{{session('success')}}</div>
                                            @endif

                                            <div class="form-outline mb-4">
                                                <input type="email" id="email" name="email" value="{{ old('email') }}" class="form-control form-control-lg" required />
                                                <label class="form-label" for="email">Email</label>
                                            </div>

                                            <div class="pt-1 mb-4">
                                                <button class="btn btn-dark btn-lg btn-block" type="submit">Submit</button>
                                            </div>

                                            <p class="pb-lg-2" style="color: #393f81;">Don't have an account? <a href="{{ route('student.signup') }}" style="color: #393f81;">Register here</a></p>

                                            <p class="pb-lg-2" style="color: #393f81;">Have an account? <a href="{{ route('student.signin') }}" style="color: #393f81;">Signin here</a></p>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</x-app-layout>