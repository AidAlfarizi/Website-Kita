document.addEventListener("DOMContentLoaded", function () {
    const quotes = "Hidup adalah perjalanan, nikmati setiap langkahnya.";
    let i = 0;
    let textElement = document.getElementById("quotes-text");

    function typeWriter() {
        if (i < quotes.length) {
            textElement.innerHTML += quotes.charAt(i);
            i++;
            setTimeout(typeWriter, 50);
        } else {
            textElement.classList.add("fade-in");
        }
    }

    typeWriter();
});