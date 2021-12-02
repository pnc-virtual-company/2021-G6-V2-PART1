<template>

    <section>
        <div class="container">
            <div class="card mb-2" v-for="(category, index) of categoryData" :key="index">
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
    props: ["categoryData"],
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
        color: #e03030;
        margin: 5px; 
        padding: 5px;
        border-radius: 5px;
        background: #e030304b;
        outline: none;
    }
    #edit{
        color: teal;
        margin: 5px;
        padding: 5px;
        border-radius: 5px;
        background: #00808041;
        outline: none;
    }
    button{
        cursor: pointer;
        border:none;
    }

</style>