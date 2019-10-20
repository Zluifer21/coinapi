import { Coinservice } from "../../services/coinservice";
const coinservice = new Coinservice();

export default {

    data(){

      return{
          coins:[],
          load : true,
          showcoin: {}
        }
    },

    methods:{

        getCoins(){
            coinservice.getCoins().then((data) => {
                this.coins = data.data;
                this.load = false;
            });
        },

        show(coin){
            this.showcoin = coin;
        }
    },

    mounted(){

        this.getCoins();

    }

}
