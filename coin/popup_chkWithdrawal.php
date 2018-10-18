<!DOCTYPE html>
<html lang="ko" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content=" width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"/>
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script><!--//배너 슬라이더-->
    <title>The Alls</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/popup.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/common.js"></script>
    <script src="js/fouc.js"></script>
</head>
<body>
    <div id="full">
            <!-- full_content -->
            <div id="popupbox" class='box popup'>
                <div class="full_inner">
                    <form class="" action="#" method="post">
                        <h2>출금신청</h2>
                        <p><b class='check_your_money_again'><span class="withdrawal_price">1,000,000 </span> KRW</b>를</p>
                        <table class='left_thick_table'>
                            <tbody>
                                <tr>
                                    <th>은행</th>
                                    <td>○○은행</td>
                                </tr>
                                <tr>
                                    <th>계좌번호</th>
                                    <td>1234-567-8910-11-123</td>
                                </tr>
                                <tr>
                                    <th>예금주</th>
                                    <td>가나다</td>
                                </tr>
                            </tbody>
                        </table>
                        <p>현재 계좌에서 출금하시겠습니까?</p>
                        <div class="cancel_or_apply">
                            <input type="reset" name="" value="취소" class='cancel_btn'>
                            <input type="submit" name="" value="출금신청" class='agree_btn' onclick="location.href='mywallet_output_complete_KRW.php'">
                        </div>
                    </form>
                </div>
            </div><!-- full_content End-->
            <div id="shadow"></div>
    </div>  <!-- full End-->
</body>
</html>
