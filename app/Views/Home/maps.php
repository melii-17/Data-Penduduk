<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Data Wilayah & Jumlah Penduduk</h3>
            </div>
            <div class="panel-body">
                <table class="table table-bordered table-striped datatable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Wilayah</th>
                            <th>Polygon</th>
                            <th>Jumlah Penduduk</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($wilayah) && is_array($wilayah)) : ?>
                            <?php $no = 1; foreach ($wilayah as $row) : ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><strong><?= $row['nama_wilayah']; ?></strong></td>
                                    <td><small><?= substr($row['polygon'], 0, 50); ?>...</small></td>
                                    <td><?= number_format($row['jumlah_penduduk'], 0, ',', '.'); ?> Orang</td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else : ?>
                            <tr>
                                <td colspan="4" class="text-center">Data tidak ditemukan.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>