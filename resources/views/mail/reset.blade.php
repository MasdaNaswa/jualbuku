<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h1 class="card-header">{{ __('Reset Password') }}</h1>
                <div class="card-body">
                    <a href="{{ route('reset-password.index', ['token' => $token, 'email' => $email]) }}">
                        {{ __('Reset Password') }}
                    </a>
                </div>
                <div class="card-footer">
                    <p>Jika Anda kesulitan mengeklik tombol "Reset Password", salin dan tempel URL di bawah ini ke web browser Anda
                        peramban:</p>
                    <a href="{{ route('reset-password.index', ['token' => $token, 'email' => $email]) }}">
                        {{ route('reset-password.index', ['token' => $token, 'email' => $email]) }}
                    </a>
                </div>
           </div>
       </div>
   </div>
</div>
