/**
 * Class Card
 */
class Card {

    /**
     * @param imgUrl
     * @param heading_top
     * @param heading
     * @param descr
     * @param btn_message
     * @param btn_link
     */
    constructor(imgUrl, heading_top, heading, description, btn_message, btn_link) {
        this.imgUrl = imgUrl;
        this.heading_top = heading_top;
        this.heading = heading;
        this.description = description;
        this.btn_message = btn_message;
        this.btn_link = btn_link;
    }


    /**
     * @returns card html
     */
    toHtml() {
        let div = $('<div>');
        let grid = $('<div>', {class: "col-md-4"});
        let cardContent = $('<div>', {class: "card-content"});

        // Card img creation
        let cardImg = $('<div>', {class: "card-img"});
        let img = $('<img>', {src: this.imgUrl});
        let span = $('<span>');
        let heading_top = $('<h4>', {text: this.heading_top});
        span.append(heading_top);
        cardImg.append(img);
        cardImg.append(span);

        // Card description
        let cardDesc = $('<div>', {class: "card-desc"});
        let heading = $('<h3>', {text: this.heading});
        let description = $('<p>', {text: this.description});
        let btn = $('<a>', {class: "btn-card", href: this.btn_link, text: this.btn_message});
        cardDesc.append(heading);
        cardDesc.append(description);
        cardDesc.append(btn);

        // Add to container
        cardContent.append(cardImg);
        cardContent.append(cardDesc);

        // Set to grid
        grid.append(cardContent);
        div.append(grid);

        return div.html();
    }

    /**
     * @param JSON
     * @returns {Array}
     */
    static import(JSON) {
        let arr = [];

        JSON.forEach(card => {
            arr.push(new Card(
                card.imgUrl,
                card.heading_top,
                card.heading,
                card.description,
                "Read", (card.btn_link) ? card.btn_link : "#"
                )
            )
        });
        return arr;
    }

    static appendToSelector(selector, arr) {
        arr.forEach(card => container.append(card.toHtml()));
    }
}