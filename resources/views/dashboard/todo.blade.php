<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <title>Login</title>
    <style>
        #list1 .form-control {
            border-color: transparent;
        }

        #list1 .form-control:focus {
            border-color: transparent;
            box-shadow: none;
        }

        #list1 .select-input.form-control[readonly]:not([disabled]) {
            background-color: #fbfbfb;
        }
    </style>
</head>

<body>
    <header>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
                    data-mdb-target="#navbarExample01" aria-controls="navbarExample01" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarExample01">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" aria-current="page" href="">Home</a>
                        </li>
                       
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('user.logout')}}">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Navbar -->

        <!-- Background image -->

        <!-- Background image -->
    </header>
    <section class="vh-100">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col">
                    <div class="card" id="list1" style="border-radius: .75rem; background-color: #eff1f2;">
                        <div class="card-body py-4 px-4 px-md-5">

                            <p class="h1 text-center mt-3 mb-4 pb-3 text-primary">
                                {{-- <i class="fas fa-check-square me-1"></i> --}}
                                <u style="text-decoration: none">My Todo</u>
                            </p>
                            <form action="" method="post">
                                @csrf
                                <div class="pb-2">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex flex-row align-items-center">

                                                <input type="text" id="notet" class="form-control form-control-lg"
                                                    id="exampleFormControlInput1" placeholder="Add new...">
                                                {{-- <a href="#!" data-mdb-toggle="tooltip" title="Set due date"><i
                                                        class="fas fa-calendar-alt fa-lg me-3"></i></a> --}}
                            </form>
                            <div>
                                <button id="add_note" type="button" class="btn btn-primary">Add</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <hr id="bpoin" class="my-4">

            {{-- <div class="d-flex justify-content-end align-items-center mb-4 pt-2 pb-3">
                <p class="small mb-0 me-2 text-muted">Filter</p>
                <select class="select">
                    <option value="1">All</option>
                    <option value="2">Completed</option>
                    <option value="3">Active</option>
                    <option value="4">Has due date</option>
                </select>
                <p class="small mb-0 ms-4 me-2 text-muted">Sort</p>
                <select class="select">
                    <option value="1">Added date</option>
                    <option value="2">Due date</option>
                </select>
                <a href="#!" style="color: #23af89;" data-mdb-toggle="tooltip" title="Ascending"><i
                        class="fas fa-sort-amount-down-alt ms-2"></i></a>
            </div> --}}

<div id="ii">
            <ul class="list-group list-group-horizontal rounded-0">
                <li class="list-group-item d-flex align-items-center ps-0 pe-3 py-1 rounded-0 border-0 bg-transparent">
                    <div class="form-check">
                        <input class="form-check-input me-0" type="checkbox" value="" id="flexCheckChecked2"
                            aria-label="..." />
                    </div>
                </li>
                <li class="list-group-item px-3 py-1 d-flex align-items-center flex-grow-1 border-0 bg-transparent">
                    <p class="lead fw-normal mb-0">Renew car insurance</p>
                </li>
                <li class="list-group-item px-3 py-1 d-flex align-items-center border-0 bg-transparent">
                    <div class="py-2 px-3 me-2 border border-warning rounded-3 d-flex align-items-center bg-light">
                        <p class="small mb-0">
                            <a href="#!" data-mdb-toggle="tooltip" title="Due on date">
                                <i class="fas fa-hourglass-half me-2 text-warning"></i>
                            </a>
                            28th Jun 2020
                        </p>
                    </div>
                </li>
                <li class="list-group-item ps-3 pe-0 py-1 rounded-0 border-0 bg-transparent">
                    <div class="d-flex flex-row justify-content-end mb-1">
                        <a href="#!" class="text-info" data-mdb-toggle="tooltip" title="Edit todo"><i
                                class="fas fa-pencil-alt me-3"></i></a>
                        <a href="#!" class="text-danger" data-mdb-toggle="tooltip" title="Delete todo"><i
                                class="fas fa-trash-alt"></i></a>
                    </div>
                    <div class="text-end text-muted">
                        <a href="#!" class="text-muted" data-mdb-toggle="tooltip" title="Created date">
                            <p class="small mb-0"><i class="fas fa-info-circle me-2"></i>28th Jun 2020</p>
                        </a>
                    </div>
                </li>
            </ul>
            <ul class="list-group list-group-horizontal rounded-0 mb-2">
                <li class="list-group-item d-flex align-items-center ps-0 pe-3 py-1 rounded-0 border-0 bg-transparent">
                    <div class="form-check">
                        <input class="form-check-input me-0" type="checkbox" value="" id="flexCheckChecked3"
                            aria-label="..." />
                    </div>
                </li>
                <li class="list-group-item px-3 py-1 d-flex align-items-center flex-grow-1 border-0 bg-transparent">
                    <p class="lead fw-normal mb-0 bg-light w-100 ms-n2 ps-2 py-1 rounded">Sign up for online course</p>
                </li>
                <li class="list-group-item ps-3 pe-0 py-1 rounded-0 border-0 bg-transparent">
                    <div class="d-flex flex-row justify-content-end mb-1">
                        <a href="#!" class="text-danger" data-mdb-toggle="tooltip" title="Delete todo"><i
                                class="fas fa-trash-alt"></i></a>
                    </div>
                    <div class="text-end text-muted">
                        <a href="#!" class="text-muted" data-mdb-toggle="tooltip" title="Created date">
                            <p class="small mb-0"><i class="fas fa-info-circle me-2"></i>28th Jun 2020</p>
                        </a>
                    </div>
                </li>
            </ul>
        </div>
       
    </section>
    <script>

    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    {{-- jquery --}}
    <script>
        $('#add_note').click(function(){
        //  alert("hello");
         var note = $('#notet').val();
        $.ajax({
            url:"/singup",
            type:'POST',
            data:{
                "_token": "{{ csrf_token() }}",
                note:note
            },
            success:function(response){
                // $("#mydiv").html(your_html) 
                // console.log(response);
$("#ii").html('Inserted into database').delay(3000).fadeOut();
            }
        })
         
         
     })
    </script>
</body>

</html>