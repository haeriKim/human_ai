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
            <div id="popupbox" class='box popup coin_withdrawal_box'>
                <div class="full_inner">
                    <form class="" action="#" method="post">
                        <h2>출금신청</h2>
                        <p><b class='check_your_money_again'><span class="withdrawal_price">20 </span> BTC</b>를</p>
                        <table class='left_thick_table'>
                            <tbody>
                                <tr>
                                    <th>나의 비트코인 주소</th>
                                    <td>
                                        <span>3BBd8dUrMTRypA4kbTXTCH7tkP6QsPHsHtaQ56p</span>
                                        <div class='plus_more_btn plus_more_btn_01'>
                                            <img src="img/plus.png" alt="자세히보기">
                                            <div class='more_coin_address_01'>3BBd8dUrMTRypA4kbTXTCH7tkP6QsPHsHtaQ56p</div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th>비트코인 출금 주소</th>
                                    <td>
                                        <span>233SdifjKKajsfjadsEasdj123KWQEJfsakjsadja</span>
                                        <div class='plus_more_btn plus_more_btn_02'>
                                            <img src="img/plus.png" alt="자세히보기">
                                            <div class='more_coin_address_02'>233SdifjKKajsfjadsEasdj123KWQEJfsakjsadja</div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <p>현재 비트코인 지갑에서 출금하시겠습니까?</p>
                        <div class="cancel_or_apply">
                            <input type="button" name="cancel" value="취소" class='cancel_btn'>
                            <input type="button" name="submit" value="출금신청" class='agree_btn' onclick="location.href='mywallet_output_complete_bitcoin.php'">
                        </div>
                    </form>
                </div>
            </div><!-- full_content End-->
            <div id="shadow"></div>
    </div>  <!-- full End-->
</body>
</html>
