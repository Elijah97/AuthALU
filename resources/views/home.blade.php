@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    @if(Auth::user()->role == 0)
                    {{ __('SUPER ADMIN :: Add Admin') }}
                    @elseif(Auth::user()->role == 99)
                    {{ __('ADMIN :: Add Doctor') }}
                    @elseif(Auth::user()->role == 2)
                    {{ __('DOCTOR :: Add Patient') }}
                    @else
                    {{ __('PATIENT :: View Details') }}
                    @endif
                </div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <!-- User management by role -->
                    @if(Auth::user()->role == 0)
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <p> @include('inc.messages')</p>
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Add Admin') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <hr />
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Names</th>
                                <th scope="col">Email</th>
                                <th scope="col">Role</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Elie Kagabo</td>
                                <td>ekagabo17@alustudent.com</td>
                                <td>Admin</td>
                                <td>
                                    <i class="material-icons" style="font-size: 14px">pause</i>
                                    <i class="material-icons" style="font-size: 14px">play_arrow</i>
                                    <i class="material-icons" style="font-size: 14px">delete</i>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob Nsenga</td>
                                <td>jacob@alustudent.com</td>
                                <td>Admin</td>
                                <td>
                                    <i class="material-icons" style="font-size: 14px">pause</i>
                                    <i class="material-icons" style="font-size: 14px">play_arrow</i>
                                    <i class="material-icons" style="font-size: 14px">delete</i>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Larry Tunga</td>
                                <td>larray@alustudent.com</td>
                                <td>Admin</td>
                                <td>
                                    <i class="material-icons" style="font-size: 14px">pause</i>
                                    <i class="material-icons" style="font-size: 14px">play_arrow</i>
                                    <i class="material-icons" style="font-size: 14px">delete</i>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    @elseif(Auth::user()->role == 99)
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <p> @include('inc.messages')</p>
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Profession') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Add Doctor') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <hr />
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Names</th>
                                <th scope="col">Email</th>
                                <th scope="col">Profession</th>
                                <th scope="col">Role</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Elie Kagabo</td>
                                <td>ekagabo17@alustudent.com</td>
                                <td>Interior</td>
                                <td>Doctor</td>
                                <td>
                                    <i class="material-icons" style="font-size: 14px">pause</i>
                                    <i class="material-icons" style="font-size: 14px">play_arrow</i>
                                    <i class="material-icons" style="font-size: 14px">delete</i>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob Nsenga</td>
                                <td>jacob@alustudent.com</td>
                                <td>Exterior</td>
                                <td>Doctor</td>
                                <td>
                                    <i class="material-icons" style="font-size: 14px">pause</i>
                                    <i class="material-icons" style="font-size: 14px">play_arrow</i>
                                    <i class="material-icons" style="font-size: 14px">delete</i>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Larry Tunga</td>
                                <td>larray@alustudent.com</td>
                                <td>Surgeon</td>
                                <td>Doctor</td>
                                <td>
                                    <i class="material-icons" style="font-size: 14px">pause</i>
                                    <i class="material-icons" style="font-size: 14px">play_arrow</i>
                                    <i class="material-icons" style="font-size: 14px">delete</i>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    @elseif(Auth::user()->role == 2)
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <p> @include('inc.messages')</p>
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Full Names') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Age') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Add Doctor') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <hr />
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Names</th>
                                <th scope="col">Email</th>
                                <th scope="col">Age</th>
                                <th scope="col">Role</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Elie Kagabo</td>
                                <td>ekagabo17@alustudent.com</td>
                                <td>20</td>
                                <td>Patient</td>
                                <td>
                                    <i class="material-icons" style="font-size: 14px">pause</i>
                                    <i class="material-icons" style="font-size: 14px">play_arrow</i>
                                    <i class="material-icons" style="font-size: 14px">delete</i>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob Nsenga</td>
                                <td>jacob@alustudent.com</td>
                                <td>67</td>
                                <td>Patient</td>
                                <td>
                                    <i class="material-icons" style="font-size: 14px">pause</i>
                                    <i class="material-icons" style="font-size: 14px">play_arrow</i>
                                    <i class="material-icons" style="font-size: 14px">delete</i>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Larry Tunga</td>
                                <td>larray@alustudent.com</td>
                                <td>90</td>
                                <td>Patient</td>
                                <td>
                                    <i class="material-icons" style="font-size: 14px">pause</i>
                                    <i class="material-icons" style="font-size: 14px">play_arrow</i>
                                    <i class="material-icons" style="font-size: 14px">delete</i>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    @else
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Email</th>
                                <th scope="col">Date</th>
                                <th scope="col">Doctor</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>ekagabo17@alustudent.com</td>
                                <td>20.08.2020</td>
                                <td>Doctor Gash</td>
                                <td>
                                    <i class="material-icons" style="font-size: 14px">history</i>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>ekagabo17@alustudent.com</td>
                                <td>12.09.2020</td>
                                <td>Doctor Ben</td>
                                <td>
                                    <i class="material-icons" style="font-size: 14px">history</i>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>ekagabo17@alustudent.com</td>
                                <td>29.09.2020</td>
                                <td>Doctor Bella</td>
                                <td>
                                    <i class="material-icons" style="font-size: 14px">history</i>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection