<section class="content">
<div class="box">
            <div class="box-header">
              <?php echo $this->session->flashdata('message'); ?>
               <h3 class="box-title"><?= $title; ?></h3>
              
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                      <th>#</th>
                      <th>Nama Kandidat</th>
                      <th>Nama Calon</th>
                      <th>Foto</th>
                      <th>Aksi</th>
                      
                    </tr>
                </thead>
               <tbody>
                    <?php $no = 1;
                    foreach ($rows as $row) : ?>
                        <tr>
                          <td><?= $no++ ?></td>
                          <td><?= $row->nama_kandidat ?></td>
                          <td><?= $row->nama_calon ?></td>
                          <td>
                            <img src="<?= base_url('assets/img/'. $row->foto); ?>" width="100">

                          </td>
                          <td>
                            <a href="<?= site_url('admin/kandidat/edit/'. $row->id); ?>" class="btn btn-info"><i class="fa fa-pencil-square-o"></i>Edit</a>
                            

                          </td>

                        </tr>
                    <?php endforeach; ?>
                    
              </tbody>
        </table>
    </div>    
</div>    
 
</section>  


