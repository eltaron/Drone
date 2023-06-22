const login = document.getElementById("log-head");
const register = document.getElementById("reg_head");
const login_btn = document.getElementById("login");
const register_btn = document.getElementById("reg");
const reg_head = document.getElementById("reg_head").querySelectorAll('li button');

login_btn.addEventListener("click", () => {
  login_btn.classList.add("active");
  register_btn.classList.remove("active");
  login.classList.remove("d-none");
  login.classList.add("d-block");
  register.classList.remove("d-block");
  register.classList.add("d-none");
});

register_btn.addEventListener("click", () => {
  login_btn.classList.remove("active");
  register_btn.classList.add("active");
  register.classList.remove("d-none");
  register.classList.add("d-block");
  login.classList.remove("d-block");
  login.classList.add("d-none");
});
function showm(n){
  let siblings = document.getElementById(n).parentElement.children;
  for(let sib of siblings) {
    sib.classList.remove('d-block');

    sib.classList.add('d-none');
  }
  document.getElementById(n).classList.remove("d-none");
  document.getElementById(n).classList.add("d-block");
}
var validator = document.querySelector(".validator");
var password = document.querySelector("#myPass");
let text, validIcons, invalidIcons;

password.onfocus = function () {
    validator.style.visibility = "visible";
};

password.addEventListener("focusout", (e) => {
    validator.style.visibility = "hidden";
});

function valid(item, validIcon, invalidIcon) {
    text = document.querySelector(`#${item}`);
    text.style.opacity = "1";
    validIcons = document.querySelector(`#${item} .${validIcon}`);
    validIcons.style.opacity = "1";
    invalidIcons = document.querySelector(`#${item} .${invalidIcon}`);
    invalidIcons.style.opacity = "0";
}

function invalid(item, validIcon, invalidIcon) {
    text = document.querySelector(`#${item}`);
    text.style.opacity = "0.5";
    validIcons = document.querySelector(`#${item} .${validIcon}`);
    validIcons.style.opacity = "0";
    invalidIcons = document.querySelector(`#${item} .${invalidIcon}`);
    invalidIcons.style.opacity = "1";
}

function textChange() {
    if (password.value.match(/[A-Z]/) != null)
        valid("capital", "fa-check", "fa-times");
    else invalid("capital", "fa-check", "fa-times");

    if (password.value.match(/[0-9]/) != null)
        valid("number", "fa-check", "fa-times");
    else invalid("number", "fa-check", "fa-times");

    if (password.value.match(/[!@#$%^&*]/) != null)
        valid("special-char", "fa-check", "fa-times");
    else invalid("special-char", "fa-check", "fa-times");

    if (password.value.length >= 8)
        valid("more-than-8", "fa-check", "fa-times");
    else invalid("more-than-8", "fa-check", "fa-times");
}
