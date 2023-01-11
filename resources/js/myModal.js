const del = document.getElementsByClassName("del");
const mymod = document.getElementsByClassName("mymod");
const dismissBtn = document.getElementsByClassName("dismissBtn");
const layer = document.querySelector(".layer");
let somethingOpen = false;

for (let index = 0; index < del.length; index++) {
    const currentDel = del[index];
    currentDel.addEventListener("click", function () {
        if (!somethingOpen) {
            mymod[index].style.display = "block";
            somethingOpen = !somethingOpen;
            layer.style.display = "block";
        }
    });
}
for (let index = 0; index < dismissBtn.length; index++) {
    const currentDismiss = dismissBtn[index];
    currentDismiss.addEventListener("click", function () {
        if (somethingOpen) {
            mymod[index].style.display = "none";
            somethingOpen = !somethingOpen;
            layer.style.display = "none";
        }
    });
}
