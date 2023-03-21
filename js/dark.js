const toggle_btn = document.querySelector('.toggle-btn');

let firsTheme = localStorage.getItem("dark");

changeTheme(+firsTheme);

function changeTheme(isDark){
    if(isDark){
        document.body.classList.add("dark");
        toggle_btn.classList.replace("uil-moon","uil-sun");
        localStorage.setItem("dark", 1);
    }
    else{
        document.body.classList.remove("dark");
        toggle_btn.classList.replace("uil-sun","uil-moon");
        localStorage.setItem("dark", 0);
    }
}

toggle_btn.addEventListener("click", () =>{
    changeTheme(!document.body.classList.contains("dark"));
})