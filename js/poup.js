const popupScreen = document.querySelector(".popup-screen");
const popupBox = document.querySelector(".popup-box");
const closeBtn = document.querySelector(".close-btn");

window.addEventListener("load", () => {
  setTimeout(() => {
    popupScreen.classList.add("active");
  }, 2000);
});

closeBtn.addEventListener("click", () => {
  popupScreen.classList.remove("active");
  document.cookie = "WebsiteName=testWebsite; max-age=" + 24 * 60 * 60; 
});

//Use the created cookie to hide or show the popup screen.
const WebsiteCookie = document.cookie.indexOf("WebsiteName=");

if(WebsiteCookie != -1){
  popupScreen.style.display = "none"; //Hide the popup screen if the cookie is not expired.
}
else{
  popupScreen.style.display = "flex"; //Show the popup screen if the cookie is expired.
}