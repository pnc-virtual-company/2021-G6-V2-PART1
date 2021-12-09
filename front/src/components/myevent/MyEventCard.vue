<template>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="row p-3">
                        <div class="col-sm-5  d-flex justify-content-center">
                            <img src="../../assets/download.jpg" class="img-fluid rounded" alt="">
                        </div>
                        <div class="col-sm-4 d-flex flex-column justify-content-between">
                            <h5>Category name</h5>
                            <h3>Title Event</h3>
                            <h5><a href="#" class="font-weight-light">Event member</a></h5>
                        </div>
                        <div class="col-sm-3 d-flex flex-column justify-content-around">
                            <div class="btn-action d-flex justify-content-between">
                                <button class="btn btn-danger fa fa-remove" 
                                    data-toggle="modal"
                                    data-target="#exampleModalCenter"
                                >
                                </button>
                                <button class="btn btn-success fa fa-pencil"></button>
                            </div>
                            <div class=" d-flex flex-column justify-content-center align-items-center">
                                <div class="mt-4">
                                    <p class="text-muted">Stat Date</p>
                                    <p class="text-muted">End Date</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {};
</script>
<style>

</style>