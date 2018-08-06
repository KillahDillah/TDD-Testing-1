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
                <b-modal id="modal1" ref="myModalRef" title='this.name'>
                    <b-form-input type="text" v-model="name"></b-form-input>
                    <p class="my-4">{{this.name}}</p>
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
                results: '',
                name: '',
                id: '',
                code: '',
                description: '',
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
                this.name = item.name
                this.$refs.myModalRef.show(this.name)
    },
            onSubmit() {
                this.$refs.myModalRef.show()
            }
        }
    }
</script>

