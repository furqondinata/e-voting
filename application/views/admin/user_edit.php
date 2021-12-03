<section class="content">
<div class="box">
            <div class="box-header">
              <?php echo $this->session->flashdata('message'); ?>
             <h3 class="box-title"><?= $title ?></h3>
             
            </div>
            <!-- /.box-header -->
            <div class="box-body">
               <form action="<?= site_url('admin/user/update'); ?>" method="post">
               <input type="hidden" name="id" value="<?=$row->id?>">

                <div class="form-group">
                    <label for="id_kelas">kelas</label>
                    <select name="id_kelas" id="id_kelas" class="form-control">
                        <?php foreach ($kelas as $k) : ?>
                            <option value="<?= $k->id?>"  <?= $row->id_kelas == $k->id ? 'selected' : '' ?> > <?= $k->nama?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

              <div class="form-group">
                  <label for="nama">Nama *</label>
                  <input type="text" name="nama" id="nama" class="form-control" value="<?= $row->nama ?>">
              </div>
              
               <div class="form-group">
                  <label for="email">Email *</label>
                  <input type="email" name="email" id="email" class="form-control" value="<?= $row->email ?>">
              </div>

             
              <div class="form-group">
                  <label for="level">Level *</label>
                <select name="level" id="level" class="form-control">
                    <option value="admin"  <?= $row->level == 'admin' ? 'selected' : '' ?> >Admin</option>
                    <option value="siswa"  <?= $row->level == 'siswa' ? 'selected' : '' ?> >Siswa</option>
                </select>
              </div>
                    <a href="<?= site_url('admin/user')?>" class="btn bg-maroon"><i class="fa fa-arrow-left"></i> Kembali</a>
                    <button type="submit" class="btn bg-navy"><i class="fa fa-save"></i>Simpan</button>
               </form>
            </div>    
</div>    
 
</section>  




