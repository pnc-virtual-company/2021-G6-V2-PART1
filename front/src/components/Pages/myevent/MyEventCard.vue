<template>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card">
                <div class="row p-3">
                    <div class="col-sm-5  d-flex justify-content-center">
                        <img :src="url + event.image" class="img-fluid rounded" alt="">
                    </div>
                   
                    <div class="col-sm-4 d-flex flex-column justify-content-between">
                        <h5>{{event.category.name}}</h5>
                        <h3>{{event.title}}</h3>
                        <p>{{event.country}} {{event.city}}</p>
                        <h5><a href="#" class="font-weight-light">Event member</a></h5>
                    </div>
                    <div class="col-sm-3 d-flex flex-column justify-content-around">
                        <div class="btn-action d-flex justify-content-end">
                            <button class="btn btn-danger fa fa-remove mr-3"></button>
                            <button class="btn btn-success fa fa-pencil"></button>
                        </div>
                        <div class=" d-flex flex-column justify-content-center align-items-center">
                            <div class="mt-4">
                                <p class="text-muted"> <strong class="text-primary">Start:</strong>  {{event.start_date}}</p>
                                <p class="text-muted"><strong class="text-danger">End:</strong>  {{event.end_date}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
</template>
<script>
export default {
    props: ['event', 'containEventBysearch'],
    data() {
        return {
            url : 'http://localhost:8000/storage/images/events/',
        }
    },
    
};
</script>
<style>
    .card {
        box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;
    }
</style>