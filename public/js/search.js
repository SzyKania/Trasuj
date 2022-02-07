const search = document.querySelector('input[placeholder="BROWSE ROUTES"]');
const routeContainer = document.querySelector(".grid-box");

search.addEventListener("keyup", function (event) {
    if (event.key === "Enter") {
        event.preventDefault();

        const data = {search: this.value};

        fetch("/search", {
            method: "POST",
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(data)
        }).then(function (response) {
            return response.json();
        }).then(function (routes) {
            routeContainer.innerHTML = "";
            loadRoutes(routes)
        });
    }
});

function loadRoutes(routes) {
    routes.forEach(route => {
        createRoute(route);
    });
}

function createRoute(route) {
    const template = document.querySelector("#route-template");

    const clone = template.content.cloneNode(true);

    const div = clone.querySelector(".grid-item");
    div.id = route.id;
    const onclick = `location.href='routedetails?id=${route.id_routes}'`;
    div.setAttribute('onclick', onclick);

    const image = clone.querySelector("img");
    image.src = `/public/uploads/${route.image}`;

    const city = clone.querySelector("p[id=\"city\"]");
    city.innerHTML = route.city;

    const roadtype = clone.querySelector("p[id=\"roadtype\"]");
    roadtype.innerHTML = route.type;

    const rating = clone.querySelector("p[id=\"rating\"]");
    rating.innerHTML = route.rating;

    routeContainer.appendChild(clone);
}
