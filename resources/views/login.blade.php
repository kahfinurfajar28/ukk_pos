@extends('app')
@section('content')
<body class="bg-gradient-primary">
    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">
            @if(session('success'))
        <p class="alert alert-success">{{ session('success') }}</p>
        @endif
        @if($errors->any())
        @foreach($errors->all() as $err)
        <p class="alert alert-danger">{{ $err }}</p>
        @endforeach
        @endif
            <div class="col-lg-5">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-3">
                                    <div class="text-center">
                                        <img src="img/Untitled.ico" alt="" class="img-circle logo" />
                                        <h1 class="h4 text-gray-900 mb-4">
                                            Point Of Sale
                                        </h1>
                                    </div>
                                    <form action="{{ route('login.action') }}" method="POST">
                                        @csrf
                                        <div class="mb-3">
                                            <label>Username <span class="text-danger">*</span></label>
                                            <input class="form-control" type="username" name="username" value="{{ old('username') }}" />
                                        </div>
                                        <div class="mb-3">
                                            <label>Password <span class="text-danger">*</span></label>
                                            <input class="form-control" type="password" name="password" />
                                        </div>
                                        
                                        <div class="mb-3">
                                            <button class="btn btn-primary">Login</button>
                                            {{-- <a class="btn btn-danger" href="{{ route('') }}">Back</a> --}}
                                        </div>
                                    </form>
                                    {{-- <div class="text-center">
                                        <a class="small" href="/register">Don't have an account? Registration!</a>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
    <!-- Bootstrap core JavaScript-->
    <script src="jquery/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
  
    <!-- Core plugin JavaScript-->
    <script src="jquery/jquery.easing.min.js"></script>
  
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
  </body>
{{-- <div class="container">
    <div class="col-md-6">
        @if(session('success'))
        <p class="alert alert-success">{{ session('success') }}</p>
        @endif
        @if($errors->any())
        @foreach($errors->all() as $err)
        <p class="alert alert-danger">{{ $err }}</p>
        @endforeach
        @endif
        <div class="row my-4">
            <div class="col-md-12">
                <div class="card shadow">
                    <div class="card-body">
        <table class="table datatables" id="dataTable-1">
        <form action="{{ route('login.action') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label>Username <span class="text-danger">*</span></label>
                <input class="form-control" type="username" name="username" value="{{ old('username') }}" />
            </div>
            <div class="mb-3">
                <label>Password <span class="text-danger">*</span></label>
                <input class="form-control" type="password" name="password" />
            </div>
            <div class="mb-3">
                <button class="btn btn-primary">Login</button>
                <a class="btn btn-danger" href="{{ route('home') }}">Back</a>
            </div>
        </form>
        </table>
                    </div>
                    </div>
                    </div>
                    </div>
    </div>
</div> --}}
@endsection