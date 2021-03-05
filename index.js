new Vue({

    el:'#app',

    data:{
        hotelFiltrati : [],
        hotels:[],
        search_name: '',
    },

    beforeMount(){
        // this.database();
        this.reflesh();
    },

    methods: {

        database: function(){
            console.log('database');

            axios
                .get('php/database.php')

                .then( result => {
                    this.hotels = result.data;
                })
        },

        reflesh: function(){
            console.log('change');

            axios
                .get('php/filter.php')

                .then( result => {
                    console.log(result.data)
                    this.hotelFiltrati = result.data;
                })
        }
    },
})