new Vue({
    el:"#app",
    data:{
        inPageArticle: false,
        articles: {
            currentIndex:0,
            data: [
                {
                    title: 'To shewing another demands to.',
                    img: 'img/blog/p1.jpg'
                },
                {
                    title: 'A wonderful serenity has taken possession of my entire soul.',
                    img: 'img/blog/p2.jpg'
                },
                {
                    title: 'Awesome Design His many legs, pitifully thin compared with.',
                    img: 'img/blog/p3.jpg'
                },
                {
                    title: 'Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue.',
                    img: 'img/blog/p4.jpg'
                },
                {
                    title: 'To take a trivial example, which of us ever undertakes.',
                    img: 'img/blog/p5.jpg'
                }
              ]
           }
        },

     computed:{
        currentArticle:function(){// nottre fonction recupere les donnée correspôndant a larticle 
            return this.articles.data[this.articles.currentIndex]
        }
    },
    methods: {

        showArticle:function(index){
          
            this.articles.currentIndex=index //affichera au click limage correspondant 
            this.inPageArticle=true
            window.scrollTo(0, 0)
          // la page s'affichera normamelent en  commencant par le haut 
        },
        mainLink:function(){
            this.inPageArticle=false
        }
    }
     
})