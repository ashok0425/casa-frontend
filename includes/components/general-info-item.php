<li>
    <figure><img src="<?php echo $item['icon']; ?>" alt="<?php echo $item['label']; ?>"></figure>
    <h6><?php echo $item['label']; ?></h6>
    <?php if (!empty($item['value'])) {
        if (!empty($item['url'])) { ?>
            <a href="<?php echo $item['url']; ?>"><?php echo $item['value']; ?></a>
        <?php } else { ?>
            <span><?php echo $item['value']; ?></span>
    <?php }
    } ?>
</li>