<footer style="margin-top: 55px;">
    <div>
        <p style="margin-bottom: 9px">Hecho con ❤️‍</p>
        <p style="margin-bottom: 9px">por Alberto Pérez Fructuoso</p>
    </div>
    <div>
        <?php if(count($_COOKIE) != 0):?>
            <p>Has iniciado sesión como: <?=$_COOKIE['userSession']?></p>
            <a href="<?= ROOT.'home/removeCookies'?>">Cerrar Sesión</a>
        <?php endif;?>
    </div>
    <div>
        <p><strong>Status . . . </strong> OK</p>
        <p>----------------------------------------</p>
        <p><strong>Version . . . </strong> Alpha - v_18072021</p>
    </div>
</footer>
</html>
