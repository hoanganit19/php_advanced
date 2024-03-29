<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $dataView['pageTitle'] ?? 'Unicode Academy'; ?></title>
    <link rel="stylesheet" href="<?php echo _WEB_ROOT; ?>/public/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo _WEB_ROOT; ?>/public/assets/css/style.css">
</head>

<body>
    <?php $this->render('blocks/header'); ?>
    <main class="py-3">
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <?php $this->render('blocks/sidebar'); ?>
                </div>
                <div class="col-9">
                    <?php $this->render($body, $dataView); ?>
                </div>
            </div>
        </div>
    </main>
    <?php $this->render('blocks/footer'); ?>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        <?php
        if ($msg) :
        ?>
            setTimeout(() => {
                Swal.fire({
                    icon: "<?php echo $msgType; ?>",
                    title: "<?php echo $msgType === 'success' ? 'Thành công' : "Đã có lỗi xảy ra..." ?>",
                    text: "<?php echo $msg ?>",
                });
            }, 500)
        <?php
        endif;
        ?>
    </script>
    <script type="module" src="<?php echo _WEB_ROOT; ?>/public/assets/js/script.js"></script>
</body>

</html>