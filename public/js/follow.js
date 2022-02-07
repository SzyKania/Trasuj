function follow(){
    let followbutton = document.querySelector(".followbutton");

    let userid = followbutton.id;

    followbutton.addEventListener('click', function (event) {
        event.preventDefault();
        fetch('/follow', {
            method: "POST",
            headers: {
                "Content-Type": "application/x-www-form-urlencoded; charset=UTF-8",
            },
            body: `id=${userid}`,
        })
    })

}

function unfollow(){
    let unfollowbutton = document.querySelector(".unfollowbutton");

    let userid = unfollowbutton.id;

    unfollowbutton.addEventListener('click', function (event) {
        event.preventDefault();
        fetch('/unfollow', {
            method: "POST",
            headers: {
                "Content-Type": "application/x-www-form-urlencoded; charset=UTF-8",
            },
            body: `id=${userid}`,
        })
    })

}


follow();
unfollow();