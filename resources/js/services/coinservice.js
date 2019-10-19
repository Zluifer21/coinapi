import axios from 'axios';
import { environment } from "./API";
const api = environment.APIEndpoint;
export class Coinservice {

    constructor(){
    }

    getCoins() {

        return axios.get(`${api}/coins`).
                    then(response => {
                            response
        }).catch(e => {
            console.log(e);
        });
    }
}
