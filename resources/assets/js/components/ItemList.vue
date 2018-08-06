<template>
    <div class='data-table'>
        <div class="container">
            <div class="row justify-content-center">
                <h1>Item List View</h1>
                <!-- <ul v-bind:item v-for="item in items">
                    <li>
                        {{item.name}}
                    </li>
                </ul> -->
                
                <div>
                    <b-btn @click="onClick">Launch demo modal</b-btn>
                        <b-modal id="modal1" ref="myModalRef" title="Bootstrap-Vue">
                            <single-item-list></single-item-list>
                                <b-form-input 
                                type="text"
                                placeholder="Enter your name"></b-form-input>
                            <p class="my-4">Hello from modal!</p>
                        </b-modal>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import SingleItemList from './SingleItemList';
    export default {
        name:'itemList',
        components:{
            SingleItemList
        },
        mounted() {
            axios.get('/api').then(response => {
                this.results = response.data
                console.log(response.data)
            })
            console.log('Im the parent')
        },
        // data(){

        // },
        methods: {
            onClick() {
                this.$refs.myModalRef.show()
            },

        }
    }
</script>

