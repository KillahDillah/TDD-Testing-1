<template>
    <div class='data-table'>
        <div class="container">
            <div class="col justify-content-center">
                <h1>Item List View</h1>
                <input type="text">
                <b-btn>Add</b-btn>
                <ul>
                    <li v-for="item in results" style="list-style-type: none;">
                        <b-btn @click="onClick(item)">
                            {{item.name}}
                        </b-btn>
                    </li>
                </ul>
                <b-modal id="modal1" ref="myModalRef" title='Edit User'>
                    <form>
                        <label for="add-role-code">Name</label>
                        <b-form-input type="text" v-model="name"></b-form-input>
                        <label for="add-role-code">Description</label>
                        <b-form-input type="text" v-model="description"></b-form-input>
                        <label for="add-role-code">Code</label>
                        <b-form-input type="text" v-model="code"></b-form-input>
                    </form>
                    <template slot="modal-footer">
                        <b-button @click="hideEditModal" class="btn-outline-secondary btn-md">
                            Cancel
                        </b-button>
                        <b-button @click="submitEdit" class="btn-secondary text-light btn-md">
                            Save
                        </b-button>
                    </template>
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
                this.name = item.name,
                this.description = item.description,
                this.code = item.code,
                this.id = item.id,
                this.$refs.myModalRef.show(this.name)
            },
            // onSubmit() {
                
            // },
            hideEditModal() {
                this.$refs.editItem.hide()
            },
            submitModal(item) {
                axoios.put('/api/items/' + this.item, {
                    'id': this.id,
                    'name': this.name,
                    'code': this.code,
                    'description': this.description,
                    // 'status': this.status
                })
                .then((response) => {
                    alert("Saved", "success")
                    // this.clearForm()
                    // this.hideEditModal ()
                    // this.fetch()
                })
            },
            clearForm(item) {
                this.name = '',
                this.code = '',
                this.description = '',
                this.id = '',
                this.status = ''
            },
        }
    }
</script>

