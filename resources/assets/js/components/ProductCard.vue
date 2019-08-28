<template>
    <div >
        <div class="card" style="width: 20rem;">
            <img class="card-img-top"  alt="Card image cap">
            <div class="card-body">
                <p class="card-text">
                    {{msg}}
                </p>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    name: 'ProductCard',
    data(){
        return {
            msg: 'Hello'
        }
    }
}
</script>
<style scoped>

</style>
