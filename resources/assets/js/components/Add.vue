<template>

    <div class="modal" :class="openmodel">
        <div class="modal-background"></div>
        <div class="modal-card">
            <header class="modal-card-head">
                <p class="modal-card-title">Add New Contact</p>
                <button class="delete" aria-label="close" @click="close"></button>
            </header>
            <section class="modal-card-body">
                <!-- Content ... -->

                <div class="field">
                    <label class="label">Name</label>
                    <div class="control">
                        <input class="input" :class="{'is-danger':errors.name}" type="text" placeholder="name..." v-model="list.name">
                    </div>
                    <small class="has-text-danger" v-if="errors.name">{{errors.name[0]}}</small>
                </div>

                <div class="field">
                    <label class="label">phone</label>
                    <div class="control">
                        <input class="input" :class="{'is-danger':errors.phone}" type="number" placeholder="phone number..." v-model="list.phone">
                    </div>
                    <small class="has-text-danger" v-if="errors.phone">{{errors.phone[0]}}</small>
                </div>

                <div class="field">
                    <label class="label">email</label>
                    <div class="control">
                        <input class="input" :class="{'is-danger':errors.email}" type="email" placeholder="email..." v-model="list.email">
                    </div>
                    <small class="has-text-danger" v-if="errors.email">{{errors.email[0]}}</small>
                </div>

            </section>
            <footer class="modal-card-foot">
                <button class="button is-success" @click="save">Save</button>
                <button class="button" @click="close">Cancel</button>
            </footer>
        </div>
    </div>


</template>

<script>

    export default {
        props:['openmodel'],

        data(){
            return{
                list:{
                    name:'',
                    phone:'',
                    email:''
                },
                errors:{}
            }
        },

        methods:{
            close(){
                this.$emit('closeRequest')
            },

            save(){
                axios.post('/phonebook',this.$data.list)
                    .then((response)=>{
                        this.close();
                        this.$parent.lists.push(response.data);
                        this.$parent.lists.sort(function(a,b){
                            if(a.name > b.name){
                                return 1;
                            }else if(a.name < b.name){
                                return -1;
                            }
                        });
                        this.list = "";
                    })
                    .catch((error)=> this.errors = error.response.data.errors)
            }
        }
    }

</script>