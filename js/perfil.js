const wrapper = document.querySelector(".wrapper"),
  selectBtn = wrapper.querySelector(".select-btn"),
  searchInp = wrapper.querySelector("input"),
  options = wrapper.querySelector(".options");

let countries = ["Acre", "Alagoas", "Amapá", "Amazonas", "Bahia", "Ceará", "Distrito Federal", "Espírito Santo", "Goiás", "Maranhão", 
  "Mato Grosso", "Mato Grosso do Sul", "Minas Gerais", "Pará", "Paraíba", "Paraná", "Pernambuco", "Piauí", "Rio de Janeiro", "Rio Grande do Norte", 
  "Rio Grande do Sul", "Rondônia", "Roraima", "Santa Catarina", "São Paulo", "Sergipe", "Tocantins"];

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
    "Acre": "https://www.google.com",
    "Alagoas": "https://www.google.com",

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
