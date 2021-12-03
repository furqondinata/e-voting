<section class="sec1" id="sec1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="display-4 text-primary mt-5 h2-sec1 text-center">Perolehan Suara</h2>
                 <canvas id="myChart" width="400" height="400"></canvas>

            </div>
        </div>
        
    </div>

</section>

<section class="sec2" id="sec2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                 <h2 class="display-4 text-primary mt-5 h2-sec1 text-center">Voting</h2>
            </div>
        </div>
       
            <div class="row">
                <?php foreach ($kandidat as $k) : ?>
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img src="<?= base_url('assets/img/'.$k->foto); ?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title text-center text-primary font-weight-bold"><?= $k->nama_kandidat?></h5>
                                    <p class="card-text text-center text-secondary"><?= $k->nama_calon?></p>
                                   
                                    <div class="d-flex justify-content-between">
                                        <a href="<?= site_url('home/visimisi/'.$k->id)?>" class="btn btn-primary btn-sm"> Lihat Visi & Misi</a>
                                        <a href="" class="btn btn-success btn-sm">Pilih <?= $k->nama_kandidat?></a>
                                    </div>
                                </div>
                            </div>
                    </div>
                 <?php endforeach; ?>
                
            </div>
    </div>
</section>

<!-- Modal -->
<div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= site_url('auth/login'); ?>" method="post">
            <div class="form-group">
                <label class="text-secondary" for="email1">Email *</label>
                <input type="email" name="email1" id="email1" class="form-control" autocomplete="off" required>
            </div>

            <div class="form-group">
                <label class="text-secondary" for="password1">Password *</label>
                <input type="password" name="password1" id="password1" class="form-control" autocomplete="off" required>
            </div>

            <button type="submit" class="btn btn-primary">Login</button>

        </form>
      </div>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>

<script>
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Calon ke-1', 'Calon ke-2', 'Calon ke-3'],
        datasets: [{
            label: '# Hasil Suara',
            data: [25, 25, 25],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)'
                
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)'
                
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
</script>



