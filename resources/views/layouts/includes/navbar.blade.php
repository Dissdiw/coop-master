            <!-- start: Navbar -->
            <nav class="px-3 py-2 bg-white rounded shadow">
                <i class="ri-menu-line sidebar-toggle me-3 d-block d-md-none"></i>
                <h5 class="fw-bold mb-0 me-auto">ขั้นตอนสหกิจศึกษา</h5>
                <div class="dropdown">
                    <div class="d-flex align-items-center cursor-pointer dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="me-2 d-none d-sm-block">{{ Auth::guard('student')->user()->full_name }}</span>
                        <img class="navbar-profile-image" src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8cGVyc29ufGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="Image">
                    </div>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#profileModal">Profile</a></li>
                        <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#logoutModal">Logout</a></li>
                    </ul>
                </div>

                <!-- start: profile Modal -->
                <div class="modal fade" id="profileModal" tabindex="-1" aria-labelledby="profileModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="profileModalLabel">Profile</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="{{ route('student.profile.update') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="modal-body">
                                    
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

                                    <div class="d-flex justify-content-center">
                                        <img style="border-radius: 50%; width: 10rem; height: 10rem;" src="{{asset('/img/profile-user.png')}}" id="img" alt="preview">
                                    </div>

                                    <div class="input-group-pill mb-2">
                                        <label for="Profile">Profile:</label>
                                        <input type="file" id="image" name="image" class="form-control" >
                                    </div>

                                    <div class="row">
                                        <div class="input-group-pill mb-2 col">
                                            <label for="Firstname">Firstname:</label>
                                            <input type="text" name="firstname" class="form-control" id="firstname" value="{{ @$data->student->firstname ?? Auth::guard('student')->user()->firstname }}">
                                        </div>

                                        <div class="input-group-pill mb-2 col">
                                            <label for="Lastname">Lastname:</label>
                                            <input type="text" name="lastname" class="form-control" id="lastname" value="{{ @$data->student->lastname ?? Auth::guard('student')->user()->lastname }}">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="input-group-pill mb-2 col">
                                            <label for="Firstname_en">Firstname EN:</label>
                                            <input type="text" name="firstname_en" class="form-control" id="firstname_en" value="{{ @$data->student->firstname_en ?? Auth::guard('student')->user()->firstname_en }}">
                                        </div>

                                        <div class="input-group-pill mb-2 col">
                                            <label for="Lastname_en">Lastname EN:</label>
                                            <input type="text" name="lastname_en" class="form-control" id="lastname_en" value="{{ @$data->student->lastname_en ?? Auth::guard('student')->user()->lastname_en }}">
                                        </div>
                                    </div>

                                    <div class="input-group-pill mb-2">
                                        <label for="Gender">Gender:</label>
                                        <div class="row">
                                            <div class="form-check col">
                                                <input class="form-check-input" type="radio" name="gender" id="male" value="ชาย" {{ @$data->student->gender ?? Auth::guard('student')->user()->gender == 'ชาย' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="male">
                                                    Male
                                                </label>
                                            </div>
                                            <div class="form-check col">
                                                <input class="form-check-input" type="radio" name="gender" id="female" value="หญิง" {{ @$data->student->gender ?? Auth::guard('student')->user()->gender == 'หญิง' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="female">
                                                    Female
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="input-group-pill mb-2 col">
                                            <label for="Birthday">Birthday:</label>
                                            <input type="date" name="birthday" class="form-control" id="birthday" value="{{ @$data->student->birthday ?? Auth::guard('student')->user()->birthday }}">
                                        </div>

                                        <div class="input-group-pill mb-2 col">
                                            <label for="Email">Email:</label>
                                            <input type="email" name="email" class="form-control" id="email" value="{{ @$data->student->email ?? Auth::guard('student')->user()->email }}">
                                        </div>

                                        <div class="input-group-pill mb-4 col">
                                            <label for="Phone">Phone:</label>
                                            <input type="text" name="phone" class="form-control" id="phone" value="{{ @$data->student->phone ?? Auth::guard('student')->user()->phone }}">
                                        </div>
                                    </div>

                                    <div class="card p-3 mb-3">
                                        <div class="input-group-pill mb-2">
                                            <label for="Student ID">Student ID:</label>
                                            <input type="text" name="student_code" class="form-control" id="student_code" value="{{ @$data->student->student_code ?? Auth::guard('student')->user()->student_code }}" readonly>
                                        </div>

                                        <div class="row">
                                            <div class="input-group-pill col">
                                                <label for="">Password:</label>
                                                <input type="password" name="password" class="form-control" >
                                            </div>
                                            <div class="input-group-pill col">
                                                <label for="">Confirm Password:</label>
                                                <input type="password" name="password_confirmation" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- end: profile Modal -->

                <!-- start: logout Modal -->
                <div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="logoutModalLabel">Logout</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                ต้องการ Logout ใช่หรือไม่?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <form action="{{ route('student.logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-primary">Logout</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end: logout Modal -->
            </nav>
            <!-- end: Navbar -->