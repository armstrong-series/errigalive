<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.3.0/mdb.min.css" rel="stylesheet" />

</head>

<body>


    <section class="vh-100" style="background-color: #508bfc;">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
              <div class="card shadow-2-strong" style="border-radius: 1rem;">
                <div class="card-body p-5 text-center">

                  {{-- <h3 class="mb-5">Forgot Password</h3> --}}
                <form action="{{ route('password.email' )}}" method="POST">
                    @csrf
                    @if(session('status'))
                         <p style="line-height: 24px;margin-bottom:15px;"  class="alert class alert-success">
                            {{ session('status') }}
                         </p>
                    @endif
                  <div class="form-outline mb-4">
                    <input type="email" placeholder="Enter Account Email" name="email"  class="form-control form-control-lg" value="{{ old('email') }}" />
                    <label class="form-label" for="typeEmailX-2">Email</label>
                  </div>
                  <span class="text-danger">@error('email'){{ $message }}@enderror</span>


                  <button class="btn btn-primary btn-lg btn-block" type="submit">Send Password Link</button>
                    <div class="d-flex justify-content-around align-items-center mb-4">
                        <a href="{{ route('login') }}">Remember ?</a>
                    </div>
                </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>



    <!-- MDB -->
    <script defer src="https://pro.fontawesome.com/releases/v5.10.0/js/all.js"
        integrity="sha384-G/ZR3ntz68JZrH4pfPJyRbjW+c0+ojii5f+GYiYwldYU69A+Ejat6yIfLSxljXxD" crossorigin="anonymous">
    </script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.3.0/mdb.min.js"></script>

</body>

</html>
