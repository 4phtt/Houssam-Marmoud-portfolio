// ============================
// CUSTOM CURSOR
// ============================

const cursor = document.querySelector(".cursor");

document.addEventListener("mousemove", (e) => {

    cursor.style.left = e.clientX + "px";
    cursor.style.top = e.clientY + "px";

});


// ============================
// SCROLL REVEAL
// ============================

const elements = document.querySelectorAll(
    ".project-card, .skill, .about-content"
);

const observer = new IntersectionObserver(
    (entries) => {

        entries.forEach((entry) => {

            if (entry.isIntersecting) {

                entry.target.style.opacity = "1";
                entry.target.style.transform = "translateY(0)";

            }

        });

    },
    {
        threshold: 0.15
    }
);


elements.forEach((element) => {

    element.style.opacity = "0";

    element.style.transform = "translateY(40px)";

    element.style.transition =
        "opacity 0.8s ease, transform 0.8s ease";

    observer.observe(element);

});


// ============================
// PROJECT HOVER
// ============================

const cards = document.querySelectorAll(".project-card");

cards.forEach((card) => {

    card.addEventListener("mousemove", (e) => {

        const rect = card.getBoundingClientRect();

        const x = e.clientX - rect.left;
        const y = e.clientY - rect.top;

        card.style.transform =
            `perspective(800px)
             rotateX(${-(y - rect.height / 2) / 30}deg)
             rotateY(${(x - rect.width / 2) / 30}deg)`;

    });

    card.addEventListener("mouseleave", () => {

        card.style.transform = "none";

    });

});