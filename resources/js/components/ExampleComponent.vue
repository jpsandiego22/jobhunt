<template>
    <div class="container">
        <div class="row justify-content-center p-top">
            <div class="col-md-8 ">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body p-left">
                        I'm an example component.
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
<style>
    .p-left {
        padding-left:100px;
    }
    .p-top {
        padding-top:100px;
    }
</style>
<link media="all" type="text/css" rel="stylesheet" href="https://caritashealthshield.com.ph/assets/css/bootstrap.min.css">
<link media="all" type="text/css" rel="stylesheet" href="https://caritashealthshield.com.ph/assets/css/responsive.css">
