<!doctype html>
<html lang="ko" class="no-js">
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no,initial-scale=1">
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
           <div id="popupbox" class='box popup email_pop'>
               <div class="full_inner">
                   <h2>입출금 계좌 삭제</h2>
                   <div class="popupbox_text">
                     <p class="account_text">아래 계좌를 정말 삭제하시겠습니까?</p>
                     <p class="account_text">계좌 등록은 한 달에 최대 <b class="account_count">3회</b>까지만 가능합니다. <strong>(3회 남음)</strong></p>

                    <!--  <p class="popup_title">은행명</p>
                      <p class="bankName readonly">국민은행</p>
                      <p class="popup_title">계좌번호</p>
                      <p class="user_accountotp user_otpNum readonly">12**********83</p>
                      <p class="popup_title">예금주</p>
                      <p class="user_name readonly">가나다</p> -->

                      <table class="account_delete_table">
                        <colgroup>
                          <col width="20%">
                          <col width="60%">
                        </colgroup>
                        <tr>
                          <th>은행명</th>
                            <td>
                              <p class="bankName readonly">국민은행</p>
                            </td>
                        </tr>

                        <tr>
                          <th>계좌번호</th>
                            <td>
                              <p class="user_accountotp user_otpNum readonly">12**********83</p>
                            </td>
                        </tr>

                        <tr>
                          <th>예금주</th>
                            <td>
                              <p class="user_name readonly">가나다</p>
                            </td>
                        </tr>

                      </table>

                   </div>
                   <div class="btn_area">
                     <input type="button" name="" value="취소" class="popupbt nextok">
                     <input type="submit" name="" value="삭제" class="popupbt ok">
                   </div>
               </div>
           </div><!-- full_content End-->
           <div id="shadow"></div>
   </div>  <!-- full End-->
 </body>
 </html>
