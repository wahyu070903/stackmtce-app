export function initBurger(){
    const burgerBtn = document.getElementById("burger-btn")
    const burgerMenu = document.getElementById("burger-menu")
    const burgerClose = document.getElementById("burger-close")

    if(!burgerBtn || !burgerMenu || !burgerClose) return 
    burgerBtn.addEventListener("click", () => {
        burgerMenu.classList.toggle("hidden")
    })

    burgerClose.addEventListener("click", ()=> {
        burgerMenu.classList.add("hidden")
    })
}

export function burgerChanging() {
    const buttons = document.querySelectorAll(".__nav_button a");
    const menus = document.querySelectorAll(".__nav_menus div");

    if (buttons.length === 0 || menus.length === 0) return;

    buttons.forEach(button => {
        button.addEventListener("click", (e) => {
            e.preventDefault();
            buttons.forEach(btn => btn.classList.remove("active"));
            button.classList.add("active");
            const target = button.dataset.target;

            menus.forEach(menu => {
                menu.classList.toggle("hidden", !menu.classList.contains(target));
                menu.classList.toggle("flex", menu.classList.contains(target));
            });
        });
    });
}
