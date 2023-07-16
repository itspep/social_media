//SIDEBAR
const menuItems = document.querySelectorAll(".menu-item");

//MESSAGES
const messageNotification = document.querySelector('#message-notification');
const messages = document.querySelector('.messages');
//SIDEBAR
//remove active class from all menu items
const changeActiveItem = () => {
    menuItems.forEach(item => {
        item.classList.remove('active');
    })
}


menuItems.forEach(item => {
    item.addEventListener('click', ()=>{
        changeActiveItem();
        item.classList.add('active');
        if(item.id != 'notifications'){
            document.querySelector('.notification-popup').style.display = 'none';

        }else{
            document.querySelector('.notification-popup').style.display = 'block';
            document.querySelector('#notifications .notification-count').style.display='none';
        }
    })
})

//==========SIDEBAR=================
messageNotification.addEventListener('click', () => {
    messages.style.boxShadow = '0 0 1rem var(--color-primary)';
    setTimeout(
        () => {
            messages.style.boxShadow = 'none';
        }, 2000
    );
})