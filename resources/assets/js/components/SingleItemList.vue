<template>
<div>
<p>hello</p>
<!-- <p>{{this.results.name.name}}</p> -->
</div>

</template>

<script>
    export default {
        name: "SingleItemList",
        props: ["results"],
        data() {
            return {
                name: 'results name',
                id: '',
                code: ''
            }
        },
        mounted() {
            console.log('Component mounted.')
        },
        methods: {

        }
    }
</script>