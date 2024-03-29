<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Components / Cards - NiceAdmin Bootstrap Template</title>
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
      <h1>Cards</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Components</li>
          <li class="breadcrumb-item active">Cards</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row align-items-top">
        <div class="col-lg-6">

          <!-- Default Card -->
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Default Card</h5>
              Ut in ea error laudantium quas omnis officia. Sit sed praesentium voluptas. Corrupti inventore consequatur nisi necessitatibus modi consequuntur soluta id. Enim autem est esse natus assumenda. Non sunt dignissimos officiis expedita. Consequatur sint repellendus voluptas.
              Quidem sit est nulla ullam. Suscipit debitis ullam iusto dolorem animi dolorem numquam. Enim fuga ipsum dolor nulla quia ut.
              Rerum dolor voluptatem et deleniti libero totam numquam nobis distinctio. Sit sint aut. Consequatur rerum in.
            </div>
          </div><!-- End Default Card -->

          <!-- Card with header and footer -->
          <div class="card">
            <div class="card-header">Header</div>
            <div class="card-body">
              <h5 class="card-title">Card with header and footer</h5>
              Ut in ea error laudantium quas omnis officia. Sit sed praesentium voluptas. Corrupti inventore consequatur nisi necessitatibus modi consequuntur soluta id. Enim autem est esse natus assumenda. Non sunt dignissimos officiis expedita. Consequatur sint repellendus voluptas.
              Quidem sit est nulla ullam. Suscipit debitis ullam iusto dolorem animi dolorem numquam. Enim fuga ipsum dolor nulla quia ut.
              Rerum dolor voluptatem et deleniti libero totam numquam nobis distinctio. Sit sint aut. Consequatur rerum in.
            </div>
            <div class="card-footer">
              Footer
            </div>
          </div><!-- End Card with header and footer -->

          <!-- Card with an image on left -->
          <div class="card mb-3">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="{{ asset('') }}backend/assets/img/card.jpg" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Card with an image on left</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
              </div>
            </div>
          </div><!-- End Card with an image on left -->

        </div>

        <div class="col-lg-3">

          <!-- Card with an image on top -->
          <div class="card">
            <img src="{{ asset('') }}backend/assets/img/card.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card with an image on top</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div><!-- End Card with an image on top -->

          <!-- Card with an image on bottom -->
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Card with an image on bottom</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            <img src="{{ asset('') }}backend/assets/img/card.jpg" class="card-img-bottom" alt="...">
          </div><!-- End Card with an image on bottom -->

        </div>

        <div class="col-lg-3">

          <!-- Card with an image overlay -->
          <div class="card">
            <img src="{{ asset('') }}backend/assets/img/card.jpg" class="card-img-top" alt="...">
            <div class="card-img-overlay">
              <h5 class="card-title">Card with an image overlay</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div><!-- End Card with an image overlay -->

          <!-- Card with titles, buttons, and links -->
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Card with titles, buttons, and links</h5>
              <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <p class="card-text"><a href="#" class="btn btn-primary">Button</a></p>
              <a href="#" class="card-link">Card link</a>
              <a href="#" class="card-link">Another link</a>
            </div>
          </div><!-- End Card with titles, buttons, and links -->

          <!-- Special title treatmen -->
          <div class="card text-center">
            <div class="card-header">
              <ul class="nav nav-pills card-header-pills">
                <li class="nav-item">
                  <a class="nav-link active" href="#">Active</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
              </ul>
            </div>
            <div class="card-body">
              <h5 class="card-title">Special title treatment</h5>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div><!-- End Special title treatmen -->

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
