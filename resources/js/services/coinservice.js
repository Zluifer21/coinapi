import axios from 'axios';
import { environment } from "./API";
const api = environment.APIEndpoint;
export class Coinservice {

    constructor(){
    }

    /**
     * consumes api
     * @returns {Promise<AxiosResponse<T>>}
     */
    getCoins() {

        return axios.get(`${api}/coins`).then(response => response);
    }
}
