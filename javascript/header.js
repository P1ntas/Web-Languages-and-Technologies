const hamb = document.querySelector("#hamb");
const ul = document.querySelector("#menu ul");

hamb.addEventListener("click", () => {
    hamb.classList.toggle("active");
    ul.classList.toggle("active");
})

document.querySelectorAll(".item").forEach(n => 
    n.addEventListener("click", () => {
        hamb.classList.remove("active");
        ul.classList.remove("active");
}))