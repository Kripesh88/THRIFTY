const loggedIn = localStorage.getItem('loggedIn');

const userElement = document.getElementById('user');

if(loggedIn != 'true') {
    userElement.innerHTML='<i class="fa-solid fa-sign-in"></i>'
}else{
    userElement.innerHTML='<i class="fa-solid fa-user"></i>'
}


function logIn() {
    localStorage.setItem('loggedIn', true);
}