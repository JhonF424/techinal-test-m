
export default class Card {

    #card

    constructor({
        title = '',
        img = '',
        category = ''
    } = {}) {
        // const random = `${Math.floor(Math.random() * 99999999999999).toString().padStart(14, "0")}`
        // const idCard = `card-${random}`
        let color = ``;

        if (category === 'ad') {
            color = `white`;
        } else if (category === 'promo'){
            color = `pinky`;
        } else if (category === 'illustration'){
            color = `yellow`;
        } else if(category === 'music'){
            color = `cyan`;
        } else if(category === 'poema'){
            color = `gr`;
        }

        console.log(color);
        const htmlCard = `
        <div class="max-w-sm rounded-xl my-4 row-span-1 border-4 border-${color}">
            <div id="card-content" class="m-2 bg-transparent">
                <img src="${img}" class="object-cover m-auto" alt="">
            </div>
        </div> `;
        console.log(htmlCard);
        document.querySelector('#cards-container').insertAdjacentHTML('afterbegin', htmlCard)
        // this.#card = document.querySelector(`#${idCard}`)
    }

}
