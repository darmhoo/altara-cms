<template>
       <!-- Page Content -->
<div class="container-fluid">
    <div class="row">
        <sidebar></sidebar>
        <div class="col-md-9">
<div class="card horizontal-form">
                                <div class="card-header ">
                                    <h4 class="card-title">Product Description and Information</h4>
                                </div>
                                <div class="card-body ">
                                    <form class="form-horizontal">
                                        <div class="row">
                                            <div class="col-md-8">
<div class="form-group">
                                            <div class="row">
                                                <label class="col-md-3 control-label">Product Name</label>
                                                <div class="col-md-9">
                                                    <input type="text" placeholder="Product name" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-md-3 control-label">Product Make</label>
                                                <div class="col-md-9">
                                                    <input type="text" placeholder="Password" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                       <div class="form-group">
                                            <div class="row">
                                                <label class="col-md-3 control-label">Product Price</label>
                                                <div class="col-md-9">
                                                    <input type="number" placeholder="Product Price" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-md-3 control-label">Down Payment</label>
                                                <div class="col-md-9">
                                                    <input type="number" placeholder="Down Payment" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-md-3 control-label">Bi-weekly Payment Payment</label>
                                                <div class="col-md-9">
                                                    <input type="number" placeholder="Bi-weekly Payment Payment" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-md-3 control-label">Features/Description</label>
                                                <div class="col-md-9">
                                                    <input type="number" placeholder="Bi-weekly Payment Payment" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        
                                            </div>
                                            <div class="col-md-4">
                                        <div class="form-group">
                                                <label>Upload Image</label>
                                                <div class="input-group">
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default btn-file">
                                                            Browse… <input type="file" id="imgInp">
                                                        </span>
                                                    </span>
                                                    <input type="text" class="form-control" readonly>
                                                </div>
                                                <img id='img-upload'/>
                                            </div>
                                            </div>
                                        </div>
                                        
                                    </form>
                                </div>
                                <div class="card-footer ">
                                    <div class="col-md-12 text-center">
                                        <button type="submit" class="btn btn-fill btn-info">Create Product</button>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
    </div>
</div>
</template>

<script>
  import Sidebar from '../../components/Sidebar.vue'
export default {
        components: {
			Sidebar
		},
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
<style>
.btn-file {
    position: relative;
    overflow: hidden;
}
.btn-file input[type=file] {
    position: absolute;
    top: 0;
    right: 0;
    min-width: 100%;
    min-height: 100%;
    font-size: 100px;
    text-align: right;
    filter: alpha(opacity=0);
    opacity: 0;
    outline: none;
    background: white;
    cursor: inherit;
    display: block;
}

#img-upload{
    width: 100%;
}
</style>
