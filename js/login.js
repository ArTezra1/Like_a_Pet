const log = document.getElementById("log")
const cada = document.getElementById("cada")
const cadastro = document.getElementById("cadastro")
const login = document.getElementById("login")

cada.addEventListener("click",()=>{
    login.style.display = "none"
    cadastro.style.display = "block"
})

log.addEventListener("click",()=>{
    login.style.display = "block"
    cadastro.style.display = "none"
})