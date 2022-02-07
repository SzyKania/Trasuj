function favourite(){
    let favouritebutton = document.querySelector(".favourite");

    let userid = favouritebutton.id;

    favouritebutton.addEventListener('click', function (event) {
        event.preventDefault();
        fetch('/favourite', {
            method: "POST",
            headers: {
                "Content-Type": "application/x-www-form-urlencoded; charset=UTF-8",
            },
            body: `id=${userid}`,
        })
    })

}

function unfavourite(){
    let unfavouritebutton = document.querySelector(".unfavourite");

    let userid = unfavouritebutton.id;

    unfavouritebutton.addEventListener('click', function (event) {
        event.preventDefault();
        fetch('/unfavourite', {
            method: "POST",
            headers: {
                "Content-Type": "application/x-www-form-urlencoded; charset=UTF-8",
            },
            body: `id=${userid}`,
        })
    })

}


favourite();
unfavourite();