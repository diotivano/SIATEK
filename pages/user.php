            <div id="badan" class="col-md-10">
                <h1 class="page-header">User SIATEK</h1>
                <p class="text-right"> 
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal1">Tambah</button>
                </p>

                <div id="modal1" class="modal fade" role="dialog">
                  <div class="modal-dialog">

                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Tambah User</h4>
                      </div>

                      <div class="modal-body">
                            <p><b>USER ID XXXXX</b></p>
                        <form>
                          <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" placeholder="Nama">   
                          </div>
                          <div class="form-group">
                            <label for="jnskelamin">Jenis Kelamin</label>
                            <div class="form-group">
                            <label class="radio-inline">
                              <input type="radio" name="inlineRadioOptions" value="option1">Pria
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="inlineRadioOptions" value="option2">Wanita
                            </label>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="telepon">No. Telepon</label>
                              <input type="text" class="form-control" placeholder="telepon">
                          </div>
                          <div class="form-group">
                            <label for="jabatan">Jabatan</label>
                              <select name="jabatan" class="form-control">
                                  <option value="1">Apoteker</option>
                                  <option value="2">Kasir</option>
                                  <option value="3">Karyawan</option>
                              </select>
                          </div>
                          <div class="form-group">
                            <label for="inputPassword">Password</label>
                              <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="repeatPassword">Ulangi Password</label>
                                <input type="password" class="form-control" id="inputPassword3" placeholder="Ulangi Password">
                        </div>
                        </form>
                      </div>

                      <div class="modal-footer">
                        <button onclick="tambahuser()" type="button" class="btn btn-primary" data-dismiss="modal">Tambahkan</button>
                      </div>
                    </div>

                  </div>
                </div>

                <table class="table table-striped text-center">
                    <thead>
                        <tr>
                            <th class="text-center">No.</th>
                            <th class="text-center">Nama</th>
                            <th class="text-center">User ID</th>
                            <th class="text-center">Jabatan</th>
                            <th class="text-center" colspan="3">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
<?php $i=1;
foreach ($list_user as $lu){ ?>
                        <tr>
                            <td><?= $i ?></td>
                            <td><?= $lu['nama'] ?></td>
                            <td><?= $lu['id_user'] ?></td>
                            <td><?= $lu['jabatan'] ?></td>
                            <td>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal2">Lihat</button>
                                <div id="modal2" class="modal fade text-justify" role="dialog">
                                  <div class="modal-dialog">

                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Info User</h4>
                                      </div>
                                      <div class="modal-body">
                                        <table>
                                             <tr>
                                                 <td>Nama </td>
                                                 <td>: Yanto</td>
                                             </tr>
                                              <tr>
                                                 <td>No Apoteker </td>
                                                 <td>: 440/0987/1234/1-166</td>
                                             </tr>
                                             <tr>
                                                 <td>No. Telepon</td>
                                                 <td>: 081212121212</td>
                                             </tr>
                                             <tr>
                                                 <td>User Id </td>
                                                 <td>: AP001</td>
                                             </tr> 
                                             <tr>
                                                 <td>Jabatan </td>
                                                 <td>: Apoteker</td>
                                             </tr>
                                             <tr>
                                                 <td>Jenis Kelamin </td>
                                                 <td>: Pria</td>
                                             </tr>
                                             <tr>
                                                 <td>Alamat </td>
                                                 <td>: Jl. Sepakat 2</td>
                                             </tr>
                                        </table>
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                      </div>
                                    </div>

                                  </div>
                                </div>
                            </td>
                            <td>
                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal3">Edit</button>

                                    <div id="modal3" class="modal fade text-justify" role="dialog">
                                      <div class="modal-dialog">

                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Edit User</h4>
                                          </div>

                                          <div class="modal-body">
                                                <p><b>USER ID AP001</b></p>
                                            <form>
                                              <div class="form-group">
                                                <label for="nama">Nama</label>
                                                <input type="text" class="form-control" value="Yanto">   
                                              </div>
                                              <div class="form-group">
                                                <label for="jnskelamin">Jenis Kelamin</label>
                                                <div class="form-group">
                                                <label class="radio-inline">
                                                  <input type="radio" name="inlineRadioOptions" value="option1" checked>Pria
                                                </label>
                                                <label class="radio-inline">
                                                  <input type="radio" name="inlineRadioOptions" value="option2">Wanita
                                                </label>
                                                </div>
                                              </div>
                                              <div class="form-group">
                                                <label for="telepon">No. Telepon</label>
                                                  <input type="text" class="form-control" value="081212121212">
                                              </div>
                                              <div class="form-group">
                                                <label for="jabatan">Jabatan</label>
                                                  <select name="jabatan" class="form-control">
                                                      <option value="1">Apoteker</option>
                                                      <option value="2">Kasir</option>
                                                      <option value="3">Karyawan</option>
                                                  </select>
                                              </div>
                                              <div class="form-group">
                                                <label for="inputPassword">Password Lama</label>
                                                  <input type="password" class="form-control" id="inputPassword" value="kasirsiatek001" >
                                            </div>
                                            <div class="form-group">
                                                <label for="repeatPassword">Password Baru</label>
                                                    <input type="password" class="form-control" id="inputPassword" placeholder="Password Baru">
                                            </div>
                                            <div class="form-group">
                                                <label for="repeatPassword">Ulangi Password</label>
                                                    <input type="password" class="form-control" id="inputPassword" placeholder="Ulangi Password">
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
<?php $i++; }?>
                    </tbody>
                </table> 

                <div class="text-center">
                <ul class="pagination">
                  <li class="active"><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                </ul>
                </div>

            </div>