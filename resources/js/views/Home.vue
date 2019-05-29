<template>
  <div>
    <div v-if = "list">
      <div class="text-center">
        <h4>Employee List</h4>
      </div>
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th class="width-200">Status</th>
            <th class="text-center">Action</th>
          </tr>
        </thead>
        <tbody v-if="resultData.data !=''">
          <tr v-for="(value,index) in resultData.data">
            <td>{{++index}}</td>
            <td>{{value.name}}</td>
            <td>{{value.email}}</td>
            <td>
              <div v-if="value.status == 1" class="badge badge-primary badge-round ">
                  <i class="fa fa-check font-medium-2"></i><span>Active</span>
              </div>
              <div v-if="value.status == 0" class="badge badge-danger badge-round ">
                  <i class="fa fa-ban font-medium-2"></i><span>Inactive</span>
              </div>
            </td>       
          </tr>
        </tbody>
        <tbody v-else>
          <tr>
              <td colspan="4">No Data Available.</td>
          </tr>
        </tbody>
      </table>      
    </div>

  </div>
</template>
<script>
import axios from 'axios';
    export default {
        components: {

        },
        data:function(){
          return{
              list:true,
              add_form:false,
              resultData: {},
              perPage: 10
          };
        },
        methods: {
          index(){

            axios.get('/NewProject/public/employee').then((response) => {
             this.resultData = response.data;
            });

          },
        

        },
        created(){
          var _this = this;
        
         _this.index();       
        }
  }
</script>