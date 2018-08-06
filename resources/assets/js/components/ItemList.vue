<template>
    <div class='data-table'>
        <div class="container">
            <div class="col justify-content-center">
                <h1>Item List View</h1>
                <input type="text">
                <b-btn @click="onSubmit">Add</b-btn>
                <ul>
                    <li v-for="item in results" style="list-style-type: none;">
                        <b-btn @click="onClick(item)">
                            {{item.name}}
                        </b-btn>
                    </li>
                </ul>
                <b-modal :results='results' id="modal1" ref="myModalRef" title={item.name}>
                    <b-form-input 
                    type="text"
                    placeholder="Enter your name"></b-form-input>
                    <p class="my-4">Hello from modal!</p>
                </b-modal>
            </div>
        </div>
    </div>
</template>

<script>
// import SingleItemList from './SingleItemList';
    export default {
        name:'ItemList',
        // components:{
        //     SingleItemList
        // },
        data() {
            return {
                results: {
                    name: '',
                    id: '',
                    code: '',
                    description: '',
                }
            }
        },
        mounted() {
            axios
            .get('/api')
            .then(response => {
                this.results = response.data
                // console.log(response.data)
            })
        },
        methods: {
            onClick(item) {
                console.log(item.name)
                this.$refs.myModalRef.show(item)
    },
            onSubmit() {
                this.$refs.myModalRef.show()
            }
        }
    }
</script>

