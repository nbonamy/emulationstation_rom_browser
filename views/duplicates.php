
<?php require_once('header.php') ?>

<?php if (isset($content)): ?>

  <?= $content ?>

<?php else: ?>

  <table border=1>
    <tr>
      <th>Title</th>
      <th>Kept ROM</th>
      <th>Deleted ROMs</th>
    </tr>

    <?php foreach ($games as $title => &$roms): ?>
      <tr>
        <th><?= $title ?></th>
        <td>[<?= $roms[0]['score'] ?>] <?= $roms[0]['name'] ?> <i>(<?= $roms[0]['path'] ?>)</i></td>
        <td>
          <?php for ($i=1; $i<count($roms); $i++): ?>
            [<?= $roms[$i]['score'] ?>] <?= $roms[$i]['name'] ?> <i>(<?= $roms[$i]['path'] ?>)</i><br/>
          <?php endfor; ?>
        </td>
      </tr>
    <?php endforeach; ?>

  </table>

  <div><a href="duplicates.php?system=<?= $system ?>&confirmed=1">Delete these <?= $count ?> ROMS</a></div>

<?php endif; ?>

<div><a href="index.php?system=<?= $system ?>">Back</a></div>

<?php require_once('footer.php') ?>
