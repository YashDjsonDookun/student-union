<h4><u><strong>Office Bearers</strong></u></h4>
<div class="obearers">
    <!-- Image card -->
    <div class="obearer demo-card-image mdl-card mdl-shadow--4dp ob-president">
                <script>
                    $(".obearer.demo-card-image.mdl-card.mdl-shadow--4dp.ob-president").css({
                        "background-image": "url('<?php echo $President->getOB_Image(); ?>')",
                        "background-repeat" : "no-repeat",
                        "background-size": "cover"
                    });
                </script>
        <div class="mdl-card__title mdl-card--expand"></div>
        <div class="mdl-card__actions">
            <span class="demo-card-image__filename ob-name">
                <?php
                    echo $President->getOB_Name();
                ?>
            </span>
            <span class="demo-card-image__filename ob-title">
                <?php
                    echo $President->getOB_Title();
                ?>
            </span>
            <a class="fb_link" href="<?php echo $President->getOB_fbLink(); ?>" target="_blank">
                <span class="demo-card-image__filename ob-fb material-icons">face</span>
            </a>
            <span class="demo-card-image__filename ob-tel">
                <?php
                    echo $President->getOB_Tel();
                ?>
            </span>
        </div>
    </div>
    <div class="obearer demo-card-image mdl-card mdl-shadow--4dp ob-vicepresident">
                <script>
                    $(".obearer.demo-card-image.mdl-card.mdl-shadow--4dp.ob-vicepresident").css({
                        "background-image": "url('<?php echo $Vpresident->getOB_Image(); ?>')",
                        "background-repeat" : "no-repeat",
                        "background-size": "cover"
                    });
                </script>
        <div class="mdl-card__title mdl-card--expand"></div>
        <div class="mdl-card__actions">
            <span class="demo-card-image__filename ob-name">
                <?php
                    echo $Vpresident->getOB_Name();
                ?>
            </span>
            <span class="demo-card-image__filename ob-title">
                <?php
                    echo $Vpresident->getOB_Title();
                ?>
            </span>
            <a class="fb_link" href="<?php echo $Vpresident->getOB_fbLink(); ?>" target="_blank">
                <span class="demo-card-image__filename ob-fb material-icons">face</span>
            </a>
            <span class="demo-card-image__filename ob-tel">
                <?php
                    echo $Vpresident->getOB_Tel();
                ?>
            </span>
        </div>
    </div>
    <div class="obearer demo-card-image mdl-card mdl-shadow--4dp ob-treasurer">
                <script>
                    $(".obearer.demo-card-image.mdl-card.mdl-shadow--4dp.ob-treasurer").css({
                        "background-image": "url('<?php echo $Treasurer->getOB_Image(); ?>')",
                        "background-repeat" : "no-repeat",
                        "background-size": "cover"
                    });
                </script>
        <div class="mdl-card__title mdl-card--expand"></div>
        <div class="mdl-card__actions">
            <span class="demo-card-image__filename ob-name">
                <?php
                    echo $Treasurer->getOB_Name();
                ?>
            </span>
            <span class="demo-card-image__filename ob-title">
                <?php
                    echo $Treasurer->getOB_Title();
                ?>
            </span>
            <a class="fb_link" href="<?php echo $Treasurer->getOB_fbLink(); ?>" target="_blank">
                <span class="demo-card-image__filename ob-fb material-icons">face</span>
            </a>
            <span class="demo-card-image__filename ob-tel">
                <?php
                    echo $Treasurer->getOB_Tel();
                ?>
            </span>
        </div>
    </div>
    <div class="obearer demo-card-image mdl-card mdl-shadow--4dp ob-secretary">
                <script>
                    $(".obearer.demo-card-image.mdl-card.mdl-shadow--4dp.ob-secretary").css({
                        "background-image": "url('<?php echo $Secretary->getOB_Image(); ?>')",
                        "background-repeat" : "no-repeat",
                        "background-size": "cover"
                    });
                </script>
        <div class="mdl-card__title mdl-card--expand"></div>
        <div class="mdl-card__actions">
            <span class="demo-card-image__filename ob-name">
                <?php
                    echo $Secretary->getOB_Name();
                ?>
            </span>
            <span class="demo-card-image__filename ob-title">
                <?php
                    echo $Secretary->getOB_Title();
                ?>
            </span>
            <a class="fb_link" href="<?php echo $Secretary->getOB_fbLink(); ?>" target="_blank">
                <span class="demo-card-image__filename ob-fb material-icons">face</span>
            </a>
            <span class="demo-card-image__filename ob-tel">
                <?php
                    echo $Secretary->getOB_Tel();
                ?>
            </span>
        </div>
    </div>
</div>