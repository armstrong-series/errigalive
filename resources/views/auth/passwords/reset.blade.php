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

                  <h3 class="mb-5">New Password</h3>
                <form action="{{ route('password.update' )}}" method="post">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">
                  {{-- <div class="form-outline mb-4">
                    <input type="email" placeholder="Enter Account Email" name="email"  class="form-control form-control-lg"  value="{{ $email ?? old('email') }}"/>
                    <label class="form-label" for="typeEmailX-2">Email</label>
                    <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                  </div> --}}

                  <div class="form-outline mb-4">
                    <input type="password" placeholder="Enter new Password" name="email"  class="form-control form-control-lg" />
                    <label class="form-label" for="typeEmailX-2">New  Password</label>
                    <span class="text-danger">@error('password'){{ $message }}@enderror</span>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" placeholder="Confirm Password" name="email"  class="form-control form-control-lg" />
                    <label class="form-label" for="typeEmailX-2">Confirm Password</label>
                    <span class="text-danger">@error('password_confrimation'){{ $message }}@enderror</span>
                  </div>

                  <button class="btn btn-primary btn-lg btn-block" type="submit">Update Password</button>




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
