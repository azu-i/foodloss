<?php

$title = "管理者ホーム";
$jsScript ="";

require_once __DIR__."/api/loginAuth.php";
require_once __DIR__."/parts/header.php";


?>


            <div class="noticeOuter">
                <div class="noticeTitile">
                    <span class="userName"></span>
                    <span>様へのお知らせ</span>
                </div>
                <div class="noticeMain">
                    
                </div>


            </div>

            <div class="orderedHistoryOuter">
                <div class="orderedHistoryTitile">
                    <span>受注履歴</span>
                </div>
                <div class="orderedHistoryMain">
                    
                </div>


            </div>



<?php

require_once __DIR__."/parts/footer.php";
?>

