
fetch("http://sandipbgt.com/theastrologer/api/sunsigns")
  .then(function (response) {
    // The API call was successful!
    return response.json();
  })
  .then(function (data) {
    // This is the JSON from our response
    for (let i = 0; i < data.length; i++) {
        const element = data[i];
    document.getElementById("horoscopesing").innerHTML +=
      '<div class="col-lg-2 col-md-6 col-sm-8 mrb-30">' +
      '<div class="prevention-item text-center">' +
      '<div class="prevention-icon">' +
      '<a href="horoscope.php?sign=' +
      data[i] +
      '">' +
      '<img class="img-fluid" src="assets/images/icons/' +
      data[i] +
      '.png" alt=""></a>' +
      "</div>" +
      '<div class="prevention-content">' +
      '<a href="horoscope.php?sign=' +
      data[i] +
      '">' +
      '<h3 class="title">' +
      data[i] +
      "</h3></a>" +
      "</div>" +
      "</div>" +
      "</div>";
            }
    


  })
  .catch(function (err) {
    // There was an error
    console.warn("Something went wrong.", err);
  });