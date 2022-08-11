
<table class="table">
    <h4 class="mb-3">Data siswa</h4>
    <a herf="#" class="btn btn-primary btn-sm col-sm-3" data-bs-toggle="modal" data-bs-target="#datasiswa">Tambah Data</a>
  <thead>
  	<tr class="text-center">
      <th scope="col">#</th>
      <th scope="col">Aksi</th>
      <th scope="col">Nisn</th>
      <th scope="col">Nama Siswa</th>
      <th scope="col">Jk</th>
      <th scope="col">Alamat</th>
      <th scope="col">Agama</th>
      <th scope="col">No HP</th>
      </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td class="text-center"><a href="#">edit</a> | <a herf="#"> Hapus</a></td>
      <td>087656</td>
      <td>Een Riayani</td>
      <td>Perempuan</td>
      <td>kp cimiung</td>
      <td>Islam</td>
      <td>086353397</td>
    </tr>
     </tbody>
</table>

<!-- Modal -->
<form>
  <div class="mb-3">
<div class="modal fade" id="datasiswa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form input data siswa</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- form tambah data -->
        <form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nisn</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Nama Siswa</label>
    <input type="text" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Jenis kelamin</label>
    <select class="form-select" aria-label="defaule select example">
    	<option selected>Jenis kelamin</option>
    	<option value="1">Laki-Laki</Option>
    	<option value="2">Perempuan</option>
      </select>
  </div>
  <div class="mb-3">
  	<form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Alamat</label>
    <textarea type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Alamat"></textarea>
    <div id="emailHelp" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Agama</label>
    <select class="form-select" aria-label="defaule select example">
    	<option selected>Pilih Agama</option>
    	<option value="1"> Islam</Option>
    	<option value="2">Keristen</option>
    	<option value="3">Budha</option>
    	<option value="4">khtolik</option>
    	<option value="5">Hindu</Option>
    	<option value="6">konghucu</option>
      </select>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">No HP</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"></div>
  </div>
  <div class="mb-3">
  	<form>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>
