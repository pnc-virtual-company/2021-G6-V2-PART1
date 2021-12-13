<template>
    <section>
        <div class="container p-4">
            <h2 class="text-dark">Find and Join the event here.</h2>
            
            <hr class="pb-1 bg-secondary mt-4 mb-4">

            <my-event-search
            @searchFindEvent="searchFindEvent"
            @searchEventCity="findEventByCity"
            > </my-event-search>
            <find-event-card 
            v-for="event of events" :key="event.id" 
            :event="event" 
            :buttonMode="findEventMode"
            @toJoin="joinEvent"
            @toQuit="quitEvent"
            class="mt-3"
            > 
            </find-event-card>
        </div>
        
    </section>
</template>

<script>
import axios from '../axios-http.js';
import FindEventCard from "../components/Pages/MyEvent/MyEventCard.vue";
import FindEventSearch from "../components/Pages/FindEvent/FindEventSearch.vue"
export default {
    components: {
        'find-event-card': FindEventCard,
        'my-event-search': FindEventSearch
    },
    data() {
        return {
            events: [],
            findEventMode: 'findEvent',
        }
    },
    methods: {
        getFindEventData() {
            axios.get('/myevent')
            .then(res => {
                this.events = res.data.filter(event => event.user_id !== parseInt(localStorage.getItem("userId")));
            })
        },
        searchFindEvent(title) {
            if(title !== "") {
               axios.get('/myevent/search/' + title)
                .then(res => {
                    this.events = res.data.filter(event => event.user_id !== parseInt(localStorage.getItem("userId")));
                }) 
            } else {
                this.getFindEventData()
            }
                
        },
        findEventByCity(city) {
            if(city !== "") {
               axios.get('/myevent/searchCity/' + city)
                .then(res => {
                    this.events = res.data.filter(event => event.user_id !== parseInt(localStorage.getItem("userId")));
                }) 
            } else {
                this.getFindEventData();
            }
        },
        joinEvent(event) {
            let joinData = {
                user_id: parseInt(localStorage.getItem("userId")),
                my_event_id: event.id
            }
            axios.post('/join', joinData)
            .then(() => {
                this.getFindEventData();
            })
        },
        quitEvent(event) {
            let joinId = "";
            for(let join of event.join) {
                if(join.user_id === parseInt(localStorage.getItem("userId"))) {
                    joinId = join.id;
                }

            }
            axios.delete('/join/' + joinId)
            .then(() => {
                this.getFindEventData();
            })

        }
    },
    mounted() {
        this.getFindEventData();
    },
}
</script>

<style>

</style>