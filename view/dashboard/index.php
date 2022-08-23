<?php  include '../template/header.php'?>
<?php  include '../../controller/dashboard/index.php'?>
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-users"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Docentes Capacitados</span>
                    <span class="info-box-number">
                    <?php echo $total_doc_capacitados ?> 
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
                <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-exclamation"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Docentes Sin Capacitacion</span>
                    <span class="info-box-number"><?php echo $total_docentes ?></span>
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
                <span class="info-box-icon bg-success elevation-1"><i class="fas fa-address-book"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Capacitaciones Recibidas</span>
                    <span class="info-box-number"><?php echo $total_capacitaciones ?></span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-graduation-cap"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Carreras Capacitadas</span>
                    <span class="info-box-number"><?php echo $total_carrera ?></span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
    </div>
</section>
<!-- /.content -->
<?php  include '../template/footer.php'?>