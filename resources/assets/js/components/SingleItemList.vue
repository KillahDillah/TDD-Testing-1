<template>
<div>

<p :results="results">{{props.results.name}}</p>
</div>

</template>

<script>
    export default {
        name: "SingleItemList",
        props: ["results"],
        mounted() {
            console.log(props.results)
        },
        methods: {

        }
    }
</script>