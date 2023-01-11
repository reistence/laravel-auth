const morty = document.getElementById("morty");

if (morty) {
    document.addEventListener("mousemove", (e) => {
        const mouseX = e.clientX;
        const mouseY = e.clientY;

        const rekt = morty.getBoundingClientRect();
        const mortyX = rekt.left + rekt.width / 2;
        const mortyY = rekt.top + rekt.height / 2;

        const angleDeg = angle(mouseX, mouseY, mortyX, mortyY);

        const eyeAngle = 90 + angleDeg;

        const eyes = document.querySelectorAll(".eye");
        eyes.forEach((eye) => {
            eye.style.transform = `rotate(${eyeAngle}deg)`;
        });
    });

    function angle(cx, cy, ex, ey) {
        const dy = ey - cy;
        const dx = ex - cx;

        const rad = Math.atan2(dy, dx);
        // console.log("rad", cy);
        const deg = (rad * 180) / Math.PI;

        return deg;
    }
}
