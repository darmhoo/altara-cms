<template>
    <div>
        <Nav/>
        <catalogue/>
    </div>


</template>
<script>
import Nav from './components/Nav'
import Catalogue from './view/catalogue/Index'
export default {
    name: 'App',
    components: {
        Nav,
        Catalogue
    }

}
</script>
<style  scoped>

</style>
