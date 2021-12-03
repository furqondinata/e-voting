<section class="content">
<div class="box">
            <div class="box-header">
              <?php echo $this->session->flashdata('message'); ?>
              <a href="<?= site_url('admin/visi_misi/tambah')?>" class="btn bg-maroon"><i class="fa fa-plus-circle"></i> Tambah Visi & Misi</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                      <th>#</th>
                      <th>Nama Kandidat</th>
                      <th>Visi</th>
                      <th>Misi</th>
                      <th>Aksi</th>
                      
                    </tr>
                </thead>
               <tbody>
                    <?php $no = 1;
                    foreach ($rows as $row) : ?>
                        <tr>
                          <td><?= $no++ ?></td>
                          <td><?= $row->nama_kandidat ?></td>
                          <td><?= $row->visi ?></td>
                          <td><?= $row->misi ?></td>
                          <td>
                            <a href="<?= site_url('admin/visi_misi/edit/'. $row->id_visimisi); ?>" class="btn btn-info"><i class="fa fa-pencil-square-o"></i>Edit</a>
                            <a href="<?= site_url('admin/visi_misi/hapus/'. $row->id_visimisi); ?>" class="btn btn-danger" onclick="return confirm('Yakin Mau DiHapus')"><i class="fa fa-trash"></i>Hapus</a>

                          </td>

                        </tr>
                    <?php endforeach; ?>
                    
              </tbody>
        </table>
    </div>    
</div>    
 
</section>  


