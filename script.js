document.addEventListener("DOMContentLoaded", function() {
    const buttons = document.querySelectorAll("button, .navbar a");

    buttons.forEach(button => {
        button.addEventListener("mouseenter", () => {
            button.style.backgroundColor = "#0056b3"; 
            button.style.color = "white"; 
            button.style.transition = "background-color 0.3s, color 0.3s";
        });

        button.addEventListener("mouseleave", () => {
            button.style.backgroundColor = ""; 
            button.style.color = ""; 
        });
    });
});
