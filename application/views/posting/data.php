<!-- Zero configuration table -->
<section id="basic-datatable">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Data <?= $title ?></h4>
                    <div class="pull-right">
                        <a href="<?= site_url('posting/add') ?>" class="btn btn-primary btn-flat">
                            <i class="fa fa-user-plus"></i> Tambah
                        </a>
                    </div>
                </div>
                <div class="card-content">
                    <div class="card-body card-dashboard">
                        <div class="table-responsive">
                            <table class="table zero-configuration">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Judul Artikel</th>
                                        <th>F</th>
                                        <th>Kategori</th>
                                        <th>Tgl Upload</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($berita as $key => $data) { ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $data->judul ?></td>
                                            <td><?= $data->featured ?></td>
                                            <td><?= $data->nama ?></td> <!-- Nama Kategori -->
                                            <td><?= $data->date ?></td>
                                            <th>
                                                <a href="<?= base_url('admin/posting/edit/') . $data->id_posting ?>" class="btn btn-circle btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                                                <a onclick="return confirm('Yakin ingin hapus?')" href="<?= base_url('admin/posting/delete/') . $data->id_posting ?>" class="btn btn-circle btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                            </th>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>