<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<h2>Data Mata Kuliah</h2>

<table>
    <thead>
        <tr>
            <th>Kode</th>
            <th>Nama Mata Kuliah</th>
            <th>SKS</th>
        </tr>
    </thead>
    <tbody>
        <?php if (empty($matakuliah)): ?>
            <tr><td colspan="3">Data mata kuliah belum tersedia.</td></tr>
        <?php else: ?>
            <?php foreach ($matakuliah as $m): ?>
                <tr>
                    <td><?= esc($m['kode']) ?></td>
                    <td><?= esc($m['nama_mk']) ?></td>
                    <td><?= esc($m['sks']) ?></td>
                </tr>
            <?php endforeach; ?>
        <?php endif; ?>
    </tbody>
</table>

<?= $this->endSection() ?>