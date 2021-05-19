            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Satuan Barang</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Satuan Barang</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                DataTable
                            </div>
                            <a href="<?php echo site_url('tambahsatuan') ?>" class="btn btn-primary">Tambah Satuan Barang</a>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Satuan</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <!--<tfoot>
                                            <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th>Salary</th>
                                            </tr>
                                        </tfoot>-->
                                        <tbody>
                                        <?php 
                                                $no = 1;
                                                foreach($satuan as $s){ 
                                                ?>
                                            <tr>
                                                <td><?php echo $no++ ?></td>
                                                <td><?php echo $s->satuan_barang ?></td>
                                                <td>
                                                    <a href="<?php echo site_url('admin/satuan/edit/'.$s->id_satuan) ?>"
                                                    class="btn btn-success"><i class="fas fa-edit"></i> Ubah</a>
                                                    <a onclick="deleteConfirm('<?php echo site_url('admin/satuan/delete/'.$s->id_satuan) ?>')"
                                                    href="#!" class="btn btn-danger"><i class="fas fa-trash"></i> Hapus</a>
                                                </td>
                                                <!-- Logout Delete Confirmation-->
                                                <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
                                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">Data yang dihapus tidak akan bisa dikembalikan.</div>
                                                    <div class="modal-footer">
                                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                                        <a id="btn-delete" class="btn btn-danger" href="#">Delete</a>
                                                    </div>
                                                    </div>
                                                </div>
                                                </div>
                                                
                                                <script>
                                                function deleteConfirm(url){
                                                    $('#btn-delete').attr('href', url);
                                                    $('#deleteModal').modal();
                                                }
                                                </script>

                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>