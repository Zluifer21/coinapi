<template>
    <div class="card info">
        <div class="card-header">
            Info
        </div>
        <table class="card-table table">
            <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Type</th>
                <th scope="col">Start</th>
                <th scope="col">End</th>
                <th scope="col">Symbol</th>

            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row"> {{ coin.name}}</th>
                <td>
                    <span v-if="coin.type_is_crypto==1">Crypto </span>
                    <span v-if="coin.type_is_crypto==0"> No Crypto </span>
                </td>
                <td> {{ coin.data_start }} </td>
                <td> {{ coin.data_end }} </td>
                <td> {{ coin.data_symbols_count }}</td>
            </tr>
            </tbody>
        </table>
    </div>

</template>

<style src="./show-component.css"></style>
<script src="./show-component.js"></script>
