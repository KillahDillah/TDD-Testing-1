<template>
<div>

<p>{{props.results.name}}</p>
</div>

</template>

<script>
    export default {
        name: "SingleItemList",
        props: ["results"],
        data() {
            return {
                name: '',
                id: '',
                code: ''
            }
        },
        mounted() {
            console.log(props.results)
        },
        methods: {

        }
    }
</script>