<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <div>
<div>
    <header>
        @include('components.header')
    </header>
</div>

<div>
    <div>
    @include('components.carousel')
    </div>

    <div class="">
        @include('components.section')
    </div>

    <div class="px-5 py-30">
        @include('components.card_dashboard1')
    </div>

    <div class="px-5">
        @include('components.card_dashboard3')
    </div>

    <div class="px-5">
        @include('components.card_dashboard4')
    </div>

    <div class="px-5">
        @include('components.new_arrival')
    </div>

    <div>
    @include('components.FAQ')
    </div>

    <div>
        @include('components.blog')
    </div>
</div>

<div class="py-20 px-5">
    <footer>
        @include('components.footer')
    </footer>
</div>
</div>

    
</body>
</html>
