<template>

    <div class="modal" :class="openmodel">
        <div class="modal-background"></div>
        <div class="modal-card">
            <header class="modal-card-head">
                <p class="modal-card-title">Update {{list.name}}'s Details</p>
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
                <button class="button is-success" @click="update">Update</button>
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

                },
                errors:{}
            }
        },

        methods:{
            close(){
                this.$emit('closeRequest')
            },

            update(){
                axios.patch(`/phonebook/${this.list.id}`,this.$data.list)
                    .then((response)=> this.close())
                    .catch((error)=> this.errors = error.response.data.errors)
            }
        }
    }

</script>