<section class="sec1" id="sec1">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
               <img src="<?= base_url('assets/img/'. $kandidat->foto)?>" class="img-circle">
               <h2 class="display-4 text-primary mt-5 h2-sec1 text-center"><?=$kandidat->nama_calon?></h2>

               <table class="table">
                   <tr>
                       <th>VISI</th>
                       <td>
                           <?= $visimisi->visi?>
                       </td>
                   </tr>
                    <tr>
                       <th>MISI</th>
                       <td>
                           <?= $visimisi->misi?>
                       </td>
                   </tr>
               </table>

               <a href="<?= site_url('home')?>" class="btn btn-secondary">Kembali</a>

            </div>
        </div>
        
    </div>

</section>









