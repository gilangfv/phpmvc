<div class="container">
	
	<div class="row">
		<div class="col-6">
			<h3>Daftar mahasiswa</h3>
			
			
				

				<ul class="list-group">
<?php foreach ($data['mhs'] as $mhs): ?>
  <li class="list-group-item"><?= $mhs['nama']; ?>
  	<a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id'];?>" class="badge badge-primary ">detail</a>
  </li>
  <?php endforeach; ?>
</ul>


			
			
		</div>
	</div>

</div>