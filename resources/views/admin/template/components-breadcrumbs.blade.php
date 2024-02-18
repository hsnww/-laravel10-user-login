<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Components / Breadcrumbs - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('') }}backend/assets/img/favicon.png" rel="icon">
  <link href="{{ asset('') }}backend/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('') }}backend/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ asset('') }}backend/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{ asset('') }}backend/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{ asset('') }}backend/assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="{{ asset('') }}backend/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="{{ asset('') }}backend/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="{{ asset('') }}backend/assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('') }}backend/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Jan 29 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  @include('admin.template.partials.header');
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
  @include('admin.template.partials.sidebar');
  <!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Breadcrumbs</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Components</li>
          <li class="breadcrumb-item active">Breadcrumbs</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Default Breadcrumbs</h5>

              <nav>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                  <li class="breadcrumb-item"><a href="#">Library</a></li>
                  <li class="breadcrumb-item active">Default</li>
                </ol>
              </nav>
            </div>
          </div>

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Centered</h5>

              <nav class="d-flex justify-content-center">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                  <li class="breadcrumb-item"><a href="#">Library</a></li>
                  <li class="breadcrumb-item active">Centered Position</li>
                </ol>
              </nav>
            </div>
          </div>

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Right Positioned</h5>

              <nav class="d-flex justify-content-end">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                  <li class="breadcrumb-item"><a href="#">Library</a></li>
                  <li class="breadcrumb-item active">Right Position</li>
                </ol>
              </nav>
            </div>
          </div>

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">With Home Icon</h5>

              <nav>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html"><i class="bi bi-house-door"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Library</a></li>
                  <li class="breadcrumb-item active">Default</li>
                </ol>
              </nav>
            </div>
          </div>

        </div>

        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Breadcrumbs with a page title</h5>

              <div class="pagetitle">
                <h1>Page Title</h1>
                <nav>
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Components</li>
                    <li class="breadcrumb-item active">Breadcrumbs</li>
                  </ol>
                </nav>
              </div><!-- End Breadcrumbs with a page title -->

            </div>
          </div>

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Breadcrumbs with different dividers</h5>

              <nav style="--bs-breadcrumb-divider: '>';">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                  <li class="breadcrumb-item"><a href="#">Library</a></li>
                  <li class="breadcrumb-item active">Data</li>
                </ol>
              </nav>

              <nav style="--bs-breadcrumb-divider: '|';">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                  <li class="breadcrumb-item"><a href="#">Library</a></li>
                  <li class="breadcrumb-item active">Data</li>
                </ol>
              </nav>

              <nav style="--bs-breadcrumb-divider: '-';">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                  <li class="breadcrumb-item"><a href="#">Library</a></li>
                  <li class="breadcrumb-item active">Data</li>
                </ol>
              </nav>

              <nav style="--bs-breadcrumb-divider: '•';">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                  <li class="breadcrumb-item"><a href="#">Library</a></li>
                  <li class="breadcrumb-item active">Data</li>
                </ol>
              </nav>

              <nav style="--bs-breadcrumb-divider: '';">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                  <li class="breadcrumb-item"><a href="#">Library</a></li>
                  <li class="breadcrumb-item active">Data</li>
                </ol>
              </nav>

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('') }}backend/assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="{{ asset('') }}backend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('') }}backend/assets/vendor/chart.js/chart.umd.js"></script>
  <script src="{{ asset('') }}backend/assets/vendor/echarts/echarts.min.js"></script>
  <script src="{{ asset('') }}backend/assets/vendor/quill/quill.min.js"></script>
  <script src="{{ asset('') }}backend/assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="{{ asset('') }}backend/assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="{{ asset('') }}backend/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('') }}backend/assets/js/main.js"></script>

</body>

</html>
