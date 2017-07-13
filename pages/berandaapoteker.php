            <div id="badan" class="col-md-10">
                <h1 class="page-header">Selamat Datang di SIATEK</h1>
                    <table>
<?php foreach ($user_apoteker as $apt){ ?>
                         <tr>
                             <td>Nama </td>
                             <td>: <?= $apt['nama'] ?></td>
                         </tr>
                         <tr>
                             <td>No. Telepon</td>
                             <td>: <?= $apt['no_telp'] ?></td>
                         </tr>
                         <tr>
                             <td>User Id </td>
                             <td>: <?= $apt['id_user'] ?></td>
                         </tr>
                         <tr>
                             <td>Jabatan </td>
                             <td>: <?= $apt['jabatan'] ?></td>
                         </tr>
                         <tr>
                             <td>Jenis Kelamin </td>
                             <td>: <?= $apt['jenis_kelamin'] ?></td>
                         </tr>
                         <tr>
                             <td>Alamat </td>
                             <td>: <?= $apt['alamat'] ?></td>
                         </tr>
<?php }?>
                    </table>
            </div>