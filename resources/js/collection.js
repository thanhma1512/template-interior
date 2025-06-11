 document.addEventListener("DOMContentLoaded", function () {
        const container = document.getElementById("collectionScroll");
        const items = container.querySelectorAll(".flex-shrink-0");

        const observer = new IntersectionObserver(
            entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.remove("opacity-60");
                        entry.target.classList.add("opacity-100");
                    } else {
                        entry.target.classList.remove("opacity-100");
                        entry.target.classList.add("opacity-60");
                    }
                });
            },
            {
                root: container,
                threshold: 0.6 
            }
        );
        items.forEach(item => observer.observe(item));
    });