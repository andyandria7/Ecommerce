@extends('layouts.master')
@section('title')
    Login
@endsection
@section('content')
    <div class="page-banner" style="background-color:#444;background-image: url(assets/uploads/banner.jpg);">
        <div class="inner">
            <h1>LOGIN</h1>
        </div>
    </div>
    @if ($errors->any())
    {{-- {{ dd($errors) }} --}}
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if (session('success'))
        <div class="alert alert-success text-center ">
            {{ session('success') }}
        </div>
    @endif
    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="user-content">
                        <form action="{{ route('connexion') }}" method="post">
                            @csrf
                            
                            <div class="row">
                                <div class="col-md-4"></div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Email *</label>
                                        <input type="email" class="form-control" name="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Password *</label>
                                        <input type="password" class="form-control" name="password">
                                    </div>
                                    <div class="form-group">
                                        <label for=""></label>
                                        <input type="submit" class="btn btn-success" value="Validation" name="form1">
                                    </div>
                                    <a href="forget-password.php" style="color:#e4144d;">Mot de pass oublier?</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
