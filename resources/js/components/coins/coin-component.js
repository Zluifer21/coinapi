import {Coinservice} from "../../services/coinservice";
const coinservice = new Coinservice();
export default {

    data(){

      return{
          coins:[]
        }
    },

    methods:{

        getCoins(){
            coinservice.getCoins().then((data) => {
                this.coins = data.data;
            });
        }
    },

    mounted(){

        this.getCoins();

    }

}
