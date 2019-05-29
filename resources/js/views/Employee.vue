<template>
  <div class="card">
  	<h4>Create Employee</h4>
    <div class="card-header"></div>
      <div class="card-body">
          <form method="POST"  enctype="multipart/form-data" v-on:submit.prevent="store">
          <div class="form-group row">
              <label for="name" class="col-md-4 col-form-label text-md-right">Employee Name</label>
              <div class="col-md-6">
                <input id="name" type="text" class="form-control" v-model="form.name" value="" required autofocus>                 
                  <span class="invalid-feedback" role="alert">
                      <strong></strong>
                  </span>            
              </div>
          </div>
          <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>
            <div class="col-md-6">
              <input id="email" type="email" class="form-control" v-model="form.email" name="email" value="" required>
                <span class="invalid-feedback" role="alert">
                    <strong></strong>
                </span>         
            </div>
          </div>
          <div class="form-group row">
              <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
              <div class="col-md-6">
                <input id="password" type="password" class="form-control" v-model="form.password" name="password" required>

                  <span class="invalid-feedback" role="alert">
                      <strong></strong>
                  </span>            
              </div>
          </div>
          <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
              <button type="submit" class="btn btn-primary">Save</button>
            </div>
          </div>
        </form>
      </div>
  </div>        
</template>

<script>
import axios from 'axios';
  export default {
    data:function(){
      return{
          form:{
              name: '',
              email: '',
              password: '',
          },
          errors: {},
      };
    },
    methods:{
      store:function(){
      	axios.post('/NewProject/public/employee', this.form).then( (response) => {
           // window.location.href = 'first_page';

          })
          .catch(error => {
              if(error.response == 422){
                  this.errors = error.response.data.errors;
              }else{
              }
          });
      },
    },
  }
</script>
