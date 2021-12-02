<template>
  <section>
  <div class="container">
    <div class="card">
      <div class="card-body">
          <div class="card-title">
              <h4>{{item.message}}</h4>
          </div>
          <div class="icon">
              <button id="delete"  data-toggle="modal" data-target="#exampleModalCenter" ><i class="fa fa-trash" ></i></button>
              <button id="edit" data-toggle="modal" data-target="#exampleModalCenter" ><i class="fa fa-pencil" ></i></button>
          </div>
      </div>
    </div>

    <div
      class="modal fade"
      id="exampleModalCenter"
      tabindex="-1"
      role="dialog"
      aria-labelledby="exampleModalCenterTitle"
      aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Remove Item?</h5>

            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body" id="description">
            Are you sure you want to remove this item?
          </div>
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-sm text-light"
              id="cancel"
              data-dismiss="modal"
            >
              No, Cancel
            </button>
            <button type="button" class="btn btn-danger btn-sm" @click="deleteItem(item.id)">
              Yes, Remove
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>

  </section>
</template>

<script>
export default {
  props: ["item"],
  emits:['deleteItem'],
  methods: {
    deleteItem(id){
      this.$emit('deleteItem', id)
    }
  }
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
      color: rgb(194, 9, 9);
      margin: 5px; 
      font-size: 30px;
      
  }
  #edit{
      color:#020269;
      font-size: 30px;
  }
  button{ 
    cursor: pointer;
    border:none;
  }
  #exampleModalLongTitle,
  #description {
    color: #020269;
    font-weight: bold;
  }
  #cancel {
    background: #020269;
  }
  #button-remove {
    margin-left: 80%;
  }
  #button-update {
    background: #020269;
    margin-left: 80%;
    margin-top: 10px;
  }
</style>