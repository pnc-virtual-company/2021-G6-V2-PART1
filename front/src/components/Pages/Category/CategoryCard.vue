<template>

    <section>
        <div class="container">
            <div class="card">
            <div class="card-body">
                <div class="card-title">
                    <h4>{{category.name}}</h4>
                </div>
                <div class="icon">
                    <button id="delete"><i class="fa fa-trash" ></i></button>
                    <button id="edit"><i class="fa fa-pencil" ></i></button>
                </div>
            </div>

        </div>
        </div>
    </section>
</template>

<script>
export default {
    props: ["category"]
}
</script>







<style>
    .container{
        margin: 1rem auto;
        padding: 1px;
        border-radius:30px;
        max-width: 50rem;

    }
    .card-body{
        display: flex;
        justify-content: space-between;
        

    }
    
    #delete{
        color: rgb(224, 48, 48);
        margin: 5px; 
        
    }
    #edit{
        color: teal;
    }
    button{
        cursor: pointer;
        border:none;
    }

</style>