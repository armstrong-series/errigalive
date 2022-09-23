<!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">


<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.4.0/mdb.min.css"  rel="stylesheet"/>

<div id="account">
    <section class="vh-100">
        <div class="container py-5 h-100">
        <div class="row d-flex align-items-center justify-content-center h-100">
            <h3 class="text-center">Signup</h3>
            <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
            <div>
                @csrf
                <div class="form-outline mb-4">
                    <input type="text" id="form1Example13" v-model="account.name" name="firstname" class="form-control form-control-lg" />
                    <label class="form-label" for="form1Example13">Name</label>
                </div>

                <div class="form-outline mb-4">
                    <input type="email" id="form1Example13" v-model="account.email" name="email" class="form-control form-control-lg" />
                    <label class="form-label" for="form1Example13">Email address</label>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                <input type="password" name="password" v-model="account.password" id="form1Example23" class="form-control form-control-lg" />
                <label class="form-label" for="form1Example23">Password</label>
                </div>
                <div class="form-outline mb-4">
                    <input type="password" name="password" v-model="account.confirm_password" id="form1Example23" class="form-control form-control-lg" />
                    <label class="form-label" for="form1Example23">Confirm Password</label>
                </div>

                {{-- <div class="form-outline mb-4">
                    <select class="form-control" v-model="account.nationality">
                        <option selected>Choose Nationality</option>
                        <option value="ghana">Ghana</option>
                        <option value="nigeria">Nigeria</option>
                        <option value="rwanda">Rwanda</option>
                        <option value="south-africa">SouthAfrica</option>
                        <option value="uganda">Uganda</option>
                    </select>

                </div> --}}

                <!-- Submit button -->
                <button type="button" @click="signup()" class="btn btn-primary btn-lg btn-block">Sign up</button>


                <div class="d-flex justify-content-around align-items-center mb-4">
                    <a href="{{ route('login') }}">Have an account ?</a>
                </div>
            </div>
            </div>
        </div>

        <textarea name="" id="signup" style="display: none;" cols="30" rows="10">{{ route('auth.account.signup') }}</textarea>
        </div>
    </section>
</div>

<script src="{{ asset('libraries/axios.js') }}"></script>
<script src="{{ asset('libraries/vue.js') }}"></script>
<script src="https://unpkg.com/vue-toastr/dist/vue-toastr.umd.min.js"></script>

<script defer src="https://pro.fontawesome.com/releases/v5.10.0/js/all.js" integrity="sha384-G/ZR3ntz68JZrH4pfPJyRbjW+c0+ojii5f+GYiYwldYU69A+Ejat6yIfLSxljXxD"
crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.4.0/mdb.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="{{ asset('app/account-signup.js') }}"></script>
