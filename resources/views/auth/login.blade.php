<x-guest-layout>

    <div id="auth-left">
        <div class="auth-logo">
            <a href="index.html"><img src="{{ asset('/images/logo/logo.png') }}" alt="Logo"></a>
        </div>
        <h1 class="auth-title">Log in.</h1>

        @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
        @endif
        @if ($errors->any())
        <div class="alert alert-danger">
            {{ $errors->first() }}
        </div>
        @endif
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="form-group position-relative has-icon-left mb-4">
                <input class="form-control form-control-xl" type="number" name="nip" placeholder="NIP"
                    value="{{ old('nip') }}">
                <div class="form-control-icon">
                    <i class="bi bi-person"></i>
                </div>
            </div>
            <div class="form-group position-relative has-icon-left mb-4">
                <input type="password" id="password" class="form-control form-control-xl" name="password" placeholder="Password"
                    placeholder="Password">
                <div class="form-control-icon">
                    <i class="bi bi-shield-lock"></i>
                </div>
                
                <div class="form-control-icon" style="right: 0; left:auto; cursor: pointer;" id="toggle-password">
                    <i class="bi bi-eye-slash"></i>
                </div>
            </div>
            <div class="form-group position-relative mb-4">
            </div>
            <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Log in</button>
        </form>
    </div>
    <x-slot name="script">
        <script>
            $("#toggle-password").click(function(){
                if($('#password').attr("type") == "text"){
                    $('#password').attr('type', 'password');
                    $('#toggle-password i').addClass( "bi-eye-slash" );
                    $('#toggle-password i').removeClass( "bi-eye" );
                }else{
                    $('#password').attr('type', 'text');
                    $('#toggle-password i').addClass( "bi-eye");
                    $('#toggle-password i').removeClass( "bi-eye-slash");
                }
            })
        </script>
    </x-slot>
</x-guest-layout>