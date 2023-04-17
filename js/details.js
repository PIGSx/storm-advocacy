const block = document.querySelectorAll('.details-circle');
window.addEventListener('load', function(){
  block.forEach(item => {
    let numElement = item.querySelector('.number');
    let num = parseInt(numElement.innerText);
    let count = 0;
    let time = 1400 / num;
    setInterval(() => {
      if(count == num){
        clearInterval();
      } else {
        count += 1;
        numElement.innerText = count;
      }
    }, time)
  })
});