const del = document.getElementsByClassName("del");
const mymod = document.getElementsByClassName("mymod");
const dismissBtn = document.getElementsByClassName("dismissBtn");
const layers = document.getElementsByClassName("layer");
let somethingOpen = false;

for (let index = 0; index < del.length; index++) {
    const currentDel = del[index];
    currentDel.addEventListener("click", function () {
        if (!somethingOpen) {
            mymod[index].style.display = "block";
            somethingOpen = !somethingOpen;
            for (let i = 0; i < layers.length; i++) {
                const layer = layers[i];
                layer.style.display = "block";
            }

            // const y = mymod.getBoundingClientRect().top + window.scrollY;
            // window.scrollTo({
            //     top: 0,
            //     behavior: "smooth",
            // });
        }
    });
}
for (let index = 0; index < dismissBtn.length; index++) {
    const currentDismiss = dismissBtn[index];
    currentDismiss.addEventListener("click", function () {
        if (somethingOpen) {
            mymod[index].style.display = "none";
            somethingOpen = !somethingOpen;
            for (let i = 0; i < layers.length; i++) {
                const layer = layers[i];
                layer.style.display = "none";
            }
        }
    });
}
