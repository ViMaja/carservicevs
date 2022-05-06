  <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Pandora</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>CURSO</h3>

                <p>
                    <button type="submit" class="btn btn-primary">Insertar Curso</button>
                </p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                    .
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Codigo</th>
                    <th>Nombre</th>
                    <th>Duracion</th>
                    <th>Jornada</th>
                    <th>Acciones</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                    include_once "../backend/conexion.php";
                    $sql ="SELECT * FROM CURSO";
                    $resultset = mysqli_query($conexion, $sql);
                    $cantidad = mysqli_num_rows($resultset);
                    $arrayCurso =mysqli_fetch_all($resultset);
                    var_dump($arrayCurso);
                    if ($cantidad == 0){

                    }else{
foreach($arrayCurso as $curso){
echo '
<tr>

<td>'.$curso[0].'</td>
<td>'.$curso[1].'</td>
<td>'.$curso[2].'</td>
<td>'.$curso[3].'</td>
<td>'.$curso[4].'</td>
<td>'.$curso[5].'</td>

<td>
<button class="btn btn-warning"><i class="fas fa-edit"></i></button>
<button class="btn btn-danger"><i class="fas fa-trash"></i></button>
</td>
</tr>';

}
}
                  ?>
                  </tbody>
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
</div>
<!-- /.content-wrapper -->