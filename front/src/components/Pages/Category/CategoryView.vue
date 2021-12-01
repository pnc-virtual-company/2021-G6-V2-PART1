<template>
  <section>
    <event-nav> </event-nav>
    <div class="container p-4">
      <div class="form-row d-flex justify-content-between">
        
        <div class="form-group col-md-10 has-search">
            <input
            type="search"
            class="form-control"
            placeholder="Search event title"
            />
        </div>
        <div class="form-group col-md-2 d-flex justify-content-end btn-add">
          <button class="btn">Add +</button>
        </div>
                
      </div>
    </div>
    
  </section>
</template>

<script>

</script>

<style>


.btn-add button {
  background: #00D1FF;
  border-radius: 40px;
  color: white;
}
.has-search input {
  border-radius: 40px;
}

</style>