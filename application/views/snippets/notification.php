<?php
if (is_array($notifications)) {
    foreach ($notifications as $key => $value) {
        ?>
        <div>
            <?php if ($value['NotifiType'] == 0) { ?>
                User <?= $value['NotifiFromID'] ?> want to add you as friend
                <a class="accept" href="javascript:;" data="<?= $value['NotifiID'] ?>">Accept</a>
                <a class="ignore" href="javascript:;" data="<?= $value['NotifiID'] ?>">Ignore</a>
            <?php } elseif ($value['NotifiType'] == 1) { ?>
                Bar <?= $value['NotifiFromID'] ?> published a new event
                <a class="view" href="javascript:;" data="<?= $value['NotifiID'] ?>">View</a>
            <?php } ?>
        </div>
        <?php
    }
}
?>
<script src="common/js/notification.js"></script>