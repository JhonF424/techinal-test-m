import Helpers from './helpers.js';
import card from './card.js';
document.addEventListener('DOMContentLoaded', async event => {
    await loadInfo()
})

async function loadInfo() {
    const cardsData = await Helpers.fetchData('./js/cardsInfo.json');
    
    cardsData.forEach(item => {
        new card({
            title: item.title,
            img: item.img,
            category: item.category
        });


    });


}




