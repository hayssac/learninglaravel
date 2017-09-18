<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aplicação</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

    <link rel="stylesheet" href="/css/style.css" />

</head>
<body>
    <div class="container">
        @include('components.navbar')

        <div class="row">
            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <h1 class="my-4">Page Heading
                    <small>Secondary Text</small>
                </h1>


                @yield('content') 
            
            
            </div>
            <!-- Sidebar Widgets Column -->
            <div class="col-md-4">
                @include('components.search_widget')
                @include('components.categories_widget')
                @include('components.side_widget')

            </div>
        </div>
    </div>

    @include('components.footer')    

</body>
</html>