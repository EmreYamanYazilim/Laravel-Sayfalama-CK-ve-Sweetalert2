<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <link href="{{ asset('front/css/bootstrap.min.css') }}" rel="stylesheet">
    <script src="{{ asset('front/ck/ckeditor.js') }}"></script>

</head>
<body>
<h1>Pagination</h1>


@yield('content')


<script src="{{ asset('front/js/bootstrap.bundle.js') }}" ></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
</body>
</html>
