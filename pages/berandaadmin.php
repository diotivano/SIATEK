            <div id="badan" class="col-md-10">
                <h1 class="page-header">Selamat Datang di SIATEK</h1>
                    <table>
<?php foreach ($user_admin as $adm){ ?>
                         <tr>
                             <td>Nama </td>
                             <td>: <?= $adm['nama'] ?></td>
                         </tr>
                         <tr>
                             <td>No. Telepon</td>
                             <td>: <?= $adm['no_telp'] ?></td>
                         </tr>
                         <tr>
                             <td>User Id </td>
                             <td>: <?= $adm['id_admin'] ?></td>
                         </tr>
                         <tr>
                             <td>Jabatan </td>
                             <td>: <?= $adm['jabatan'] ?></td>
                         </tr>
                         <tr>
                             <td>Jenis Kelamin </td>
                             <td>: <?= $adm['jenis_kelamin'] ?></td>
                         </tr>
                         <tr>
                             <td>Alamat </td>
                             <td>: <?= $adm['alamat'] ?></td>
                         </tr>
<?php }?>
                    </table>
            </div>