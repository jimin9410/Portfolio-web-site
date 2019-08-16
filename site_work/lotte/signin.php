<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-compatible"content="IE=Edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <title>회원가입 / LOTTE</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.rawgit.com/moonspam/NanumSquare/master/nanumsquare.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="imgs/favicon.ico"/>
    <link rel="icon" href="img/favicon.ico" type="imgs/favicon.ico"/>
    <link rel="stylesheet" href="css/signin.css">
  </head>
  <body>
    <div class="wrap">
      <section id="header" class="sticky clearfix">
       <div class="white_header">
         <h1>
          <a href="index.php">
            <img src="img/img_logo.png" alt="로고">
          </a>

          <a href="#" class="btn_all" id="gnb">
            <img src="img/btn_allmenu.png" alt="메뉴열기">
          </a>

          <div class="gnb">

            <a href="#" class="gnb_close">
              <img src="img/btn_gnb_close.png" alt="메뉴닫기">
            </a>


             <div class="inner">
               <div class="inner_wrap">
                 <p class="title_gnb">
                   <a href="#">CSV</a>
                 </p>
                 <ul>
                   <li><a href="female.php">여성·아동</a></li>
                   <li><a href="#">나라사랑</a></li>
                   <li><a href="#">캠페인</a></li>
                   <li><a href="#">상생</a></li>
                   <li><a href="#">글로벌</a></li>
                 </ul>
               </div>

               <div class="inner_wrap">
                 <p class="title_gnb">
                   <a href="#">BUSINESS</a>
                 </p>
                 <ul>
                   <li><a href="#">식품</a></li>
                   <li><a href="#">유통</a></li>
                   <li><a href="#">화학/건설/제조</a></li>
                   <li><a href="#">관광/서비스/금융</a></li>
                 </ul>
               </div>


               <div class="inner_wrap">
                 <p class="title_gnb">
                   <a href="#">ABOUT LOTTE</a>
                 </p>
                 <ul>
                   <li><a href="#">미션</a></li>
                   <li><a href="#">비전</a></li>
                   <li><a href="#">핵심가치</a></li>
                   <li><a href="#">CEO</a></li>
                   <li><a href="#">기업문화</a></li>
                   <li><a href="#">역사관</a></li>
                   <li><a href="#">CI</a></li>
                 </ul>
               </div>

               <div class="inner_wrap">
                 <p class="title_gnb">
                   <a href="#">COMPLIANCE</a>
                 </p>
                 <ul>
                   <li><a href="#">롯데의 컴플라이언스</a></li>
                   <li><a href="#">컴플라이언스 위원회</a></li>
                   <li><a href="#">행동강령</a></li>
                 </ul>
               </div>

               <div class="inner_wrap">
                 <p class="title_gnb">
                   <a href="#">PR</a>
                 </p>
                 <ul>
                   <li><a href="#">뉴스</a></li>
                   <li><a href="#">영상</a></li>
                   <li><a href="#">SNS</a></li>
                   <li><a href="#">사보</a></li>
                   <li><a href="#">브로슈어</a></li>
                 </ul>
               </div>

               <div class="inner_wrap ir">
                 <p class="title_gnb">
                   <a href="#">IR</a>
                 </p>
                 <ul class="first_ul">
                   <li><a href="#">지배구조</a></li>
                   <li><a href="#">주주정책</a></li>
                   <li><a href="#">정관</a></li>
                   <li><a href="#">공시</a></li>
                   <li><a href="#">공고</a></li>
                   <li><a href="#">IR자료</a></li>
                 </ul>

                 <ul class="second_ul">
                   <li><a href="#">주가정보</a></li>
                   <li><a href="#">재무정보</a></li>
                   <li><a href="#">애널리스트 리포트</a></li>
                   <li><a href="#">Contact IR</a></li>
                 </ul>
               </div>

               <div class="inner_wrap">
                 <p class="title_gnb">
                   <a href="#">CAREERS</a>
                 </p>
                 <ul>
                   <li><a href="#">인재상</a></li>
                   <li><a href="#">채용전형</a></li>
                   <li><a href="#">인사제도</a></li>
                 </ul>
               </div>

               <div class="inner_wrap">
                 <p class="title_gnb">
                   <a href="#">CS CENTER</a>
                 </p>
                 <ul>
                   <li><a href="#">문의하기</a></li>
                   <li><a href="#">오시는 길</a></li>
                 </ul>
               </div>
             </div>
          </div>
         </h1>
         </div>
       </section>


       <section id="signin_main" class="clearfix">
        <div class="signin_wrap">
         <div class="tit_box">
           <p class="big_title">회원가입</p>
           <span class="red_line"></span>
           <span class="we_are">L.POINT 통합회원은 롯데그룹사의 통합회원제입니다.</span>
         </div>

         <div class="white_box">
           <form name="member_form" action="member_insert.php" method="post">
             <div class="fill_box">

              <div class="fill_id">
                <label for="memID" class="label1">아이디</label>
                <input type="text" name="fill_id" placeholder="3~15자의 영문/숫자를 조합하여 입력" class="abc" id="memID" value="">
                <div>
                  <b class="duplicate_btn" onclick="check_id()">중복<br>확인</b>


                </div>
              </div>

              <div class="fill_password">
                <label for="memPASSWORD">비밀번호</label>
                <input type="text" name="fill_password" placeholder="3~15자의 영문/숫자를 조합하여 입력" class="abc">
              </div>

              <div class="fill_password_confirm">
                <label for="memPASSWORD">확인</label>
                <input type="text" name="fill_password_confirm">
              </div>

              <div class="fill_name">
                <label for="memNAME">성명</label>
                <input type="text" name="fill_name" placeholder="한글 15자, 영문 30자까지 가능합니다." class="abc">
              </div>

              <div class="fill_email">
                <label for="memEMAIL">이메일</label>
                <input type="text" name="fill_email1" class="email_box_1">
                <div class="gol">@</div>
                <input type="text" name="fill_email2" class="email_box_2">
              </div>







               <div class="final_submit" onclick="check_input()">
                 회원가입
               </div>


            </div>
          </form>
         </div>
        </div>
       </section>



       <section id="footer" class="clearfix">
         <div class="footer_contents">




           <div class="footer_menu">
           <ul>
             <li class="personal"><a href="#">개인정보처리방침</a></li>
             <li><a href="#">CS CENTER</a></li>
             <li><a href="#">SITEMAP</a></li>
           </ul>
           </div>

           <div class="footer_sns">
             <ul class="sns_ul">
               <li><a href="#">
                 <img src="img/btn_facebook.png" alt="페이스북">
               </a>
             </li>
               <li><a href="#">
                <img src="img/btn_blog.png" alt="블로그">
               </a>
             </li>
               <li><a href="#">
                 <img src="img/btn_youtube.png" alt="유튜브">
               </a>
             </li>
             </ul>

       <div id="family_site">
           <select name="" id="search" title="패밀리 사이트">
             <option >LOTTE Family</option>
             <option>롯데제과</option>
             <option>롯데칠성음료(음료BG)</option>
             <option>롯데칠성음료(주류BG)</option>
             <option>롯데푸드</option>
             <option>롯데백화점</option>
             <option>롯데마트</option>
             <option>롯데슈퍼</option>
             <option>코리아세븐</option>
             <option>롯데하이마트</option>
             <option>롯데홈쇼핑</option>
             <option>롯데쇼핑e커머스</option>
             <option>롯데롭스</option>
             <option>롯데시네마</option>
             <option>FRL코리아</option>
             <option>롯데건설</option>
             <option>롯데건설 CM사업본부</option>
             <option>롯데글로벌로지스</option>
             <option>롯데기공</option>
             <option>롯데렌탈</option>
             <option>롯데멤버스</option>
             <option>롯데면세점</option>
             <option>롯데면세점부산</option>
             <option>롯데면세점제주</option>
             <option>롯데물산</option>
             <option>롯데뮤지엄</option>
             <option>롯데비피화학</option>
             <option>롯데사회공헌사이트</option>
             <option>롯데상사</option>
             <option>롯데손해보험</option>
             <option>롯데스카이힐C.C.</option>
             <option>롯데아사히주류</option>
             <option>롯데알미늄</option>
             <option>롯데엠시시</option>
             <option>롯데월드</option>
             <option>롯데유통사업본부</option>
             <option>롯데인재개발원</option>
             <option>롯데자산개발</option>
             <option>롯데자이언츠</option>
             <option>롯데정밀화학</option>
             <option>롯데정보통신</option>
             <option>롯데제이티비</option>
             <option>롯데중앙연구소</option>
             <option>롯데지알에스</option>
             <option>롯데채용사이트</option>
             <option>롯데첨단소재</option>
             <option>롯데카드</option>
             <option>롯데캐피탈</option>
             <option>롯데케미칼</option>
             <option>롯데콘서트홀</option>
             <option>롯데호텔</option>
             <option>대홍기획</option>
             <option>마이비</option>
             <option>부산롯데호텔</option>
             <option>이비카드</option>
             <option>캐논코리아비즈니스솔루션</option>
             <option>한국후지필름</option>
             <option>현대정보기술</option>
           </select>
         </div>
         <button type="button" onclick="window.open($('.footer .select_wrap select').children('option:selected').val());" class="btn_srchPubDt">이동</button>
      </div>

      <p class="copyright">Copyright © 1996-2017 LOTTE. All Rights reserved.</p>

         </div>
       </div>
       </section>

    </div>

    <script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/signin.js"></script>
    <script>

        function check_input()
        {

          if(!document.member_form.fill_id.value){
            alert("아이디를 입력하세요!");
            document.member_form.fill_id.focus();
            return;
          }

          if(!document.member_form.fill_password.value){
            alert("비밀번호를 입력하세요!");
            document.member_form.fill_password.focus();
            return;
           }

           if(!document.member_form.fill_password_confirm.value){
             alert("비밀번호 확인을 입력하세요!");
             document.member_form.fill_password_confirm.focus();
             return;
           }

           if(!document.member_form.fill_name.value){
             alert("성명을 입력하세요!");
             document.member_form.fill_name.focus();
             return;
           }

           if(!document.member_form.fill_email1.value){
             alert("이메일 주소를 입력하세요!");
             document.member_form.fill_email1.focus();
             return;
           }

           if(!document.member_form.fill_email2.value){
             alert("이메일 주소를 입력하세요!");
             document.member_form.fill_email2.focus();
             return;
           }

          if(document.member_form.fill_password.value !=
             document.member_form.fill_password_confirm.value){
               alert("비밀번호와 비밀번호 확인이 일치하지 않습니다.")
               document.member_form.fill_password.focus();
               document.member_form.fill_password_confirm.focus();
               return;
             }

             document.member_form.submit();



      }

      function reset_form(){
        document.member_form.fill_id.value = "";
        document.member_form.fill_password.value = "";
        document.member_form.fill_password.value = "";
        document.member_form.fill_password_confirm.value = "";
        document.member_form.fill_email.value = "";
        document.member_form.fill_id.focus();
        return;
      }

       function check_id(){

           // window.open("member_check_id.php?id=" + document.member_form.fill_id.value, "IDcheck", "left=700, top=300, height=200, width=200, scorllbars=no, resizable=yes");
           var idValue=document.member_form.fill_id.value;
           if(idValue==""){
             alert("아이디를 입력하세요!");
             return;
           }

           location.href="join_chk.php?id=" + document.member_form.fill_id.value;

      }





    </script>
  </body>
</html>
