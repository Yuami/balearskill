class Comment {
    constructor(rating, name, date, imgUrl, title, description) {
        if (rating > 5) {
            rating = 5;
        } else if (rating < 0) {
            rating = 0;
        }

        this.rating = Math.round(rating);
        this.name = name;
        this.date = date;
        this.imgURL = imgUrl;
        this.title = title;
        this.description = description;
    }

    toHtml() {
        let div = $('<div>');
        let row = $('<div>', {class: "row"});
        let smallCol = $('<div>', {class: "col-md-3"});
        let bigCol = $('<div>', {class: "col-md-9"});

        // Basic comment info
        let img = $('<img>', {src: this.imgURL});
        let personName = $('<div>', {
            class: "review-block-name",
            text: this.name
        });
        let date = $('<div>', {
            class: "review-block-date",
            text: this.date
        });
        smallCol.append(img);
        smallCol.append(personName);
        smallCol.append(date);

        // Valoracion
        let valoracion = $('<div>', {class : "review-block-rate"});
        let stars = Rating.starArr(this.rating);
        stars.forEach(star => valoracion.append(star));
        bigCol.append(valoracion);

        //Titulo
        let titulo = $('<div>', {
            class : "review-block-title",
            title: this.title
        });
        bigCol.append(titulo);

        //Description
        let description = $('<div>', {
            class: "review-block-description",
            text : this.description
        });
        bigCol.append(description);

        row.append(smallCol);
        row.append(bigCol);

        div.append(row);
        return div.html();
    }

    static listComments(arrComments){
        let div = $('<div>');
        arrComments.forEach((comment, index, array) => {
            div.append(comment.toHtml());
            if (index !== array.length - 1) div.append($('<hr>'));
        });
        return div.html();
    }
}