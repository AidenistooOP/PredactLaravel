import './bootstrap';

        // Define an array of texts to cycle through
        const texts = ["Uw bedrijf online vindbaar maken!", "Uw bedrijf online beheren!", "Een goede oplossing voor u!"];
        let currentTextIndex = 0;

        function updateH1Text() {
            const h1 = document.getElementById("changingHead");
            h1.style.opacity = 0;
            setTimeout(function() {
                h1.textContent = texts[currentTextIndex];
                h1.style.opacity = 1;
                currentTextIndex = (currentTextIndex + 1) % texts.length;
            }, 500); // 0.5s transition time
        }

        updateH1Text();

        setInterval(updateH1Text, 4000);