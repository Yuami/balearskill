class Vivienda {
    constructor(id, nombre, municipi, adresa, valoracio, nPersones, nHabitacions,
                nLlits, nBanys, destacat, tipo_vivenda, tipo_vacance, serveis, descripcion, imgPath) {
        this.id = id;
        this.nombre = nombre;
        this.municipi = municipi;
        this.adresa = adresa;
        this.valoracion = valoracio;
        this.nPersones = nPersones;
        this.nHabitacions = nHabitacions;
        this.nLlits = nLlits;
        this.nBanys = nBanys;
        this.destacat = destacat;
        this.tipo_vivenda = tipo_vivenda;
        this.tipo_vacance = tipo_vacance;
        this.serveis = serveis;
        this.descripcion = descripcion;
        this.imgPath = imgPath;
    }

    carousel(){
        let imgs = this.imgPath;
        let indicators = "";
        let carouselItems = "";
        imgs.forEach((img, i, arr) => {
            indicators += `<li data-target="#carouselId" data-slide-to="0" class="${i === 0 ? "active" : ""}"></li>`
            carouselItems += `<div class="carousel-item active">
                            <img class="d-block w-100" src="${img}"
                                 alt="First slide">
                        </div>`;
        });
        return {
            indicators,
            carouselItems
        }
    }

    toCard() {
        return `<div class="col-md-4">
            <div class="card-content">
            <div class="card-img">
            <img src="${this.imgPath[0]}" alt="">
            <span><h4>${this.tipo_vivenda}</h4></span>
        </div>
        <div class="card-desc">
            <h3>${this.nombre}</h3>
            <p>${this.descripcion}</p>
                    <div class="valoracion mb-2">
        ${Rating.starArr(this.valoracion)}
</div>
        <a href="form.php?id=${this.id}" class="btn-card">Read</a>
            </div>
            </div>
            </div>`
    }



}
// TEST VIVIENDA
let v = new Vivienda(1,"Mi casa to chula", "Arta", "Prueba adreça", 4, 4,2,2,1,false,"Chalet","Playa",["Servei 1", "Servei 2"],
    "Prueba descripcionPrueba descripcionPrueba descripcionPrueba descripcionPrueba descripcion",
    ["img/fotos/1.jpg"]);

let list = $('#list-container');
list.append(v.toCard());
list.append(v.toCard());
list.append(v.toCard());
list.append(v.toCard());
list.append(v.toCard());
list.append(v.toCard());