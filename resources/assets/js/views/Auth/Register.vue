   
   <template>
    <div class="wrapper wrapper-full-page">
        
        <!--   you can change the color of the filter page using: data-color="blue | azure | green | orange | red | purple" -->
        <div class="full-page register-page section-image" style="margin-bottom:50px;" data-color="orange" data-image="../../assets/img/bg5.jpg">
            <div class="content">
                <div class="container">
                    <div class="card card-register card-plain text-center">
                        <div class="card-header ">
                            <div class="row  justify-content-center">
                                <div class="col-md-8">
                                    <div class="header-text">
                                        <h2 class="card-title">Register Employee</h2>
                                        <hr />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-md-5 mx-auto">
                                    <form   @submit.prevent="register">
                                        <div class="card card-plain">
                                            <div class="content">
                                                <div class="form-group">
                                                    <input type="text" v-model="form.first_name" placeholder="Your First Name" class="form-control">
                                                    <small class="error-control" v-if="error.first_name">{{error.first_name[0]}}</small>
                                                    
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" v-model="form.last_name" placeholder="Your Last Name" class="form-control">
                                                    <small class="error-control" v-if="error.last_name">{{error.last_name[0]}}</small>
                                                </div>
                                                <div class="form-group">
                                                     <select name="cities" data-title="Single Select" v-model="form.role_id" data-style="btn-default btn-outline" data-menu-style="dropdown-blue">
                                                        <option value="12">Shop Floor Assistant</option>
                                                        <option value="11">Direct Sales Agent</option>
                                                        <option value="10">Direct Sales Lead</option>
                                                        <option value="4">Product Manager</option>
                                                        <option value="8">Operation Lead</option>
                                                        <option value="1">President</option>
                                                        <option value="2">General Manager</option>
                                                        <option value="9">Software Developer</option>
                                                        <option value="3">Software Engineering Lead</option>
                                                        <option value="7">Shop Operation Lead</option>
                                                        <option value="6">Collection Lead</option>
                                                        <option value="5">Peoples Operation Lead</option>
                                                    </select>
                                                     <small class="error-control" v-if="error.role_id">{{error.role_id[0]}}</small>
                                                </div>
                                                <div class="form-group">
                                                    <input type="email" v-model="form.email" placeholder="Enter email" class="form-control">
                                                     <small class="error-control" v-if="error.email">{{error.email[0]}}</small>
                                                </div>
                                                <div class="form-group">
                                                    <input type="password" v-model="form.password" placeholder="Password" class="form-control">
                                                     <small class="error-control" style="background-color:blue" v-if="error.password">{{error.password[0]}}</small>
                                                </div>
                                                <div class="form-group">
                                                    <input type="password" v-model="form.password_confirmation" placeholder="Password Confirmation" class="form-control">
                                                </div>
                                            </div>
                                            <div class="footer text-center">
                                                <button type="submit" :disabled="isProcessing" class="btn btn-fill btn-primary btn-wd">Register</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="footer" >
            <div class="container">
                <nav  class="fixed-bottom">
                   
                    <p class="copyright text-center">
                        ©
                       2018
                        <a href="http://www.altaracredit.com">Altara</a>, Buy now, Pay small small
                    </p>
                </nav>
            </div>
        </div> -->
    </div>
</template>

<script type="text/javascript">
    import Flash from '../../helpers/flash'
    import { post } from '../../helpers/api'
    export default {
        data() {
            return {
                form: {
                    first_name: '',
                    last_name: '',
                    email:'',
                    role_id:'',
                    password: '',
                    password_confirmation: ''
                },
                error: {},
                isProcessing: false
            }
        },
        methods: {
            register() {
                this.isProcessing = true
                this.error = {}
                console.log(this.form);
                post('api/register', this.form)
                    .then((res) => {
                        if(res.data.registered) {
                            Flash.setSuccess('Congratulations! You have now successfully registered.')
                            this.$router.push('/login')
                        }
                        this.isProcessing = false
                    })
                    .catch((err) => {
                        if(err.response.status === 422) {
                            this.error = err.response.data.errors
                            console.log(this.error );
                            

                        }
                        this.isProcessing = false
                    })
            }
        }
    }
</script>

   