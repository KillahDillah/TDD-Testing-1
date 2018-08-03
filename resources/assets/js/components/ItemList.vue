<template>
    <div class='data-table'>
        <div class="container">
            <div class="row justify-content-center">
                <h1>Testing</h1>
                <button id="button" @click="onClick">Click Me</button>
                <!-- <single-item-list></single-item-list> -->
            </div>
        </div>
    </div>
</template>

<script>
// import SingleItemList from './components/SingleItemList';
    export default {
        name:'itemList',
        // components: {
        //     SingleItemList,
        // },
        mounted() {
            console.log('Im the parent')
        },
        methods: {
            onClick() {
                alert ('push it real good')
            }
        }
    }
</script>

