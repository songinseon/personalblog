<?php 
$title="portfolio";
$pageCode="pf";
?>

<?php 
require_once "head.php";
?>

<style>
  html,
  body {
    position: relative;
    height: 100%;
  }

  body {

    font-size: 14px;
    color: #000;
    margin: 0;
    padding: 0;
  }

  .swiper-container {
    width: 100%;
    height: 100%;
  }

  .swiper-slide {
    text-align: center;
    font-size: 18px;
    border-bottom: 0.1px solid lightgray;
    box-shadow: 5px 5px 5px lightgray;

    /* Center slide text vertically */
    display: -webkit-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    -webkit-justify-content: center;
    justify-content: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    -webkit-align-items: center;
    align-items: center;
  }

  .swiper-slide img {
    display: block;
    width: 100%;
    height: 100%;
    object-fit: cover;
  }
</style>

<div>

  <div class="flex justify-center w-full mt-24">
    <img src="./img/portfoliotitle.png" alt="">
  </div>

  <section class="relative my-16 pf-slider">

    <div class="absolute swiper-button-next">
      <img src="./img/arrowright.png" alt="">
    </div>

    <div class="container overflow-hidden h-screen mx-auto swiper-container mySwiper max-w-7xl">
      <div class="swiper-wrapper">

        <div class="flex flex-col swiper-slide">
          <div>
            <div class="bg"></div>
            <div class="text-white addi whitespace-nowrap">
              <div>
                <div class="text-2xl">PROJECT</div>
                <div class="my-2 text-base font-light">예스24 티켓 사이트 리디자인</div>
              </div>
              <div class="my-5">
                <div class="text-2xl">PARTICIPATION</div>
                <div class="my-2 text-base font-light ">기획 100%, 디자인 100%</div>
              </div>
              <div class="mt-7 font-normal text-xs">
                <a class="p-2" href="https://notefolio.net/designsun/248859" target="blank">기획</a>
                <a class="p-2 ml-2" href="https://i.postimg.cc/NFmfRwKY/2.png" data-lightbox="image-1" data-title="예스24 사이트 리디자인">디자인</a>
              </div>
            </div>
            <img src="./img/pf-1.png" alt="">
          </div>
          <div class="my-8">
            <div class="text-2xl">사이트 DESIGN</div>
            <a class="my-2 text-base" href="https://i.postimg.cc/NFmfRwKY/2.png" data-lightbox="image-1" data-title="예스24 사이트 리디자인">VIEW MORE</a>
          </div>
        </div>

        <div class="flex flex-col swiper-slide">
          <div>
            <div class="bg"></div>
            <div class="text-white addi whitespace-nowrap">
              <div>
                <div class="text-2xl">PROJECT</div>
                <div class="my-2 text-base font-light">일기APP '데이브러쉬' UI/UX</div>
              </div>
              <div class="my-5">
                <div class="text-2xl">PARTICIPATION</div>
                <div class="my-2 text-base font-light ">기획 100%, 디자인 100%, 퍼블리싱100%</div>
              </div>
              <div class="mt-7 font-normal text-xs">
                <a class="p-2" href="https://notefolio.net/designsun/257872" target="blank">기획</a>
                <a class="p-2 ml-2" href="https://www.figma.com/proto/Tug2hGnQfWUUMyfXSTbqjN/DAY-BRUSH---1%EC%A1%B0(%EA%B9%80%EB%AF%BC%EC%A7%80%2C-%EC%86%A1%EC%9D%B8%EC%84%A0)%2C-https%3A%2F%2Fto2.kr%2FcPL?page-id=117%3A453&node-id=129%3A1466&viewport=287%2C617%2C0.5898043513298035&scaling=min-zoom" target="blank">디자인</a>
                <a class="p-2 ml-2" href="https://songinseon.github.io/project/pf/work/" target="blank">퍼블리싱</a>
              </div>
            </div>
            <img src="./img/pf-2.png" alt="">
          </div>
          <div class="my-8">
            <div class="text-2xl">APP UI/UX</div>
            <a class="my-2 text-base" href="https://songinseon.github.io/project/pf/work/" target="blank">VIEW MORE</a>
          </div>
        </div>

        <div class="flex flex-col swiper-slide">
          <div>
            <div class="bg"></div>
            <div class="text-white addi whitespace-nowrap">
              <div>
                <div class="text-2xl">PROJECT</div>
                <div class="my-2 text-base font-light">블루콤 데시벨 퍼블리싱</div>
              </div>
              <div class="my-5">
                <div class="text-2xl">PARTICIPATION</div>
                <div class="my-2 text-base font-light ">퍼블리싱 100%</div>
              </div>
              <div class="mt-7 font-normal text-xs">
                <a class="p-2 ml-2" href="https://songinseon.github.io/sitepublishing-1/" target="blank">퍼블리싱</a>
              </div>
            </div>
            <img src="./img/pf-3.png" alt="">
          </div>
          <div class="my-8">
            <div class="text-2xl">웹사이트 PUBLISHING</div>
            <a class="my-2 text-base" href="https://songinseon.github.io/sitepublishing-1/" target="blank">VIEW MORE</a>
          </div>
        </div>

        <div class="flex flex-col swiper-slide">
          <div>
            <div class="bg"></div>
            <div class="text-white addi whitespace-nowrap">
              <div>
                <div class="text-2xl">PROJECT</div>
                <div class="my-2 text-base font-light">개인블로그 디자인</div>
              </div>
              <div class="my-5">
                <div class="text-2xl">PARTICIPATION</div>
                <div class="my-2 text-base font-light ">기획100%, 디자인 100%, 퍼블리싱 100%</div>
              </div>
              <div class="mt-7 font-normal text-xs">
                <a class="p-2" href="https://codepen.io/songinseon/full/OJmwmNY" target="blank">기획</a>
                <a class="p-2 ml-2" href="https://www.figma.com/file/mluywZpokG45gLjARK0NZk/PERSONAL-WEB-BLOG" target="blank">디자인</a>
                <a class="p-2 ml-2" href="https://songinseon.github.io/designBlog/process.html">퍼블리싱</a>
              </div>
            </div>
            <img src="./img/pf-4.png" alt="">
          </div>
          <div class="my-8">
            <div class="text-2xl">블로그 PROCESS</div>
            <a class="my-2 text-base" href="https://songinseon.github.io/designBlog/process.html">VIEW MORE</a>
          </div>
        </div>

        <div class="flex flex-col swiper-slide">
          <div>
            <div class="bg"></div>
            <div class="text-white addi whitespace-nowrap">
              <div>
                <div class="text-2xl">PROJECT</div>
                <div class="my-2 text-base font-light">빽다방사이트 퍼블리싱</div>
              </div>
              <div class="my-5">
                <div class="text-2xl">PARTICIPATION</div>
                <div class="my-2 text-base font-light ">퍼블리싱 100%</div>
              </div>
              <div class="mt-7 font-normal text-xs">
                <a class="p-2" href="https://songinseon.github.io/sitepublishing-2/" target="blank">퍼블리싱</a>
              </div>
            </div>
            <img src="./img/pf-5.png" alt="">
          </div>
          <div class="my-8">
            <div class="text-2xl">웹사이트 PUBLISHING</div>
            <a class="my-2 text-base" href="https://songinseon.github.io/sitepublishing-2/" target="blank">VIEW MORE</a>
          </div>
        </div>

        <div class="flex flex-col swiper-slide">
          <div>
            <div class="bg"></div>
            <div class="text-white addi whitespace-nowrap">
              <div>
                <div class="text-2xl">PROJECT</div>
                <div class="my-2 text-base font-light">노브랜드버거 리디자인</div>
              </div>
              <div class="my-5">
                <div class="text-2xl">PARTICIPATION</div>
                <div class="my-2 text-base font-light ">디자인 50%</div>
              </div>
              <div class="mt-7 font-normal text-xs">
                <a class="p-2" href="https://i.postimg.cc/j50g4ZrH/1.png" data-lightbox="image-2" data-title="노브랜드버거 사이트 리디자인">디자인</a>
              </div>
            </div>
            <img src="./img/pf-6.png" alt="">
          </div>
          <div class="my-8">
            <div class="text-2xl">사이트 DESIGN</div>
            <a class="my-2 text-base" href="https://i.postimg.cc/j50g4ZrH/1.png" data-lightbox="image-2" data-title="노브랜드버거 사이트 리디자인">VIEW MORE</a>
          </div>
        </div>

        <div class="flex flex-col swiper-slide">
          <div>
            <div class="bg"></div>
            <div class="text-white addi whitespace-nowrap">
              <div>
                <div class="text-2xl">PROJECT</div>
                <div class="my-2 text-base font-light">VAROH 사이트 퍼블리싱</div>
              </div>
              <div class="my-5">
                <div class="text-2xl">PARTICIPATION</div>
                <div class="my-2 text-base font-light ">퍼블리싱 100%</div>
              </div>
              <div class="mt-7 font-normal text-xs">
                <a class="p-2" href="https://github.com/songinseon/sitepublishing-3" target="blank">퍼블리싱</a>
              </div>
            </div>
            <img src="./img/pf-7.png" alt="">
          </div>
          <div class="my-8">
            <div class="text-2xl">웹사이트 PUBLISHING</div>
            <a class="my-2 text-base" href="https://github.com/songinseon/sitepublishing-3" target="blank">VIEW MORE</a>
          </div>
        </div>
      </div>
    </div>

    <div class="absolute swiper-button-prev">
      <img src="./img/arrowleft.png" alt="">
    </div>

</div>


</section>

</div>

</body>

</html>