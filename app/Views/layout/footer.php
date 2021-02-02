 <!-- jQuery 3 -->
 <script src="<?= base_url() ?>/adminpages/dist/js/jquery.min.js"></script>
 <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.js"></script>

 <!-- v4.0.0-alpha.6 -->
 <script src="<?= base_url() ?>/adminpages/dist/bootstrap/js/bootstrap.min.js"></script>

 <!-- template -->
 <script src="<?= base_url() ?>/adminpages/dist/js/niche.js"></script>

 <!-- Morris JavaScript -->
 <script src="<?= base_url() ?>/adminpages/dist/plugins/functions/morris-init.js"></script>
 <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
 <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

 <!-- Chartjs JavaScript -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>

 <!-- <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> -->


 <!-- Data Table Script  -->
 <script>
     $(document).ready(function() {
         $('#newsTable').DataTable();
         $('#pengumumanTable').DataTable();
         $('#rfeedbackTable').DataTable();
         //  $('#rfeedbackTable').DataTable({
         //      dom: 'Bfrtip',
         //      buttons: [
         //          'csv', 'excel', 'pdf'
         //      ]
         //  });
         //  $('#rlaporanTable').DataTable({
         //      dom: 'Bfrtip',
         //      buttons: [
         //          'csv', 'excel', 'pdf'
         //      ]
         //  });
         $('#rlaporanTable').DataTable();
         $('#userTable').DataTable();
     });
 </script>

 <!-- Data Table Script Download -->
 <script src="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css"></script>
 <script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
 <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
 <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
 <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>

 <!-- dropify -->
 <script src="<?= base_url() ?>/adminpages/dist/plugins/dropify/dropify.min.js"></script>

 <!-- Chart Script -->
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

 <body>

     <?php
        include 'C:/xampp/htdocs/112Ngalamkota/app/Config/koneksi.php';

        //push ke dalam array isi label dan isi
        // var isi_labels = [];
        // var isi_data=[]; 
        // var TotalJml = 0;
        // var JmlItem = 0;  

        //     isi_labels.push(data[i].kejadian); 
        //     //jml item dalam persentase
        //     isi_data.push(((data[i].JmlItem/TotalJml) * 100).toFixed(2));

        ?>

     <script>
         $(function() {

             //  Laporan Laporan
             var ctx = document.getElementById("pie-chart-laporan").getContext('2d');
             var myChart = new Chart(ctx, {
                 type: 'pie',
                 data: {
                     labels: ['Angin Topan', 'Banjir', 'Gempa Bumi', 'Listrik Putus', 'Kebakaran', 'Kecelakaan', 'Tanah Longsor', 'Pohon Tumbang'],
                     datasets: [{
                         'label': 'My First Dataset',
                         data: [
                             <?php
                                $jumlah_angintopan = mysqli_query($koneksi, "select * from report where kejadian='angin topan'");
                                echo mysqli_num_rows($jumlah_angintopan);
                                ?>,
                             <?php
                                $jumlah_banjir = mysqli_query($koneksi, "select * from report where kejadian='banjir'");
                                echo mysqli_num_rows($jumlah_banjir);
                                ?>,
                             <?php
                                $jumlah_gempabumi = mysqli_query($koneksi, "select * from report where kejadian='gempa bumi'");
                                echo mysqli_num_rows($jumlah_gempabumi);
                                ?>,
                             <?php
                                $jumlah_listrikputus = mysqli_query($koneksi, "select * from report where kejadian='listrik putus'");
                                echo mysqli_num_rows($jumlah_listrikputus);
                                ?>,
                             <?php
                                $jumlah_kebakaran = mysqli_query($koneksi, "select * from report where kejadian='kebakaran'");
                                echo mysqli_num_rows($jumlah_kebakaran);
                                ?>,
                             <?php
                                $jumlah_kecelakaan = mysqli_query($koneksi, "select * from report where kejadian='kecelakaan'");
                                echo mysqli_num_rows($jumlah_kecelakaan);
                                ?>,
                             <?php
                                $jumlah_tanahlongsor = mysqli_query($koneksi, "select * from report where kejadian='tanah longsor'");
                                echo mysqli_num_rows($jumlah_tanahlongsor);
                                ?>,
                             <?php
                                $jumlah_pohontumbang = mysqli_query($koneksi, "select * from report where kejadian='pohon tumbang'");
                                echo mysqli_num_rows($jumlah_pohontumbang);
                                ?>
                         ],
                         backgroundColor: ['rgb(242, 28, 17)',
                             'rgb(250, 238, 12)',
                             'rgb(99, 250, 12)',
                             'rgb(16, 40, 222)',
                             'rgb(227, 5, 123)',
                             'rgb(19, 203, 209)',
                             'rgb(129, 132, 133)',
                             'rgb(247, 146, 5)'
                         ],
                     }]
                 },
                 options: {
                     responsive: true,
                     //  tooltips: {
                     //      callbacks: {
                     //          label: function(tooltipItem, data) {
                     //              var dataset = data.datasets[tooltipItem.datasetIndex];
                     //              var labels = data.labels[tooltipItem.index];
                     //              var currentValue = dataset.data[tooltipItem.index];
                     //              return labels + ": " + currentValue + " %";
                     //          }
                     //      }
                     //  }
                 }
             });


             //Laporan Feedback
             var ctx = document.getElementById("pie-chart-feedback").getContext('2d');
             var myChart = new Chart(ctx, {
                 type: 'pie',
                 data: {
                     labels: ['Sangat Bagus', 'Bagus', 'Cukup', 'Kurang', 'Sangat Kurang'],
                     datasets: [{
                         'label': 'My First Dataset',
                         data: [
                             <?php
                                $jumlah_sangatbagus = mysqli_query($koneksi, "select * from feedback where q4_feedback='Sangat Bagus'");
                                echo mysqli_num_rows($jumlah_sangatbagus);
                                ?>,
                             <?php
                                $jumlah_bagus = mysqli_query($koneksi, "select * from feedback where q4_feedback='Bagus'");
                                echo mysqli_num_rows($jumlah_bagus);
                                ?>,
                             <?php
                                $jumlah_cukup = mysqli_query($koneksi, "select * from feedback where q4_feedback='Cukup'");
                                echo mysqli_num_rows($jumlah_cukup);
                                ?>,
                             <?php
                                $jumlah_kurang = mysqli_query($koneksi, "select * from feedback where q4_feedback='Kurang'");
                                echo mysqli_num_rows($jumlah_kurang);
                                ?>,
                             <?php
                                $jumlah_sangatkurang = mysqli_query($koneksi, "select * from feedback where q4_feedback='Sangat Kurang'");
                                echo mysqli_num_rows($jumlah_sangatkurang);
                                ?>,
                         ],
                         backgroundColor: ['rgb(242, 28, 17)',
                             'rgb(250, 238, 12)',
                             'rgb(99, 250, 12)',
                             'rgb(16, 40, 222)',
                             'rgb(227, 5, 123)'
                         ],
                     }]
                 },
                 options: {
                     responsive: true,
                     //  tooltips: {
                     //      callbacks: {
                     //          label: function(tooltipItem, data) {
                     //              var dataset = data.datasets[tooltipItem.datasetIndex];
                     //              var labels = data.labels[tooltipItem.index];
                     //              var currentValue = dataset.data[tooltipItem.index];
                     //              return labels + ": " + currentValue + " %";
                     //          }
                     //      }
                     //  }
                 }
             });
         })(jQuery);
     </script>
 </body>

 </html>

 <!-- /.content-wrapper -->
 <footer class="main-footer fix-bottom">
     <div class="pull-right hidden-xs">Version 1.0 Beta</div>
     Copyright © 2021 Dinas Komunikasi dan Informatika Kota Malang. All rights reserved.
 </footer>
 </div>
 <!-- ./wrapper -->