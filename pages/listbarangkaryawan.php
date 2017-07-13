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
                            <th class="text-center">Stok</th>
                            <th class="text-center">Harga</th>
                            <th class="text-center" colspan="3">Aksi</th>
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
                            <td><?= $lb['stok'] ?></td>
                            <td><?= $lb['harga'] ?></td>
                            <td>
                                <a href="editbarang.php" title="" type="button" class="btn btn-success">Edit</a>
                            </td>
                            <td>
                                <button id="hapus" type="button" class="btn btn-danger">Hapus</button>
                            </td>
                        </tr>
<?php $i++; }?>
                     </tbody> 
                  </table>
            </div>

