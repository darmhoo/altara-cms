<template>
    <div id="nav" >
        <nav class="navbar navbar-expand-lg ">
            <div class="container">
                <a href="#" class="navbar-brand"><img src="../../external/assets/img/altara_w_logo.png" alt="logo" style="width:75px;"></a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <router-link class="nav-link" to="/">Home <span class="sr-only">(current)</span></router-link>
        </li>
        <li class="nav-item">
          <router-link class="nav-link" to="#">Login</router-link>
        </li>
        <li class="nav-item" >
          <router-link class="nav-link" to="#">Signup</router-link>
        </li>
        <li class="nav-item">
          <router-link class="nav-link disabled" to="#">Logout</router-link>
        </li>
      </ul>
    </div>

        </nav>
    </div>
</template>
<script>
export default {
    name: 'Nav',
    props: {
        
    }
}

</script>
<style scoped>
.navbar{
    background-color: rgba(7, 74, 116, 0.88);
}

</style>
