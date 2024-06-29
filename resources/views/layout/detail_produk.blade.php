<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Buku</title>
</head>
<body>
<div>
    <div>
        <header>
            @include('components.header')
        </header>
    </div>
    
    <div>
        @include('components.detail')
    </div>

    <div>
        @include('components.rekomendasi')
    </div>
    
    <div class="py-20 px-5">
        <footer>
            @include('components.footer')
        </footer>
    </div>
</div>
</body>
</html>