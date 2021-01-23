 <!-- /.content-wrapper -->
 <footer class="main-footer">
     <div class="pull-right hidden-xs">Version 1.0 Beta</div>
     Copyright © 2021 Dinas Komunikasi dan Informatika Kota Malang. All rights reserved.
 </footer>
 </div>
 <!-- ./wrapper -->

 <!-- jQuery 3 -->
 <script src="<?= base_url() ?>/adminpages/dist/js/jquery.min.js"></script>
 <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.js"></script>

 <!-- v4.0.0-alpha.6 -->
 <script src="<?= base_url() ?>/adminpages/dist/bootstrap/js/bootstrap.min.js"></script>

 <!-- template -->
 <script src="<?= base_url() ?>/adminpages/dist/js/niche.js"></script>

 <!-- Morris JavaScript -->
 <script src="<?= base_url() ?>/adminpages/dist/plugins/raphael/raphael-min.js"></script>
 <script src="<?= base_url() ?>/adminpages/dist/plugins/morris/morris.js"></script>
 <script src="<?= base_url() ?>/adminpages/dist/plugins/functions/morris-init.js"></script>

 <!-- Chartjs JavaScript -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>
 <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

 <!-- Data Table Script  -->
 <script>
     $(document).ready(function() {
         $('#newsTable').DataTable();
         $('#pengumumanTable').DataTable();
         $('#rfeedbackTable').DataTable();
         $('#rlaporanTable').DataTable();
         $('#userTable').DataTable();
     });
 </script>
 <!-- dropify -->
 <script src="<?= base_url() ?>/adminpages/dist/plugins/dropify/dropify.min.js"></script>
 <script>
     $(document).ready(function() {
         // Basic
         $('.dropify').dropify();

         // Translated
         $('.dropify-fr').dropify({
             messages: {
                 default: 'Glissez-déposez un fichier ici ou cliquez',
                 replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                 remove: 'Supprimer',
                 error: 'Désolé, le fichier trop volumineux'
             }
         });

         // Used events
         var drEvent = $('#input-file-events').dropify();

         drEvent.on('dropify.beforeClear', function(event, element) {
             return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
         });

         drEvent.on('dropify.afterClear', function(event, element) {
             alert('File deleted');
         });

         drEvent.on('dropify.errors', function(event, element) {
             console.log('Has Errors');
         });

         var drDestroy = $('#input-file-to-destroy').dropify();
         drDestroy = drDestroy.data('dropify')
         $('#toggleDropify').on('click', function(e) {
             e.preventDefault();
             if (drDestroy.isDropified()) {
                 drDestroy.destroy();
             } else {
                 drDestroy.init();
             }
         })
     });
 </script>
 </body>

 <!-- Start Chart Function -->
 <script>
     $(function() {
         //  Laporan Kejadian
         var ctx = document.getElementById('bar-chart-laporan').getContext('2d');
         var chart = new Chart(ctx, {
             // The type of chart we want to create
             type: 'bar',

             // The data for our dataset
             data: {
                 labels: ["January", "February", "March", "April", "May", "June", "July"],
                 datasets: [{
                     label: "Kecelakaan",
                     backgroundColor: 'rgb(88, 103, 221)',
                     borderColor: 'rgb(88, 103, 221)',
                     data: [0, 10, 5, 2, 7, 9, 3],
                     fill: false,
                 }, {
                     label: "Kebakaran",
                     backgroundColor: 'rgb(0, 140, 211)',
                     borderColor: 'rgb(0, 140, 211)',
                     data: [0, 0, 1, 1, 0, 1, 0],
                 }, {
                     label: "Banjir",
                     backgroundColor: 'rgb(239, 255, 0)',
                     borderColor: 'rgb(239, 255, 0)',
                     data: [4, 3, 1, 1, 5, 3, 2],
                 }]
             },
             options: {
                 responsive: true
             }
         });
         //  Laporan Feedback
         new Chart(document.getElementById("pie-chart-feedback"), {
             type: 'pie',
             data: {
                 labels: ['Red', 'Blue', 'Yellow'],
                 datasets: [{
                     'label': 'My First Dataset',
                     data: [300, 50, 100],
                     backgroundColor: ['rgb(255, 99, 132)',
                         'rgb(54, 162, 235)',
                         'rgb(255, 205, 86)'
                     ],
                 }]
             },
             options: {
                 responsive: true
             }
         });
     })(jQuery);
 </script>
 <!-- End Chart Function -->

 </html>