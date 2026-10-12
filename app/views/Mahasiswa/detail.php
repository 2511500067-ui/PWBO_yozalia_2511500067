<div class="container mt-5">
    <div class="card" style="width: 18rem;">
        <div class="card-body">

            <?php if (isset($data['mhs']) && is_array($data['mhs'])) : ?>
                <h5 class="card-title">
                    <?= htmlspecialchars($data['mhs']['nama'] ?? '-'); ?>
                </h5>
                <h6 class="card-subtitle mb-2 text-muted">
                    <?= htmlspecialchars($data['mhs']['email'] ?? '-'); ?>
                </h6>
                <p class="card-text">
                    Email: <?= htmlspecialchars($data['mhs']['email'] ?? '-'); ?>
                </p>
                <p class="card-text">
                    Jurusan: <?= htmlspecialchars($data['mhs']['jurusan'] ?? '-'); ?>
                </p>
            <?php else : ?>
                <p class="card-text">Data mahasiswa tidak ditemukan.</p>
            <?php endif; ?>
            <a href="<?= BASEURL; ?>/mahasiswa" class="card-link">
                Kembali
            </a>

        </div>
    </div>
</div>