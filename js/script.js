let body = document.body;



let profile = document.querySelector('.header .flex .profile');

document.querySelector('#user-btn').onclick = () =>{
    profile.classList.toggle('active');
    searchForm.classList.remove('active');
}

let searchForm = document.querySelector('.header .flex .search-form');

document.querySelector('#search-btn').onclick = () =>{
    searchForm.classList.toggle('active');
    profile.classList.remove('active');
    
}

let sidebar = document.querySelector('.side-bar');

document.querySelector('#menu-btn').onclick = () =>{
   sidebar.classList.toggle('active');
    body.classList.toggle('active');

} 



document.querySelector('.side-bar .close-side-bar').onclick = () =>{
   sidebar.classList.remove('active');
   body.classList.remove('active');
    
}

window.onscroll = () =>{
    profile.classList.remove('active');
    searchForm.classList.remove('active');
    
    if(window.innerwidth < 1200){
        sidebar.classList.remove('active');
        body.classList.remove('active');
    }

}
