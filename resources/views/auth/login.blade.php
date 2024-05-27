@include('auth.header')

<style>
    .auth-background {
        background-image: url('/frontend/images/log.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        height: 100vh;
    }
    .authincation-content {
        background: rgba(255, 255, 255, 0.8); /* Optional: To make the form background semi-transparent */
        padding: 20px;
        border-radius: 10px;
    }
    .auth-form label {
        color: #000; /* Darker color for labels */
        font-weight: bold; /* Make the labels bold */
    }
    .new-account p {
        color: #000; /* Darker color for the 'Don't have an account?' text */
        font-weight: bold; /* Make the text bold */
    }
</style>

<body class="h-100">
    <div class="authincation h-100 auth-background">
        <div class="container-fluid h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                @include('auth.message')
                                <div class="auth-form">
                                    <h4 class="text-center mb-4">Sign in your account</h4>
                                    <form action="{{ url('/login') }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label><strong>Email</strong></label>
                                            <input type="email" class="form-control" value="hello@example.com" name="email">
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Password</strong></label>
                                            <input type="password" class="form-control" name="password">
                                        </div>
                                        <div class="form-row d-flex justify-content-between mt-4 mb-2">
                              
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block">Sign me in</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p>Don't have an account? <a class="text-primary" href="{{ url('/register') }}">Sign up</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('auth.footer')
</body>
