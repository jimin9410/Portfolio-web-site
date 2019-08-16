<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-compatible"content="IE=Edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <meta charset="utf-8">
    <title>롯데</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.rawgit.com/moonspam/NanumSquare/master/nanumsquare.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="imgs/favicon.ico"/>
    <link rel="icon" href="img/favicon.ico" type="imgs/favicon.ico"/>
    <link rel="stylesheet" href="css/style.css?">
    <link rel="stylesheet" href="css/media.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  </head>
  <body>
    <div class="wrap">
       <section id="mainpage_lotte" class="clearfix">

         <?php
           session_start();
           if (isset($_SESSION["userid"])) $userid = $_SESSION["userid"];
           else $userid = "";
           if (isset($_SESSION["username"])) $username = $_SESSION["username"];
           else $username = "";
          ?>

         <div id="header">
          <h1>
           <a href="#" class="logo">
            <img src="img/img_logo.png" alt="lotte">
           </a>
          </h1>

          <div class="navi">
           <ul>
             <li class="navi_li hover on">
               <a href="#" class="dot"></a>
               <div class="nav_name">LOTTE</div>
             </li>
             <li class="navi_li hover">
               <a href="#" class="dot"></a>
                 <div class="nav_name">CSV</div>
             </li>
             <li class="navi_li hover">
               <a href="#" class="dot"></a>
                 <div class="nav_name">BUSINESS</div>
             </li>
             <li class="navi_li hover">
               <a href="#" class="dot"></a>
                <div class="nav_name">ABOUT<br>LOTTE
                </div>
             </li>
           </ul>
          </div>



          <a href="#" class="btn_all" id="gnb">
            <img src="img/btn_allmenu.png" alt="메뉴열기">
          </a>

          <div class="gnb">
            <a href="#" class="gnb_close">
              <img src="img/btn_gnb_close.png" alt="메뉴닫기" id="close_btn">
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
                 <p class="title_gnb" id="title_ir">
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


          <?php
            if (!$userid){
              ?>


            <div class="log">
              <ul>
                <li><a href="login.php">로그인</a></li>
                <li><a href="signin.php">회원가입</a></li>
              </ul>
            </div>

         <?php
       } else {
           $logged = $username. "(".$userid.")님";
          ?>

          <div class="log">
            <ul>
              <li style="color:#fff;"><?=$logged?></li>
              <li><a href="logout.php">로그아웃</a></li>
            </ul>
          </div>
       <?php
     }
        ?>

         </div>

         <div id="video_area">
          <video id="video" autoplay loop muted>
            <source src="img/main_video.mp4" alt="메인동영상">
          </video>

          <div class="mobile_background">
            <img src="img/qqq.jpg" alt="모바일">
          </div>

         </div>


         <div class="contents">
           <div class="life">
             <img src="img/img_tit_logo.png" alt="로고">
           </div>

           <h2 class="tit_section">함께 가는 친구, 롯데</h2>
           <p class=txt_section>우리나라 남성육아휴직자 10명 중 1명이 롯데의 아빠들!<br>저출생 극복, 롯데가 함께 하고 있습니다.</p>
           <a href="#" class="man_btn">남성육아휴직 영상보러가기</a>


             <ul class="category_ul">
               <li class="hand cate_li">
                  <a href="#"><img src="img/bg_csv.png" alt="csv"></a>
                  <p class="category_name">CSS</p>
               </li>

               <li class="connection cate_li">
                  <a href="#"><img src="img/bg_business.png" alt="business"></a>
                  <p class="category_name">Business</p>
               </li>

               <li class="map cate_li">
                  <a href="#"><img src="img/bg_about.png" alt="about lotte" id="map_img"></a>
                  <p class="category_name">About Lotte</p>
               </li>
             </ul>
         </div>

         <span class="scroll">
           <a href="#">
             <img src="img/scroll_down.png" alt="스크롤">
         </a>
       </span>

       </section>

       <section id="csv_page" class="clearfix">

        <div class="contents">
          <div class="life hideme">
            <img src="img/img_tit_logo.png" alt="로고">
          </div>
         <h2 class="tit_section hideme">CSV</h2>
         <p class="txt_section hideme">우리 사회가 더욱 풍요로운 세상이 될 수 있도록<br>
          다양한 형태의 나눔활동을 전개하고 있습니다.</p>


       <ul class="category_ul hideme">
         <li class="female">
           <a href="#"><img src="img/bg_female.png" alt="여성 아동"></a>
           <p class="category_name">여성·아동</p>
         </li>

         <li class="tree">
           <a href="#"><img src="img/bg_nation.png" alt="나라사랑"></a>
           <p class="category_name">나라사랑</p>
         </li>

         <li class="campaign">
           <a href="#"><img src="img/bg_campaign.png" alt="캠페인"></a>
           <p class="category_name">캠페인</p>
         </li>


         <li class="epigyny">
           <a href="#"><img src="img/bg_epigyny.png" alt=""></a>
           <p class="category_name">상생</p>
         </li>


         <li class="global">
           <a href="#"><img src="img/bg_global.png" alt="글로벌"></a>
           <p class="category_name">글로벌</p>
         </li>
       </ul>
      </div>

      <span class="scroll">
        <a>
          <img src="img/scroll_down.png" alt="스크롤">
      </a>
    </span>

       </section>

       <section id="business_page" class="clearfix">
         <div class="contents">
           <div class="life">
             <img src="img/img_tit_logo.png" alt="로고">
           </div>

           <h2 class="tit_section hideme">BUSINESS</h2>
           <p class="txt_section hideme">롯데는 전 세계에 풍요로운 가치를 전하며<br>아시아 TOP10 글로벌 그룹으로 도약하고 있습니다.</p>

           <ul class="category_ul hideme clear">
             <li class="food">
               <a href="#"><img src="img/bg_food.png" alt="식품"></a>
               <p class="category_name">식품</p>
             </li>

             <li class="distribution">
               <a href="#"><img src="img/bg_distribution.png" alt="유통"></a>
               <p class="category_name">유통</p>
             </li>


             <li class="chemi">
               <a href="#"><img src="img/bg_chemi.png" alt="화학 제조"></a>
               <p class="category_name">화학/제조</p>
             </li>


             <li class="tour">
               <a href="#"><img src="img/bg_tour.png" alt="관광 서비스"></a>
               <p class="category_name">서비스</p>
             </li>
           </ul>

           <a href="#" class="business_btn hideme">BUSINESS MAIN</a>
        </div>

        <span class="scroll">
          <a>
            <img src="img/scroll_down.png" alt="스크롤">
        </a>
      </span>
       </section>


       <section class="container">
         <section id="about_lotte_mission_page" class="clearfix bg-sec  mission">
           <div class="about_contents">
             <div class="life">
               <img src="img/img_tit_logo.png" alt="로고">
             </div>

             <h2 class="tit_section">About LOTTE</h2>
             <p class="txt_section">인류의 행복한 삶을 창조하는 글로벌 기업,<br>
           그 원대한 꿈을 향한 롯데의 도전은 계속됩니다.</p>

         <div class="tap_mission">
           <ul class="circle-nav clear">
             <li id="left_btn"><a href="#"><span value="vision">Vision</span></a></li>
             <li id="red_btn" class="scale"><a href="#"><span>Mission</span></a></li>
             <li id="right_btn"><a href="#"><span value="core">Core Value</span></a></li>
           </ul>
         </div>

         <p class="will">사랑과 신뢰를 받는 제품과 서비스를 제공하여<br>
          인류의 풍요로운 삶에 기여한다
        </p>

        <a href="#" class="more_btn">more</a>

         </section>

         <section id="about_lotte_vision_page" class="clearfix bg-sec vision">
           <div class="about_contents">
             <div class="life">
               <img src="img/img_tit_logo.png" alt="로고">
             </div>

             <h2 class="tit_section">About LOTTE</h2>
             <p class=txt_section>인류의 행복한 삶을 창조하는 글로벌 기업,<br>
           그 원대한 꿈을 향한 롯데의 도전은 계속됩니다.</p>

         <div class="tap_mission vision">
           <ul class="circle-nav clear">
             <li id="left_btn"><a href="#"><span value="mission">Mission</span></a></li>
             <li id="red_btn" class="scale"><a href="#"><span>Vision</span></a></li>
             <li id="right_btn"><a href="#"><span value="core">Core Value</span></a></li>
           </ul>
         </div>

         <p class="will">Lifetime Value Creator<br>새로운 50년을 향한 다짐</p>

        <a href="#" class="more_btn">more</a>

          </div>
         </section>

         <section id="about_lotte_core_page" class="clearfix bg-sec core">
           <div class="about_contents">
             <div class="life">
               <img src="img/img_tit_logo.png" alt="로고">
             </div>

             <h2 class="tit_section hideme">About LOTTE</h2>
             <p class="txt_section hideme">인류의 행복한 삶을 창조하는 글로벌 기업,<br>
           그 원대한 꿈을 향한 롯데의 도전은 계속됩니다.</p>

         <div class="tap_mission core hideme">
           <ul class="circle-nav clear">
             <li id="left_btn"><a href="#"><span value="vision">Vision</span></a></li>
             <li id="red_btn" class="scale"><a href="#"><span>Core Value</span></a></li>
             <li id="right_btn"><a href="#"><span value="mission">Mission</span></a></li>
           </ul>
         </div>

         <p class="will hideme">Beyond Customer Expectation<br>  미션과 비전을 달성하기 위해 갖추어야 할 사고와 행동방식의 기준</p>

        <a href="#" class="more_btn hideme">more</a>

          </div>
         </section>
       </section><!-- end of container -->




      <div id="more_info">
         <div class="three_box">
          <ul class="hideme">
            <li class="more_info_box" id="pr">
              <a href="#" class="more_info_little_box">
                 <p>PR</p>
                 <span>아시아를 대표하는 글로벌기업,<br>
                   롯데의 소식
                 </span>
                 <a href="#" class="pointer"></a>
              </a>
            </li>

            <li class="more_info_box" id="ir">
              <a href="#" class="more_info_little_box">
                 <p>IR</p>
                 <span>투명하고 효율적인 경영을 위한<br>롯데의 사업성과
                 </span>
                 <a href="#" class="pointer"></a>
              </a>
            </li>

            <li class="more_info_box" id="careers">
              <a href="#" class="more_info_little_box">
                <p>CAREERS</p>
                <span>함께 가는 친구<br>롯데 신입채용</span>
                <a href="#" class="pointer"></a>
              </a>
            </li>
          </ul>
         </div>


         <div class="mobile_three_box">
           <ul>
             <li class="mobile_info_box" id="mobile_pr">
               <a href="#" class="mobile_info_little_box">
                  <p>PR</p>
                  <span>아시아를 대표하는 글로벌기업,<br>
                    롯데의 소식
                  </span>
                  <a href="#" class="mobile_pointer">
                  <img src="img/arrow2.png" alt="">
                  </a>
               </a>
             </li>

             <li class="mobile_info_box" id="mobile_ir">
               <a href="#" class="mobile_info_little_box">
                  <p>IR</p>
                  <span>투명하고 효율적인 경영을 위한<br>롯데의 사업성과
                  </span>
                  <a href="#" class="mobile_pointer">
                  <img src="img/arrow2.png" alt="">
                  </a>
               </a>
             </li>

             <li class="mobile_info_box" id="mobile_careers">
               <a href="#" class="mobile_info_little_box">
                 <p>CAREERS</p>
                 <span>함께 가는 친구<br>롯데 신입채용</span>
                 <a href="#" class="mobile_pointer">
                 <img src="img/arrow2.png" alt="">
                 </a>
               </a>
             </li>
           </ul>
         </div>
      </div>

       <div id="footer" class="clearfix">
         <div class="footer_contents">
           <div class="footer_menu">
           <a href="#"><img src="img/img_footer_logo.png" class="footer_logo" alt="롯데 로고"></a>
           <ul>
             <li class="personal"><a href="#">개인정보처리방침</a></li>
             <li><a href="#">CS CENTER</a></li>
             <li><a href="#">SITEMAP</a></li>
           </ul>
           </div>

           <div class="footer_sns">
             <ul>
               <li><a href="#">
                 <img src="img/btn_facebook.png" alt="페이스북">
               </a>
             </li>
               <li><a href="#">
                <img src="img/btn_blog.png" alt="블로그">
               </a>
             </li>
               <li><a href="#">
                 <img src="img/btn_youtube.png" alt="유투브">
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
           <button type="button" onclick="window.open($('.footer .select_wrap select').children('option:selected').val());" class="btn_srchPubDt">이동
           </button>
         </div>
      </div>
         <p class="copyright">Copyright © 1996-2017 LOTTE. All Rights reserved.</p>
         </div>
       </div>
     </div>
    </div>



    <script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script type="text/javascript" src="js/main.js?"></script>
  </body>
</html>
