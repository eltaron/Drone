let home = document.getElementById("Home");
let stores = document.getElementById("Stores");
let articles = document.getElementById("Articles");
let contact = document.getElementById("Contact");
let about = document.getElementById("About");
let blob = document.getElementById("b");
let revolver = document.getElementById("revolve");

/*******************************************/
const arrow = document.getElementById("arrow");
const sections = document.querySelectorAll("section");
const navLi = document.querySelectorAll(".nav-link");
const bullets = document.querySelectorAll("#bullet");
const menu = document.querySelector(".menu-wrap");
window.onscroll = () => {
    var current = "";

    sections.forEach((section) => {
        const sectionTop = section.offsetTop;
        if (window.scrollY >= sectionTop - 100) {
            current = section.getAttribute("id");
        }
    });

    if (current == "About" || current == "Contact") {
        menu.style.display = "none";
    } else {
        menu.style.display = "block";
    }

    if (current == "About") {
        arrow.style.transform = "rotateX(180deg)";
        arrow.style.alignSelf = "center";
        arrow.addEventListener("click", () => {
            window.scrollTo(0, 0);
            console.log("e");
        });
    } else {
        arrow.style.transform = "rotate(0deg)";
        arrow.style.display = "block";
        arrow.addEventListener("click", () => {
            window.scrollBy(0, window.innerHeight);
            console.log("e");
        });
    }

    navLi.forEach((li) => {
        li.classList.remove("active");
        if (li.classList.contains(current)) {
            li.classList.add("active");
        }
    });
    bullets.forEach((bullet) => {
        bullet.classList.remove("active");
        if (bullet.classList.contains(current)) {
            bullet.classList.add("active");
        }
    });
};

arrow.addEventListener("click", () => {
    window.scrollBy(0, window.innerHeight);
    console.log("e");
});
