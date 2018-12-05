@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    <!-- Can là có thể, còn dùng cannot là khi chúng ta ko có quyền này, ngược lại với can -->
                    
                        <p>Bạn có thể sửa</p>
                 

                    <!-- Trong web chia làm 5 cấp độ, admin, editor, author, member/user -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
