let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("slide-item");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  slides[slideIndex-1].style.display = "block";  
  setTimeout(showSlides, 5000);
}

//       for cart
let nameProduct = [
  'Curry rice',
  'Curry rice 2',
  'Sushi',
  'Paella',
  'Okra soup',
  'Fried shrimp',
  'Fish soup',
  'Vegetable pizza',
  'Yangzhou fried rice',
  'Mushroom soup',
  'Clam soup',
  'Cucumber tomato',
  'Korean rice cake',
  'Ramen meat',
  'Round cakes',
  'Saltine crackers'
];
let priceProduct =[
  1.33,
  1.44,
  0.44,
  2.04,
  1.99,
  1.99,
  1.49,
  3.19,
  0.99,
  1.12,
  1.75,
  0.25,
  1.15,
  2.25,
  0.35,
  0.55
];
function CreateCartIteam(){
  for (let i = 0; i <= 15; i++){
    
  }
}