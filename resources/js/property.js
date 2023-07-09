const postcodeField = document.getElementById("prop-postcode");

postcodeField.addEventListener("keyup", searchPostcode);

/**
 * @documentation:
 * @param {*} el
 */
function searchPostcode(el) {
    //const endpoint = "https://api-adresse.data.gouv.fr/search/";
    const endpoint = "https://apicarto.ign.fr/api/codes-postaux/communes/";
    const postcode = el.target.value;
    axios
        .get(endpoint + postcode)
        .then((res) => {
            if (res.data.length == 1) {
                console.log(res.data[0]);
                document.getElementById("prop-city").value =
                    res.data[0].nomCommune;
            } else {
                console.log(res.data);
            }
        })
        .catch((err) => {
            console.log(err);
        });
}
