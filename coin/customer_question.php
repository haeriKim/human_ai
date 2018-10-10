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
                              <dt><a href="question_02.php" title="문의내역 확인하기">문의내역 확인하기</a></dt>
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
                                <form enctype="multipart/form-data">
                                  <div class="filebox">
                                    <input type="upload_name" value="파일선택" disabled="disabled">

                                    <label for="ex_filename"><img src="img/upload2.png" alt="파일추가버튼"></label>
                                    <input type="file" id="ex_filename" class="upload_hidden">
                                  </div>
                                </form>
                            </td>
                          </tr>

                        </table>


                        <input type="submit" name="submit" value="보내기" class='send_btn'/>
                        <input type="button" name="취소" value="취소" class="cancel_btn"/>

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

</body>
</html>
