<template>
    <div class="col-md-3">
      <div  id="sidebar">
        <div class="list-group">
            <a href="#menu1" class="list-group-item" data-toggle="collapse" data-parent="#sidebar">
                <i class="fa fa-dashboard"> &nbsp; &nbsp;</i> 
                <span class="">Product Category <i class="fa fa-caret-down"></i></span> 
            </a>
                <div class="collapse" id="menu1">
                <a href="#menu3" class="list-group-item">
                <i class="fa fa-list"></i> &nbsp;
                <span class="hidden-sm-down">Generating Set</span> 
            </a>
            <a href="#menu4" class="list-group-item">
                <i class="fa fa-list-alt"></i>&nbsp; 
                <span class="hidden-sm-down">Television</span> 
            </a>
             <a href="#menu5" class="list-group-item">
                <i class="fa fa-list-alt"></i> &nbsp;
                <span class="hidden-sm-down">Mobile Phone</span> 
            </a>
            <a href="#menu5" class="list-group-item">
                <i class="fa fa-list-alt"></i> &nbsp;
                <span class="hidden-sm-down">Sewing Machine</span> 
            </a>
            <a href="#menu5" class="list-group-item">
                <i class="fa fa-list-alt"></i> &nbsp;
                <span class="hidden-sm-down">Water Dispenser</span> 
            </a>
            <a href="#menu5" class="list-group-item">
                <i class="fa fa-list-alt"></i> &nbsp;
                <span class="hidden-sm-down">Home Theater</span> 
            </a>
            <a href="#menu5" class="list-group-item">
                <i class="fa fa-list-alt"></i> &nbsp;
                <span class="hidden-sm-down">Industrial Fan</span> 
            </a>
            <a href="#menu5" class="list-group-item">
                <i class="fa fa-list-alt"></i> &nbsp;
                <span class="hidden-sm-down">Air Conditioner</span> 
            </a>
                 <!--    <div class="collapse" id="menu1sub1">
                //     <a href="#" class="list-group-item" data-parent="#menu2sub1">Sub 1 a</a>
                //     <a href="#" class="list-group-item" data-parent="#menu2sub1">Sub 1 b</a>
                //     <a href="#" class="list-group-item" data-parent="#menu2sub1">Sub 1 c</a>
                // </div> 
              <a href="#" class="list-group-item" data-parent="#menu2">Sub 2</a>
                <a href="#" class="list-group-item" data-parent="#menu2">Sub 3</a>
                </div>
                <a href="#menu1sub1" class="list-group-item" data-toggle="collapse" aria-expanded="false">
                    Sub 1 <i class="fa fa-caret-down"></i>
                </a>
-->       
                
                
            </div>
            </div> 
        </div>
    </div>
</template>

<script>
export default {
  mounted() {
    console.log("Component mounted.");
  }
};
</script>
<style>
a.list-group-item{
    color:  #fff !important;
    background-color: #003366 !important;
}
</style>
