function wishlist(x) {
    x.firstChild.nextSibling.firstChild.style.color = "#3D5656";
    x.style.backgroundColor = "#68B984";
}

function cart(y) {
    y.innerHTML =
        '<span><i class="fa-solid fa-cart-shopping"></i></span> Added To Cart';
}
