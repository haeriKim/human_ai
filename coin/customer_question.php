<!DOCTYPE html>
<html lang="ko" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content=" width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"/>
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script><!--//배너 슬라이더-->
    <title>CCE</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/question.css">
    <link rel="stylesheet" href="css/sub_menu.css">
    <link rel="stylesheet" href="css/popup.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/common.js"></script>
    <script src="js/fouc.js"></script>
</head>
<body>
    <!-- wrap -->
    <div id="wrap">
        <!-- container -->
        <div id="container">

            <!-- nav_wrap -->
            <?php include "nav.php";?>
            <!-- nav_wrap End-->

            <!-- header_wrap -->
            <?php include "header.php";?>
            <!-- header_wrap End-->

            <!-- content_wrap -->
            <div class="content_wrap">
                <!-- main_content -->
                <div class="content guide_OTP_wrap con_1250">
                  <!--content_nav -->
                  <div class="content_nav">
                    <h4>고객지원</h4>
                    <ul>
                        <li><a href="" title="FAQ">FAQ</a></li>
                        <li class='on'>
                          <a href="#" title="1:1 문의" class='more_menu'>1:1 문의</a>
                          <dl class="nav_dropdown question_dd on">
                              <dt class="active"><a href="" title="1:1 문의하기">1:1 문의하기</a></dt>
                              <dt><a href="customer_questionList.php" title="문의내역">문의내역</a></dt>
                          </dl>
                        </li>
                        <li>
                          <a href="#" title="인증변경안내" class='more_menu'>인증변경안내</a>
                          <dl class="nav_dropdown changeA_dd off">
                              <dt><a href="guide_security.php" title="보안비밀번호 초기화">보안비밀번호 초기화</a></dt>
                              <dt><a href="guide_account.php" title="계좌 변경">계좌변경</a></dt>
                              <dt><a href="guide_OTP.php" title="OTP 변경">OTP 변경</a></dt>
                          </dl>
                        </li>
                        <li><a href="fee_table.php" title="수수료 안내">수수료 안내</a></li>
                    </ul>
                  </div><!-- content_nav End-->
                  <!-- question_area -->
                  <div class="box question_area">
                    <h3 class="title">1:1 문의</h3>
                    <!-- question_inner -->
                    <div class="question_inner mypage_content">
                      <h4>1:1 문의하기</h4>
                        <p class="question_text">- 문의 하신 내용은 관리자 확인 후 답변 드리겠습니다.</p>
                        <form enctype="multipart/form-data">
                          <table class="question_table">
                            <tr>
                              <th>질문유형</th>
                                <td>
                                  <select name="문의유형" id="question_select">
                                    <option value="문의유형을 선택하세요" disabled selected="selected">문의유형을 선택하세요.</option>
                                    <option value="계정관련">계정관련</option>
                                    <option value="거래관련">거래관련</option>
                                    <option value="입출금관련">입출금관련</option>
                                    <option value="해킹관련">해킹관련</option>
                                    <option value="기타문의">기타문의</option>
                                  </select>
                                </td>
                            </tr>

                            <tr>
                              <th>제목</th>
                                <td>
                                  <input type="text" placeholder="제목을 입력하세요." class="question_title">
                                </td>
                            </tr>

                            <tr>
                              <th>내용</th>
                                <td>
                                  <textarea name="" placeholder="문의 내용을 입력하세요." class="question_story"></textarea>
                                </td>
                            </tr>

                            <tr>
                              <th>
                                <label for="file">첨부파일</label>
                              </th>

                              <td class="file_inner">

                                    <div class="filebox">
                                      <input type="text" id="fileName" class="file_input_textbox" readonly >
                                      <div class="file_input_div">
                                        <img src="img/upload.png" alt="파일첨부"/><span class="file_choice">파일선택</span>
                                          <input type="file" id="ex_filename" class="upload_hidden" multiple="multiple" onchange="javascript: document.getElementById('fileName').value = this.value"/>
                                          <a class="del_attach" onclick="delAttach(this.form)">x</a>
                                      </div>
                                    </div>

                              </td>
                            </tr>

                          </table>
                        </form>

                        <div class="question_button">
                          <input type="reset" name="취소" value="취소" class="question_cancel"/>
                          <input type="submit" name="submit" value="보내기" class='send_btn'/>
                        </div>

                    </div><!-- question_inner End-->
                  </div><!--question_area End-->

                </div><!-- question_wrap End-->
            </div><!-- content_wrap End-->

            <!-- footer_wrap -->
            <?php include "footer.php";?>
            <!-- footer_wrap End-->

            <!--sub_menu-->
            <?php include "sub_menu.php";?>
            <!--sub_menu End-->

        </div><!-- container End -->
    </div><!-- wrap End -->

    <div id="full">
                <!-- full_content -->
                <div id="popupbox" class='box popup question_box'>
                  <div class="full_inner">
                    <h2>1:1 문의하기</h2>
                    <div class="popupbox_text">
                      <p>작성한 1:1문의글을 저장하시겠습니까?</p>
                    </div>
                    <div class="cancel_or_apply">
                      <input type="button" name="" value="취소" class="cancel_btn2">
                      <input type="button" name="" value="저장" class="agree_btn question_save_btn">
                    </div>

                  </div>
                </div><!-- full_content End-->

                <!-- full_content -->
                <div id="popupbox" class='box popup question_box2'>
                  <div class="full_inner">
                    <h2>1:1 문의하기</h2>
                    <div class="popupbox_text">
                      <p>1:1 문의가 등록되었습니다. 관리자 확인 후 최대한 <br/>
                         빠른 시일 내에 답변드리도록 하겠습니다.</p>
                    </div>
                    <div class="cancel_or_apply">
                      <input type="button" name="" value="확인" onclick="location.href='customer_question.php'" class="cancel_btn_ok">
                      <input type="button" name="" value="문의내역 보기" onclick="location.href='customer_questionList.php'" class="question_ok">
                    </div>

                  </div>
                </div><!-- full_content End-->

          <div id="shadow"></div>

    </div>

    <div id="full2">
      <!-- full_content -->
      <div id="popupbox" class='box popup question_box3'>
        <div class="full_inner">
          <h2>1:1 문의하기</h2>
          <div class="popupbox_text">
            <p>작성하신 내용이 모두 삭제됩니다.<br/>
                                 계속 진행하시겠습니까?</p>
          </div>
          <div class="cancel_or_apply">
            <input type="button" name="" value="취소" class="cancel_btn3">
            <input type="button" name="" value="확인" onclick="location.href='customer_question.php'" class="agree_btn question_ok2">
          </div>

        </div>
      </div><!-- full_content End-->
      <div id="shadow"></div>

    </div>

</body>
</html>
