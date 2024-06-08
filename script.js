document.addEventListener("DOMContentLoaded", function() {
    const feedbackButton = document.getElementById("feedbackButton");
    const feedbackForm = document.getElementById("feedbackForm");
    const closeButton = document.getElementById("closeButton");

    feedbackButton.addEventListener("click", function() {
        feedbackForm.style.display = "block";
    });

    closeButton.addEventListener("click", function() {
        feedbackForm.style.display = "none";
    });
});

document.addEventListener("DOMContentLoaded", function() {
    const data = [
        {
            img: "passo1.jpg",
            text: "Texto relacionado à Imagem 1."
        },
        {
            img: "passo2.jpg",
            text: "Texto relacionado à Imagem 2."
        }
        // Adicione mais objetos conforme necessário
    ];

    const imageElement = document.getElementById("image");
    const textElement = document.getElementById("text");
    let currentIndex = 0;

    document.getElementById("nextBtn").addEventListener("click", function() {
        currentIndex = (currentIndex + 1) % data.length;
        updateContent();
    });

    document.getElementById("prevBtn").addEventListener("click", function() {
        currentIndex = (currentIndex - 1 + data.length) % data.length;
        updateContent();
    });

    function updateContent() {
        imageElement.src = data[currentIndex].img;
        textElement.textContent = data[currentIndex].text;
    }
});
