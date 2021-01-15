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
                 <div class="title"><strong>Tabel Feedback</strong></div>
                 <div class="table-responsive">
                   <table class="table table-striped table-hover" id="tables">
                     <thead>
                       <tr>
                         <th>ID</th>
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
                       <?php foreach ($feedback as $r) : ?>
                         <tr>
                           <th scope="row"><?= $r['id_feedback']; ?></th>
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
                       <?php endforeach; ?>
                     </tbody>
                   </table>
                 </div>
                 <div>
                   <!-- <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-primary center">Tambah Feedback</button> -->
                 </div>
               </div>
             </div>
           </div>
         </div>
     </div>
   </div>
   <div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" class="modal fade text-left" aria-hidden="true" style="display: none;">
     <div role="document" class="modal-dialog">
       <div class="modal-content">
         <div class="modal-header"><strong id="exampleModalLabel" class="modal-title">Tambah Feedback</strong>
           <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
         </div>
         <div class="modal-body">
           <form>
             <div class="form-group">
               <label>Nama</label>
               <input type="nama" placeholder="Email Address" class="form-control">
             </div>
             <div class="form-group">
               <label>Alamat</label>
               <input type="password" placeholder="Password" class="form-control">
             </div>
             <div class="form-group">
               <label>No.HP</label>
               <input type="email" placeholder="Email Address" class="form-control">
             </div>
             <div class="form-group">
               <label>Tanggal Kejadian</label>
               <input type="email" placeholder="Email Address" class="form-control">
             </div>
             <div class="form-group">
               <label>Penyebab</label>
               <input type="email" placeholder="Email Address" class="form-control">
             </div>
           </form>
         </div>
         <div class="modal-footer">
           <!-- <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button> -->
           <button type="submit" class="btn btn-success">Simpan</button>
         </div>
       </div>
     </div>
   </div>
   </section>
   </section>
 </div>
 <!-- /.content -->
 </div>