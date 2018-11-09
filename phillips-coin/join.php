<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content=" width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"/>
    <title>Human&Ai</title>

    <link href="https://fonts.googleapis.com/css?family=Bree+Serif|Fira+Sans|Nanum+Gothic|" rel="stylesheet">
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/common.js"></script>
</head>
<body>

  <div class="join_box">
    <input type='text' name="user_id" value="" placeholder="회원아이디" required maxlength="30" minlength="8"  class='user_id' autocomplete="off"/>
    <input type="password" name="password" value="" placeholder="비밀번호" required maxlength="30" minlength="10" class='user_pass'/>
    <input type="password" name="passowrd_again" value="" placeholder="비밀번호 확인" required maxlength="30" minlength="10" class='user_passChk'/>
    <select name="country" id="country" class="country_select">
      <option value="국가">국가</option>
      <option value="대한민국">대한민국</option>
      <option value="일본">일본</option>
      <option value="중국">중국</option>
    </select>
    <input type='tell' name="user_phone" value="" placeholder="휴대폰번호" required maxlength="15" minlength="8"  class='user_id' autocomplete="off"/>
    <input type="button" name="sms_number" vlaue="인증번호요청" class="request_number_bt">
    <input type="text" name="sms_number" vlaue="인증번호" palceholder="인증번호" required maxlength="6" minlength="6" class='request_number'/>
    <input type="email" name="user_email" value="" placeholder="이메일" required maxlength="30" minlength="8"  class='user_email' autocomplete="off"/>
  </div>

  <span>
    회원가입에 필요한 최소한의 정보만 입력 받음으로써 개인정보수집을 최소화하고 편리한 회원가입을 제공합니다.
  </span>

  <input type="submit" name="join_bt" value="회원가입">

  <p>CRYPOCURRNCY PILIPS COIN SINCE 2018</p>


</body>
</html>
