<!DOCTYPE html>
<html lang="EN">

<head>
    <meta charset="utf-8">
    <title>{{ config('app.name')}}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
            <!-- Google Web Fonts -->
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Raleway:wght@600;800&display=swap" rel="stylesheet"> 
    
            <!-- Icon Font Stylesheet -->
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    
            <!-- Libraries Stylesheet -->
            <link href="{{ asset('import/assets/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">
            <link href="{{ asset('import/assets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    
            <!-- Customized Bootstrap Stylesheet -->
            <link href=" {{ asset ('import/assets/css/bootstrap.min.css') }}"  rel="stylesheet">
    
            <!-- Template Stylesheet -->
            <link href="  {{ asset ('import/assets/css/style.css') }}" rel="stylesheet">

            <style>
                body, html {
                  height: 100%;
                  margin: 0;
                }
                body {
                  display: flex;
                  align-items: center;
                  justify-content: center;
                  background-color: #f8f9fa; /* Light background color */
                  font-size: 0.875rem; /* Base font size smaller */
                }
                .login-section {
                  width: 100%;
                }
                .navbar-brand h1 {
                  font-size: 1.5rem; /* Smaller font size for brand name */
                }
                .card-body h2 {
                  font-size: 1rem; /* Smaller font size for form title */
                }
                .form-label {
                  font-size: 0.875rem; /* Smaller font size for form labels */
                }
                .form-check-label, .link-primary, .text-secondary {
                  font-size: 0.75rem; /* Smaller font size for additional text */
                }
              </style>
</head>

<body>
<!-- Login 13 - Bootstrap Brain Component -->
<section class="bg-light py-3 py-md-5">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-4">
          <div class="card border border-light-subtle rounded-3 shadow-sm">
            <div class="card-body p-3 p-md-4 p-xl-5">
                <div class="text-center mb-3" style="margin: 0 !important;">
                    <a href="index.html" class="navbar-brand"><h1 class="text-primary display-6">{{ config('app.name')}}</h1></a>
                </div>                            
              <h2 class="fs-6 fw-normal text-center text-secondary mb-4">Sign in to your account</h2>
              <form action="#!">
                <div class="row gy-2 overflow-hidden">
                  <div class="col-12">
                    <div class="form-floating mb-3">
                      <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com" required>
                      <label for="email" class="form-label">Email</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-floating mb-3">
                      <input type="password" class="form-control" name="password" id="password" value="" placeholder="Password" required>
                      <label for="password" class="form-label">Password</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="d-flex gap-2 justify-content-between">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" name="rememberMe" id="rememberMe">
                        <label class="form-check-label text-secondary" for="rememberMe">
                          Keep me logged in
                        </label>
                      </div>
                      <a href="#!" class="link-primary text-decoration-none">Forgot password?</a>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="d-grid my-3">
                      <button class="btn btn-primary btn-lg" type="submit">Log in</button>
                    </div>
                  </div>
                  <div class="col-12">
                    <p class="m-0 text-secondary text-center">Don't have an account? <a href="#!" class="link-primary text-decoration-none">Sign up</a></p>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>

</html>