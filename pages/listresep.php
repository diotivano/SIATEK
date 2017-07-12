            <div id="badan" class="col-md-10">
                <h1 class="page-header">List Resep</h1>
                <div>
                <form class="navbar-form navbar-right">
                <button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Export</button>
                <button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-print"></span> Cetak</button>
                </form>
                <form class="navbar-form navbar-left" role="search">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                  </div>
                  <button type="submit" class="btn btn-default">Submit</button>
                </form>
               </div>
                <table class="table table-striped text-center">
                    <thead>
                        <tr>
                            <th class="text-center">No.</th>
                            <th class="text-center">Kode Resep</th>
                            <th class="text-center">Id Apoteker</th>
                            <th class="text-center">Nama Dokter</th>
                            <th class="text-center">Nama Pelanggan</th>
                            <th class="text-center">Tanggal</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>A0001</td>
                            <td>AP001</td>
                            <td>Dr. Budi</td>
                            <td>Adi</td>
                            <td>01-01-2017</td>
                            <td>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal1">Lihat</button>

                                <div id="modal1" class="modal fade text-justify" role="dialog">
                                  <div class="modal-dialog">

                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Keterangan Resep</h4>
                                      </div>
                                      <div class="modal-body">
                                             <P>
                                                 Kode Resep : A0001
                                             </P>
                                        <table class="table">
                                             <tr>
                                                 <th>No.</th>
                                                 <th>Nama Obat</th>
                                                 <th>Kode Obat</th>
                                                 <th>Jumlah</th>
                                             </tr>
                                             <tr>
                                                 <td>1.</td>
                                                 <td>PARACETAMOL</td>
                                                 <td>OB0001</td>
                                                 <td>1</td>
                                             </tr>
                                             <tr>
                                                 <td>2.</td>
                                                 <td>AMOXICILLIN</td>
                                                 <td>OB0002</td>
                                                 <td>1</td>
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
                        <tr>
                            <td>2</td>
                            <td>A0002</td>
                            <td>AP001</td>
                            <td>Dr. Ahmad</td>
                            <td>Lala</td>
                            <td>01-01-2017</td>
                            <td>
                                <button type="button" class="btn btn-primary">Lihat</button>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>A0003</td>
                            <td>AP001</td>
                            <td>Dr. Ipin</td>
                            <td>Kiki</td>
                            <td>02-01-2017</td>
                            <td>
                                <button type="button" class="btn btn-primary">Lihat</button>
                            </td>
                        </tr>
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