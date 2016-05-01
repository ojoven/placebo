<?php
/*********************************
 * SECTION: COLUMNS
 *********************************/
// We have different columns (2-5) with icons and/or text for each of them
?>
<section class="columns">

    <div class="container">

        <!-- SECTION SUPRATITLE -->
        <?php if ($sectionSupratitle) { ?>
            <p class="supratitle"><?php echo $sectionSupratitle; ?></p>
        <?php } ?>

        <!-- SECTION TITLE -->
        <?php if ($sectionTitle) { ?>
            <h2 class="title"><?php echo $sectionTitle; ?></h2>
        <?php } ?>

        <!-- SECTION DESCRIPTION -->
        <?php if ($sectionDescription) { ?>
            <p class="description"><?php echo $sectionDescription; ?></p>
        <?php } ?>

        <!-- SECTION COLUMNS -->
        <div class="grid col-<?php echo count($columns); ?>">
        <?php foreach ($columns as $column) { ?>
            <div>

                <!-- COLUMN ICON -->
                <?php if ($column['icon']) { ?>
                    <div class="icon fa fa-4x fa-<?php echo $column['icon']; ?>"></div>
                <?php } ?>

                <!-- COLUMN TITLE -->
                <?php if ($column['title']) { ?>
                    <h3><?php echo $column['title']; ?></h3>
                <?php } ?>

                <!-- COLUMN DESCRIPTION -->
                <?php if ($column['description']) { ?>
                    <p><?php echo $column['description']; ?></p>
                <?php } ?>

            </div>
        <?php } ?>
        </div>

    </div>

</section>