let list_btn = document.querySelector(".bi-list-nested");
let underlay = document.querySelector(".underlay");
let sidebar = document.querySelector(".sidebar");
let cross = document.querySelector(".bi-x");
let category_overlay = document.querySelector(".category-overlay");
let list = document.querySelector(".our-list");
let category_list = document.querySelector(".category-list");
let img_text = document.querySelector(".img-text");
let change_image = document.querySelector(".change-image");
let img_para = document.querySelector(".img-para");
const randomImages = [
  {
    image: "1.avif",
    text: "Image 1",
    subText: "this is 1st image's text",
  },
  {
    image: "2.avif",
    text: "Image 2",
    subText: "this is 2nd image's text",
  },
  {
    image: "3.avif",
    text: "Image 3",
    subText: "this is 3rd image's text",
  },
  {
    image: "4.avif",
    text: "Image 4",
    subText: "this is 4th image's text",
  },
];

const generateRandomImage = () => {
  const randomNum = Math.random() * randomImages.length;
  const floorNum = Math.floor(randomNum);
  return floorNum;
};

window.addEventListener("DOMContentLoaded", () => {
  let random = generateRandomImage();
  change_image.src = `/front_images/${randomImages[random].image}`;

  img_text.innerHTML = randomImages[random].text;
  img_para.innerHTML = randomImages[random].subText;
  // console.log(randomImages[generateRandomImage()]);
});

list_btn.addEventListener("click", () => {
  underlay.style.visibility = "visible";
  setTimeout(() => {
    sidebar.style.transform = "translateX(0)";
  }, 150);
});

underlay.addEventListener("click", (e) => {
  sidebar.style.transform = "translateX(-100%)";

  underlay.style.visibility = "hidden";
});
cross.addEventListener("click", (e) => {
  sidebar.style.transform = "translateX(-100%)";

  underlay.style.visibility = "hidden";
});

sidebar.addEventListener("click", (e) => {
  e.stopPropagation();
});

list.addEventListener("click", (e) => {
  e.stopPropagation();
  category_overlay.style.visibility = "visible";
  setTimeout(() => {
    category_list.style.transform = "translateY(0) scale(1)";
    category_list.style.opacity = "1";
  }, 100);
});

category_overlay.addEventListener("click", (e) => {
  e.stopPropagation();
  category_overlay.style.visibility = "hidden";
  category_list.style.transform = "translateY(-100px) scale(0.7)";
  category_list.style.opacity = "0";
});
