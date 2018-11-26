class Rating {
    constructor(arrRating){
        this.ratings = arrRating;
        this.avg = arrRating.reduce((total, rating) => total + rating) / this.ratings.length;
        if  (this.avg > 5) {
            this.avg = 5;
        }else if  (this.avg < 0) {
            this.avg = 0;
        }
    }

    // Devielve la media sin decimales
    roundAvg(){
        return Math.round(this.avg);
    }

    // Devuelve la media con 1 decimal
    cuteAvg(){
        return Math.round(this.avg * 10) /10;
    }

    htmlAvg(header_text = "Media de valoraciones"){
        let div = $('<div>');
        let container = $('<div>', {class: "rating-block"});

        // Header
        let heading = $('<h4>', {text: header_text});
        container.append(heading);

        // Avg Show
        let h2 = $('<h2>', {class: "bold padding-bottom-7", text: this.cuteAvg()});
        let small = $('<small>', {text: "/ 5"});
        h2.append(small);
        container.append(h2);

        // Star creation
        let stars = Rating.starArr(this.roundAvg());
        stars.forEach(star => container.append(star));

        div.append(container);
        return div.html();
    }

    static starArr(n){
        if (n > 5) n = 5;
        if (n < 0) n = 0;

        let stars = [];
        for (let i = 1; i <= 5; i++){
            let star = i <= n ? Rating.starHtml() : Rating.starHtml(true);
            stars.push(star);
        }
        return stars;
    }

    static starHtml(empty = false){
        return `<i class="fa fa-star star${empty?"-empty":""} mr-1" aria-hidden="true"></i>`
    }
}