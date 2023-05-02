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
