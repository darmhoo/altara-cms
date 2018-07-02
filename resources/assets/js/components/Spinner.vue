<template>
<div>
    <div class="lds-css ng-scope"><div style="width:100%;height:100%" class="lds-facebook"><div></div><div></div><div></div></div></div>
</div>
</template>

<script>
export default {
    props: {
        size: {
            default: '40px'
        },
        background: {
            default : '#000'
        },
        duration: {
            default : '1.8s'
        }
    },
    computed: {
        cubeStyles () {
            return {
                backgroundColor: this.background,
                animationName: 'sk-cubemove',
                animationNameDuration:this.duration,
                animationTimingFunction:'ease-in-out',
                animationIterationCount:'infinite'
            }
        },
        styles () {
            return {
                width: this.size,
                height:this.size
            }
        }

    }
}
</script>
<style>

@keyframes lds-facebook_1 {
  0% {
    top: -300px;
    height: 800px;
  }
  50% {
    top: 60px;
    height: 80px;
  }
  100% {
    top: 60px;
    height: 80px;
  }
}
@-webkit-keyframes lds-facebook_1 {
  0% {
    top: -300px;
    height: 800px;
  }
  50% {
    top: 60px;
    height: 80px;
  }
  100% {
    top: 60px;
    height: 80px;
  }
}
@-webkit-keyframes lds-facebook_1 {
  0% {
    top: -300px;
    height: 800px;
  }
  50% {
    top: 60px;
    height: 80px;
  }
  100% {
    top: 60px;
    height: 80px;
  }
}
@keyframes lds-facebook_2 {
  0% {
    top: -210px;
    height: 620px;
  }
  50% {
    top: 60px;
    height: 80px;
  }
  100% {
    top: 60px;
    height: 80px;
  }
}
@-webkit-keyframes lds-facebook_2 {
  0% {
    top: -210px;
    height: 620px;
  }
  50% {
    top: 60px;
    height: 80px;
  }
  100% {
    top: 60px;
    height: 80px;
  }
}
@keyframes lds-facebook_3 {
  0% {
    top: -120px;
    height: 440px;
  }
  50% {
    top: 60px;
    height: 80px;
  }
  100% {
    top: 60px;
    height: 80px;
  }
}
@-webkit-keyframes lds-facebook_3 {
  0% {
    top: -120px;
    height: 440px;
  }
  50% {
    top: 60px;
    height: 80px;
  }
  100% {
    top: 60px;
    height: 80px;
  }
}
.lds-facebook {
  position: absolute;
    height: 100px;
    width: 100px;
    top: 50%;
    left: 50%;
    margin-left: -50px;
    margin-top: -50px;
}
.lds-facebook div {
  position: absolute;
  width: 20px;
}
.lds-facebook div:nth-child(1) {
  left: 40px;
  background: #1d3f72;
  -webkit-animation: lds-facebook_1 1s cubic-bezier(0, 0.5, 0.5, 1) infinite;
  animation: lds-facebook_1 1s cubic-bezier(0, 0.5, 0.5, 1) infinite;
  -webkit-animation-delay: -0.2s;
  animation-delay: -0.2s;
}
.lds-facebook div:nth-child(2) {
  left: 90px;
  background: #5699d2;
  -webkit-animation: lds-facebook_2 1s cubic-bezier(0, 0.5, 0.5, 1) infinite;
  animation: lds-facebook_2 1s cubic-bezier(0, 0.5, 0.5, 1) infinite;
  -webkit-animation-delay: -0.1s;
  animation-delay: -0.1s;
}
.lds-facebook div:nth-child(3) {
  left: 140px;
  background: #d8ebf9;
  -webkit-animation: lds-facebook_3 1s cubic-bezier(0, 0.5, 0.5, 1) infinite;
  animation: lds-facebook_3 1s cubic-bezier(0, 0.5, 0.5, 1) infinite;
}
.lds-facebook {
  width: 34px !important;
  height: 34px !important;
  -webkit-transform: translate(-17px, -17px) scale(0.17) translate(17px, 17px);
  transform: translate(-17px, -17px) scale(0.17) translate(17px, 17px);
}
</style>

