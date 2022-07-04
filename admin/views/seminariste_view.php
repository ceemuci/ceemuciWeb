<?php
  require 'includes/header.php';

  $requete = $pdo->prepare("SELECT * FROM seminariste");
  $requete->execute();
  $seminaristes = $requete->fetchAll();

?>

<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->

  <?php
    require 'includes/navbar.php';
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>CARTE DE MEMBRE</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">inscrit</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"Liste des Inscrits</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead class="thead-dark">
						<tr>
							<th scope="col">Matricule</th>
							<th scope="col">Nom</th>
							<th scope="col">Prenoms</th>
							<th scope="col">contact</th>
							<th scope="col">lieu de residence</th>
							<th scope="col">Date d'inscription</th>
							<th scope="col">details</th>
						</tr>
					</thead>

					<tbody>
						<?php foreach ($seminaristes as $seminariste): ?>
							<tr>
								<th><?= $seminariste['matricule']; ?></th>
								<th><?= $seminariste['nom']; ?></th>
								<th><?= $seminariste['prenoms']; ?></th>
								<th><?= $seminariste['contact']; ?></th>
								<th><?= $seminariste['lieu_residence']; ?></th>
								<th><?= $seminariste['date_creation']; ?></th>
                <th>
                  <div class="text-right">
                    <a class="btn btn-primary" href="seminariste_detail?id=<?= $seminariste['id']; ?>">info</a>/<a class="btn btn-danger" href="del_seminariste?id=<?= $seminariste['id']; ?>">Supprimer</a>
                  </div>
                </th>
							</tr>
						<?php endforeach; ?>
					</tbody>
                    <tfoot>
                        <tr>
							<th scope="col">Matricule</th>
							<th scope="col">Nom</th>
							<th scope="col">Prenoms</th>
							<th scope="col">contact</th>
							<th scope="col">lieu de residence</th>
                            <th scope="col">Date d'inscription</th>
                            <th scope="col">Details</th>
						</tr>
                    </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<?php
    require 'includes/footer.php';
?>
