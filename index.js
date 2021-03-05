new Vue({

    el:'#app',

    data:{
        hotelFiltrati : [],
        hotels:[],

        search_name: '',
        search_parking:'all',
        search_vote: 'all',
        search_distance:'all'
    },

    beforeMount(){
        // this.database();
        this.reflesh();
    },

    methods: {

        database: function(){
            console.log('database');

            axios
                .get('php/database.php', {params:{
                    name: this.search_name
                }})

                .then( result => {
                    this.hotels = result.data;
                })
        },

        reflesh: function(){
            console.log('change');

            axios
                .get('php/filter.php', {params:{
                    name: this.search_name,
                    parking: this.search_parking,
                    vote: this.search_vote,
                    distance: this.search_distance
                }})

                .then( result => {
                    console.log(result.data)
                    this.hotelFiltrati = result.data;
                })
        }
    },
})