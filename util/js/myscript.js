async function termekek_listazasa() {
    console.log("Elkezdődött");
    const data = await fetch("./api/termek.php");
    const json = await data.json();
    let html = "";
    json.forEach(termek => {
        html += `<li class="list-group-item">${termek.nev}</li>`;
    });
    document.getElementById("termekek").innerHTML = html;
}

async function termek_felvetel() {
    const nev = document.getElementById('nev_input').value;
    const termek = {
        nev: nev
    }
    const data = await fetch("./api/termek.php", {
        method: "POST",
        headers: {
            'Content-Type' : "application/json"
        },
        body: JSON.stringify(termek)
    });
    const json = await data.json();
    if (data.status !== 201) {
        alert(json.message);
    } else {
        termekek_listazasa();
        document.getElementById('nev_input').value = "";
    }
}