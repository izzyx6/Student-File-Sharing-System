<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-center">Register</h4>
                    </div>
                    <div class="card-body">
                        <form action="#" @submit.prevent="register">
                            <!--div class="row form-group">
                                <div class="col-form-label text-right col-md-3">
                                    What Are You?
                                </div>  
                                <div class="col-md-8">
                                    <select v-model="role" class="form-control">
                                        <option value="1">Student</option>
                                        <option value="2">Staff</option>
                                    </select>
                                </div>                          
                            </div-->
                            <div class="row form-group">
                                <div class="col-form-label text-right col-md-3">
                                    Username
                                </div>
                                <div class="col-md-8">
                                    <input :class="{'is-invalid': errors.username ||sErrors.username}" type="text" v-model="username" class="form-control">
                                    <div v-if="errors.username" class="invalid-feedback">
                                        {{errors.username}}
                                    </div>
                                    <div v-if="sErrors.username" class="invalid-feedback">
                                        {{sErrors.username[0]}}
                                    </div>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-form-label text-right col-md-3">
                                    Email
                                </div>
                                <div class="col-md-8">
                                    <input :class="{'is-invalid': errors.email || sErrors.email}" type="email" v-model="email" class="form-control">
                                    <div v-if="errors.email" class="invalid-feedback">
                                        {{errors.email}}
                                    </div>
                                    <div v-if="sErrors.email" class="invalid-feedback">
                                        {{sErrors.email[0]}}
                                    </div>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-form-label text-right col-md-3">
                                    Password
                                </div>
                                <div class="col-md-8">
                                    <input :class="{'is-invalid': errors.password}" type="password" v-model="password" class="form-control">
                                    <div v-if="errors.password" class="invalid-feedback">
                                        {{errors.password}}
                                    </div>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-form-label text-right col-md-3">
                                    Confirm Password
                                </div>
                                <div class="col-md-8">
                                    <input :class="{'is-invalid': errors.confirm_password}" type="password" v-model="confirm_password" class="form-control">
                                    <div v-if="errors.confirm_password" class="invalid-feedback">
                                        {{errors.confirm_password}}
                                    </div>
                                </div>                            
                            </div>
                            <div class="row form-group">
                                <div class="col-md-8 offset-md-3">
                                    <button type="submit" class="btn btn-outline-primary">Register</button>
                                </div>
                            </div>                            
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios';
export default{
    data(){
        return {
            username: '',
            password: '',
            confirm_password: '',
            email: '',
            role: 1,
            errors: [],
            sErrors: [],
        }
    },
    methods: {
        register: function(){
            this.errors = {};this.sErrors={};
            if(!this.username){
                this.errors.username = "Enter Username";
            }
            if(!this.password){
                this.errors.password = "Enter Password";
            }
            if(this.password !== this.confirm_password){
                this.errors.confirm_password = "Passwords don't match";
            }
            if(!this.email){
                this.errors.email = "Enter Email";
            }
            if(Object.keys(this.errors).length>0 || Object.keys(this.sErrors).length>0){
                //console.error(this.errors);
                return false;
            }
            axios.post('/register', {
                username: this.username,
                password: this.password,
                email: this.email,
                role: this.role,
            }).then((response)=>{
                this.username = '';this.password='';this.email='';this.confirm_password='';                
                window.location = '/login';
            }).catch((error)=>{                
                this.sErrors = error.response.data.errors;
                this.password=null;this.confirm_password=null;
                console.error(error.response);
            });
        },
    }
}
</script>

<style>

</style>