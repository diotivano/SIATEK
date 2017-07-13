            <div id="badan" class="col-md-10">
                <h1 class="page-header">Selamat Datang di SIATEK</h1>
                    <table>
<?php foreach ($user_kasir as $kas){ ?>
                         <tr>
                             <td>Nama </td>
                             <td>: <?= $kas['nama'] ?></td>
                         </tr>
                         <tr>
                             <td>No. Telepon</td>
                             <td>: <?= $kas['no_telp'] ?></td>
                         </tr>
                         <tr>
                             <td>User Id </td>
                             <td>: <?= $kas['id_user'] ?></td>
                         </tr>
                         <tr>
                             <td>Jabatan </td>
                             <td>: <?= $kas['jabatan'] ?></td>
                         </tr>
                         <tr>
                             <td>Jenis Kelamin </td>
                             <td>: <?= $kas['jenis_kelamin'] ?></td>
                         </tr>
                         <tr>
                             <td>Alamat </td>
                             <td>: <?= $kas['alamat'] ?></td>
                         </tr>
<?php }?>
                    </table>
            </div>