 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <div class="content-header sty-one">
     <h1>Edit Pengumuman </h1>
     <ol class="breadcrumb">
       <li><a href="/superAdmin/pengumuman">Pengumuman</a></li>
       <li><i class="fa fa-angle-right"></i>Edit Pengumuman</li>
     </ol>
   </div>

   <!-- Main content -->
   <div class="content">
     <!-- Small boxes (Stat box) -->
     <div class="page-content row">
       <!-- Page Header-->
       <!-- Page Content -->
       <div class="form-group row">
         <div class="col-sm-11 ml-auto">
           <!-- <button type="submit" data-dismiss="modal" class="btn btn-primary">Kembali</button> -->
           <a href="<?= base_url('superAdmin/pengumuman') ?>" class="btn btn-primary">Kembali</a>
         </div>
       </div>
       <div class="col-lg-12">
         <div class="block">
           <div class="block-body">
             <!-- <form class="form-horizontal row" action="/pengumuman/edit/" method="post" enctype="multipart/form-data"> -->
             <form class="form-horizontal row" action="/pengumuman/edit/" method="post">
               <input type="hidden" name="id" value="<?= $pengumumandata[0]['id_pengumuman']; ?>" />
               <div class="form-group col-lg-6">
                 <label class="col-sm-4 form-control-label"><strong>Tanggal Dibuat</strong></label>
                 <input type="text" class="form-control" value="<?= $pengumumandata[0]['date_pengumuman'] ?>" name="date_pengumuman" id="date_pengumuman" required>
               </div>
               <div class="form-group col-lg-6">
                 <label class="col-sm-1 form-control-label"><strong>Tagline</strong></label>
                 <input type="text" class="form-control" value="<?= $pengumumandata[0]['tagline_pengumuman'] ?>" name="tagline_pengumuman" id="tagline_pengumuman" required>
               </div>
               <div class="form-group col-lg-6">
                 <label class="col-sm-1 form-control-label"><strong>Judul</strong></label>
                 <input type="text" class="form-control" value="<?= $pengumumandata[0]['judul_pengumuman'] ?>" name="judul_pengumuman" id="judul_pengumuman" required>
               </div>
               <div class="form-group col-lg-6">
                 <label class="col-sm-1 form-control-label"><strong>Isi</strong></label>
                 <textarea class="form-control" name="isi_pengumuman" id="isi_pengumuman" required><?= $pengumumandata[0]['isi_pengumuman'] ?></textarea>
               </div>
               <!-- <div class="form-group col-lg-6">
                 <label class="col-sm-1 form-control-label"><strong>Dokumentasi</strong></label>
                 <p>Abaikan jika tidak ingin mengubah dokumen</p>
                 <input type="file" class="form-control" value="" name="dokumentasipengumuman" id="dokumentasipengumuman">
               </div> -->
               <div class="line"></div>
               <div class="col-lg-12">
                 <button type="submit" class="btn btn-warning">Update</a>
             </form>
           </div>
         </div>
       </div>
     </div>
   </div>
   <!-- /.content -->
 </div>