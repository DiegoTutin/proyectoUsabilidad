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
<div class="row justify-content-center">
    <div class="col-lg-8 ">
        <div class="card ">
            <div class="card-header border-0 ">
                <div class="d-flex justify-content-center">
                    <H3 class="card-title text-bold text-lg">Docentes Capacitados Mensualmente</H3>
                </div>
            </div>
            <div class="card-body">
                <div class="d-flex ">
                    <p class="d-flex flex-column">
                        <span class="text-bold text-lg ">Total : <?php echo $total_doc_Capacitados?></span>
                    </p>
                </div>
                <div class="position-relative mb-4">
                    <canvas id="grafico-doc-capa" height="100"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>
</section>





<script>
const labels = <?php echo $meses_Doc_Capa ?>

const data = {
    labels: labels,
    datasets: [{
        label: 'Docentes Capacitados',
        data: <?php echo $total_docen_capa_mes ?>,
        backgroundColor: [
            'rgb(255, 99, 132)',
            'rgb(54, 162, 235)',
            'rgb(255, 205, 86)',
            'rgb(120, 165, 120)',
            'rgb(160, 220, 200)',
            'rgb(90, 110, 90)',
            'rgb(145, 50, 200)'

        ],
        hoverOffset: 4
    }]
};

const config = {
    type: 'bar',
    data: data,
};
</script>
<script>
const myChart = new Chart(
    document.getElementById('grafico-doc-capa'),
    config
);
</script>


<?php  include '../template/footer.php'?>