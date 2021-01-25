 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <div class="content-header sty-one">
     <h1>Laporan Feedback </h1>
     <ol class="breadcrumb">
       <li><a href="#">Home</a></li>
       <li><i class="fa fa-angle-right"></i> Laporan Feedback</li>
     </ol>
   </div>

   <!-- FlashMessage -->
   <?php if (session()->getFlashdata('pesan')) : ?>
     <div class="alert alert-success alert-dismissible fade show" role="alert"> Data Berhasil ditambahkan !
       <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
       <?= session()->getFlashdata('pesan'); ?>
     </div>
   <?php endif; ?>
   <!-- End FlashMessage -->

   <!-- Main content -->
   <div class="content">
     <!-- Small boxes (Stat box) -->
     <div class="page-content">
       <!-- Page Header-->
       <section class="no-padding-top">
         <div class="container-fluid">
           <div class="row">
             <div class="col-lg-12">
               <div class="block">
                 <!-- <div class="title"><strong>Tabel Feedback</strong></div> -->
                 <div class="table-responsive">
                   <table class="table table-bordered table-hover" id="rfeedbackTable">
                     <thead>
                       <tr>
                         <th>#</th>
                         <th>Nama</th>
                         <th>Alamat</th>
                         <th>No. HP</th>
                         <!-- <th>Tanggal</th> -->
                         <th>Penyebab</th>
                         <th>Q1</th>
                         <th>Q2</th>
                         <th>Q3</th>
                         <th>Q4</th>
                         <th>Q5</th>
                         <th>Action</th>
                       </tr>
                     </thead>
                     <tbody>
                       <?php
                        $no = 1;
                        foreach ($feedback as $r) : ?>
                         <tr>
                           <!-- <th scope="row"><?= $r['id_feedback']; ?></th> -->
                           <th scope="row"><?= $no; ?></th>
                           <td><?= $r['nama_feedback']; ?></td>
                           <td><?= $r['alamat_feedback']; ?></td>
                           <td><?= $r['noHp_feedback']; ?></td>
                           <td><?= $r['penyebab_feedback']; ?></td>
                           <td><?= $r['q1_feedback']; ?></td>
                           <td><?= $r['q2_feedback']; ?></td>
                           <td><?= $r['q3_feedback']; ?></td>
                           <td><?= $r['q4_feedback']; ?></td>
                           <td><?= $r['q5_feedback']; ?></td>
                           <td>
                             <a href="/feedback/detailFeedback/<?= $r['id_feedback']; ?>" class="btn btn-info btn-sm">Detail</a>
                             <a href="/feedback/delete/<?= $r['id_feedback']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin data ini akan dihapus');">Delete</a>
                           </td>
                         </tr>
                       <?php
                          $no++;
                        endforeach; ?>
                     </tbody>
                   </table>
                 </div>
               </div>
             </div>
           </div>
         </div>
     </div>
   </div>
 </div>