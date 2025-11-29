<?php
    use Carbon\Carbon;
?>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="assets/dashboard/vendors/js/vendor.bundle.base.js"></script>
<script src="assets/dashboard/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script>

    document.addEventListener('DOMContentLoaded', function () {
        const shareBtn = document.getElementById('Share');
        if (shareBtn) {
            shareBtn.addEventListener('click', function () {
                alert('Button clicked!');
            });
        }
    });
    const Print = () => {
        const report = document.querySelector('.print-report');

        // Convert all canvases to responsive images
        report.querySelectorAll('canvas').forEach(c => {
            const img = document.createElement('img');
            img.src = c.toDataURL();
            img.style.width = '100%'; // make it scale to container
            img.style.height = 'auto';
            c.replaceWith(img);
        });

        // Clone and remove elements with 'not-print' class
        const clone = report.cloneNode(true);
        clone.querySelectorAll('.not-print').forEach(el => el.remove());

        const w = window.open('', '', 'height=800,width=1000');
        w.document.write(`
        <html>
        <head>
            <title>Print Report</title>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="assets/dashboard/css/style.css">
            <style>
                body { margin: 10px; font-size: 12pt; }
                img, table { max-width: 100%; height: auto; }
                .print-report { width: 100%; box-sizing: border-box; }
                @media  print {
                    .not-print { display: none; }
                }
            </style>
        </head>
        <body>${clone.innerHTML}</body>
        </html>
    `);
        w.document.close();
        w.focus();
        setTimeout(() => { w.print(); w.close(); }, 500);
    };


</script>
<script src="assets/dashboard/vendors/chart.js/chart.umd.js"></script>
<script src="assets/dashboard/vendors/progressbar.js/progressbar.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="assets/dashboard/js/off-canvas.js"></script>
<script src="assets/dashboard/js/template.js"></script>
<script src="assets/dashboard/js/settings.js"></script>
<script src="assets/dashboard/js/hoverable-collapse.js"></script>
<script src="assets/dashboard/js/todolist.js"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="assets/dashboard/js/jquery.cookie.js" type="text/javascript"></script>
<link rel="stylesheet" href="assets/dashboard/vendors/feather/feather.css">
<link rel="stylesheet" href="assets/dashboard/vendors/mdi/css/materialdesignicons.min.css">
<link rel="stylesheet" href="assets/dashboard/vendors/ti-icons/css/themify-icons.css">
<link rel="stylesheet" href="assets/dashboard/vendors/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="assets/dashboard/vendors/typicons/typicons.css">
<link rel="stylesheet" href="assets/dashboard/vendors/simple-line-icons/css/simple-line-icons.css">
<link rel="stylesheet" href="assets/dashboard/vendors/css/vendor.bundle.base.css">
<link rel="stylesheet" href="assets/dashboard/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
<!-- endinject -->
<!-- Plugin css for this page -->
<link rel="stylesheet" href="assets/dashboard/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
<link rel="stylesheet" type="text/css" href="assets/dashboard/js/select.dataTables.min.css">
<!-- End plugin css for this page -->
<!-- inject:css -->
<link rel="stylesheet" href="assets/dashboard/css/style.css">
<!-- endinject -->
<script src="assets/dashboard/js/dashboard.js"></script>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('sidebar.menubar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="page-wrapper">

      
        <!-- /Page Content -->
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\HRS\resources\views/dashboard/dashboard.blade.php ENDPATH**/ ?>