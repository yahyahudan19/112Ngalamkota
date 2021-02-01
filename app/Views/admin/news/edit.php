 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <div class="content-header sty-one">
     <h1>Edit Berita </h1>
     <ol class="breadcrumb">
       <li><a href="/news">Berita</a></li>
       <li><i class="fa fa-angle-right"></i>Edit Berita</li>
     </ol>
   </div>

   <!-- FlashMessage -->
   <?php if (session()->getFlashdata('pesan')) : ?>
     <div class="alert alert-success alert-dismissible fade show" role="alert"><?= session()->getFlashdata('pesan'); ?>
       <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
     </div>
   <?php endif; ?>
   <!-- End FlashMessage -->
   
   <!-- Main content -->
   <div class="content">
     <!-- Small boxes (Stat box) -->
     <div class="page-content row">
       <!-- Page Header-->
       <!-- Page Content -->
       <div class="form-group row">
         <div class="col-sm-11 ml-auto">
           <!-- <button type="submit" data-dismiss="modal" class="btn btn-primary">Kembali</button> -->
           <!-- <a href="<?= base_url('news') ?>" class="btn btn-primary">Kembali</a> -->
         </div>
       </div>
       <div class="col-lg-12">
         <div class="block">
           <div class="block-body">
             <form class="form-horizontal row" action="/news/edit/" method="post" enctype="multipart/form-data">
               <input type="hidden" name="id" value="<?= $newsdata[0]['id_news']; ?>" />
               <div class="form-group col-lg-7">
                 <label class="col-sm-1 form-control-label"><strong>Tagline</strong></label>
                 <input type="text" class="form-control" value="<?= $newsdata[0]['tagline_news'] ?>" name="tagline_news" id="tagline_news" required>
               </div>
               <div class="form-group col-lg-5">
                 <label class="col-sm-5 form-control-label"><strong>Tanggal Dibuat</strong></label>
                 <input type="date" class="form-control" value="<?= $newsdata[0]['date_news'] ?>" name="date_news" id="date_news" required>
               </div>
               <div class="form-group col-lg-7">
                 <label class="col-sm-1 form-control-label"><strong>Judul</strong></label>
                 <input type="text" class="form-control" value="<?= $newsdata[0]['judul_news'] ?>" name="judul_news" id="judul_news" required>
               </div>
               <div class="form-group col-lg-5">
                 <label class="col-sm-1 form-control-label"><strong>Link</strong></label>
                 <input type="text" class="form-control" value="<?= $newsdata[0]['link_news'] ?>" name="link_news" id="link_news" required>
                 <small class="help-block-none">Link sumber berita.</small>
               </div>
               <div class="form-group col-lg-7">
                 <label class="col-sm-10 form-control-label"><strong>Isi</strong></label>
                 <textarea class="form-control" name="isi_news" id="isi_news" required><?= $newsdata[0]['isi_news'] ?></textarea>
               </div>
               <div class="form-group col-lg-5">
                 <label class="col-sm-1 form-control-label"><strong>Dokumentasi</strong></label>
                 <input type="file" class="dropify" value="" name="dokumentasiNews" id="dokumentasiNews">
                 <small class="help-block-none">Abaikan jika tidak ingin mengubah dokumen.</small>
               </div>
               <div class="form-group col-lg-1">
                 <button type="submit" class="btn btn-warning">Update</a>
               </div>
               <div class="form-group col-lg-1">
                    <a href="<?= base_url('news') ?>" class="btn btn-primary">Kembali</a>
               </div>
             </form>
           </div>
         </div>
       </div>
     </div>
   </div>
   <!-- /.content -->
 </div>