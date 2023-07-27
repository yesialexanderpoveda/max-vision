/* const data = new URLSearchParams("nombre=miguel angel&nacionalidad=español");
fetch('./historiaClinica.php', {
   method: 'post',
   body: JSON.stringify({data: data}) 
})
.then(function(response) {
   if(response.ok) {
       return response.text()
   } else {
       throw "Error en la llamada Ajax";
   }

})
.then(function(texto) {
   console.log(texto);
})
.catch(function(err) {
   console.log(err);
}); */

const data = new FormData();
data.append("nombre", "BAJA");
data.append("nacionalidad", "aaaa" );

        fetch('./addPaciente.php', {
            method: 'POST',
            body: data
        })
        .then(resp => resp.json())
        .then(data_resp => {
           // la data_resp nos llega en formato JSON
           console.log(data_resp);
        });