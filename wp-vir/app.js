// ハンバーガーメニュー
const button = document.querySelector('.hamburger');
const nav = document.querySelector('.hamburger_nav');
const anchors = document.querySelectorAll('.hamburger_nav a');

if (button && nav) {
  button.addEventListener('click', () => {
    button.classList.toggle('open');
    nav.classList.toggle('open');
  });

  anchors.forEach(anchor => {
    anchor.addEventListener('click', () => {
      button.classList.remove('open');
      nav.classList.remove('open');
    });
  });
}

  //フェードイン
document.addEventListener("DOMContentLoaded", () => {
  const fadeElements = document.querySelectorAll(".fade-in");

  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add("active");
        // 一度だけフェードインさせたい場合
        observer.unobserve(entry.target);
      }
    });
  }, {
    threshold: 0.1 // 10%見えたら発火
  });

  fadeElements.forEach((el) => observer.observe(el));
});


// アコーディオンメニュー
document.querySelectorAll('.js-accordion-item').forEach((item) => {
  const btn = item.querySelector('.js-accordion-btn');
  const answer = item.querySelector('.accordion-a');
  const card = item.closest('.infomation__staff__item');

  let isAnimating = false;

  btn.addEventListener('click', () => {
    if (isAnimating) return;

    const isOpen = item.classList.contains('is-open');

    // ===== 他を閉じる（1つだけ開く）=====
    document.querySelectorAll('.js-accordion-item.is-open').forEach(openItem => {
      if (openItem !== item) {
        closeAccordion(openItem);
      }
    });

    if (!isOpen) {
      openAccordion(item);
    } else {
      closeAccordion(item);
    }
  });

  function openAccordion(item) {
    isAnimating = true;
    item.classList.add('is-open');
    answer.style.display = 'block';

    const height = answer.scrollHeight;

    // 初期化
    answer.style.height = '0px';
    card.style.paddingBottom = '0px';

    // 同時アニメーション
    answer.animate(
      [{ height: '0px' }, { height: `${height}px` }],
      { duration: 400, easing: 'cubic-bezier(0.215, 0.61, 0.355, 1)' }
    );

    card.animate(
      [{ paddingBottom: '0px' }, { paddingBottom: `${height}px` }],
      { duration: 400, easing: 'cubic-bezier(0.215, 0.61, 0.355, 1)' }
    ).onfinish = () => {
      answer.style.height = '';
      card.style.paddingBottom = `${height}px`;
      isAnimating = false;
    };
  }

  function closeAccordion(item) {
    isAnimating = true;
    const answer = item.querySelector('.accordion-a');
    const card = item.closest('.infomation__staff__item');
    const height = answer.scrollHeight;

    item.classList.remove('is-open');

    // 同時アニメーション
    answer.animate(
      [{ height: `${height}px` }, { height: '0px' }],
      { duration: 400, easing: 'cubic-bezier(0.215, 0.61, 0.355, 1)' }
    );

    card.animate(
      [{ paddingBottom: `${height}px` }, { paddingBottom: '0px' }],
      { duration: 400, easing: 'cubic-bezier(0.215, 0.61, 0.355, 1)' }
    ).onfinish = () => {
      answer.style.display = 'none';
      answer.style.height = '';
      card.style.paddingBottom = '';
      isAnimating = false;
    };
  }
});


// 個別ページ
  const mainImage = document.getElementById('mainImage');
  const thumbs = document.querySelectorAll('.thumb');

  thumbs.forEach(thumb => {
    thumb.addEventListener('click', () => {
      // メイン画像切り替え
      mainImage.src = thumb.src;

      // active切り替え
      thumbs.forEach(t => t.classList.remove('active'));
      thumb.classList.add('active');

      // 選択したサムネイルを中央に寄せる
      thumb.scrollIntoView({
        behavior: 'smooth',
        inline: 'center',
        block: 'nearest'
      });
    });
  });

  // トップ-最新情報
document.addEventListener('DOMContentLoaded', () => {
  const track = document.querySelector('.top__projects__box');
  const items = document.querySelectorAll('.top__projects__item');
  const prevBtn = document.querySelector('.slider-btn.prev');
  const nextBtn = document.querySelector('.slider-btn.next');

  let index = 0;

  const itemWidth = items[0].offsetWidth + 30; // gap含む
  const visibleCount = 4;
  const maxIndex = items.length - visibleCount;

  function update() {
    track.style.transform = `translateX(${-itemWidth * index}px)`;
    prevBtn.disabled = index === 0;
    nextBtn.disabled = index === maxIndex;
  }

  nextBtn.addEventListener('click', () => {
    if (index < maxIndex) {
      index++;
      update();
    }
  });

  prevBtn.addEventListener('click', () => {
    if (index > 0) {
      index--;
      update();
    }
  });

  update();
});