<table class="table table-bordered text-nowrap w-100">
    <thead>
        <tr>
            <th>Kelas</th>
            <th>Mata Kuliah</th>
            <th>SKS</th>
            <th>Hari</th>
            <th>Jam</th>
            <th>Ruangan</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($jadwal as $j): ?>
        <tr>
            <td><?= $j->kd_lokal ?></td>
            <td><?= $j->nm_mtk ?></td>
            <td><?= $j->sksajar ?></td>
            <td><?= $j->hari_t ?></td>
            <td><?= $j->jam_t ?></td>
            <td><?= $j->no_ruang ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
