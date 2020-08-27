let drop = document.getElementById('burger');
let menu = document.getElementById('menu');

    drop.addEventListener('click', function(e){
        e.preventDefault();
    menu.classList.toggle('active');              
})
function OpenNew(){
    location.replace('../index/index.php');
}
function OpenHome(){
    location.replace('../index/index.php');
}

function All_post(){
    location.replace('../index/all_post.php');
}

// search if empty don't do anything
setTimeout(function(){
    document.getElementById('close_alert').style.display = "none";
},4000)
    const action = document.getElementById('searchbtn');
     action.addEventListener('click', function(){
        const em = document.getElementById('search');
    //    window.open('https://www.google.com/');

    })