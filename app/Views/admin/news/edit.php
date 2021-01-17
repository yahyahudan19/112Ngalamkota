 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <div class="content-header sty-one">
     <h1>Detail News </h1>
     <ol class="breadcrumb">
       <li><a href="/superAdmin/reportFeedback">Laporan News</a></li>
       <li><i class="fa fa-angle-right"></i> Detail News</li>
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
                   <a href="<?= base_url('superAdmin/reportFeedback') ?>" class="btn btn-primary">Kembali</a>
                 </div>
               </div>
       <div class="col-lg-12">
       
       
         <div class="block">
           <div class="block-body">
             <form class="form-horizontal row">
               <div class="form-group col-lg-6">
                 <label class="col-sm-1 form-control-label"><strong>Tagline</strong></label>
                   <input type="text" class="form-control" value="<?= $newsdata[0]['tagline_news'] ?>" required>
               </div>
               <div class="form-group col-lg-6">
                 <label class="col-sm-1 form-control-label"><strong>Judul</strong></label>
                   <input type="text" class="form-control" value="<?= $newsdata[0]['judul_news'] ?>" name="" id="" required>
               </div>
               <div class="form-group col-lg-6">
                 <label class="col-sm-1 form-control-label"><strong>Isi</strong></label>
                   <textarea class="form-control" name="" id="" required><?= $newsdata[0]['isi_news'] ?></textarea>
               </div>
               <div class="form-group col-lg-6">
                 <label class="col-sm-1 form-control-label"><strong>Tanggal</strong></label>
                   <input type="text" class="form-control" value="<?= $newsdata[0]['date_news'] ?>" name="" id="" required>
               </div>
               <div class="form-group col-lg-6">
                 <label class="col-sm-1 form-control-label"><strong>Link</strong></label>
                   <input type="text" class="form-control" value="<?= $newsdata[0]['link_news'] ?>" name="" id="" required>
               </div>
               <div class="form-group col-lg-6">
                 <label class="col-sm-1 form-control-label"><strong>Dokumentasi</strong></label>
                   <input type="file" class="form-control" value="" name="" id="" required>
               </div>
               
               <div class="line"></div>
               
             </form>
           </div>
         </div>
       </div>
     </div>
   </div>
   <!-- /.content -->
 </div>