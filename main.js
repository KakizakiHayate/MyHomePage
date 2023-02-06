$(function() {
  //  スクロールのたびに下のコードが行われる。windowとは、ブラウザ上で確認できるもの
  $(window).scroll(function() {
    //fadeinと書かれたクラスに.eachで以下のことを(繰り返し)実行する。
    $('.fadein').each(function () {
      //↓html要素の位置を取得する。thisは。pを指す。offsetは、どこ（left,top,右と下は×）を基準にして位置を表示しているか。html要素の位置取得をする。
      const targetElement = $(this).offset().top;
      //↓どのくらいスクロールしたのかを取得する。（TOPからどのくらいスクロールしたのか取得する）スクロール量
      const scroll = $(window).scrollTop();
      //↓画面の高さを取得する
      const windowHeight = $(window).height();
      //もし、スクロールが右の値よりも大きくなったときに次の処理を実行してください
      if (scroll > targetElement - windowHeight + 150) {
        //今回のthisは、fadeinのこと。
        $(this).addClass('scrollin');
      }
    });
  });
  jQuery(window).scroll();
 });
 
//  function main(){
//  let bgBtn = document.getElementById('burger-btn');
//  bgBtn.addEventListener('click', menu);
//  }

// function menu() {
//   let nav = document.getElementById('burger-nav')
//   nav.classList.toggle('active');
// }
// window.addEventListener('load', main);

// let bgBtn = document.getElementById('burger-btn');
// let bgNav = document.getElementById('burger-nav');  
// bgBtn.onclick = () => {
//   bgNav.classList.toggle('active');
// };

let header = document.querySelector("#header");
let btn = document.querySelector("#burger-btn");
let mask = document.querySelector("#mask");

btn.onclick = () => {
  header.classList.toggle("open");
};

mask.onclick = () => {
  header.classList.toggle("open");
};

//ここからスクロールアニメーション
//求める要素（上からの距離、要素自身の高さを取得する、現在どれくらいスクロールしているのか。）
const targetElement = document.querySelectorAll(".service-list");

　document.addEventListener("scroll", function(){
  for (let i = 0; i < targetElement.length; i++) {
    const getElementDistance = targetElement[i].getBoundingClientRect().top
    if (window.innerHeight > getElementDistance + 200) {
      targetElement[i].classList.add("active");
      
    }
  }//for文だけだとスクロールするたびに取得できていない。
})


