<template>

    <p class="pt-20 md:pt-10 px-10 header-text text-2xl">Edit Employee - # {{employee.id}}</p>

        <div class="pt-5 px-10"  @click.native="resetErrors()">
            <div class="content-text">
                <div class="grid gap-6 mb-6 md:grid-cols-2">

                    <div>
                        <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 ">First Name<span class="text-xs text-red-500 ml-1">{{errors.first_name}}</span></label>
                        <input type="tel" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Juan"  required v-model="form.first_name" :class="{'border-2 border-red-400' : errors.first_name}">
                    </div>

                    <div>
                        <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 ">Last Name<span class="text-xs text-red-500 ml-1">{{errors.last_name}}</span></label>
                        <input type="tel" id="last_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Dela Cruz"  required v-model="form.last_name" :class="{'border-2 border-red-400' : errors.last_name}">
                    </div>


                   <div class="col-span-2" v-if="user.role == 1">
                        <label for="position" class="block mb-2 text-sm font-medium text-gray-900">Position <span class="text-xs text-red-500 ml-1"> {{errors.position}}</span></label>

                        <select id="position" class="bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" v-model="form.position" :class="{'border-2 border-red-400' : errors.position}">
                          <option value="0">Select a position</option>
                          <option 
                            v-for="(f,i) in positions" 
                            :key="`position-${i}`"
                            :value="i"
                            v-text="f"
                          />

                        </select>
                    </div>

                </div>

                <button @click.native="createApplication" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Save</button>
            </div>        
        </div>


</template>


<script>

export default {
    props:['positions','default_position','user','employee'],

    data(){
        
        return {

          errors :{},
          form: this.$inertia.form({
              first_name: this.employee.first_name,
              last_name: this.employee.last_name,
              position: this.employee.position,
            }, {
              resetOnSuccess: true,
            }),           
        }
    },

    methods : {
        createApplication()
        {
            this.form.put(this.route('employees.update', this.employee), {
                 onError: errors => {
                     this.errors = errors;
                 },
                 onSuccess: page => {
                    alert('Successfully Updated');
                 },
            })  
        },
        resetErrors()
        {
          this.errors = {};
        },

    }

};
</script>

