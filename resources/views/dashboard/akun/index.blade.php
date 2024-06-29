@extends('layout.akun') {{-- Make sure this path matches your actual directory structure --}}

@section('title', 'Akun')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Halaman Akun</div>

                    <div class="card-body">
                        @if(isset($user))
                            <h4>Selamat datang, {{ $user->username }}!</h4>
                            <p>Informasi akun:</p>
                            <ul>
                                <li>Nama: {{ $user->username }}</li>
                                <li>Email: {{ $user->email }}</li>
                                {{-- Add other account information as needed --}}
                            </ul>
                        @elseif(isset($data_akun))
                            <h4>Detail Akun</h4>
                            <ul>
                                <li>Nama: {{ $data_akun->username }}</li>
                                <li>Email: {{ $data_akun->email }}</li>
                                {{-- Add other account information as needed --}}
                            </ul>
                        @endif

                        {{-- Display cart or orders if available --}}
                        @if(isset($keranjang))
                            <p>Keranjang:</p>
                            {{-- Display cart --}}
                        @elseif(isset($pesanan))
                            <p>Pesanan:</p>
                            {{-- Display orders --}}
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
