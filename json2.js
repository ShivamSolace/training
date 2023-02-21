fetch("json1.json")
    .then(function (response) {
        return response.json();
    })
    .then(function (object) {
        let placeholder =
            document.querySelector("#d");
        let out = " ";
        for (let o of object) {
            out += `
                <tr>
                    <td>"${o.name}"</td>
                    <td>"${o.age}"</td>
                    <td>"${o.Isprogrammer}"</td>
                </tr>
            `;
        }

        placeholder.innerHTML = out;
    });