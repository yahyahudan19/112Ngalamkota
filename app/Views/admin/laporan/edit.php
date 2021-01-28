 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <div class="content-header sty-one">
     <h1>Edit Laporan Kejadian</h1>
     <ol class="breadcrumb">
       <li><a href="/superAdmin/report">Laporan Kejadian</a></li>
       <li><i class="fa fa-angle-right"></i>Edit Laporan Kejadian</li>
     </ol>
   </div>

   <!-- Main content -->
   <div class="content">
     <!-- Small boxes (Stat box) -->
     <div class="page-content row">
       <!-- Page Header-->
       <!-- Page Content -->
       <div class="col-lg-12">
         <div class="block">
           <div class="block-body">
             <!-- <form class="form-horizontal row" action="/report/editReport/" method="post" enctype="multipart/form-data"> -->
             <form class="form-horizontal row" action="/report/edit/" method="post" enctype="multipart/form-data">
               <input type="hidden" name="id" value="<?= $reportdata[0]['id_pelapor']; ?>" />
               <div class="form-group col-lg-6">
                 <label class="col-sm-5 form-control-label"><strong>Tanggal Kejadian</strong></label>
                 <input type="date" class="form-control" value="<?= $reportdata[0]['tanggal'] ?>" name="tanggal_report" id="tanggal_report" required>
               </div>
               <div class="form-group col-lg-6">
                 <label class="col-sm-5 form-control-label"><strong>Nama Pelapor</strong></label>
                 <input type="text" class="form-control" value="<?= $reportdata[0]['nama_pelapor'] ?>" name="nama_pelapor" id="nama_pelapor" required>
               </div>
               <div class="form-group col-lg-6">
                 <label class="col-sm-1 form-control-label"><strong>Kejadian</strong></label>
                 <select name="kejadian" class="form-control" id="kejadian">
                   <option value="Kebakaran" <?= $reportdata[0]['kejadian'] == "Kebakaran" ? "selected" : ""; ?>>Kebakaran</option>
                   <option value="Pohon Tumbang" <?= $reportdata[0]['kejadian'] == "Pohon Tumbang" ? "selected" : ""; ?>>Pohon Tumbang</option>
                   <option value="Kecelakaan" <?= $reportdata[0]['kejadian'] == "Kecelakaan" ? "selected" : ""; ?>>Kecelakaan</option>
                   <option value="Banjir" <?= $reportdata[0]['kejadian'] == "Banjir" ? "selected" : ""; ?>>Banjir</option>
                   <option value="Gempa Bumi" <?= $reportdata[0]['kejadian'] == "Gempa Bumi" ? "selected" : ""; ?>>Gempa Bumi</option>
                   <option value="Angin Topan" <?= $reportdata[0]['kejadian'] == "Angin Topan" ? "selected" : ""; ?>>Angin Topan</option>
                   <option value="Listrik Putus" <?= $reportdata[0]['kejadian'] == "Listrik Putus" ? "selected" : ""; ?>>Listrik Putus</option>
                   <option value="Lainnya" <?= $reportdata[0]['kejadian'] == "Lainnya" ? "selected" : ""; ?>>Lainnya</option>
                 </select>
               </div>
               <div class="form-group col-lg-6">
                 <label class="col-sm-4 form-control-label"><strong>Lokasi Kejadian</strong></label>
                 <input type="text" class="form-control" value="<?= $reportdata[0]['lokasi_kejadian'] ?>" name="lokasi_report" id="lokasi_report" required>
               </div>
               <div class="form-group col-lg-6">
                 <label class="col-sm-4 form-control-label"><strong>Nama Pelapor</strong></label>
                 <input type="text" class="form-control" value="<?= $reportdata[0]['nama_pelapor'] ?>" name="nama_pelapor" id="nama_pelapor" required>
               </div>
               <div class="form-group col-lg-6">
                 <label class="col-sm-4 form-control-label"><strong>Tindak Lanjut</strong></label>
                 <input type="text" class="form-control" value="<?= $reportdata[0]['tindak_lanjut'] ?>" name="tindak_lanjut" id="tindak_lanjut" required>
               </div>
               <!-- <div class="form-group col-lg-6">
                 <label class="col-sm-1 form-control-label"><strong>Dokumentasi</strong></label>
                 <p>Abaikan jika tidak ingin mengubah dokumen</p>
                   <input type="file" class="form-control" value="" name="dokumentasiReport" id="dokumentasiReport">
               </div> -->
               <!-- <div class="form-group col-lg-5">
               </div> -->
               <div class="form-group col-lg-8">
                 <label class="col-sm-1 form-control-label"><strong>Dokumentasi</strong></label>
               </div>
               <?php
                foreach ($detail as $row) {
                ?>
                 <img src="<?= base_url() ?>/uploads/<?= $row['gambar'] ?>" height="300" width="500" class="m-4" />
               <?php
                }
                ?>
               <!-- <input type="file" class="dropify" value="" name="dokumentasi[]" id="dokumentasi" style="border:none" multiple> -->
               <input type="file" class="dropify" value="" name="dokumentasi[]" id="dokumentasi" multiple>
               <small class="help-block-none">Abaikan jika tidak ingin mengubah dokumen.</small>
               <div class="line"></div>
               <div class="form-group col-lg-12">
               </div>
               <div class="form-group col-lg-1">
                 <button type="submit" class="btn btn-warning">Update</button>
               </div>
               <div class="form-group col-lg-1">
                 <a href="<?= base_url('report') ?>" class="btn btn-primary">Kembali</a>
               </div>
             </form>
           </div>
         </div>
       </div>
     </div>
   </div>
   <!-- /.content -->
 </div>