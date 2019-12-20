// const altura = document.body.scrollHeight - window.innerHeight;
// const fondo = document.getElementById('fondo');

// window.onscroll = () => {
//     const anchoFondo = (window.pageYOffset / altura) * 400;
//      if (anchoFondo <= 100) {
//         fondo.style.width = anchoFondo +'%';
//     }
// }

class coches{
    constructor(img,name){
        this.img = img;
        this.name = name;
    }
}


var array=[];

function añadirCoche(img,name){
    //RECUPERA LOS DATOS DEL ARRAY
    if(localStorage.getItem('myArray') != null){
        array = localStorage.getItem('myArray');
        array = JSON.parse(array);
    }


    var coche = new coches(img,name);
    array.push(coche);

    localStorage.setItem('myArray',JSON.stringify(array));
}

function mostrar(id){
    array = localStorage.getItem('myArray');
    array = JSON.parse(array);

    var mostrar="";
    for (let index = 0; index < array.length; index++) {
        mostrar+=
        "<tr>"+
        "<th scope='row' class='border-0'>"+
        "<div class='p-2' style='font-size:3em'>"+
            "<div class='mr-3 d-inline-block align-middle'>"+
            "<h5 class='mb-0'> <a href='#'  class='text-dark d-inline-block align-middle'>"+array[index].name+"</a></h5>"+
            "</div>"+
            "<img class='float-right cart-img' src='"+array[index].img+"' alt='' width='70' class='img-fluid rounded shadow-sm'>"+

        "</div>"+
        "</th>"+
        "<td class='border-0 align-middle text-center'><strong><h3>20.000.00 €</h3></strong></td>"+
        "<td class='border-0 align-middle text-center'><strong><h3><input style='width: 50px;text-align: center;' type='number' name='' id='' value='1'></h3></strong></td>"+
        "<td class='border-0 align-middle text-center'><div onclick='borrar("+index+")'  class='text-dark'><i  style='color: var(--color6);cursor:pointer' class='fa fa-trash fa-2x'></i></div></td>"+
        "</tr>";
    }
    document.getElementById(id).innerHTML=mostrar;


}

function borrar(id){
    if(confirm("¿Estas seguro de que quieres borrarlo?")==true){
        array = localStorage.getItem('myArray');
        array = JSON.parse(array);
        array.splice(id,1);
        localStorage.setItem('myArray',JSON.stringify(array));
        mostrar("show");
    }

}




