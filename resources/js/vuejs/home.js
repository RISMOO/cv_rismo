new Vue({

    el:'#app',
    data:{
        inPageProduct:false,// le contenu de l'acceuil ou de la page produit
        products: {
            currentIndex:0,
            data: [
                {
                    name: 'Casque',
                    img: 'img/portfolio1.jpg',
                    client: 'Envato 1',
                    categories: ['Fashion', 'Design'],
                    visit: 'envato.com',
                    date: '01.09.2018'
                },
                {
                    name: 'Produit2',
                    img: 'img/portfolio2.jpg',
                    client: 'Envato 2',
                    categories: ['Fashion', 'Design'],
                    visit: 'envato.com',
                    date: '01.09.2018'
                },
                {
                    name: 'Chaussure bleue',
                    img: 'img/portfolio3.jpg',
                    client: 'Envato 2',
                    categories: ['Fashion', 'Design','Tendance'],
                    visit: 'envato.com',
                    date: '01.09.2018'
                },
                {
                    name: 'Game boy',
                    img: 'img/portfolio4.jpg',
                    client: 'Envato 2',
                    categories: ['Fashion', 'Design','Tendance'],
                    visit: 'envato.com',
                    date: '01.09.2018'
                },
                {
                    name: 'Montre sport',
                    img: 'img/portfolio5.jpg',
                    client: 'Envato 2',
                    categories: ['Fashion', 'Design'],
                    visit: 'envato.com',
                    date: '01.09.2018'
                }
            
            ]
        
    
        },

        faq: {
            currentQuestion:0,//le zero represente l'index de mon arrray ci-dessous
            questions: [
                {
                    sentence: 'Started several mistake joy say painful removed reached end',
                    answer: 'Far curiosity incommode now led smallness allowance. Favour bed assure son things yet. She consisted consulted elsewhere happiness disposing household any old the.Widow downs you new shade drift hopes small.So otherwise commanded sweetness we improving.'
                },
                {
                    sentence: 'Although moreover mistaken kindness me feelings do be marianne?',
                    answer: 'Far curiosity incommode now led smallness allowance. Favour bed assure son things yet. She consisted consulted elsewhere happiness disposing household any old the.Widow downs you new shade drift hopes small.So otherwise commanded sweetness we improving.'
                },
                {
                    sentence: 'By in no ecstatic wondered disposal my speaking?',
                    answer: 'Far curiosity incommode now led smallness allowance. Favour bed assure son things yet. She consisted consulted elsewhere happiness disposing household any old the.Widow downs you new shade drift hopes small.So otherwise commanded sweetness we improving.'
                }
            ]
        }
        
    
    },
    computed:{
        currentProduct:function(){// nottre fonction recupere les donnée correspôndant a larticle 
            return this.products.data[this.products.currentIndex]
        }
    },
    methods: {

        showProduct:function(index){
          
            this.products.currentIndex=index //affichera au click limage correspondant 
            this.inPageProduct=true
            window.scrollTo(0, 0) // la page s'affichera normamelent en  commencant par le haut 
        },
        homeLink:function(){
            this.inPageProduct=false
        }
    }
})