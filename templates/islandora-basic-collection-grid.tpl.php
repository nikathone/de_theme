<?php

/**
 * @file
 * islandora-basic-collection.tpl.php
 *
 * @TODO: needs documentation about file and variables
 */
?>

<div class="islandora islandora-basic-collection">
  <?php print render($order_by); ?>
  <div class="islandora-basic-collection-grid clearfix">
  <?php foreach($associated_objects_array as $key => $value): ?>
    <dl class="islandora-basic-collection-object <?php print $value['class']; ?>">
        <dt class="islandora-basic-collection-thumb"><?php print $value['thumb_link']; ?></dt>
        <dd class="islandora-basic-collection-caption"><?php print filter_xss($value['title_link']); ?></dd>
        <?php if (isset($value['dc_array']['dc:description']['value'])): ?>
          <dd class="collection-value <?php print $value['dc_array']['dc:description']['class']; ?>">
            <?php print filter_xss($value['dc_array']['dc:description']['value']); ?>
          </dd>
        <?php endif; ?>
        <dd class="read-more"><?php print $value['read_more']; ?></dd>
    </dl>
  <?php endforeach; ?>
</div>
</div>
