            <div id="badan" class="col-md-10">
                <h1 class="page-header">List Stok Barang</h1>
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
                            <th class="text-center">Jumlah Stok</th>
                        </tr>
                    </thead>
                    <tbody>
<?php $i=1;
foreach ($list_stokbarang as $lsb){ ?>
                        <tr>
                            <td><?= $i ?></td>
                            <td><?= $lsb['nama_barang'] ?></td>
                            <td><?= $lsb['kode_barang'] ?></td>
                            <td><?= $lsb['jenis'] ?></td>
                            <td><?= $lsb['stok'] ?></td>
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