<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <title>Document</title>
</head>

<body>
    <div class="container-fluid">
        {{-- navbar-start --}}
        <div class="row">
            <nav class="navbar navbar-expand-sm bg-dark">
                <div class="col-8">
                    <a class="navbar-brand text-info p-3" href="#">Doctor Appointment</a>
                </div>
                <div class="col-4">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{url('/')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{url('doctor')}}">Doctor</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Appointment</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        {{-- navbar-end --}}
        {{-- section-part-start --}}
        <section>
            @yield('content')
        </section>
        {{-- section-part-end --}}

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
