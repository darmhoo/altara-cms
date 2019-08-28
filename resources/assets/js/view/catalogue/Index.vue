<template>
    <div id="catalogue">
        Catalogue
        <Sidebar/>
        <product-card/>
    </div>
</template>
<script>
import ProductCard from '../../components/ProductCard.vue';
import Sidebar from '../../components/Sidebar.vue';
export default {
    name: 'Catalogue',
    components: {
        Sidebar,
        ProductCard
        },

}
</script>
<style scoped>

</style>
