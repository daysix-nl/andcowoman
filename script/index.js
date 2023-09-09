// Navbar
try {
  $(".navbar-toggler").click(function () {
    if ($(".navbar-toggler").hasClass("collapsed")) {
      $("#Hamburger").removeClass("d-none");
      $("#Close").addClass("d-none");
      $("#navv").removeClass("bgd");
    } else {
      $("#Hamburger").addClass("d-none");
      $("#Close").removeClass("d-none");
      $("#navv").addClass("bgd");
    }
  });
} catch (error) {}

try {
  $(window).scroll(function () {
    var scroll = $(window).scrollTop();

    if (scroll >= 10) {
      $(".wrap img").addClass("hideicon");
    } else {
      $(".wrap img").removeClass("hideicon");
    }
  });
} catch (error) {}

// Navbar resize on scroll

try {
  $(document).ready(function () {
    $(window).on("scroll", function () {
      if (Math.round($(window).scrollTop()) > 50) {
        $("nav").addClass("scrolled");
        $("main").addClass("sticky-padding");
      } else {
        $("nav").removeClass("scrolled");
        $("main").removeClass("sticky-padding");
      }
    });
  });
} catch (error) {}

try {
  const actualBtn = document.getElementById("input_1_6");

  const fileChosen = document.getElementById("file-chosen");

  actualBtn.addEventListener("change", function () {
    fileChosen.textContent = this.files[0].name;
  });
} catch (error) {}
try {
  smoothScroll.init();
} catch (error) {}

try {
  var button = document.querySelector(".balk-icon");
  var elementBalk = document.querySelector(".balk");
  var elementNone = document.querySelector(".header-add");
  var elementTop = document.querySelector(".header-top");
  var elementCart = document.querySelector(".cart-add");
  var elementMain = document.querySelector("main");

  button.addEventListener("click", function () {
    elementBalk.classList.toggle("balk-big");
    elementNone.classList.toggle("none");
    elementTop.classList.toggle("none-fixed");
    elementCart.classList.toggle("none");
    elementMain.classList.toggle("overlay-grey");
  });
} catch (error) {}

try {
  var swiper = new Swiper(".mySwiper-nieuwe-collectie", {
    loop: true,
    slidesPerView: 1.3,
    spaceBetween: 20,
    breakpoints: {
      700: {
        slidesPerView: 2,
        spaceBetween: 30,
      },
      1024: {
        slidesPerView: 3,
        spaceBetween: 30,
      },
    },
  });
} catch (error) {}

try {
  let params = new URLSearchParams(document.location.search);
  let currentPage = 1;
  let loading = false;
  let canFetch = true;
  let shouldFetchNext = false;
  let hasMorePages = true;
  let fetchedPages = new Set();
  let maat = params.get("filter_maat") ? params.get("filter_maat") : undefined;
  let kleur = params.get("filter_kleur")
    ? params.get("filter_kleur")
    : undefined;
  let s = params.get("s") ? params.get("s") : undefined;
  let fullUrl = window.location.href;

  const productContainer = document.querySelector("#products-container");
  const loadingElement = document.querySelector("#loading");

  const fetchProducts = async (page, maat, kleur, s, fullUrl) => {
    if (loading || !hasMorePages) return;
    if (!canFetch || loading) return;

    loading = true;
    canFetch = false;
    shouldFetchNext = false;

    loadingElement.style.display = "block";

    let url = `/wp-json/myproducts/v1/list?page=${page}&full_url=${fullUrl}`;

    if (maat !== undefined) {
      url += `&filter_maat=${maat}`;
    }

    if (kleur !== undefined) {
      url += `&filter_kleur=${kleur}`;
    }

    if (s !== undefined) {
      url += `&s=${s}`;
    }

    const response = await fetch(url);
    if (!response.ok) {
      throw new Error("Network response was not ok");
    }
    const products = await response.json();

    if (products.length !== 0) {
      products.forEach((product) => {
        let productElement = `                    
                    <div class="col-6 col-lg-4 pb-half ">
                        <a class="flipsection" href="${product.permalink}">
                            <div class="relative hhover">
                                    <div class="kader-product-img">
                                        <img src="${
                                          product.thumbnail_url
                                        }" class="product-img" data-id="${
          product.id
        }">
                                        <div class="overlay">
                                            <img src="${
                                              product.gallery_images
                                                ? product.gallery_images
                                                : product.thumbnail_url
                                            }" class="product-img" data-id="${
          product.id
        }">
                                        </div>
                                    </div>
                                    <div class="pt-prod"></div>
                            </div>
                            <p class="fcc italic catt">
                                ${product.categories
                                  .map((category) => category)
                                  .join(", ")}
                            </p>
                            <h5 class="fwbold fca uppercase">
                                ${product.title}
                            </h5>
                            <div class="btn-flip">
                                <div class="message2">
                                    <span class="price">
                                        <p class="fbody large regular fca">${
                                          product.price_html
                                        }</p>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
                  `;
        productContainer.insertAdjacentHTML("beforeend", productElement);
      });
    }

    if (products.length === 0) {
      hasMorePages = false;
    }

    loadingElement.style.display = "none";
    loading = false;

    setTimeout(() => {
      canFetch = true;
      if (shouldFetchNext) {
        currentPage++;
        fetchProducts(currentPage, maat, kleur, s, fullUrl);
      }
    }, 3000);
  };

  window.addEventListener("scroll", () => {
    if (
      window.innerHeight + window.scrollY >=
      productContainer.offsetHeight - 200
    ) {
      if (hasMorePages && !loading && canFetch) {
        currentPage++;
        fetchProducts(currentPage, maat, kleur, s, fullUrl);
      } else if (!hasMorePages) {
        loadingElement.style.display = "none";
      } else {
        loadingElement.style.display = "block";
        shouldFetchNext = true;
      }
    }
  });
} catch (error) {
  console.error("An error occurred:", error);
}
