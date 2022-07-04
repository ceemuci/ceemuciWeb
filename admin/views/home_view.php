<?php
  require 'includes/header.php';
  
	$query = "SELECT * FROM carte ORDER by nom";
	$queryCount = "SELECT COUNT(id) as count FROM carte";

  $requete = $pdo->prepare($query);
	$requete->execute();
	$inscrits = $requete->fetchAll();

  $requete1 = $pdo->prepare("SELECT * FROM carte");
	$requete1->execute();
	$count = $requete1->rowCount();

  $requetef = $pdo->prepare("SELECT * FROM carte WHERE genre ='Soeur' ORDER by nom");
  $requetef->execute();
  $countf = $requetef->rowCount();
  $fpercent=($countf*100)/$count;
  $fpercent=intval($fpercent);

	$requetem = $pdo->prepare("SELECT * FROM carte WHERE genre ='Frere' ORDER by nom");
	$requetem->execute();
	$countm = $requetem->rowCount();
	$mpercent=($countm*100)/$count;
	$mpercent=intval($mpercent);

  $requetef = $pdo->prepare("SELECT * FROM carte WHERE coordination ='BEN' ORDER by nom");
  $requetef->execute();
  $countben = $requetef->rowCount();

  $requetef = $pdo->prepare("SELECT * FROM carte WHERE coordination ='UFHB' ORDER by nom");
  $requetef->execute();
  $countufhb = $requetef->rowCount();



?>


<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

<?php
    require 'includes/navbar.php';
?>

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="dashboard/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Nombre d'inscrits</span>
                <span class="info-box-number">
                <?= $count; ?>
                  <small></small>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-male"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Nombre de frères inscrits</span>
                <span class="info-box-number"><?= $countm; ?> inscrit(s)
                <small>soit <?= $mpercent; ?>%</small>
            </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-female"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Nombre de soeur inscrits</span>
                <span class="info-box-number"><?= $countf; ?> inscrite(s)
                <small>soit <?= $fpercent; ?>%</small></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
        </div>
        <!-- /.row -->

      </div><!--/. container-fluid -->

      <div class="row">
          <!-- Left col -->
          <section class="col-lg-6 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-chart-pie mr-1"></i>
                  Sales
                </h3>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content p-0">
                  <!-- Morris chart - Sales -->
                  <div class="chart" id="revenue-chart"
                       style="position: relative; background-color: white">
                       <canvas class="barCanvas" id="barCanvas" aria-labl="chart" role="img"></canvas>
                   </div>
                </div>
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>
          <section class="col-lg-6 connectedSortable">
            <!-- Map card -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-chart-pie mr-1"></i>
                  Sales
                </h3>
              </div><!-- /.card-header -->
              <div class="card-body" style="background-color: white">
                <div class="tab-content p-0">
                  <!-- Morris chart - Sales -->
                  <div class="chart" id="revenue-chart"
                       style="position: relative";>
                       <canvas class="pieCanvas" id="pieCanvas" aria-labl="chart" role="img" style="min-height: 300px; height: 300px; max-height: 300px; max-width: 100%;"></canvas>
                   </div>
                </div>
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- /.card -->
          </section>
          <!-- right col -->

        </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <script>
    var nbrCee = <?php echo json_encode($count);?>;
    var nbrCeem = <?php echo json_encode($countm)?>;
    var nbrCeef = <?php echo json_encode($countf);?>;
    var nbrCeeufhb = <?php echo json_encode($countufhb);?>;
    var nbrCeeben = <?php echo json_encode($countben);?>;
  </script>
  <!-- Main Footer -->
  <?php
    require 'includes/footer.php';
?>