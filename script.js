function scrollDown() {
  window.scrollBy(0, window.innerHeight);
}

function details() {
  let card = document.getElementsByClassName("card-body");
  let id = card.getAttribute("data-id");
  console.log(id);
}
