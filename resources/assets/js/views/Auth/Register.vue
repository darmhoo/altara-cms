   
   <template>
    <div class="wrapper wrapper-full-page">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute">
            <div class="container">
                <div class="navbar-wrapper">
                    <a class="navbar-brand" href="http://www.altaracredit.com">Altara</a>
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse justify-content-end" id="navbar">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="../dashboard.html" class="nav-link">
                                <i class="nc-icon nc-chart-pie-35"></i> Catalog
                            </a>
                        </li>
                        <li class="nav-item  active ">
                            <a href="register.html" class="nav-link">
                                <i class="nc-icon nc-badge"></i> Login
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <!--   you can change the color of the filter page using: data-color="blue | azure | green | orange | red | purple" -->
        <div class="full-page register-page section-image" data-color="orange" data-image="../../assets/img/bg5.jpg">
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
                                    <form method="#" action="#">
                                        <div class="card card-plain">
                                            <div class="content">
                                                <div class="form-group">
                                                    <input type="email" placeholder="Your First Name" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <input type="email" placeholder="Your Last Name" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                     <select name="cities" data-title="Single Select" data-style="btn-default btn-outline" data-menu-style="dropdown-blue">
                                                        <option value="id">Shop Floor Assistant</option>
                                                        <option value="ms">Direct Sales Agent</option>
                                                        <option value="ca">Direct Sales Lead</option>
                                                        <option value="da">Product Manager</option>
                                                        <option value="de">Operation Lead</option>
                                                        <option value="en">President</option>
                                                        <option value="es">General Manager</option>
                                                        <option value="da">Software Developer</option>
                                                        <option value="de">Software Engineering Lead</option>
                                                        <option value="en">Shop Operation Lead</option>
                                                        <option value="es">Collection Lead</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <input type="email" placeholder="Enter email" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <input type="password" placeholder="Password" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <input type="password" placeholder="Password Confirmation" class="form-control">
                                                </div>
                                            </div>
                                            <div class="footer text-center">
                                                <button type="submit" class="btn btn-fill btn-neutral btn-wd">Create Free Account</button>
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
        <div class="footer">
            <div class="container">
                <nav  class="fixed-bottom">
                   
                    <p class="copyright text-center">
                        ©
                       2018
                        <a href="http://www.altaracredit.com">Altara</a>, Buy now, Pay small small
                    </p>
                </nav>
            </div>
        </div>
    </div>
</template>

<script type="text/javascript">
    import Flash from '../../helpers/flash'
    import { post } from '../../helpers/api'
    export default {
        data() {
            return {
                form: {
                    name: '',
                    email: '',
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
                            this.error = err.response.data
                        }
                        this.isProcessing = false
                    })
            }
        }
    }
</script>

   