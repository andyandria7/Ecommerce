@extends('layouts.master')
@section('title')
    Register
@endsection
@section('content')
    <div class="page-banner" style="background-color:#444;background-image: url(assets/uploads/banner.jpg);">
        <div class="inner">
            <h1>Register</h1>
        </div>
    </div>
    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="user-content">
                        <form action="{{ route('signup') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif

                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-8">
                                    <div class="col-md-6 form-group">
                                        <label for="">Name *</label>
                                        <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                                        @error('name')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="">Last name</label>
                                        <input type="text" class="form-control" name="lastname" value="{{ old('lastname') }}">
                                        @error('lastname')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="">Email*</label>
                                        <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                                        @error('email')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="">Phone *</label>
                                        <input type="text" class="form-control" name="phone" value="{{ old('phone') }}">
                                        @error('phone')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <label for="">Address *</label>
                                        <textarea name="address" class="form-control" cols="30" rows="10" style="height:70px;">{{ old('address') }}</textarea>
                                        @error('address')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="">Country *</label>
                                        <select name="country" class="form-control select2">
                                            <option value="">Select Country</option>
                                            <option value="USA" {{ old('country') == 'USA' ? 'selected' : '' }}>USA</option>
                                            <option value="Canada" {{ old('country') == 'Canada' ? 'selected' : '' }}>Canada</option>
                                            <!-- Ajoutez d'autres options de pays ici -->
                                        </select>
                                        @error('country')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="">City *</label>
                                        <input type="text" class="form-control" name="city" value="{{ old('city') }}">
                                        @error('city')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="">State *</label>
                                        <input type="text" class="form-control" name="state" value="{{ old('state') }}">
                                        @error('state')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="">Zip Code *</label>
                                        <input type="text" class="form-control" name="zip" value="{{ old('zip') }}">
                                        @error('zip')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="">Password *</label>
                                        <input type="password" class="form-control" name="password">
                                        @error('password')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="">Retype Password *</label>
                                        <input type="password" class="form-control" name="re_password">
                                        @error('re_password')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <input type="submit" class="btn btn-danger" value="Register" name="form1">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
