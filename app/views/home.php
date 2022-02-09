<?php require_once "_header.php"?>
<body>
    <?php if(count($_COOKIE) != 0):?>
        <div>
            <script>
            setTimeout(function () {
            location.reload()
            }, 3000);
            </script>
        <?php if ($data['dbData'][0]['status'] == 0): ?>
            <div class="state">
            <h1>WhatsApp esta disponible</h1>
                <div class="button">
                <a class="link" href="<?= ROOT.'home/setSatus/1'?>">Usar Whatsapp</a>
                </div>
            </div>
        <?php else: ?>
            <div class="state">
            <h1 style="color: red"><?= ucfirst($data['using'][0]['username']) ?> esta usando WhatsApp</h1>
                <div class="button">
                    <a class="link" href="<?= ROOT.'home/setSatus/0'?>">Dejar Whatsapp</a>
                </div>
            </div>
        <?php endif;?>
        </div>
    <?php else:?>
        <form action="<?= ROOT.'home/login'?>" method="post">
            <div style="display: flex; flex-direction: column; align-items: center;">
                <label style="margin: 1%;" for="username">Usuario</label>
                <input  type="text" name="username" id="username">
                <label  style="margin: 1%;" for="password">Contraseña</label>
                <input  type="password" name="password" id="password">
                <input  style="margin: 1%;" type="submit" value="Iniciar Sesión">
            </div>
        </form>
    <?php endif;?>
</body>
<?php require_once "_footer.php"?>

