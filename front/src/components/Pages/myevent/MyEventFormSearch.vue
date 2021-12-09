<template>
    <section> 
        <form class="form row">
            <div class="form-group  col-sm-6">
                <label for="name">Search Event Name</label>
                <div class="input-group form-group">
                    <input
                        id="name"
                        type="text"
                        class="form-control"
                        placeholder="Search here..."
                        aria-label="Username"
                        aria-describedby="basic-addon1"
                        v-model="name"
                    />
                    <div class="input-group-prepend">
                        <button
                        class="btn btn-primary rounded-right fa fa-remove"
                        id="basic-addon1"
                        @click.prevent="clearName"
                        ></button>
                    </div>
                </div>
            </div>
            <div class="form-group  col-sm-6">
                <label for="name">Search Event City</label>
                <div class="input-group form-group">
                    <input
                        id="name"
                        type="text"
                        class="form-control"
                        placeholder="Search here..."
                        aria-label="Username"
                        aria-describedby="basic-addon1"
                        v-model="name"
                    />
                    <div class="input-group-prepend">
                        <button
                        class="btn btn-primary rounded-right fa fa-remove"
                        id="basic-addon1"
                        @click.prevent="clearName"
                        ></button>
                    </div>
                </div>
            </div>
            
        </form>
    </section>
</template>
<script>
export default {
    emits: ['addName'],
    data() {
        return {
            name: ''
        }
    },
    methods: {
        addName() {
            this.$emit('addName', this.name);
        },
        clearName() {
            this.name = '';
            this.addName();
        }
    },
    mounted() {
        
    },
}
</script>

<style scoped>
label {
  font-weight: bold;
  display: block;
  margin-bottom: 0.5rem;
}
</style>