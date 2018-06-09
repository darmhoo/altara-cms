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
                    <div v-if="view =='catalog'" class="navbar-collapse justify-content-end">
                        <ul class="nav navbar-nav ">
                            <form class="navbar-form navbar-search-form" role="search">
                                <div class="input-group">
                                    <i class="nc-icon nc-zoom-split"></i>
                                    <input type="text" value="" class="form-control" placeholder="Search...">
                                </div>
                            </form>
                            
                        </ul>
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="#" class="nav-link" >
                                    <i class="nc-icon nc-planet"></i>Liked item
                                </a>
                            </li>
                            <li class="nav-item">
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
				<li class="navbar__item"   >
					<router-link to="/login">Login</router-link>
				</li>
				<li class="navbar__item" >
					<router-link to="/catalog">Catalog</router-link>
				</li>
        <li class="navbar__item"   >
					<router-link to="/product/create">Create Product</router-link>
				</li>
				<li class="navbar__item"  >
					<a @click.stop="logout">LOGOUT</a> 
				</li>
			</ul>
		</div>
<router-view> </router-view> 
</div>
         
</template>
<script type="text/javascript">
import Auth from './store/auth'
import Flash from './helpers/flash'
import { post, interceptors } from './helpers/api'
import Sidebar from './components/Sidebar.vue'
export default {
    components: {
			Sidebar
    },
    data() {
			return {
        view: '',
        authState: Auth.state,
				flash: Flash.state
			}
		},
 created() {
		if(this.$route.meta.mode === 'catalog') {
			this.view = 'catalog';
      }
    // if(this.$route.meta.mode === 'login') {
		// 	this.view = 'login';
    //   }
    // if(this.$route.meta.mode === 'register') {
		// 	this.view = 'register';
		// 	}
		},
  data() {
    return {
    };
  },
  computed: {
			auth() {
				if(this.authState.api_token) {
					return true
				}
				return false
			},
			guest() {
				return !this.auth
			}
		},
  methods: {
    logout() {
				post('/api/logout')
				    .then((res) => {
				        if(res.data.done) {
				            // remove token
				            Auth.remove()
				            Flash.setSuccess('You have successfully logged out.')
				            this.$router.push('/login')
				        }
				    })
			}
  }
};
</script>