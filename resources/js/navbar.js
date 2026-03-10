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

export function burgerChanging(){
    const buttons = document.querySelectorAll(".__nav_button a")
    const menus = document.querySelectorAll(".__nav_menus div")
    if(! buttons || !menus) return 
}
