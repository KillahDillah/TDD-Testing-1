<template>
    <div class='data-table'>
        <div class="container">
            <div class="row justify-content-center">
                <h1>Item List View</h1>
                <div>
                    <b-btn @click="onClick">Launch demo modal</b-btn>
                          <b-modal id="modal1" ref="myModalRef" title="Bootstrap-Vue">
    <p class="my-4">Hello from modal!</p>
  </b-modal>
                </div>
                <!-- <single-item-list></single-item-list> -->
            </div>
        </div>
    </div>
</template>

<script>
// import SingleItemList from '/components/SingleItemList';
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
                this.$refs.myModalRef.show()
            }
        }
    }
</script>

