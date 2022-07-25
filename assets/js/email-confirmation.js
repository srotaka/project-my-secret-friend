(function () {
    emailjs.init("GpStRd6PC_b_eK92LfIMv");
  })();

  function sendEmail(to_name, to_email, secret_friend) {

    var templateParams = {to_name, to_email, secret_friend};

    const serviceID = "MySecretFriend";
    const templateID = "email-confirmation";
    const publicKey = 'AyrBxnTeWSZ_XlO4B';

    emailjs.send(serviceID, templateID, templateParams, publicKey)

      .then(function (response) {
        console.log('SUCCESS!', response.status, response.text);
        swal({
          title: "¡Misterio develado ❤ !",
          text: "Por favor chequea tu email 💌",
          icon: "success",
          button: "CERRAR 🌸",
        });
      }, function (error) {
        console.log('ERROR...', error);
      });
  }