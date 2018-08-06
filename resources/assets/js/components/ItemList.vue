<template>
    <div class='data-table'>
        <div class="container">
            <div class="col justify-content-center">
                <h1>Item List View</h1>
                <input type="text">
                <b-btn @click="onSubmit">Add</b-btn>
                <ul>
                    <li v-for="name in results" style="list-style-type: none;">
                        <b-btn @click="onClick">
                            {{name.name}}
                        </b-btn>
                    </li>
                </ul>
                <b-modal id="modal1" ref="myModalRef" title="{props.results.name}">
                    <single-item-list :results='results'></single-item-list>
                            <b-form-input 
                            type="text"
                            placeholder="Enter your name"></b-form-input>
                        <p class="my-4">Hello from modal!</p>
                    </b-modal>
                <div>
                    <!-- <b-btn @click="onClick">Launch demo modal</b-btn> -->
                    
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import SingleItemList from './SingleItemList';
    export default {
        name:'ItemList',
        components:{
            SingleItemList
        },
        data() {
            return {
                results: '',
            }
        },
        mounted() {
            axios
            .get('/api')
            .then(response => {
                this.results = response.data
                console.log(response.data)
            })
        },
        methods: {
            onClick() {
                this.$refs.myModalRef.show()
            },
            onSubmit() {
                this.$refs.myModalRef.show()
            }
        }
    }
</script>

