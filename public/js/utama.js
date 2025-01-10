const countdownDate = new Date("April 29, 2025 00:00:00").getTime();
const countdownFunction = setInterval(() => {
    const now = new Date().getTime();

    const timeLeft = countdownDate - now;

    const days = Math.floor(timeLeft / (1000 * 60 * 60 * 24));
    const hours = Math.floor(
        (timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
    );
    const minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);

    document.getElementById("days").innerHTML = days;
    document.getElementById("hours").innerHTML = hours;
    document.getElementById("minutes").innerHTML = minutes;
    document.getElementById("seconds").innerHTML = seconds;

    if (timeLeft < 0) {
        clearInterval(countdownFunction);
        document.getElementById("days").innerHTML = "0";
        document.getElementById("hours").innerHTML = "0";
        document.getElementById("minutes").innerHTML = "0";
        document.getElementById("seconds").innerHTML = "0";
        document.getElementById("countdown").innerHTML = "EXPIRED";
    }
}, 1000);

function copyToClipboard(text) {
    navigator.clipboard
        .writeText(text)
        .then(function () {
            alert("Copied to clipboard!");
        })
        .catch(function (err) {
            console.error("Could not copy text: ", err);
        });
}

// ini buat button awal biar bisaa ngeslide section
const button = document.getElementById("toggleButton");
const newSections = document.getElementById("newSections");
const initialSection = document.querySelector(".awal");

button.addEventListener("click", () => {
    initialSection.classList.add("hidden");
    button.classList.add("hidden");

    newSections.classList.remove("hidden");

    setTimeout(() => {
        newSections.classList.add("opacity-100");
    }, 50);
});
