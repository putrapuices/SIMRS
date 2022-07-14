<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title ?></title>
    <link rel="shortcut icon" href="<?= base_url('dist/img/logo/rsud_pariaman.png') ?>" type="image/x-icon">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('plugins/fontawesome-free/css/all.min.css') ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('dist/css/adminlte.min.css') ?>">
</head>

<body class="hold-transition sidebar-mini layout-fixed layout navbar-fixed">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Top Menu -->
        <?= $this->include('layout/top_menu'); ?>
        <!-- Akhir Top Menu -->

        <!-- Side Menu -->
        <?= $this->include('layout/side_menu'); ?>
        <!-- Akhir Side Menu -->

        <!-- Isi Kontent -->
        <?= $this->renderSection('content'); ?>
        <!-- Akhir Isi Kontent -->

        <footer class="main-footer">
            <strong>Copyright © IT Team <a href="https://rsudpariaman.sumbarprov.go.id/">RSUD Pariaman</a> | <?php echo date('Y'); ?>.</strong> All rights reserved.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="<?= base_url('plugins/jquery/jquery.min.js') ?>"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url('plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url('dist/js/adminlte.min.js') ?>"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?= base_url('dist/js/demo.js') ?>"></script>

    <!-- page script -->
    <?= $this->renderSection('script') ?>
    <!-- akhir page script -->
</body>

</html>