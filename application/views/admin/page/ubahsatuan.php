<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Satuan Barang</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Satuan Barang</li>
                        </ol>
                                <!--<?php if ($this->session->flashdata('success')): ?>
                                <div class="alert alert-success" role="alert">
                                    <?php echo $this->session->flashdata('success'); ?>
                                </div>
                                <?php endif; ?>-->

                                <form action="" method="post" enctype="multipart/form-data" >
                                <!-- Note: atribut action dikosongkan, artinya action-nya akan diproses 
                                    oleh controller tempat vuew ini digunakan. Yakni index.php/admin/products/edit/ID --->
                                    <input type="hidden" name="id" value="<?php echo $satuan->id_satuan?>" />
                                    <div class="form-group">
                                        <label for="namasatuan">Nama Satuan</label>
                                        <input class="form-control <?php echo form_error('namasatuan') ? 'is-invalid':'' ?>"
                                        type="text" name="namasatuan" placeholder="Nama Satuan" value="<?php echo $satuan->satuan_barang ?>" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('namasatuan') ?>
                                        </div>
                                    </div>
                                        <a href="<?php echo site_url('satuan') ?>" class="btn btn-danger">Batal</a>
                                        <input class="btn btn-primary" type="submit" name="btn" value="Simpan" />
                                    </form>
                                <!--<div class="card-header"><h3 class="text-center font-weight-light my-4">Tambah Satuan Barang</h3></div>
                                    <div class="card-body">
                                        <form>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">Nama Satuan Barang</label>
                                                <input class="form-control py-4" id="inputEmailAddress" type="email" placeholder="Nama Satuan Barang" />
                                            </div>
                                            
                                                <a class="btn btn-danger" href="satuan">Batal</a>
                                                <a class="btn btn-primary" href="admin">Simpan</a>
                                        </form>
                                    </div>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </main>