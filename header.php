<?php
    include '../lib/inc_head.php';
?>

<nav>
    <a href="index.html"><img src="../img/logo.png"></a>
    <a href="kospi.html" id="kospi" class="kospi">코스피</a>
    <a href="samsung.html" id="samsung" class="samsung">삼성전자</a>
    <a href="community.html" id="community" class="community">커뮤니티</a>
    <?php if ($user_login) { ?>
        <div id="username" class="username"><? echo $_SESSION['name'] ?></div>
        <div id="logout" class="logout"><a href="../lib/logout.php"><input type="button" value="Logout"></a></div>
    <?php } else { ?>
        <a href="login.html" id="login" class="login">로그인</a>
        <a href="register_form.html" id="register" class="register">회원가입</a>
    <?php } ?>
</nav>