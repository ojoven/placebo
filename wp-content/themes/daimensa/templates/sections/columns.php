<?php
/*********************************
 * SECTION: COLUMNS
 *********************************/
// We have different columns (2-5) with icons and/or text for each of them
?>
<section class="central">

    <!-- SECTION TITLE -->
    <?php if ($sectionTitle) { ?>
        <h2><?php echo $sectionTitle; ?></h2>
    <?php } ?>

    <!-- SECTION DESCRIPTION -->
    <?php if ($sectionDescription) { ?>
        <p class="description"><?php echo $sectionDescription; ?></p>
    <?php } ?>

    <!-- SECTION COLUMNS -->
    <div class="grid col-<?php echo count($columns); ?>">
    <?php foreach ($columns as $column) { ?>
        <div>

            <!-- COLUMN TITLE -->
            <?php if ($column['title']) { ?>
                <h3><?php echo $column['title']; ?></h3>
            <?php } ?>

            <!-- COLUMN ICON -->
            <?php if ($column['icon']) { ?>
                <div class="icon icon-large" style="background-image: url(<?php echo $column['icon']; ?>)"></div>
            <?php } ?>

            <!-- COLUMN DESCRIPTION -->
            <?php if ($column['description']) { ?>
                <p><?php echo $column['description']; ?></p>
            <?php } ?>

        </div>
    <?php } ?>
    </div>

</section>