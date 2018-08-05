<template>
    <div class='data-table'>
        <div class="container">
            <div class="row justify-content-center">
                <h1>Item List View</h1>
                <div>
                    <b-btn @click="onClick">Launch demo modal</b-btn>
                        <b-modal id="modal1" ref="myModalRef" title="Bootstrap-Vue">
                                <b-form-input v-model="text1"
                                type="text"
                                placeholder="Enter your name"></b-form-input>
                            <p class="my-4">Hello from modal!</p>
                        </b-modal>
                </div>
                <single-item-list></single-item-list>
            </div>
        </div>
    </div>
</template>

<script>
import SingleItemList from './SingleItemList';
    export default {
        name:'itemList',
        data: {

        },
        components:{
            SingleItemList
        },
        mounted() {
            axios.get('/api/items').then(response => {
                this.results = response.data
                console.log(response.data)
            })
            console.log('Im the parent')
        },
        methods: {
            onClick() {
                this.$refs.myModalRef.show()
            },

        }
    }
</script>

