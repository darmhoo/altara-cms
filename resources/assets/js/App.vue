<template>
<div class="container-fluid">
     <!-- Navbar -->
            <nav class="navbar navbar-expand-lg ">
                <div class="container-fluid">
                    <div class="logo navbar-brand">
                     <a href="http://www.altaracredit/" class="photo logo-mini">
                         <img src="/images/altara_logo.png" width="134" height= "50" alt="">
                    </a>
                </div>
                    <div  class="navbar-collapse justify-content-end">
                        <ul class="nav navbar-nav " v-if="catalog">
                            <form class="navbar-form navbar-search-form" role="search">
                                <div class="input-group">
                                    <i class="nc-icon nc-zoom-split"></i>
                                    <input type="text" value="" class="form-control" placeholder="Search...">
                                </div>
                            </form>
                            
                        </ul>
                        <ul class="navbar-nav">
                            <li class="nav-item" v-if="catalog">
                                <a href="#" class="nav-link" >
                                    <i class="nc-icon nc-planet"></i>Liked item
                                </a>
                            </li>
                            <li class="nav-item" v-if="catalog">
                                <a href="#" class="nav-link">
                                    <i class="nc-icon nc-cart"></i> Cart
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
<div class="navbar navbar1">
			<div class="navbar__brand">
				Welcome to Altara Catalog
			</div>
			<ul   class="navbar__list">
				<li class="navbar__item" v-if="guest" >
					<router-link to="/login">Login</router-link>
				</li>
				<li class="navbar__item" >
					<router-link to="/catalog">Catalog</router-link>
				</li>
        <li class="navbar__item"   v-if="auth" >
					<router-link to="/product/create">Create Product</router-link>
				</li>
				<li class="navbar__item" v-if="auth" >
					<a @click.stop="logout">LOGOUT</a> 
				</li>
			</ul>
		</div>
                                    <div class="alert alert-success" v-if="flash.success">
                                        <button type="button" aria-hidden="true" class="close" data-dismiss="alert">
                                            <i class="nc-icon nc-simple-remove"></i>
                                        </button>
                                        <span>
                                            <b> Success - </b> {{flash.success}}</span>
                                    </div>
                                    <div class="alert alert-danger" v-if="flash.error">
                                        <button type="button" aria-hidden="true" class="close" data-dismiss="alert">
                                            <i class="nc-icon nc-simple-remove"></i>
                                        </button>
                                        <span>
                                            <b> Danger - </b> {{flash.error}}</span>
                                    </div>
<router-view> </router-view> 
</div>
         
</template>
<script type="text/javascript">
import Auth from "./store/auth";
import Flash from "./helpers/flash";
import { post, interceptors } from "./helpers/api";
import Sidebar from "./components/Sidebar.vue";
export default {
  components: {
    Sidebar
  },
  data() {
    return {
      authState: Auth.state,
      flash: Flash.state
    };
  },
  created() {
    // global error http handler
    interceptors(err => {
      if (err.response.status === 401) {
        Auth.remove();
        this.$router.push("/login");
      }

      if (err.response.status === 500) {
        Flash.setError(err.response.statusText);
      }

      if (err.response.status === 404) {
        this.$router.push("/not-found");
      }
    });
    Auth.initialize();
  },
  data() {
    return {
      authState: Auth.state,
      flash: Flash.state
    };
  },
  computed: {
    auth() {
      if (this.authState.api_token) {
        return true;
      }
      return false;
    },
    guest() {
      return !this.auth;
    },
     catalog() {
      if (this.$route.meta.mode === "catalog") {
        return true;
      }
      return false;
    },
  },
  methods: {
    logout() {
      post("/api/logout").then(res => {
        if (res.data.done) {
          // remove token
          Auth.remove();
          Flash.setSuccess("You have successfully logged out.");
          this.$router.push("/login");
        }
      });
    }
  }
};
</script>