class ViviendaRating {
    constructor(id, rating){
        this.id = id;
        this.rating = rating;
    }

    rate(){
        return Rating.starArr(this.rating);
    }

    toHtml(){
        return
    }
}