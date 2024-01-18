<x-app-layout>

    <form action="{{ route('student.register') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="d-flex justify-content-center">
            <div class="card mt-4 mb-4" style="width: 80rem;">
                <div class="row d-flex justify-content-center mt-4">
                    <div class="col-md-6 mb-3 mb-md-0">
                        <h2>Signup</h2>

                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                        <div class="d-flex justify-content-center">
                            <img style="border-radius: 50%; width: 10rem; height: 10rem;" src="{{asset('/img/profile-user.png')}}" id="img" alt="preview">
                        </div>

                        <div class="input-group-pill mb-2">
                            <label for="Profile">Profile:</label>
                            <input type="file" id="image" name="image" class="form-control" placeholder="" aria-label="image" required>

                        </div>

                        <div class="row">
                            <div class="input-group-pill mb-2 col">
                                <label for="Firstname">Firstname:</label>
                                <input type="text" name="firstname" value="{{ old('firstname') }}" class="form-control" placeholder="firstname" aria-label="firstname" required>
                            </div>

                            <div class="input-group-pill mb-2 col">
                                <label for="Lastname">Lastname:</label>
                                <input type="text" name="lastname" value="{{ old('lastname') }}" class="form-control" placeholder="lastname" aria-label="lastname" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-group-pill mb-2 col">
                                <label for="Firstname_en">Firstname EN:</label>
                                <input type="text" name="firstname_en" value="{{ old('firstname_en') }}" class="form-control" placeholder="firstname EN" aria-label="firstname_en" required>
                            </div>

                            <div class="input-group-pill mb-2 col">
                                <label for="Lastname_en">Lastname EN:</label>
                                <input type="text" name="lastname_en" value="{{ old('lastname_en') }}" class="form-control" placeholder="lastname EN" aria-label="lastname" required>
                            </div>
                        </div>

                        <div class="input-group-pill mb-2">
                            <label for="Gender">Gender:</label>
                            <div class="row">
                                <div class="form-check col">
                                    <input class="form-check-input" type="radio" name="gender" id="male" value="ชาย" checked>
                                    <label class="form-check-label" for="male">
                                        Male
                                    </label>
                                </div>
                                <div class="form-check col">
                                    <input class="form-check-input" type="radio" name="gender" id="female" value="หญฺิง">
                                    <label class="form-check-label" for="female">
                                        Female
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-group-pill mb-2 col">
                                <label for="Birthday">Birthday:</label>
                                <input type="date" name="birthday" class="form-control" placeholder="Birthday" aria-label="Birthday" required>
                            </div>

                            <div class="input-group-pill mb-2 col">
                                <label for="Email">Email:</label>
                                <input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="email" aria-label="email" required>
                            </div>

                            <div class="input-group-pill mb-4 col">
                                <label for="Phone">Phone:</label>
                                <input type="text" name="phone" value="{{ old('phone') }}" class="form-control" placeholder="phone" aria-label="phone" required>
                            </div>
                        </div>

                        <div class="card p-3">
                            <div class="input-group-pill mb-2">
                                <label for="Student ID">Student ID:</label>
                                <input type="text" name="student_code" value="{{ old('student_code') }}" class="form-control" placeholder="student ID" aria-label="student ID" required>
                            </div>

                            <div class="row">
                                <div class="input-group-pill col">
                                    <label for="">Password:</label>
                                    <input type="password" name="password" class="form-control" placeholder="Password" aria-label="Password" required>
                                </div>

                                <div class="input-group-pill col">
                                    <label for="">Confirm Password:</label>
                                    <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm password" aria-label="Password" required>
                                </div>
                            </div>
                        </div>

                        <div class="my-4">
                            <button type="submit" class="btn btn-primary me-2">Submit</button>
                            <a href="">มีบัญชีอยู่เเล้วใช่ไหม ?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    
</x-app-layout>