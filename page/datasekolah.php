
<table class="table">
    <h4 class="mb-3">Data sekolah</h4>
    <a herf="#" class="btn btn-primary btn-sm col-sm-3" data-bs-toggle="modal" data-bs-target="#datasekolah">Tambah Data</a>
  <thead>
    <tr class="text-center">
      <th scope="col">#</th>
      <th scope="col">Aksi</th>
      <th scope="col">Nama Sekolah</th>
      <th scope="col">Alamat Sekolah</th>
      <th scope="col">No Telepon</th>
      <th scope="col">Email Sekolah</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td class="text-center"><a href="#">edit</a> | <a herf="#"> Hapus</a></td>
      <td>SMKN 1 Kragilan</td>
      <td>jl.Raya Serang-jakarta km.13</td>
      <td>0000</td>
      <td>smkn1kragilan@gmail.com</td>
    </tr>
    
  </tbody>
</table>

<!-- Modal -->
<form>
  <div class="mb-3">
<div class="modal fade" id="datasekolah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form input data sekolah</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- form tambah data -->
       <form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama Sekolah</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Alamat Sekolah</label>
    <textarea type="text" class="form-control" id="exampleInputPassword1" aria-describedby="emailHelp" name="Alamat"></textarea>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">No Telpon</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email Sekolah</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"></div>
  </div>
  <div class="mb-3 form-check">
    
    <form>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>
