            <div id="badan" class="col-md-10">
                <h1 class="page-header">Input Penjualan</h1>
                <div class="row row-eq-height">
                  <div class="col-sm-4">
                  <h4>Informasi Penjualan</h4>
                    
                        <div class="col-md-10">
                          
                        <div class="form-group">
                            <label for="namabarang">Id Kasir</label>
                            <input type="text" class="form-control" id="idkasir" placeholder="Id Kasir">
                        </div>
                        <div class="form-group">
                            <label for="namabarang">Kode Penjualan</label>
                            <input type="text" class="form-control" id="kodepenjualan" placeholder="Kode Penjualan">
                        </div>
                        <div class="form-group">
                            <label for="kodebarang">Tanggal</label>
                            <input type="date" class="form-control" id="tanggal" placeholder="Tanggal">
                        </div>
                        <br>
                        </div>
               
              </div>
                
                  <div class="col-sm-4">
                        <form>
                        <h4>Input Barang</h4>
                          <div class="form-group">
                            <label for="barang">Kode Barang</label>
                            <input type="text" class="form-control" placeholder="Kode Barang">
                          </div>
                          <div class="form-group">
                            <label for="jumlah">Jumlah</label>
                            <input type="number" class="form-control" placeholder="Jumlah Barang">
                          </div>
                          <button type="submit" class="btn btn-primary">Tambahkan</button>
                        </form>
                  </div>

                  <div class="col-sm-4">
                        <form>
                        <h4>Pembayaran</h4>
                          <div class="form-group">
                            <label for="jumlah">Total Harga</label>
                            <input type="text" class="form-control" placeholder="Total Harga">
                          </div>
                          <button type="submit" class="btn btn-primary">Proses</button>
                        </form>
                  </div>
                </div>
                <br>
                <div class="row">
                <table class="table table-striped text-center">
                    <thead>
                        <tr>
                            <th class="text-center">No.</th>
                            <th class="text-center">Nama Barang</th>
                            <th class="text-center">Kode Barang</th>
                            <th class="text-center">Jumlah</th>
                            <th class="text-center">Harga</th>
                            <th class="text-center" colspan="2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>PARACETAMOL</td>
                            <td>OB0001</td>
                            <td>2</td>
                            <td>4000</td>
                            <td>
                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal1">Edit</button>
                                    <div id="modal1" class="modal fade text-justify" role="dialog">
                                      <div class="modal-dialog">

                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Edit Barang</h4>
                                          </div>

                                          <div class="modal-body">
                                            <form>
                                              <div class="form-group">
                                                <label for="kode">Kode Barang</label>
                                                <input type="text" class="form-control" placeholder="Kode Barang">   
                                              </div>
                                              <div class="form-group">
                                                <label for="jumlah">Jumlah</label>
                                                  <input type="number" class="form-control" placeholder="Jumlah Barang">
                                              </div>
                                            </form>
                                          </div>

                                          <div class="modal-footer">
                                            <button onclick="edituser()" type="button" class="btn btn-primary" data-dismiss="modal">Edit</button>
                                          </div>
                                        </div>

                                      </div>
                                    </div>
                                
                            </td>
                            <td>
                                <button id="hapus" type="button" class="btn btn-danger">Hapus</button>
                            </td>
                          </tr>
                    </tbody>
                </table>



                </div>

            </div>







