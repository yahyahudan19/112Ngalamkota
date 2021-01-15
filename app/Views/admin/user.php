 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <div class="content-header sty-one">
     <h1>User Management</h1>
     <ol class="breadcrumb">
       <li><a href="#">Home</a></li>
       <li><i class="fa fa-angle-right"></i>User Management</li>
     </ol>
   </div>

   <!-- Main content -->
   <div class="content">
     <!-- Small boxes (Stat box) -->
     <div class="page-content">
       <!-- Page Header-->
       <div class="page-content">
         <!-- Page Header-->
         <div class="container-fluid">
           <div class="col-lg-9">
             <div class="block">
               <div class="title"><strong>Tabel User</strong></div>
               <div class="table-responsive">
                 <table class="table table-striped table-hover">
                   <thead>
                     <tr>
                       <th>#</th>
                       <th>Email</th>
                       <th>Username</th>
                       <th>Level</th>
                       <th>Action</th>
                     </tr>
                   </thead>
                   <tbody>
                     <?php foreach ($auth as $r) : ?>
                       <tr>
                         <th scope="row"><?= $r['id_user']; ?></th>
                         <td><?= $r['email']; ?></td>
                         <td><?= $r['username']; ?></td>
                         <td><?= $r['role_id']; ?></td>
                         <td>
                           <a href="/admin/editProfile" class="btn btn-warning btn-sm">Edit</a>
                           <a href="/auth/delete/<?= $r['id_user']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin data ini akan dihapus');">Delete</a>
                         </td>
                       </tr>
                     <?php endforeach; ?>
                   </tbody>
                 </table>
               </div>
             </div>
             <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-success">Tambah User</button>
           </div>
           <!-- Modal-->
           <div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" class="modal fade text-left" aria-hidden="true" style="display: none;">
             <div role="document" class="modal-dialog">
               <div class="modal-content">
                 <div class="modal-header"><strong id="exampleModalLabel" class="modal-title">Tambah User</strong>
                   <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                 </div>
                 <div class="modal-body">
                   <form>
                     <div class="form-group">
                       <label>Email</label>
                       <input type="email" placeholder="Email Address" class="form-control">
                     </div>
                     <div class="form-group">
                       <label>username</label>
                       <input type="username" placeholder="Username" class="form-control">
                     </div>
                     <div class="form-group">
                       <label>password</label>
                       <input type="password" placeholder="Password" class="form-control">
                     </div>
                     <div class="form-group">
                       <label>Level</label>
                       <div class="col-sm">
                         <select name="level" class="form-control">
                           <option>Admin</option>
                           <option>Super Admin</option>
                         </select>
                       </div>
                     </div>

                   </form>
                 </div>
                 <div class="modal-footer">
                   <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
                   <button type="button" class="btn btn-primary">Tambah</button>
                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
     </section>
   </div>
   <!-- /.content -->
 </div>