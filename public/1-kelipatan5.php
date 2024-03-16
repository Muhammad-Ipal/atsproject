  <div class="content">
    <div class="box rounded-2">
      <h1 class="my-5 fs-2 text-center ">Kelipatan 5</h1>
      <form action="" method="post">
        <input type="number" name="number" class="rounded-2">
        <button type="submit" class="rounded-2">Submit</button>
      </form>
      <div class="result ">
        <?php if ($_SERVER['REQUEST_METHOD'] === 'POST') : ?>
          <?php
          $num = $_POST['number'];
          $no_urut = 1;
          ?>
          <?php for ($kel = 5; $kel <= $num; $kel += 5) : ?>
            <div class="output">
              <div class="no"><?= $no_urut; ?></div>
              <div class="hasil">Kelipatan ke-<?= $no_urut; ?> : <?= $kel; ?></div>
            </div>
            <?php $no_urut++; ?>
          <?php endfor; ?>
        <?php endif; ?>

      </div>
    </div>
  </div>