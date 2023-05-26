const wrapper = document.querySelector(".wrapper"),
  selectBtn = wrapper.querySelector(".select-btn"),
  searchInp = wrapper.querySelector("input"),
  options = wrapper.querySelector(".options");

let countries = ["Jusbrasil", "LegisWeb", "Supremo Tribunal Federal", "Superior Tribunal de Justiça", "VLex Brasil",];

function addCountry(selectedCountry) {
  options.innerHTML = "";
  countries.forEach(country => {
    let isSelected = country == selectedCountry ? "selected" : "";
    let li = `<li onclick="updateName(this)" class="${isSelected}">${country}</li>`;
    options.insertAdjacentHTML("beforeend", li);
  });
}
addCountry();

function updateName(selectedLi) {
  const selectedCountry = selectedLi.innerText;
  const url = getCountryWebsite(selectedCountry);

  if (url) {
    window.location.href = url;
  }
}

function getCountryWebsite(country) {
  const countryWebsites = {
    "Jusbrasil": "https://www.jusbrasil.com.br",
    "LegisWeb": "https://www.legisweb.com.br",
    "Supremo Tribunal Federal": "https://www.stf.jus.br",
    "Superior Tribunal de Justiça": "https://www.stj.jus.br",
    "VLex Brasil": " https://www.vlex.com.br",

  };

  if (countryWebsites.hasOwnProperty(country)) {
    return countryWebsites[country];
  }

  return null;
}

searchInp.addEventListener("keyup", () => {
  let arr = [];
  let searchWord = searchInp.value.toLowerCase();
  arr = countries.filter(data => {
    return data.toLowerCase().startsWith(searchWord);
  }).map(data => {
    let isSelected = data == selectBtn.firstElementChild.innerText ? "selected" : "";
    return `<li onclick="updateName(this)" class="${isSelected}">${data}</li>`;
  }).join("");
  options.innerHTML = arr ? arr : `<p style="margin-top: 10px;">Oops! Country not found</p>`;
});

selectBtn.addEventListener("click", () => wrapper.classList.toggle("active"));
