const toggleButton = document.getElementsByClassName('toggle-button')[0];
const navbarLists = document.getElementsByClassName('navbar-lists')[0]

toggleButton.addEventListener('click', () =>{
    navbarLists.classList.toggle('active')
})