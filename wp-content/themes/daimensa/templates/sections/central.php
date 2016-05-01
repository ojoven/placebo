<?php
/*********************************
 * SECTION: CENTRAL
 *********************************/
// The title, description and image are horizontally centered
?>
<section class="central">

    <div class="container">

        <!-- SECTION SUPRATITLE -->
        <?php if ($sectionSupratitle) { ?>
            <p class="supratitle"><?php echo $sectionSupratitle; ?></p>
        <?php } ?>

        <!-- SECTION TITLE -->
        <h2 class="title"><?php echo $sectionTitle; ?></h2>

        <!-- SECTION DESCRIPTION -->
        <?php if ($sectionDescription) { ?>
            <p class="description"><?php echo $sectionDescription; ?></p>
        <?php } ?>

        <!-- SECTION IMAGE -->
        <?php if ($sectionImage) { ?>
            <img src="<?php echo $sectionImage; ?>" />
        <?php } ?>

    </div>

</section>