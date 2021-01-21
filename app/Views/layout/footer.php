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

 </html>