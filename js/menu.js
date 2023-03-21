const menu = document.querySelector('nav, .container ul');
const navItems = menu.querySelectorAll('li a');
navItems.forEach(link => {
    link.addEventListener('click', () => {
        navItems.forEach(item => item.classList.remove('active'));
        link.classList.add('active');
    });
});

const changeActiveItem = () => {
    navItems.forEach(item => {
        const link = item.querySelector('a');
        link.classList.remove('active');
    })
}
navItems.fotEach(item => {
    const link = item.querySelector('a');
    link.addEventListener('click', () => {
        changeActiveItem();
        link.classList.add('active');
    })
})