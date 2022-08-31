<?php
require_once __DIR__."/../class/adminUser.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/src/css/common.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="/src/admin/js/common.js"></script>
    <script src="https://ajaxzip3.github.io/ajaxzip3.js"></script>
    <?=$jsScript?>

    <title><?=$title?></title>
</head>
<body>
    <header>
        <figure>
            <a href="/src/admin/home.php">
                <img src="/src/img/headerIcon.png" alt="" class="mobileHide">

            </a>
        </figure>
        <div class="headerLogoutButtonOuter">
            <button class="headerLogoutButton js-headerLogoutButton hideMobile">ログアウト</button>
        </div>

        <div class="hamburgerMenuOuter hidePc">
            <input id="drawerInput" class="drawerHidden" type="checkbox">
            <label for="drawerInput" class="drawerOpen"><span></span></label>
            
        </div>
    </header>
    <div class="wrapperContents">

        <nav class="globalNavi">

            <div class="userProfile">
                <p class="userName">
                    <span class="name"><?= $var["name"] ?></span>
                    <span class="honorificTitle">様</span>
                    <button type="button" name="button" class="logout hidePc">ログアウト</button>
                </p>
            </div>
            <ul id="naviList" class="naviList">
                <li class="toppage">
                    <ul class="naviSublist">
                        <li id="toppageBack" class="naviItem toppageBack">
                            <a href="/src/admin/home.php" class="toppageBackLink">会員メニュートップ</a>
                        </li>
                    </ul>
                </li>
                <li class="otherSetting">
                    <ul class="naviSublist">
                        <li class="naviItem"><a href="/src/admin/userEdit.php" class="userEditLink">登録情報の変更</a></li>
                        <li class="naviItem"><a href="/src/admin/passwordEdit.php" class="passwordEditLink">パスワード変更</a></li>
                        <li class="naviItem"><a href="" class="orderedLink">受注履歴</a></li>
                    </ul>
                </li>
                <li class="prodoctsSetting">
                    <span>商品の登録・編集</span>
                    <ul class="naviSublist">
                        <li class="naviItem"><a href="/src/admin/productsList.php" class="productsLink">商品一覧</a></li>
                        <li class="naviItem"><a href="/src/admin/productsRegist.php" class="productsLink">商品登録</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <main>

<body>

