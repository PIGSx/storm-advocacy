const allSideMenu = document.querySelectorAll('#sidebar .side-menu.top li a');

allSideMenu.forEach(item => {
  const li = item.parentElement;

  item.addEventListener('click', function() {
    allSideMenu.forEach(i => {
      i.parentElement.classList.remove('active');
    });
    li.classList.add('active');
  });

  // comparando a URL
  if (item.href === window.location.href) {
    allSideMenu.forEach(i => {
      i.parentElement.classList.remove('active');
    });
    li.classList.add('active');
  }
});

// close menu
const menuBar = document.querySelector('#content nav .bx.bx-menu');
const sidebar = document.getElementById('sidebar');

menuBar.addEventListener('click', function () {
	sidebar.classList.toggle('hide');
})
