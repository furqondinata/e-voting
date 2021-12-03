<section class="content">
<div class="box">
            <div class="box-header">
              <?php echo $this->session->flashdata('message'); ?>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                      <th>#</th>
                      <th>Nama User</th>
                      <th>Nama Kandidat</th>
                      <th>Created</th>
                    </tr>
                </thead>
               <tbody>
                    <?php $no = 1;
                    foreach ($rows as $row) : ?>
                        <tr>
                          <td><?= $no++ ?></td>
                          <td><?= $row->nama_user ?></td>
                          <td><?= $row->nama_kandidat ?></td>
                          <td><?= $row->created ?></td>
                         
                          <td>
                            <a href="<?= site_url('admin/visi_misi/hapus/'. $row->id_suara); ?>" class="btn btn-danger" onclick="return confirm('Yakin Mau DiHapus')"><i class="fa fa-trash"></i>Hapus</a>
                          </td>

                        </tr>
                    <?php endforeach; ?>
                    
              </tbody>
        </table>
    </div>    
</div>    
 
</section>  


