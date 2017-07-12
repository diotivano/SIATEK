           <div id="badan" class="col-md-10">
                <h1 class="page-header">List Barang</h1>
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
                            <th class="text-center">Nama Barang</th>
                            <th class="text-center">Kode Barang</th>
                            <th class="text-center">Jenis Barang</th>
                            <th class="text-center">Harga</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
<?php $i=1;
foreach ($list_barang as $lb){ ?>
                        <tr>
                            <td><?= $i ?></td>
                            <td><?= $lb['nama_barang'] ?></td>
                            <td><?= $lb['kode_barang'] ?></td>
                            <td><?= $lb['jenis'] ?></td>
                            <td><?= $lb['harga'] ?></td>
                            <td>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal1">Lihat</button>

                            <div id="modal1" class="modal fade text-justify" role="dialog">
                                  <div class="modal-dialog">

                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Info Barang</h4>
                                      </div>
                                      <div class="modal-body">
                                        <p>
                                          <b>Nama Barang : PARACETAMOL</b>
                                          <br>
                                          <b>Kode Barang : OB0001</b>
                                          <br>
                                          <b>Jenis Barang : Obat</b>
                                          <br>
                                          <br>
                                          <b>Indikasi:</b>
                                          <br>
                                          Sebagai antipiretik/analgesik, termasuk bagi pasien yang tidak tahan asetosal. Sebagai analgesik, misalnya untuk mengurangi rasa nyeri pada sakit kepala, sakit gigi, sakit waktu haid dan sakit pada otot.menurunkan demam pada influenza dan setelah vaksinasi.
                                          <br>
                                          <b>Kontra Indikasi:</b>
                                          <br>
                                          Hipersensitif terhadap parasetamol dan defisiensi glokose-6-fosfat dehidroganase.tidak boleh digunakan pada penderita dengan gangguan fungsi hati.
                                          <br>
                                          <br>
                                          Paracetamol adalah derivat p-aminofenol yang mempunyai sifat antipiretik/analgesik 
                                          Sifat antipiretik disebabkan oleh gugus aminobenzen dan mekanismenya diduga berdasarkan efek sentral. 
                                          Sifat analgesik parasetamol dapat menghilangkan rasa nyeri ringan sampai sedang. 
                                          Sifat antiinflamasinya sangat lemah sehingga sehingga tindak digunakan sebagai antirematik.
                                        </p>
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                      </div>
                                    </div>

                                  </div>
                                </div>
                                
                            </td>
                        </tr>
<?php $i++; }?>
                     </tbody> 
                  </table>
            </div>


